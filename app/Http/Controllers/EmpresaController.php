<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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

    //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:191',
        'email' => 'required|string|email|max:191|unique:users',
    ]);

    //2/3- Envia Mensaje de validacion en la Sweetalert
    if ($validator->fails()) {
        return redirect()->back()
            ->with('errorForm', $validator->errors()->getMessages())
            ->withInput();
    }
    try {

    //3/3- Si la validacion es correcta se crea el registro

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

    // Redireccion  de suuces or fail dependiedno el caso

        return redirect()->back()
            ->with('success', 'Empresa Creada Exitosamente!');
    } catch (\Exception $e) {
        return redirect()->back()
            ->with('error', 'Error en el registro!!');
    }

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
