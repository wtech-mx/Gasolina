<?php

namespace App\Http\Controllers;

use App\Models\Preventiva;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

class PreventivaController extends Controller
{
    public function index()
    {
            $users = User::get();

            $preventivas = Preventiva::get();

            return view('preventiva.index', compact('users', 'preventivas'));
    }

    public function store(Request $request)
    {

        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        try {

        //3/3- Si la validacion es correcta se crea el registro
        $current = Carbon::now()->toDateString();
        $Preventiva = new Preventiva;
        $Preventiva->id_user = $request->get('id_user');
        $Preventiva->elemento = $request->get('elemento');
        $Preventiva->descripcion = $request->get('descripcion');
        $Preventiva->fecha = $current;
        $Preventiva->estatus = $request->get('estatus');
        $Preventiva->save();

        // Redireccion  de suuces or fail dependiedno el caso

            return redirect()->route('preventiva_i_01_01.index')
                ->with('success', 'Preventiva Creada Exitosamente!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error en el registro!!');
        }

    }

    public function update(Request $request, $id)
    {

        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required',
            'tipo' => 'required',
            'inicial' => 'required',
            'final' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        try {

        //3/3- Si la validacion es correcta se crea el registro
        $Preventiva = new Preventiva;
        $Preventiva->id_user = $request->get('id_user');
        $Preventiva->descripcion = $request->get('descripcion');
        $Preventiva->estatus = $request->get('estatus');
        $Preventiva->update();

        $current = Carbon::now()->toDateString();

        // Redireccion  de suuces or fail dependiedno el caso

            return redirect()->route('preventiva_i_01_01.index')
                ->with('success', 'Preventiva Creada Exitosamente!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error en el registro!!');
        }

    }
}
