<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }
    public function index1()
    {
        return view('admin.elementos.1');
    }
    public function graficas()
    {
        return view('admin.graficas.index');
    }
    public function elementos()
    {
        return view('admin.elementos.index');
    }
    
}
