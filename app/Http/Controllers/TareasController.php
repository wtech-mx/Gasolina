<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;
use App\Models\Elementos;

class TareasController extends Controller
{
    public function store(Request $request)
    {

            $tarea = new Tareas;
            $tarea->id_user = auth()->user()->id;
            $tarea->elementos = $request->get('elementos');
            $tarea->descripcion = $request->get('descripcion');

            $tarea->title = $request->get('title');
            $tarea->image = $request->get('image');
            $tarea->estatus = 0;
            $tarea->url = $request->get('url');
            $tarea->start = $request->get('start');

            if($request->get('end') == NULL){
                $tarea->color = '#03FE42';
                $tarea->end = $request->get('start');
            }else{
                switch($request->get('end')){
                    case($request->get('end') == 1):
                        $tarea->color = '#0238E6';
                        $fecha = date($request->get('start'));
                        $nuevafecha = strtotime ( '+1 month' , strtotime ( $fecha ) ) ;
                        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                        $tarea->end = $nuevafecha;
                    break;

                    case($request->get('end') == 2):
                        $tarea->color = '#BE07E8';

                    break;

                    case($request->get('end') == 3):
                        $tarea->color = '#E89A1E';

                    break;
                }
            }

            $tarea->save();

            $elementos = new Elementos;
            $elementos->id_tareas = $tarea->id;
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
            $elementos->save();

            return redirect()->back();

    }
}
