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
}
