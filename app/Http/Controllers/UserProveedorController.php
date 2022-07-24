<?php

namespace App\Http\Controllers;

use App\Models\UserProveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserProveedorController extends Controller
{
    public function store(Request $request)
    {

        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'fecha' => 'required',
            'descripcion' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        try {

            $user_proveedor = new UserProveedor;
            $user_proveedor->nombre = $request->get('nombre');
            $user_proveedor->correo = $request->get('correo');
            $user_proveedor->puesto = $request->get('puesto');
            $user_proveedor->telefono = $request->get('telefono');
            $user_proveedor->cargo = $request->get('cargo');
            $user_proveedor->save();

            // Redireccion  de suuces or fail dependiedno el caso

            return redirect()->back()
                ->with('success', 'User Proveedor Creado Exitosamente!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error en el registro!!');
        }
    }
}
