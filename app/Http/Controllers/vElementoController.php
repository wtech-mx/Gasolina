<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class vElementoController extends Controller
{
    public function index(){
        $users = User::get();

        $empresa = DB::table('users')
            ->where('empresa', '=', 1)
            ->get();

        $sucursal = DB::table('users')
            ->where('empresa', '=', 2)
            ->get();

        $roles = Role::pluck('name','name')->all();

        return view('modal-elementos.formularios v.index_actualizar', compact( 'users', 'empresa', 'sucursal', 'roles'));
    }

    public function pdf_generar_v()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios v.generar', compact('config'));
        return $pdf->stream('V-01-03 Documento de asignación de Responsable tecnico.pdf');
    }

    public function pdf_otorgamiento_v()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios v.otorgamiento_autoridad', compact('config'));
        return $pdf->stream('Otorgamiento Autoridad.pdf');
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
