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
        return $pdf->stream('SASISOPA I-01-01.pdf');
    }
}
