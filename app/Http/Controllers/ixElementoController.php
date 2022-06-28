<?php

namespace App\Http\Controllers;

use App\Models\ixElemento;
use Illuminate\Http\Request;

class ixElementoController extends Controller
{
    public function index()
    {
        $ix_elemento = ixElemento::get();

        return view('modal-elementos.formularios ix.index', compact('ix_elemento'));
    }

    public function store(Request $request)
    {

            $ix_elemento = new ixElemento;
            $ix_elemento->mejores_practicas = $request->get('mejores_practicas');
            $ix_elemento->marco_normativo = $request->get('marco_normativo');
            $ix_elemento->dependencia = $request->get('dependencia');
            $ix_elemento->fecha = $request->get('fecha');
            $ix_elemento->tipo = $request->get('tipo');
            $ix_elemento->reglas = $request->get('reglas');
            $ix_elemento->mecanismos = $request->get('mecanismos');
            $ix_elemento->configuracion = $request->get('configuracion');
            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/ix_elemento';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $ix_elemento->pdf = $fileName;
            }
            $ix_elemento->save();

            return redirect()->route('index.ix_01_01')
                ->with('success', 'ix-01-01 Creada Exitosamente!');
    }

    public function update(Request $request, $id)
    {
        $ix_elemento = ixElemento::findOrFail($id);
        $ix_elemento->mejores_practicas = $request->get('mejores_practicas');
        $ix_elemento->marco_normativo = $request->get('marco_normativo');
        $ix_elemento->dependencia = $request->get('dependencia');
        $ix_elemento->fecha = $request->get('fecha');
        $ix_elemento->tipo = $request->get('tipo');
        $ix_elemento->reglas = $request->get('reglas');
        $ix_elemento->mecanismos = $request->get('mecanismos');
        $ix_elemento->configuracion = $request->get('configuracion');
        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/ix_elemento';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $ix_elemento->pdf = $fileName;
        }
        $ix_elemento->update();


        Session::flash('success', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.ix_01_01');
    }

    public function pdf_sasisopa_ix()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios ix.pdf_ix', compact('config'));
        return $pdf->stream('IX - Procedimiento de Mejores prácticas y estándares.pdf');
    }

    public function pdf_sasisopa_ix_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios ix.pdf_ix', compact('config'));
        return $pdf->download('IX - Procedimiento de Mejores prácticas y estándares.pdf');
    }
}
