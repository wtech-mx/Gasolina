<?php

namespace App\Http\Controllers;

use App\Models\iiiElemento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class iiiElementoController extends Controller
{
    public function index()
    {
        $config = DB::table('configuracion')->first();
        $iiiElemento = iiiElemento::get();

        return view('modal-elementos.formularios iii.index', compact('config', 'iiiElemento'));
    }

    public function store(Request $request)
    {

        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'leyes' => 'required',
            'marco' => 'required',
            'descripcion' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        try {

            //3/3- Si la validacion es correcta se crea el registro

            $iiiElemento = new iiiElemento;
            $iiiElemento->leyes = $request->get('leyes');
            $iiiElemento->marco = $request->get('marco');
            $iiiElemento->descripcion = $request->get('descripcion');
            $iiiElemento->ambito = $request->get('ambito');
            $iiiElemento->mecanismo_cumplimiento = $request->get('mecanismo_cumplimiento');
            $iiiElemento->mecanismo_especifico = $request->get('mecanismo_especifico');
            $iiiElemento->periodicidad = $request->get('periodicidad');
            $iiiElemento->obligatorio = $request->get('obligatorio');
            $iiiElemento->aplica = $request->get('aplica');

            if($request->hasFile("pdf")){
                $file = $request->file('pdf');
                $path = public_path() . '/iii_elemento';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);

                $iiiElemento->pdf = $fileName;
            }

            $iiiElemento->save();

            // Redireccion  de suuces or fail dependiedno el caso

            return redirect()->route('ejecutar_iii_01_01.index')
                ->with('success', 'Requisito Legal Creado Exitosamente!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error en el registro!!');
        }
    }

    public function update(Request $request, $id)
    {
        $iiiElemento = iiiElemento::findOrFail($id);
        $iiiElemento->leyes = $request->get('leyes');
        $iiiElemento->marco = $request->get('marco');
        $iiiElemento->descripcion = $request->get('descripcion');
        $iiiElemento->ambito = $request->get('ambito');
        $iiiElemento->mecanismo_cumplimiento = $request->get('mecanismo_cumplimiento');
        $iiiElemento->mecanismo_especifico = $request->get('mecanismo_especifico');
        $iiiElemento->periodicidad = $request->get('periodicidad');
        $iiiElemento->obligatorio = $request->get('obligatorio');
        $iiiElemento->aplica = $request->get('aplica');

        if($request->hasFile("pdf")){
            $file = $request->file('pdf');
            $path = public_path() . '/iii_elemento';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);

            $iiiElemento->pdf = $fileName;
        }

        $iiiElemento->update();


        Session::flash('success', 'Se ha actualizado sus datos con exito');
        return redirect()->route('ejecutar_iii_01_01.index');
    }

    public function destroy(Request $request, $id)
    {
        $iiiElemento = iiiElemento::findOrFail($id);
        $iiiElemento->delete();

        return redirect()->route('ejecutar_iii_01_01.index')
        ->with('destroy', 'Requisito Legal Eliminado Exitosamente!');

    }

    public function pdf_sasisopa_iii_01()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios iii.pdf_iii_01', compact('config'));
        return $pdf->stream('III - Requisitos Legales.pdf');
    }

    public function pdf_sasisopa_iii_01_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios iii.pdf_iii_01', compact('config'));
        return $pdf->download('III - Requisitos Legales.pdf');
    }

    public function pdf_sasisopa()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios iii.pdf_iii', compact('config'));
        return $pdf->stream('III-01 Procedimiento de identificación y evaluación de requisitos legales.pdf');
    }

    public function pdf_sasisopa_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios iii.pdf_iii', compact('config'));
        return $pdf->download('III-01 Procedimiento de identificación y evaluación de requisitos legales.pdf');
    }
}
