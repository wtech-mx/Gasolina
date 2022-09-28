<?php

namespace App\Http\Controllers;

use App\Models\Preventiva;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;

class PreventivaController extends Controller
{
    public function index()
    {
            $users = User::where('delete', '=', NULL)->get();

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
            Session::flash('error', 'opps error al crear usuario');
            return redirect()->back();
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
        Session::flash('success', 'Se ha guardado sus datos con exito');
        return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back();
        }

    }

    public function update(Request $request, $id)
    {

        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            Session::flash('error', 'opps error al crear usuario');
            return redirect()->back();
        }
        try {

        //3/3- Si la validacion es correcta se crea el registro
        $Preventiva = Preventiva::findOrFail($id);
        $Preventiva->id_user = $request->get('id_user');
        $Preventiva->descripcion = $request->get('descripcion');
        $Preventiva->estatus = $request->get('estatus');
        $Preventiva->update();

        $current = Carbon::now()->toDateString();

        // Redireccion  de suuces or fail dependiedno el caso
        Session::flash('edit', 'Se ha guardado sus datos con exito');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back();
        }

    }

    public function destroy(Request $request, $id){

        $preventiva = Preventiva::findOrFail($id);
        $preventiva->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }
}
