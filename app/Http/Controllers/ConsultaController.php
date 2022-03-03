<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Exports\ConsultaExport;
use App\Exports\ConsultaDiseñoExport;
use App\Exports\ConsultaPreExport;
use App\Exports\ConsultaNomExport;
use Maatwebsite\Excel\Facades\Excel;

class ConsultaController extends Controller
{

    public function index()
    {
        $consulta = DB::table('consultar')->get();

        return view('consulta.index', compact('consulta'));

    }

    public function export()
    {
        return Excel::download(new ConsultaExport, '003-SGM.xlsx');
    }

    public function exportpre()
    {
        return Excel::download(new ConsultaDiseñoExport, '004-PRE.xlsx');
    }

    public function exportdiseño()
    {
        return Excel::download(new ConsultaPreExport, '006-Diseño.xlsx');
    }

    public function exportnom()
    {
        return Excel::download(new ConsultaNomExport, '007-NOM 05.xlsx');
    }
}
