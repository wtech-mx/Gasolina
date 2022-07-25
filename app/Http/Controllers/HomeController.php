<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Tareas;
use App\Models\ViElemento;
use App\Models\xElemento;
use App\Models\xvElemento;
use App\Models\xvElementor02;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $config = DB::table('configuracion')->first();

        $tareas_pendientes = Tareas::
        where('id_user', '=', auth()->user()->id)
        ->where('check', '=', 0)
        ->get();

        $calendario_pendientes = Calendario::
        where('check', '=', 0)
        ->get();

        $xvElemento_pendientes = xvElemento::
        where('check', '=', 0)
        ->get();

        $xvElementor02_pendientes = xvElementor02::
        where('check', '=', 0)
        ->get();

        $tareas_terminadas = Tareas::
        where('id_user', '=', auth()->user()->id)
        ->where('check', '=', 1)
        ->get();

        $preventivas_terminadas = DB::table('preventivas')
        ->where('id_user', '=', auth()->user()->id)
        ->where('estado', '=', 1)
        ->get();

        $calendario_terminadas = Calendario::
        where('id_user', '=', auth()->user()->id)
        ->where('check', '=', 1)
        ->get();

        $xElemento_terminadas = xElemento::
        where('id_user', '=', auth()->user()->id)
        ->where('estado', '=', 1)
        ->get();

        $xvElemento_terminadas = xvElemento::
        where('check', '=', 1)
        ->get();

        $xvElementor02_terminadas = xvElementor02::
        where('check', '=', 1)
        ->get();


        $hoy = Carbon::today();
        $fecha = date("Y-m-d",strtotime($hoy."+ 5 days"));

        $tareas_vencer = Tareas::
        where('id_user', '=', auth()->user()->id)
        ->where('check', '=', 0)
        ->where('end', '<=', $fecha)
        ->get();

        $calendario_vencer = Calendario::
        where('id_user', '=', auth()->user()->id)
        ->where('check', '=', 0)
        ->where('end', '<=', $fecha)
        ->get();

        $xvElemento_vencer = xvElemento::
        where('check', '=', 0)
        ->where('end', '<=', $fecha)
        ->get();

        $xvElementor02_vencer = xvElementor02::
        where('check', '=', 0)
        ->where('end', '<=', $fecha)
        ->get();

        $vi_elemento = ViElemento::get();

        $difundir = DB::table('difundirs')->get();

        $xElemento = xElemento::
        where('id_user', '=', auth()->user()->id)
        ->get();



        return view('home', compact('tareas_pendientes', 'tareas_terminadas', 'xvElemento_pendientes', 'xvElementor02_pendientes', 'xvElemento_terminadas', 'xvElementor02_terminadas', 'tareas_vencer', 'xElemento' , 'xElemento_terminadas', 'xvElemento_vencer', 'xvElementor02_vencer', 'vi_elemento', 'difundir', 'config', 'calendario_pendientes', 'calendario_terminadas', 'calendario_vencer'));
    }

    public function graficas()
    {
        return view('admin.graficas.index');
    }

}
