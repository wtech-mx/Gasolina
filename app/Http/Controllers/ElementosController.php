<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Preventivas;
use App\Models\Calendario;
use Illuminate\Http\Request;
use App\Models\Tareas;
use App\Models\viiiElemento03;
use App\Models\xElemento;
use App\Models\xvElemento;
use App\Models\xvElementor02;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ElementosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pendientes_admin()
    {
        $tareas = Tareas::
        where('check', '=', 0)
        ->get();

        $xvElemento = xvElemento::
        where('check', '=', 0)
        ->get();

        $xvElemento02 = xvElementor02::
        where('check', '=', 0)
        ->get();

        $calendario_pendientes = Calendario::
        where('check', '=', 0)
        ->where('elemento', '==', null)
        ->get();

        $calendario_elemento = Calendario::
        where('check', '=', 0)
        ->where('elemento', '!=', null)
        ->get();

        return view('admin.actividades.pendientes', compact('tareas', 'xvElemento' , 'xvElemento02', 'calendario_elemento', 'calendario_pendientes'));

    }



    public function terminadas_admin()
    {
        $tareas = Tareas::
        where('check', '=', 1)
        ->get();

        $xElemento = xElemento::
        where('estado', '=', 1)
        ->get();

        $preventivas = DB::table('preventivas')
        ->where('estado', '=', 1)
        ->get();

        $xvElemento = xvElemento::
        where('check', '=', 1)
        ->get();

        $xvElemento02 = xvElementor02::
        where('check', '=', 1)
        ->get();

        return view('admin.actividades.terminadas', compact('tareas', 'xElemento', 'preventivas', 'xvElemento', 'xvElemento02'));

    }



    public function por_vencer_admin()
    {
        $hoy = Carbon::today();
        $fecha = date("Y-m-d",strtotime($hoy."+ 5 days"));

        $tareas = Tareas::
        where('check', '=', 0)
        ->where('end', '<=', $fecha)
        ->get();

        $xvElemento = xvElemento::
        where('check', '=', 0)
        ->where('end', '<=', $fecha)
        ->get();

        $xvElemento02 = xvElementor02::
        where('check', '=', 1)
        ->where('end', '<=', $fecha)
        ->get();

        return view('admin.actividades.vencer', compact('tareas', 'xvElemento', 'xvElemento02'));

    }




    public function graficas_admin()
    {
         // -------------Semestral----------------------------------------------------------------------------------------------

        $hoy = Carbon::today();
        $fecha = date("Y-m-d",strtotime($hoy."- 6 month"));

        $T1 = Tareas::where('end', '>=', $fecha)->get();
        $conteoTotal = count($T1);

        $T2 = xvElemento::where('end', '>=', $fecha)->get();
        $conteoTotal2 = count($T2);

        $T3 = xvElementor02::where('end', '>=', $fecha)->get();
        $conteoTotal3 = count($T3);

        $T4 = Calendario::where('end', '>=', $fecha)->get();
        $conteoTotal4 = count($T4);

        $conteoTotal_suma= $conteoTotal + $conteoTotal2 + $conteoTotal3 + $conteoTotal4;

    if($conteoTotal != 0 || $conteoTotal2 != 0 || $conteoTotal3 != 0 || $conteoTotal4 != 0){
        $V1 = Tareas::where('end', '>=', $fecha)->where('check', '=', 1)->get();
        $preventiva_term = DB::table('preventivas')->where('estado', '=', 1)->get();
        $xvElemento = xvElemento::where('end', '>=', $fecha)->where('check', '=', 1)->get();
        $xvElementor02 = xvElementor02::where('end', '>=', $fecha)->where('check', '=', 1)->get();
        $calendario = Calendario::where('end', '>=', $fecha)->where('check', '=', 1)->get();
        $suma = count($V1) + count($preventiva_term) + count($xvElemento) + count($xvElementor02) + count($calendario);
        $conteoTerminadas = $suma;

        $porcentajeTerminadas = (100 / $conteoTotal_suma) * $conteoTerminadas;

        $conteoNoTerminadas = $conteoTotal_suma - $conteoTerminadas;
        $porcentajeNoTerminadas = (100 / $conteoTotal_suma) * $conteoNoTerminadas;
    }else{
        $porcentajeTerminadas = 0;
        $porcentajeNoTerminadas = 0;
    }
        // -------------Anual----------------------------------------------------------------------------------------------

        $fecha_anual = date("Y-m-d",strtotime($hoy."- 12 month"));

        $T1_anual = Tareas::where('end', '>=', $fecha_anual)->get();
        $conteoTotal_anual = count($T1_anual);

        $T2_anual = xvElemento::where('end', '>=', $fecha_anual)->get();
        $conteoTotal_anual2 = count($T2_anual);

        $T3_anual = xvElementor02::where('end', '>=', $fecha_anual)->get();
        $conteoTotal_anual3 = count($T3_anual);

        $T4_anual = Calendario::where('end', '>=', $fecha_anual)->get();
        $conteoTotal_anual4 = count($T4_anual);

        $conteoTotal_anual_suma= $conteoTotal_anual + $conteoTotal_anual2 + $conteoTotal_anual3 + $conteoTotal_anual4;

    if($conteoTotal_anual != 0 || $conteoTotal_anual2 != 0 || $conteoTotal_anual3 != 0 || $conteoTotal_anual4 != 0){
        $V1_anual = Tareas::where('end', '>=', $fecha_anual)->where('check', '=', 1)->get();
        $xvElemento = xvElemento::where('end', '>=', $fecha_anual)->where('check', '=', 1)->get();
        $xvElementor02 = xvElementor02::where('end', '>=', $fecha_anual)->where('check', '=', 1)->get();
        $calendario = Calendario::where('end', '>=', $fecha_anual)->where('check', '=', 1)->get();
        $conteoTerminadas_anual = count($V1_anual) + count($xvElemento) + count($xvElementor02) + count($calendario);

        $porcentajeTerminadas_anual = (100 / $conteoTotal_anual_suma) * $conteoTerminadas_anual;

        $conteoNoTerminadas_anual = $conteoTotal_anual_suma - $conteoTerminadas_anual;
        $porcentajeNoTerminadas_anual = (100 / $conteoTotal_anual_suma) * $conteoNoTerminadas_anual;
    }else{
        $porcentajeTerminadas_anual = 0;
        $porcentajeNoTerminadas_anual = 0;
    }
        return view('admin.graficas.index', compact('porcentajeTerminadas', 'porcentajeNoTerminadas', 'T1', 'T2', 'T3', 'T4','porcentajeTerminadas_anual', 'porcentajeNoTerminadas_anual', 'T1_anual', 'T2_anual', 'T3_anual', 'T4_anual'));

    }

    public function graficas()
    {
         // -------------Semestral----------------------------------------------------------------------------------------------

        $hoy = Carbon::today();
        $fecha = date("Y-m-d",strtotime($hoy."- 6 month"));

        $T1 = Tareas::where('id_user', '=', auth()->user()->id)->where('end', '>=', $fecha)->get();
        $conteoTotal = count($T1);
    if($conteoTotal != 0){


        $V1 = Tareas::where('id_user', '=', auth()->user()->id)->where('end', '>=', $fecha)->where('check', '=', 1)->get();
        $preventiva_term = DB::table('preventivas')->where('id_user', '=', auth()->user()->id)->where('updated_at', '>=', $fecha)->where('estado', '=', 1)->get();
        $xElemento = xElemento::where('id_user', '=', auth()->user()->id)->where('updated_at', '>=', $fecha)->where('estado', '=', 1)->get();
        $suma = count($V1) + count($preventiva_term)+ count($xElemento);
        $conteoTerminadas = $suma;

        $porcentajeTerminadas = (100 / $conteoTotal) * $conteoTerminadas;

        $conteoNoTerminadas = $conteoTotal - $conteoTerminadas;
        $porcentajeNoTerminadas = (100 / $conteoTotal) * $conteoNoTerminadas;
    }else{
        $porcentajeTerminadas = 0;
        $porcentajeNoTerminadas = 0;
    }
        // -------------Anual----------------------------------------------------------------------------------------------

        $fecha_anual = date("Y-m-d",strtotime($hoy."- 12 month"));

        $T1_anual = Tareas::where('id_user', '=', auth()->user()->id)->where('end', '>=', $fecha_anual)->get();
        $conteoTotal_anual = count($T1_anual);
    if($conteoTotal_anual != 0){

        $V1_anual = Tareas::where('id_user', '=', auth()->user()->id)->where('end', '>=', $fecha_anual)->where('check', '=', 1)->get();
        $preventiva_term = DB::table('preventivas')->where('id_user', '=', auth()->user()->id)->where('updated_at', '>=', $fecha_anual)->where('estado', '=', 1)->get();
        $xElemento = xElemento::where('id_user', '=', auth()->user()->id)->where('updated_at', '>=', $fecha_anual)->where('estado', '=', 1)->get();
        $suma = count($V1) + count($preventiva_term)+ count($xElemento);
        $conteoTerminadas_anual = $suma;
        $porcentajeTerminadas_anual = (100 / $conteoTotal_anual) * $conteoTerminadas_anual;

        $conteoNoTerminadas_anual = $conteoTotal_anual - $conteoTerminadas_anual;
        $porcentajeNoTerminadas_anual = (100 / $conteoTotal_anual) * $conteoNoTerminadas_anual;
    }else{
        $porcentajeTerminadas_anual = 0;
        $porcentajeNoTerminadas_anual = 0;
    }
        return view('graficas.index', compact('porcentajeTerminadas', 'porcentajeNoTerminadas', 'T1','porcentajeTerminadas_anual', 'porcentajeNoTerminadas_anual', 'T1_anual'));

    }
}
