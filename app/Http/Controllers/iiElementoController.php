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
    
    public function pdf_sasisopa_ii_01()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios ii.pdf_sasisopa_ii_01', compact('config'));
        return $pdf->stream('II - Procedimieno para la identificación de peligros y evlaución de riesgos.pdf');
    }

    public function pdf_sasisopa_ii_01_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios ii.pdf_sasisopa_ii_01', compact('config'));
        return $pdf->download('II - Procedimieno para la identificación de peligros y evlaución de riesgos.pdf');
    }

    public function pdf_sasisopa_ii()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios ii.pdf_ii', compact('config'));
        return $pdf->stream('II - Gestión de peligros, riesgos e impactos ambientales.pdf');
    }

    public function pdf_sasisopa_ii_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios ii.pdf_ii', compact('config'));
        return $pdf->download('II - Gestión de peligros, riesgos e impactos ambientales.pdf');
    }
}
