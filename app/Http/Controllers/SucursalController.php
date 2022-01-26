<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SucursalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
            $sucursal_admin = User::
            where('empresa', '=', 2)
            ->get();

            $sucursal_empresa = User::
            where('empresa', '=', 2)
            ->where('id_empresa', '=', auth()->user()->id)
            ->get();

            $empresa = User::
            where('empresa', '=', 1)
            ->first();

            return view('admin.sucursales.index', compact('empresa', 'sucursal_admin', 'sucursal_empresa'));
    }

    public function create()
    {
            $empresa = DB::table('users')
                ->where('empresa', '=', 1)
                ->get();

            return view('admin.sucursales.create', compact('empresa'));
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

            $sucursal = new User;
            $sucursal->name = $request->get('name');
            $sucursal->id_empresa = $request->get('id_empresa');
            $sucursal->empresa = 2;
            $sucursal->email = $request->get('email');
            $sucursal->password = Hash::make($request->password);

            $sucursal->save();

        // Redireccion  de suuces or fail dependiedno el caso

            redirect()->route('index.sucursal')
                ->with('success', 'Sucursal Creada Exitosamente!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error en el registro!!');
        }

    }

    public function edit($id)
    {
            $sucursal = User::findOrFail($id);

            $empresas = DB::table('users')
                ->where('empresa', '=', 1)
                ->get();

            return view('admin.sucursales.edit', compact('sucursal', 'empresas'));
    }

    public function update(Request $request, $id)
    {
        $sucursal = User::findOrFail($id);
        $sucursal->name = $request->get('name');
        $sucursal->id_empresa = $request->get('id_empresa');
        $sucursal->empresa = 2;
        $sucursal->email = $request->get('email');
        $sucursal->password = Hash::make($request->password);

        $sucursal->update();

        Session::flash('success', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.sucursal');
    }
}
