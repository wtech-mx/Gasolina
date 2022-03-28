<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;
use App\Models\Ejecutar;
use App\Models\Elementos;
use Illuminate\Support\Facades\Validator;

class TareasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {

            //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
            $validator = Validator::make($request->all(), [
                'start' => 'required|string|max:191',
                'descripcion' => 'required|string|max:191',
            ]);

            //2/3- Envia Mensaje de validacion en la Sweetalert
            if ($validator->fails()) {
                return redirect()->back()
                    ->with('errorForm', $validator->errors()->getMessages())
                    ->withInput();
            }
            try {
            //3/3- Si la validacion es correcta se crea el registro

            $tarea = new Tareas;
            $tarea->id_user = auth()->user()->id;
            $tarea->elementos = $request->get('elementos');
            $tarea->num_elementos = $request->get('num_elementos');
            $tarea->descripcion = $request->get('descripcion');

            $tarea->title = $request->get('title');
            $tarea->image = $request->get('image');
            $tarea->estatus = 0;
            $tarea->check = 0;
            $tarea->url = $request->get('url');
            $tarea->start = $request->get('start');

            if($request->get('end') == NULL){
                $tarea->color = '#549227';
                $tarea->end = $request->get('start');
            }else{
                switch($request->get('end')){
                    case($request->get('end') == 1):
                        $tarea->color = '#004E9A';
                        $fecha = date($request->get('start'));
                        $nuevafecha = strtotime ( '+1 month' , strtotime ( $fecha ) ) ;
                        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                        $tarea->end = $nuevafecha;
                    break;

                    case($request->get('end') == 2):
                        $tarea->color = '#4D446F';
                        $fecha = date($request->get('start'));
                        $nuevafecha = strtotime ( '+6 month' , strtotime ( $fecha ) ) ;
                        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                        $tarea->end = $nuevafecha;

                    break;

                    case($request->get('end') == 3):
                        $tarea->color = '#632A00';
                        $fecha = date($request->get('start'));
                        $nuevafecha = strtotime ( '+12 month' , strtotime ( $fecha ) ) ;
                        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
                        $tarea->end = $nuevafecha;
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
            // $elementos->ejecutar = $request->get('ejecutar');
            $elementos->ejecutar = 0;
            $elementos->entrada = $request->get('entrada');
            $elementos->salida = $request->get('salida');
            $elementos->extraordinaria = $request->get('extraordinaria');
            $elementos->programado = $request->get('programado');
            $elementos->actualizar = $request->get('actualizar');
            $elementos->alta = $request->get('alta');
            $elementos->evaluar = $request->get('evaluar');
            $elementos->generar = $request->get('generar');

            $elementos->save();

            $ejecutar = new Ejecutar;
            $ejecutar->id_user = auth()->user()->id;
            $ejecutar->id_tarea = $tarea->id;
            $ejecutar->cantidad_antes = 0;
            $ejecutar->cantidad_despues = 0;

            $ejecutar->save();

            return redirect()->route('home')
                ->with('success', 'La tarea fue Creada Exitosamente!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error en el registro!!');
        }

    }

    public function formulario_3(Request $request)
    {
        for ($i = 0; $i < $request->get('num_veces'); $i++){
            $tarea = new Tareas;
            $tarea->id_user = auth()->user()->id;
            $tarea->elementos = $request->get('elementos');
            $tarea->num_elementos = $request->get('num_elementos');
            $tarea->descripcion = $request->get('descripcion');

            $tarea->title = $request->get('title');
            $tarea->image = $request->get('image');
            $tarea->estatus = 0;
            $tarea->check = 0;
            $tarea->url = $request->get('url');
            $tarea->start = $request->get('start');
            $tarea->color = '#549227';

            $dia = $tarea->start;

            $año_actual = date("Y");
            $mes_actual = date("m");

            $num_month = "+".$i." month";

            $num_veces_month = $año_actual."-".$request->get('mes')."-".$dia;

            $nuevafecha = strtotime ( $num_month , strtotime ( $num_veces_month ) ) ;

            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
            $tarea->end = $nuevafecha;
            $tarea->start = $nuevafecha;

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

            $ejecutar = new Ejecutar;
            $ejecutar->id_user = auth()->user()->id;
            $ejecutar->id_tarea = $tarea->id;
            $ejecutar->cantidad_antes = 0;
            $ejecutar->cantidad_despues = 0;
            $ejecutar->save();
        }

        return redirect()->route('home')
        ->with('success', 'La tarea fue Creada Exitosamente!');
    }


}
