<?php

namespace App\Http\Controllers;

use App\Models\viiiElemento01;
use Illuminate\Http\Request;

class viiiElementoController extends Controller
{
    public function index()
    {
        $viii_elemento = viiiElemento01::get();

        return view('modal-elementos.formularios viii.viii-01-01.index', compact('viii_elemento'));
    }

    public function store(Request $request)
    {

            $viii_elemento = new viiiElemento01;
            $viii_elemento->tipo = $request->get('tipo');
            $viii_elemento->reglas = $request->get('reglas');
            $viii_elemento->fecha = $request->get('fecha');
            $viii_elemento->aprobacion = $request->get('aprobacion');
            $viii_elemento->notificacion = $request->get('notificacion');
            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/viii_elemento';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $viii_elemento->pdf = $fileName;
            }
            $viii_elemento->save();

            return redirect()->route('index.viii_01_01')
                ->with('success', 'Viii-01-01 Creada Exitosamente!');
    }

    public function update(Request $request, $id)
    {
        $viii_elemento = viiiElemento01::findOrFail($id);
        $viii_elemento->tipo = $request->get('tipo');
        $viii_elemento->reglas = $request->get('reglas');
        $viii_elemento->fecha = $request->get('fecha');
        $viii_elemento->aprobacion = $request->get('aprobacion');
        $viii_elemento->notificacion = $request->get('notificacion');
        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/viii_elemento';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $viii_elemento->pdf = $fileName;
        }
        $viii_elemento->update();


        Session::flash('success', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.viii_01_01');
    }

    public function pdf_sasisopa_viii()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vii.pdf_vii', compact('config'));
        return $pdf->stream('VII - Comunicacion participacion y consulta.pdf');
    }

    public function pdf_sasisopa_viii_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vii.pdf_vii', compact('config'));
        return $pdf->download('VII - Comunicacion participacion y consulta.pdf');
    }

    public function pdf_sasisopa_viii_01()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vii.pdf_vii', compact('config'));
        return $pdf->stream('VII - Comunicacion participacion y consulta.pdf');
    }

    public function pdf_sasisopa_viii_01_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vii.pdf_vii', compact('config'));
        return $pdf->download('VII - Comunicacion participacion y consulta.pdf');
    }
}
