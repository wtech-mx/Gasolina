<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class iElementoController extends Controller
{

    public function pdf_sasisopa()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios i.pdf_sasisopa', compact('config'));
        return $pdf->stream('I - Procedimiento de elaboración y comunicación de la política.pdf');
    }

    public function pdf_sasisopa_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios i.pdf_sasisopa', compact('config'));
        return $pdf->download('I - Procedimiento de elaboración y comunicación de la política.pdf');
    }

    public function pdf_sasisopa_i_01()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios i.pdf_sasisopa_i_01', compact('config'));
        return $pdf->stream('I - Política.pdf');
    }

    public function pdf_sasisopa_i_01_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios i.pdf_sasisopa', compact('config'));
        return $pdf->download('I - Política.pdf');
    }
}
