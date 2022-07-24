<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class xvElementoController extends Controller
{
    public function index(){
        $users = User::get();

        return view('modal-elementos.formularios xv.index', compact( 'users'));
    }

    public function pdf_sasisopa_xv()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xv.pdf_xv', compact('config'));
        return $pdf->stream('XV Auditorias.pdf');
    }

    public function pdf_sasisopa_xv_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xv.pdf_xv', compact('config'));
        return $pdf->download('XV Auditorias.pdf');
    }

    public function pdf_sasisopa_xv_01()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xv.pdf_xv', compact('config'));
        return $pdf->stream('XV-01 Procedimiento de auditoria interna.pdf');
    }

    public function pdf_sasisopa_xv_01_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xv.pdf_xv', compact('config'));
        return $pdf->download('XV-01 Procedimiento de auditoria interna.pdf');
    }
}
