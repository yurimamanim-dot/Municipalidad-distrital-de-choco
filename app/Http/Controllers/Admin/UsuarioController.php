<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // LISTADO
    public function index()
    {
        $usuarios = User::orderBy('created_at', 'desc')->paginate(10);

        return view('usuarios.index', compact('usuarios'));
    }

    // FORMULARIO CREAR
    public function create()
    {
        return view('usuarios.create');
    }

    // GUARDAR NUEVO USUARIO (simple)
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:6', 'confirmed'],
            // si luego agregas roles/estado, aquí
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()
            ->route('usuarios.index')
            ->with('ok', 'Usuario creado correctamente.');
    }
}
