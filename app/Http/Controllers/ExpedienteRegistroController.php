<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use App\Models\Requisito;
use App\Models\Expediente;
use App\Models\Adjunto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExpedienteRegistroController extends Controller
{
    // POST /mesa-partes
    public function store(Request $request)
    {
        $request->validate([
            'tramite_id' => ['required','integer','exists:tramites,id'],
            'datos'      => ['required'], // JSON o array
            // adjuntos[requisito_id][] como files
        ]);

        $tramite = Tramite::with('requisitos')->findOrFail($request->tramite_id);

        // Normalizar "datos"
        $datos = $request->input('datos');
        if (is_string($datos)) {
            $datos = json_decode($datos, true);
        }
        if (!is_array($datos)) {
            return response()->json(['message' => 'El campo "datos" debe ser JSON válido.'], 422);
        }

        // Validar requisitos obligatorios
        $faltantes = [];
        foreach ($tramite->requisitos as $req) {
            if ($req->obligatorio) {
                $hayArchivo = $request->hasFile("adjuntos.$req->id");
                $hayDato = data_get($datos, "requisito_$req->id") !== null;
                if (!$hayArchivo && !$hayDato) {
                    $faltantes[] = $req->nombre;
                }
            }
        }
        if ($faltantes) {
            return response()->json([
                'message' => 'Faltan requisitos obligatorios.',
                'errors'  => ['requisitos' => $faltantes]
            ], 422);
        }

        try {
            $expediente = DB::transaction(function () use ($tramite, $datos, $request) {
                // Código oficial temporal: EXP-YYYYMMDD-##### (luego se numera oficialmente en Recepción)
                $codigo = 'EXP-'.now()->format('Ymd').'-'.str_pad((string)random_int(0,99999),5,'0',STR_PAD_LEFT);

                $exp = new Expediente();
                $exp->codigo        = $codigo;
                $exp->tramite_id    = $tramite->id;
                $exp->ciudadano_id  = Auth::id(); // o null si permites invitado
                $exp->estado        = 'INGRESADO';
                $exp->datos         = $datos;
                $exp->monto_tasa    = $tramite->tasa_monto ?? 0;
                $exp->save();

                // Guardar adjuntos
                if ($request->hasFile('adjuntos')) {
                    foreach ($request->file('adjuntos') as $requisitoId => $files) {
                        /** @var Requisito|null $meta */
                        $meta = $tramite->requisitos->firstWhere('id', (int)$requisitoId);

                        foreach ((array)$files as $file) {
                            // Excepciones: archivos grandes
                            if ($meta?->max_mb && $file->getSize() > $meta->max_mb * 1024 * 1024) {
                                throw new \RuntimeException("Archivo de {$meta->nombre} excede {$meta->max_mb}MB");
                            }

                            $path = $file->store("expedientes/{$exp->id}/adjuntos", 'public');

                            Adjunto::create([
                                'expediente_id'   => $exp->id,
                                'requisito_id'    => $meta?->id,
                                'path'            => $path,
                                'nombre_original' => $file->getClientOriginalName(),
                                'mime'            => $file->getClientMimeType(),
                                'size_kb'         => (int)ceil($file->getSize()/1024),
                                'hash_sha256'     => hash_file('sha256', $file->getRealPath()),
                            ]);
                        }
                    }
                }

                // Aquí podrías disparar evento/notificación de acuse
                // event(new \App\Events\ExpedienteIngresado($exp));

                return $exp;
            });

            return response()->json([
                'message'    => 'Expediente creado y acuse enviado.',
                'expediente' => [
                    'id'     => $expediente->id,
                    'codigo' => $expediente->codigo,
                    'estado' => $expediente->estado,
                ],
            ], 201);

        } catch (\RuntimeException $e) {
            // Archivos grandes u otras validaciones
            return response()->json(['message' => $e->getMessage()], 422);
        } catch (\Throwable $e) {
            return response()->json(['message' => 'Error al registrar expediente.'], 500);
        }
    }
}
