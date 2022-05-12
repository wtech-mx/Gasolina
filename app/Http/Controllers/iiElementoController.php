<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB;

class iiElementoController extends Controller
{
    public function index()
    {
        $config = DB::table('configuracion')->first();
        $users = User::get();

        return view('modal-elementos.formularios ii.consulta.index', compact('config', 'users'));
    }

    public function actividad_abandono()
    {
        $users = User::get();

        return view('modal-elementos.formularios ii.consulta.actividad_abandono', compact( 'users'));
    }
    public function actividad_construccion()
    {
        $users = User::get();

        return view('modal-elementos.formularios ii.consulta.actividad_construccion', compact( 'users'));
    }
    public function actividad_operacion()
    {
        $users = User::get();

        return view('modal-elementos.formularios ii.consulta.actividad_operacion', compact( 'users'));
    }
    public function actividad_preparacion()
    {
        $users = User::get();

        return view('modal-elementos.formularios ii.consulta.actividad_preparacion', compact( 'users'));
    }
    public function actividad_situaciones()
    {
        $users = User::get();

        return view('modal-elementos.formularios ii.consulta.actividad_situaciones', compact( 'users'));
    }

}
