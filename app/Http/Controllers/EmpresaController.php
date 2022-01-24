<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
function index()
{
        $empresa = User::
        where('empresa', '=', 1)
        ->get();

        return view('admin.empresas.index', compact('empresa'));
}

public function create()
{
        $user = DB::table('users')
            ->get();

        return view('admin.empresas.create', compact('user'));
}

public function store(Request $request)
{
    $validate = $this->validate($request, [
        'name' => 'required|string|max:191',
        'email' => 'required|string|email|max:191|unique:users',
    ]);

    $empresa = new User;
    $empresa->name = $request->get('name');
    $empresa->empresa = 1;
    $empresa->rfc = $request->get('rfc');
    $empresa->entidad = $request->get('entidad');
    $empresa->calle = $request->get('calle');
    $empresa->cp = $request->get('cp');
    $empresa->ciudad = $request->get('ciudad');
    $empresa->email = $request->get('email');
    $empresa->password = Hash::make($request->password);

    $empresa->save();
    Session::flash('success', 'Se ha actualizado sus datos con exito');
    return redirect()->route('index.empresa');
}
public function edit($id)
{
        $empresa = User::findOrFail($id);

        $empresas = DB::table('users')
            ->where('empresa', '=', 1)
            ->get();

        return view('admin.empresas.edit', compact('empresa', 'empresas'));
}

public function update(Request $request, $id)
{
    $empresa = User::findOrFail($id);
    $empresa->name = $request->get('name');
    $empresa->empresa = 1;
    $empresa->rfc = $request->get('rfc');
    $empresa->entidad = $request->get('entidad');
    $empresa->calle = $request->get('calle');
    $empresa->cp = $request->get('cp');
    $empresa->ciudad = $request->get('ciudad');
    $empresa->email = $request->get('email');
    $empresa->password = Hash::make($request->password);

    $empresa->update();

    Session::flash('success', 'Se ha actualizado sus datos con exito');
    return redirect()->route('index.empresa');
}
}
