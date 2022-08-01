<?php

namespace App\Http\Controllers;

use App\Models\xiElemento;
use App\Models\xivElemento;
use App\Models\xivElemento02;
use App\Models\xivElemento06;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class xivElementoController extends Controller
{
    public function index_01()
    {
        $xiv_elemento = xivElemento::get();
        $xi_elemento = xiElemento::get();
        $config = DB::table('configuracion')->first();

        return view('modal-elementos.formularios xiv.xiv-01-01.index', compact('xiv_elemento', 'config', 'xi_elemento'));
    }

    public function store_01(Request $request)
    {
            $xiv_elemento = new xivElemento;
            $xiv_elemento->subcomponente = $request->get('subcomponente');
            $xiv_elemento->fecha_solicitud = $request->get('fecha_solicitud');
            $xiv_elemento->vigencia = $request->get('vigencia');
            $xiv_elemento->estatus = $request->get('estatus');
            $xiv_elemento->nombre_unidad = $request->get('nombre_unidad');
            $xiv_elemento->numero_autorizacion = $request->get('numero_autorizacion');
            $xiv_elemento->observaciones = $request->get('observaciones');
            $xiv_elemento->error_max = $request->get('error_max');
            $xiv_elemento->valor_patron = $request->get('valor_patron');
            $xiv_elemento->incertidumbre = $request->get('incertidumbre');
            $xiv_elemento->resolucion_instrumento = $request->get('resolucion_instrumento');

            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/xiv_elemento_01';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $xiv_elemento->pdf = $fileName;
            }
            $xiv_elemento->save();

            Session::flash('success', 'Se ha actualizado sus datos con exito');
            return redirect()->route('index.xiv_01_01');
    }

    public function update_01(Request $request, $id)
    {
        $xiv_elemento = xivElemento::findOrFail($id);
        $xiv_elemento->subcomponente = $request->get('subcomponente');
        $xiv_elemento->fecha_solicitud = $request->get('fecha_solicitud');
        $xiv_elemento->vigencia = $request->get('vigencia');
        $xiv_elemento->estatus = $request->get('estatus');
        $xiv_elemento->nombre_unidad = $request->get('nombre_unidad');
        $xiv_elemento->numero_autorizacion = $request->get('numero_autorizacion');
        $xiv_elemento->observaciones = $request->get('observaciones');
        $xiv_elemento->error_max = $request->get('error_max');
        $xiv_elemento->valor_patron = $request->get('valor_patron');
        $xiv_elemento->incertidumbre = $request->get('incertidumbre');
        $xiv_elemento->resolucion_instrumento = $request->get('resolucion_instrumento');

        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/xiv_elemento_01';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $xiv_elemento->pdf = $fileName;
        }
        $xiv_elemento->update();


        Session::flash('edit', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.xiv_01_01');
    }

    public function destroy_01(Request $request, $id){

        $xiv_elemento = xivElemento::findOrFail($id);
        $xiv_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }

    public function index()
    {
        $xiv_elemento = xivElemento02::get();
        $xi_elemento = xiElemento::get();
        $config = DB::table('configuracion')->first();

        return view('modal-elementos.formularios xiv.xiv-01-02.index', compact('xiv_elemento', 'config', 'xi_elemento'));
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

            Session::flash('success', 'Se ha actualizado sus datos con exito');
            return redirect()->route('index.xiv_01_02');
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


        Session::flash('edit', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.xiv_01_02');
    }

    public function destroy(Request $request, $id){

        $xiv_elemento = xivElemento02::findOrFail($id);
        $xiv_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }

    public function index_xiv_01_06()
    {
        $xiv_elemento_03_01 = xivElemento06::get();
        $xi_elemento = xiElemento::get();
        $config = DB::table('configuracion')->first();

        return view('modal-elementos.formularios xiv.xiv-03-01.index', compact('xiv_elemento_03_01', 'config', 'xi_elemento'));
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

            Session::flash('success', 'Se ha actualizado sus datos con exito');
            return redirect()->route('index.xiv_01_06');
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

            Session::flash('edit', 'Se ha actualizado sus datos con exito');
            return redirect()->route('index.xiv_01_06');
    }

    public function destroy_xiv_01_06(Request $request, $id){

        $xiv_elemento = xivElemento06::findOrFail($id);
        $xiv_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
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

        $pdf = \PDF::loadView('modal-elementos.formularios xiv.pdf_xiv_01', compact('config'));
        return $pdf->stream('XIV-02 Procedimiento para el manejo de no conformidades, acciones preventivas y correctivas del Sistema de Administración.pdf');
    }

    public function pdf_sasisopa_xiv_03_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xiv.pdf_xiv_01', compact('config'));
        return $pdf->download('XIV-02 Procedimiento para el manejo de no conformidades, acciones preventivas y correctivas del Sistema de Administración.pdf');
    }
}
