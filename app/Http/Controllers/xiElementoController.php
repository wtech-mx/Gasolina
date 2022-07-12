<?php

namespace App\Http\Controllers;

use App\Models\xiElemento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class xiElementoController extends Controller
{
    public function index()
    {
        $xi_elemento = xiElemento::get();

        return view('modal-elementos.formularios xi.index', compact('xi_elemento'));
    }

    public function store(Request $request)
    {
            $xi_elemento = new xiElemento;
            $xi_elemento->componente = $request->get('componente');
            $xi_elemento->id_det = $request->get('id_det');
            $xi_elemento->subcomponente = $request->get('subcomponente');
            $xi_elemento->etiqueta = $request->get('etiqueta');
            $xi_elemento->marca = $request->get('marca');
            $xi_elemento->modelo = $request->get('modelo');
            $xi_elemento->serie = $request->get('serie');
            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/xi_elemento';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $xi_elemento->pdf = $fileName;
            }
            $xi_elemento->save();

            return redirect()->route('index.xi_01_01')
                ->with('success', 'xi-01-01 Creada Exitosamente!');
    }

    public function update(Request $request, $id)
    {
        $xi_elemento = xiElemento::findOrFail($id);
        $xi_elemento->componente = $request->get('componente');
        $xi_elemento->id_det = $request->get('id_det');
        $xi_elemento->subcomponente = $request->get('subcomponente');
        $xi_elemento->etiqueta = $request->get('etiqueta');
        $xi_elemento->marca = $request->get('marca');
        $xi_elemento->modelo = $request->get('modelo');
        $xi_elemento->serie = $request->get('serie');
        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/xi_elemento';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $xi_elemento->pdf = $fileName;
        }
        $xi_elemento->update();


        Session::flash('success', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.xi_01_01');
    }

    public function pdf_sasisopa_xi()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xi.pdf_xi', compact('config'));
        return $pdf->stream('XI - Integridad mecánica y aseguramiento de la calidad.pdf');
    }

    public function pdf_sasisopa_xi_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xi.pdf_xi', compact('config'));
        return $pdf->download('XI - Integridad mecánica y aseguramiento de la calidad.pdf');
    }
}
