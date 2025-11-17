<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Listado de usuarios (admin.usuarios.index)
     */
    public function index()
    {
        // Puedes cambiar 10 por el número de filas que quieras por página
        $usuarios = User::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.usuarios.index', compact('usuarios'));
    }

    /**
     * Formulario para crear usuario (admin.usuarios.create)
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Guardar nuevo usuario (admin.usuarios.store)
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'                  => ['required', 'string', 'max:255'],
            'email'                 => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password'              => ['required', 'string', 'min:8', 'confirmed'], // requiere password_confirmation
        ]);

        User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()
            ->route('admin.usuarios.index')
            ->with('ok', 'Usuario creado correctamente.');
    }

    /**
     * Formulario de edición (lo dejamos preparado, aunque aún no lo uses)
     */
    public function edit(User $usuario)
    {
        return view('admin.usuarios.edit', compact('usuario'));
    }

    /**
     * Actualizar usuario
     */
    public function update(Request $request, User $usuario)
    {
        $data = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $usuario->id],
        ]);

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
        $usuario->delete();

        return redirect()
            ->route('admin.usuarios.index')
            ->with('ok', 'Usuario eliminado correctamente.');
    }
}
