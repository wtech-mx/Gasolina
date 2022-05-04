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

    public function index_abandono()
    {
        $users = User::get();

        return view('modal-elementos.formularios ii.consulta.abandono', compact( 'users'));
    }
    public function actividad_abandono()
    {
        $users = User::get();

        return view('modal-elementos.formularios ii.consulta.actividad_abandono', compact( 'users'));
    }

    public function index_construccion()
    {
        $users = User::get();

        return view('modal-elementos.formularios ii.consulta.construccion', compact( 'users'));
    }
    public function index_operacion()
    {
        $users = User::get();

        return view('modal-elementos.formularios ii.consulta.operacion', compact( 'users'));
    }
    public function index_preparacion()
    {
        $users = User::get();

        return view('modal-elementos.formularios ii.consulta.preparacion', compact( 'users'));
    }
    public function index_situaciones()
    {
        $users = User::get();

        return view('modal-elementos.formularios ii.consulta.situaciones', compact( 'users'));
    }
}
