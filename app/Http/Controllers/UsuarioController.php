<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Necesario para encriptar password

class UsuarioController extends Controller
{
    /**
     * Listado de usuarios
     */
    public function index()
    {
        // SEGURIDAD: Solo admin pasa
        if (!auth()->user()->isAdmin()) abort(403, 'Acceso denegado');

        // Listado ordenado y paginado
        $usuarios = User::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.usuarios.index', compact('usuarios'));
    }

    /**
     * Formulario de creación
     */
    public function create()
    {
        if (!auth()->user()->isAdmin()) abort(403);
        return view('admin.usuarios.create');
    }

    /**
     * Guardar nuevo usuario
     */
    public function store(Request $request)
    {
        if (!auth()->user()->isAdmin()) abort(403);

        // Validación
        $data = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], // Requiere campo password_confirmation en la vista
            'role'     => ['required', 'in:admin,personal'], // <--- IMPORTANTE: Valida el rol
        ]);

        // Creación
        User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'role'     => $data['role'], // <--- IMPORTANTE: Guarda el rol
        ]);

        return redirect()
            ->route('admin.usuarios.index')
            ->with('ok', 'Usuario creado correctamente.');
    }

    /**
     * Formulario de edición
     */
    public function edit(User $usuario)
    {
        if (!auth()->user()->isAdmin()) abort(403);
        return view('admin.usuarios.edit', compact('usuario'));
    }

    /**
     * Actualizar usuario
     */
    public function update(Request $request, User $usuario)
    {
        if (!auth()->user()->isAdmin()) abort(403);

        $data = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $usuario->id],
            'role'  => ['required', 'in:admin,personal'],
        ]);

        // Solo actualizar password si se escribió una nueva
        if ($request->filled('password')) {
            $request->validate([
                'password' => ['string', 'min:8', 'confirmed'],
            ]);
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }

        $usuario->update($data);

        return redirect()
            ->route('admin.usuarios.index')
            ->with('ok', 'Usuario actualizado correctamente.');
    }

    /**
     * Eliminar usuario
     */
    public function destroy(User $usuario)
    {
        if (!auth()->user()->isAdmin()) abort(403);

        // Seguridad extra: No dejar que te borres a ti mismo
        if ($usuario->id === auth()->id()) {
            return back()->with('error', 'No puedes eliminar tu propia cuenta.');
        }

        $usuario->delete();

        return redirect()
            ->route('admin.usuarios.index')
            ->with('ok', 'Usuario eliminado correctamente.');
    }
}