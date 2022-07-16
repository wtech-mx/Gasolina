<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ivElementoController extends Controller
{
    public function pdf_sasisopa_iv()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios iv.pdf_iv', compact('config'));
        return $pdf->stream('IV - Objetivos, metas e indicadores.pdf');
    }

    public function pdf_sasisopa_iv_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios iv.pdf_iv', compact('config'));
        return $pdf->download('IV - Objetivos, metas e indicadores.pdf');
    }

    public function pdf_sasisopa_iv_01()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios iv.pdf_iv_01', compact('config'));
        return $pdf->stream('IV-01 Procedimiento para el establecimiento de objetivos, metas e indicadores.pdf');
    }

    public function pdf_sasisopa_iv_01_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios iv.pdf_iv_01', compact('config'));
        return $pdf->download('IV-01 Procedimiento para el establecimiento de objetivos, metas e indicadores.pdf');
    }
}
