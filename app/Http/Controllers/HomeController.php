<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Tareas;
use App\Models\ViElemento;
use App\Models\xElemento;
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

        $tareas = Tareas::
        where('id_user', '=', auth()->user()->id)
        ->get();

        $xElemento = xElemento::
        where('id_user', '=', auth()->user()->id)
        ->get();

        $vi_elemento = ViElemento::get();

        $difundir = DB::table('difundirs')->get();

        return view('home', compact('tareas', 'xElemento', 'vi_elemento', 'difundir', 'config'));
    }
    
    public function graficas()
    {
        return view('admin.graficas.index');
    }

}
