<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Correctiva;
use DB;
use App\Models\Elementos;

class CorrectivaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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

            //3/3- Si la validacion es correcta se crea el registro
            $elementos_id = DB::table('elementos')
            ->where('id_user', '=', auth()->user()->id)
            ->latest()
            ->first();

            $elementos = Elementos::findOrFail($elementos_id->id);
            $elementos->correctiva = 1;
            $elementos->update();

            $correctiva = new Correctiva;
            $correctiva->id_elemento = $elementos->id;
            $correctiva->fecha = $request->get('fecha');
            $correctiva->descripcion = $request->get('descripcion');
            $correctiva->save();

            // Redireccion  de suuces or fail dependiedno el caso

            return redirect()->route('home')
                ->with('success', 'Empresa Creada Exitosamente!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error en el registro!!');
        }
    }
}
