<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;
use Carbon\Carbon;

class ElementosController extends Controller
{
    public function pendientes()
    {
        $tareas = Tareas::
        where('id_user', '=', auth()->user()->id)
        ->where('check', '=', 0)
        ->get();

        return view('actividades.pendientes', compact('tareas'));

    }

    public function terminadas()
    {
        $tareas = Tareas::
        where('id_user', '=', auth()->user()->id)
        ->where('check', '=', 1)
        ->get();

        return view('actividades.terminadas', compact('tareas'));

    }

    public function por_vencer()
    {
        $hoy = Carbon::today();
        $fecha = date("Y-m-d",strtotime($hoy."+ 5 days"));

        $tareas = Tareas::
        where('id_user', '=', auth()->user()->id)
        ->where('check', '=', 0)
        ->where('end', '<=', $fecha)
        ->get();

        return view('actividades.vencer', compact('tareas'));

    }

    public function graficas()
    {
        $hoy = Carbon::today();
        $fecha = date("Y-m-d",strtotime($hoy."- 6 month"));

        $T1 = Tareas::where('id_user', '=', auth()->user()->id)->where('end', '>=', $fecha)->get();
        $conteoTotal = count($T1);

        $V1 = Tareas::where('id_user', '=', auth()->user()->id)->where('end', '>=', $fecha)->where('check', '=', 1)->get();
        $conteoTerminadas = count($V1);
        $porcentajeTerminadas = (100 / $conteoTotal) * $conteoTerminadas;

        $conteoNoTerminadas = $conteoTotal - $conteoTerminadas;
        $porcentajeNoTerminadas = (100 / $conteoTotal) * $conteoNoTerminadas;

        return view('admin.graficas.index', compact('porcentajeTerminadas', 'porcentajeNoTerminadas'));

    }
}
