<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class vElementoController extends Controller
{
    public function consultar(){
        $users = User::get();

        return view('modal-elementos.formularios v.index_consultar', compact( 'users'));
    }

    public function index(){
        $users = User::get();

        return view('modal-elementos.formularios v.index_actualizar', compact( 'users'));
    }
}
