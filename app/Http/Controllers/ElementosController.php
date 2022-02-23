<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elementos;

class ElementosController extends Controller
{
    public function store(Request $request)
    {

            $elementos = new Elementos;
            $elementos->id_user = auth()->user()->id;
            $elementos->elemntos = $request->get('elemntos');
            $elementos->consultar = $request->get('consultar');
            $elementos->seguimiento = $request->get('seguimiento');
            $elementos->difundir = $request->get('difundir');
            $elementos->correctiva = $request->get('correctiva');
            $elementos->ejecutar = $request->get('ejecutar');
            $elementos->entrada = $request->get('entrada');
            $elementos->salida = $request->get('salida');
            $elementos->extraordinaria = $request->get('extraordinaria');
            $elementos->programado = $request->get('programado');
            $elementos->actualizar = $request->get('actualizar');
            $elementos->alta = $request->get('alta');
            $elementos->evaluar = $request->get('evaluar');
            $elementos->generar = $request->get('generar');

            $elementos->title = $request->get('title');
            $elementos->image = $request->get('image');
            $elementos->color = $request->get('color');
            $elementos->estatus = 0;
            $elementos->start = $request->get('start');
            $elementos->end = $request->get('start');
            $elementos->save();

            return redirect()->back();

    }
}
