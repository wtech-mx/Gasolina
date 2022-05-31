<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use App\Models\TanqueConfiguracion;
use App\Models\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ConfiguracionController extends Controller
{
    function index()
    {
        $config = DB::table('configuracion')->first();
        $dispensario = TanqueConfiguracion::get();

        return view('admin.configuracion.index', compact('config', 'dispensario'));
    }

    public function update_firmas(Request $request)
    {
        $firma = Configuracion::first();

        if ($request->hasFile("firma1")) {

            $file = $request->file('firma1');
            $path = public_path() . '/firmas';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);

            $firma->firma1 = $fileName;

            $firma->name1 = $request->get('name1');
        }
        if ($request->hasFile("firma2")) {

            $file = $request->file('firma2');
            $path = public_path() . '/firmas';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);

            $firma->firma2 = $fileName;

            $firma->name2 = $request->get('name2');
        }
        if ($request->hasFile("firma3")) {

            $file = $request->file('firma3');
            $path = public_path() . '/firmas';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);

            $firma->firma3 = $fileName;

            $firma->name3 = $request->get('name3');
        }

        $firma->save();

        Session::flash('success', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.configuracion');
    }

    public function update_estacion(Request $request){

        $tanque = Configuracion::first();
        $tanque->tanque1 = $request->get('tanque1');
        $tanque->tanque2 = $request->get('tanque2');
        $tanque->tanque3 = $request->get('tanque3');
        $tanque->save();

        $rules = array(
            'estatus.*',
            'pistola1.*',
            'pistola2.*',
            'pistola3.*',
        );
        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json([
                'error' => $error->errors()->all()
            ]);
        }

        $estatus = $request->estatus;
        $pistola1 = $request->pistola1;
        $pistola2 = $request->pistola2;
        $pistola3 = $request->pistola3;
        for ($count = 0; $count < count($estatus); $count++) {
            $data = array(
                'estatus' => $estatus[$count],
                'pistola1' => $pistola1[$count],
                'pistola2' => $pistola2[$count],
                'pistola3' => $pistola3[$count],
            );
            $insert_data[] = $data;
        }

        TanqueConfiguracion::insert($insert_data);

        Session::flash('success', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.configuracion');
    }

    public function update_ajustes(Request $request){

        $tanque = Configuracion::first();
        $tanque->color_diaria = $request->get('color_diaria');
        $tanque->color_mensual = $request->get('color_mensual');
        $tanque->color_semestral = $request->get('color_semestral');
        $tanque->color_año = $request->get('color_año');
        $tanque->color_no_realizada = $request->get('color_no_realizada');
        if ($request->hasFile("logo")) {

            $file = $request->file('logo');
            $path = public_path() . '/logo';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);

            $tanque->logo = $fileName;
        }
        $tanque->sac = $request->get('sac');
        $tanque->save();

        Session::flash('success', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.configuracion');
    }
}
