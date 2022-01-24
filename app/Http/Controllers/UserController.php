<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
            $users = User::
            where('empresa', '=', NULL)
            ->where('id_empresa', '!=', NULL)
            ->where('id_sucursal', '!=', NULL)
            ->get();

            return view('admin.usuarios.index', compact('users'));
    }

    public function create()
    {
            $empresa = DB::table('users')
            ->where('empresa', '=', 1)
            ->get();

            $sucursal = DB::table('users')
            ->where('empresa', '=', 2)
            ->get();

            return view('admin.usuarios.create', compact('empresa', 'sucursal'));
    }

    public function store(Request $request)
    {
        $validate = $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
        ]);

        $empresa = new User;
        $empresa->name = $request->get('name');
        $empresa->apellido = $request->get('apellido');
        $empresa->telefono = $request->get('telefono');
        $empresa->puesto = $request->get('puesto');
        $empresa->id_empresa = $request->get('id_empresa');
        $empresa->id_sucursal = $request->get('id_sucursal');
        $empresa->email = $request->get('email');
        $empresa->password = Hash::make($request->password);

        $empresa->save();
        Session::flash('success', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.usuario');
    }
    public function edit($id)
    {
            $usuario = User::findOrFail($id);

            $empresa = DB::table('users')
            ->where('empresa', '=', 1)
            ->get();

            $sucursal = DB::table('users')
            ->where('empresa', '=', 2)
            ->get();

            return view('admin.usuarios.edit', compact('empresa', 'sucursal', 'usuario'));
    }

    public function update(Request $request, $id)
    {
        $empresa = User::findOrFail($id);
        $empresa->name = $request->get('name');
        $empresa->apellido = $request->get('apellido');
        $empresa->telefono = $request->get('telefono');
        $empresa->puesto = $request->get('puesto');
        $empresa->id_empresa = $request->get('id_empresa');
        $empresa->id_sucursal = $request->get('id_sucursal');
        $empresa->email = $request->get('email');
        $empresa->password = Hash::make($request->password);

        $empresa->update();

        Session::flash('success', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.usuario');
    }
}
