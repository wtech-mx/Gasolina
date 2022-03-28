<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Tareas;
use App\Models\Ejecutar;

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
        $tareas = Tareas::
        where('id_user', '=', auth()->user()->id)
        ->get();

        $ejecutar = Ejecutar::
        where('id_user', '=', auth()->user()->id)
        ->get();

        return view('home', compact('tareas', 'ejecutar'));
    }
    public function graficas()
    {
        return view('admin.graficas.index');
    }

}
