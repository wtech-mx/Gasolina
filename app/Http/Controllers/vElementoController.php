<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function pdf_generar_v()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios v.generar', compact('config'));
        return $pdf->stream('Generar V.pdf');
    }

    public function pdf_sasisopa_v()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios v.pdf_v', compact('config'));
        return $pdf->stream('SASISOPA V.pdf');
    }

    public function pdf_sasisopa_v_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios v.pdf_v', compact('config'));
        return $pdf->download('SASISOPA V.pdf');
    }

    public function pdf_sasisopa_v_01()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios v.pdf_v_01', compact('config'));
        return $pdf->stream('SASISOPA V-01.pdf');
    }

    public function pdf_sasisopa_v_01_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios v.pdf_v_01', compact('config'));
        return $pdf->download('SASISOPA V-01.pdf');
    }
}
