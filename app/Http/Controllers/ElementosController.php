<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Preventivas;
use Illuminate\Http\Request;
use App\Models\Tareas;
use App\Models\xElemento;
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

        return view('admin.actividades.pendientes', compact('tareas'));

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

        return view('admin.actividades.terminadas', compact('tareas', 'xElemento', 'preventivas'));

    }



    public function por_vencer_admin()
    {
        $hoy = Carbon::today();
        $fecha = date("Y-m-d",strtotime($hoy."+ 5 days"));

        $tareas = Tareas::
        where('check', '=', 0)
        ->where('end', '<=', $fecha)
        ->get();

        return view('admin.actividades.vencer', compact('tareas'));

    }




    public function graficas_admin()
    {
         // -------------Semestral----------------------------------------------------------------------------------------------

        $hoy = Carbon::today();
        $fecha = date("Y-m-d",strtotime($hoy."- 6 month"));

        $T1 = Tareas::where('end', '>=', $fecha)->get();
        $conteoTotal = count($T1);

    if($conteoTotal != 0){
        $V1 = Tareas::where('end', '>=', $fecha)->where('check', '=', 1)->get();
        $preventiva_term = DB::table('preventivas')->where('estado', '=', 1)->get();
        $suma = count($V1) + count($preventiva_term);
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

        $T1_anual = Tareas::where('end', '>=', $fecha_anual)->get();
        $conteoTotal_anual = count($T1_anual);

    if($conteoTotal_anual != 0){
        $V1_anual = Tareas::where('end', '>=', $fecha_anual)->where('check', '=', 1)->get();
        $conteoTerminadas_anual = count($V1_anual);
        $porcentajeTerminadas_anual = (100 / $conteoTotal_anual) * $conteoTerminadas_anual;

        $conteoNoTerminadas_anual = $conteoTotal_anual - $conteoTerminadas_anual;
        $porcentajeNoTerminadas_anual = (100 / $conteoTotal_anual) * $conteoNoTerminadas_anual;
    }else{
        $porcentajeTerminadas_anual = 0;
        $porcentajeNoTerminadas_anual = 0;
    }
        return view('admin.graficas.index', compact('porcentajeTerminadas', 'porcentajeNoTerminadas', 'T1','porcentajeTerminadas_anual', 'porcentajeNoTerminadas_anual', 'T1_anual'));

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
