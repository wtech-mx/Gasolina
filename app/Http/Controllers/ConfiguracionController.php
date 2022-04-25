<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use App\Models\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfiguracionController extends Controller
{
    function index()
    {
        $config = DB::table('configuracion')->first();

        return view('admin.configuracion.index', compact('config'));
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
}
