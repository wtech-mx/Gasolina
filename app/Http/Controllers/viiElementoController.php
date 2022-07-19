<?php

namespace App\Http\Controllers;

use App\Models\Difundir;
use App\Models\User;
use App\Models\viiElemento;
use App\Models\viiElemento03;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Session;

class viiElementoController extends Controller
{

    public function index()
    {
        $vii_elemento = viiElemento::get();
        $users = User::get();

        return view('modal-elementos.formularios vii.VII-02-02.index', compact('vii_elemento', 'users'));
    }

    public function store(Request $request)
    {

        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'fecha' => 'required',
            'descripcion' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            Session::flash('error', 'opps error al crear usuario, favor de revisar bien los datos ingresados');
            return redirect()->back();
        }
        try {

            //3/3- Si la validacion es correcta se crea el registro
            $vii_elemento = new viiElemento;
            $vii_elemento->fecha = $request->get('fecha');
            $vii_elemento->lugar = $request->get('lugar');
            $vii_elemento->observada = $request->get('observada');
            $vii_elemento->tipo = $request->get('tipo');
            $vii_elemento->descripcion = $request->get('descripcion');
            $vii_elemento->id_empleado = $request->get('id_empleado');
            $vii_elemento->contratista = $request->get('contratista');
            $vii_elemento->visitante = $request->get('visitante');
            $vii_elemento->reportado = $request->get('reportado');
            $vii_elemento->observacion = $request->get('observacion');
            $vii_elemento->responsable = $request->get('responsable');
            $vii_elemento->estatus = $request->get('estatus');
            $vii_elemento->seguimiento = $request->get('seguimiento');
            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/vii_elemento';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $vii_elemento->pdf = $fileName;
            }
            $vii_elemento->save();

            // Redireccion  de suuces or fail dependiedno el caso
            Session::flash('success', 'Se ha guardado sus datos con exito');
            return redirect()->route('index.vii_02_02');
        } catch (\Exception $e) {
            Session::flash('error', 'opps error al crear usuario, favor de revisar bien los datos ingresados');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $vii_elemento = viiElemento::findOrFail($id);
        $vii_elemento->fecha = $request->get('fecha');
        $vii_elemento->lugar = $request->get('lugar');
        $vii_elemento->observada = $request->get('observada');
        $vii_elemento->tipo = $request->get('tipo');
        $vii_elemento->descripcion = $request->get('descripcion');
        $vii_elemento->id_empleado = $request->get('id_empleado');
        $vii_elemento->contratista = $request->get('contratista');
        $vii_elemento->visitante = $request->get('visitante');
        $vii_elemento->reportado = $request->get('reportado');
        $vii_elemento->observacion = $request->get('observacion');
        $vii_elemento->responsable = $request->get('responsable');
        $vii_elemento->estatus = $request->get('estatus');
        $vii_elemento->seguimiento = $request->get('seguimiento');
        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/vii_elemento';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $vii_elemento->pdf = $fileName;
        }
        $vii_elemento->update();


        Session::flash('edit', 'Se ha guardado sus datos con exito');
        return redirect()->route('index.vii_02_02');
    }

    public function destroy(Request $request, $id){

        $vii_elemento = viiElemento::findOrFail($id);
        $vii_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }

    public function index_03()
    {
        $vii_elemento = viiElemento03::get();
        $users = User::get();

        return view('modal-elementos.formularios vii.vii-03-02.index', compact('vii_elemento', 'users'));
    }

    public function store_03(Request $request)
    {

        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'fecha' => 'required',
            'descripcion' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            Session::flash('error', 'opps error al crear usuario, favor de revisar bien los datos ingresados');
            return redirect()->back();
        }
        try {

            //3/3- Si la validacion es correcta se crea el registro
            $vii_elemento = new viiElemento03;
            $vii_elemento->fecha = $request->get('fecha');
            $vii_elemento->servicio = $request->get('servicio');
            $vii_elemento->tipo = $request->get('tipo');
            $vii_elemento->descripcion = $request->get('descripcion');
            $vii_elemento->solicitante = $request->get('solicitante');
            $vii_elemento->id_reportado = $request->get('id_reportado');
            $vii_elemento->solicitud = $request->get('solicitud');
            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/vii_elemento_03';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $vii_elemento->pdf = $fileName;
            }
            $vii_elemento->save();

            // Redireccion  de suuces or fail dependiedno el caso
            Session::flash('success', 'Se ha guardado sus datos con exito');
            return redirect()->route('index.vii_03_02');
        } catch (\Exception $e) {
            Session::flash('error', 'opps error al crear usuario, favor de revisar bien los datos ingresados');
            return redirect()->back();
        }
    }

    public function update_03(Request $request, $id)
    {

            //3/3- Si la validacion es correcta se crea el registro
            $vii_elemento = viiElemento03::findOrFail($id);;
            $vii_elemento->fecha = $request->get('fecha');
            $vii_elemento->servicio = $request->get('servicio');
            $vii_elemento->tipo = $request->get('tipo');
            $vii_elemento->descripcion = $request->get('descripcion');
            $vii_elemento->solicitante = $request->get('solicitante');
            $vii_elemento->id_reportado = $request->get('id_reportado');
            $vii_elemento->solicitud = $request->get('solicitud');
            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/vii_elemento_03';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $vii_elemento->pdf = $fileName;
            }
            $vii_elemento->update();

            // Redireccion  de suuces or fail dependiedno el caso
            Session::flash('edit', 'Se ha guardado sus datos con exito');
            return redirect()->route('index.vii_03_02');

    }

    public function destroy_03(Request $request, $id){

        $vii_elemento = viiElemento03::findOrFail($id);
        $vii_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }

// PDF==========PDF===========PDF===============PDF===========PDF===========PDF================PDF
    public function pdf_sasisopa_vii()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vii.pdf_vii', compact('config'));
        return $pdf->stream('VII - Comunicacion participacion y consulta.pdf');
    }

    public function pdf_sasisopa_vii_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vii.pdf_vii', compact('config'));
        return $pdf->download('VII - Comunicacion participacion y consulta.pdf');
    }

    public function pdf_sasisopa_vii_01()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vii.pdf_vii_01', compact('config'));
        return $pdf->stream('VII-01 Procedimiento de comunicacion interna y externa.pdf');
    }

    public function pdf_sasisopa_vii_01_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vii.pdf_vii_01', compact('config'));
        return $pdf->download('VII-01 Procedimiento de comunicacion interna y externa.pdf');
    }

    public function pdf_sasisopa_vii_03()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vii.pdf_vii_03', compact('config'));
        return $pdf->stream('VII-03 Procedimiento de solicitud de informacion, quejas o sugerencias.pdf');
    }

    public function pdf_sasisopa_vii_03_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vii.pdf_vii_03', compact('config'));
        return $pdf->download('VII-03 Procedimiento de solicitud de informacion, quejas o sugerencias.pdf');
    }

    public function formato_difusion($id)
    {
        $config = DB::table('configuracion')->first();
        $difundir = Difundir::findOrFail($id);

        $pdf = \PDF::loadView('modal-elementos.formularios vii.formato_difusion', compact('config', 'difundir'));
        return $pdf->stream('VII-01-02 Formato de difusion.pdf');
    }
}
