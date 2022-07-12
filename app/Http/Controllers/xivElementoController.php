<?php

namespace App\Http\Controllers;

use App\Models\xivElemento02;
use App\Models\xivElemento06;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class xivElementoController extends Controller
{
    public function index()
    {
        $xiv_elemento = xivElemento02::get();
        $config = DB::table('configuracion')->first();

        return view('modal-elementos.formularios xiv.xiv-01-02.index', compact('xiv_elemento', 'config'));
    }

    public function store(Request $request)
    {
            $xiv_elemento = new xivElemento02;
            $xiv_elemento->tanque = $request->get('tanque');
            $xiv_elemento->laboratorio = $request->get('laboratorio');
            $xiv_elemento->tipo = $request->get('tipo');
            $xiv_elemento->num_autorizacion = $request->get('num_autorizacion');
            $xiv_elemento->fecha_solicitud = $request->get('fecha_solicitud');
            $xiv_elemento->fecha_seguimiento = $request->get('fecha_seguimiento');

            if($request->hasFile("pdf")){
                $xiv_elemento->estatus = 'Realizada';
            }else{
                $xiv_elemento->estatus = 'Programada';
            }

            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/xiv_elemento';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $xiv_elemento->pdf = $fileName;
            }
            $xiv_elemento->save();

            return redirect()->route('index.xiv_01_02')
                ->with('success', 'xiv-01-02 Creada Exitosamente!');
    }

    public function update(Request $request, $id)
    {
        $xiv_elemento = xivElemento02::findOrFail($id);
        $xiv_elemento->tanque = $request->get('tanque');
        $xiv_elemento->laboratorio = $request->get('laboratorio');
        $xiv_elemento->tipo = $request->get('tipo');
        $xiv_elemento->num_autorizacion = $request->get('num_autorizacion');
        $xiv_elemento->fecha_solicitud = $request->get('fecha_solicitud');
        $xiv_elemento->fecha_seguimiento = $request->get('fecha_seguimiento');
        if($request->hasFile("pdf")){
            $xiv_elemento->estatus = 'Realizada';
        }else{
            $xiv_elemento->estatus = 'Programada';
        }

        if($request->hasFile("pdf")){
            $xiv_elemento->estatus = 'Realizada';
        }else{
            $xiv_elemento->estatus = 'Programada';
        }

        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/xiv_elemento';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $xiv_elemento->pdf = $fileName;
        }
        $xiv_elemento->update();


        Session::flash('success', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.xiv_01_02');
    }

    public function index_xiv_01_06()
    {
        $xiv_elemento_03_01 = xivElemento06::get();
        $config = DB::table('configuracion')->first();

        return view('modal-elementos.formularios xiv.xiv-03-01.index', compact('xiv_elemento_03_01', 'config'));
    }

    public function store_xiv_01_06(Request $request)
    {
            $xiv_elemento_06 = new xivElemento06;
            $xiv_elemento_06->nombre = $request->get('nombre');
            $xiv_elemento_06->fecha = $request->get('fecha');
            $xiv_elemento_06->incidencia = $request->get('incidencia');
            $xiv_elemento_06->dependencia = $request->get('dependencia');
            $xiv_elemento_06->observaciones = $request->get('observaciones');

            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/xiv_elemento_06';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $xiv_elemento_06->pdf = $fileName;
            }
            $xiv_elemento_06->save();

            return redirect()->route('index.xiv_01_06')
                ->with('success', 'xiv-01-02 Creada Exitosamente!');
    }

    public function update_xiv_01_06(Request $request, $id)
    {
            $xiv_elemento_06 = xivElemento06::findOrFail($id);
            $xiv_elemento_06->nombre = $request->get('nombre');
            $xiv_elemento_06->fecha = $request->get('fecha');
            $xiv_elemento_06->incidencia = $request->get('incidencia');
            $xiv_elemento_06->dependencia = $request->get('dependencia');
            $xiv_elemento_06->observaciones = $request->get('observaciones');

            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/xiv_elemento_06';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $xiv_elemento_06->pdf = $fileName;
            }
            $xiv_elemento_06->save();

            return redirect()->route('index.xiv_01_06')
                ->with('success', 'xiv-01-02 Creada Exitosamente!');
    }

    public function pdf_sasisopa_xiv()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xiv.pdf_xiv', compact('config'));
        return $pdf->stream('XIV - Monitoreo, verificación y evaluación.pdf');
    }

    public function pdf_sasisopa_xiv_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xiv.pdf_xiv', compact('config'));
        return $pdf->download('XIV - Monitoreo, verificación y evaluación.pdf');
    }

    public function pdf_sasisopa_xiv_02()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xiv.pdf_xiv_02', compact('config'));
        return $pdf->stream('XIV-01 Procedimiento de verificación y calibración de los equipos.pdf');
    }

    public function pdf_sasisopa_xiv_02_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xiv.pdf_xiv_02', compact('config'));
        return $pdf->download('XIV-01 Procedimiento de verificación y calibración de los equipos.pdf');
    }

    public function pdf_sasisopa_xiv_03()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xiv.pdf_xiv_03', compact('config'));
        return $pdf->stream('XIV-02 Procedimiento para el manejo de no conformidades, acciones preventivas y correctivas del Sistema de Administración.pdf');
    }

    public function pdf_sasisopa_xiv_03_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xiv.pdf_xiv_03', compact('config'));
        return $pdf->download('XIV-02 Procedimiento para el manejo de no conformidades, acciones preventivas y correctivas del Sistema de Administración.pdf');
    }
}
