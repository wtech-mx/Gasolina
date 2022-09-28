<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\xvElemento;
use App\Models\xvElementor02;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;

class xvElementoController extends Controller
{
    public function index(){
        $xv_elemento = xvElemento::get();
        $users = User::where('delete', '=', NULL)->get();

        return view('modal-elementos.formularios xv.xv-01-01.index', compact('xv_elemento', 'users'));
    }

    public function store(Request $request)
    {
        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'tipo_auditoria' => 'required',
            'objetivo' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            Session::flash('error', 'opps error al crear registro');
            return redirect()->back();
        }
        try {

            $xvi_elemento = new xvElemento;
            $xvi_elemento->title = 'Auditoria ' . $request->get('tipo_auditoria');
            $xvi_elemento->image = asset('assets/img/icons/checked.png');
            $xvi_elemento->color = '#cc2e5c';
            $xvi_elemento->tipo_auditoria = $request->get('tipo_auditoria');
            $xvi_elemento->alcance = $request->get('alcance');
            $xvi_elemento->contratista = $request->get('contratista');
            $xvi_elemento->objetivo = $request->get('objetivo');
            $xvi_elemento->start = $request->get('start');
            $xvi_elemento->fecha_inicio = $request->get('fecha_inicio');
            $xvi_elemento->end = $request->get('end');
            $xvi_elemento->estatus = $request->get('estatus');
            $xvi_elemento->check = $request->get('estatus');

            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/xv_elemento';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $xvi_elemento->pdf = $fileName;
            }
            $xvi_elemento->save();

            // Redireccion  de suuces or fail dependiedno el caso
            Session::flash('success', 'Se ha guardado sus datos con exito');
            return redirect()->route('index.xv_01_01');
        } catch (\Exception $e) {
            Session::flash('error', 'opps error al crear usuario');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $xvi_elemento = xvElemento::findOrFail($id);
        $xvi_elemento->title = 'Auditoria ' . $request->get('tipo_auditoria');
        $xvi_elemento->image = asset('assets/img/icons/checked.png');
        $xvi_elemento->color = '#cc2e5c';
        $xvi_elemento->tipo_auditoria = $request->get('tipo_auditoria');
        $xvi_elemento->alcance = $request->get('alcance');
        $xvi_elemento->contratista = $request->get('contratista');
        $xvi_elemento->objetivo = $request->get('objetivo');
        $xvi_elemento->start = $request->get('start');
        $xvi_elemento->fecha_inicio = $request->get('fecha_inicio');
        $xvi_elemento->end = $request->get('end');
        $xvi_elemento->estatus = $request->get('estatus');
        $xvi_elemento->check = $request->get('estatus');

        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/xv_elemento';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $xvi_elemento->pdf = $fileName;
        }
        $xvi_elemento->update();

        Session::flash('edit', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.xv_01_01');
    }

    public function destroy(Request $request, $id){

        $xvi_elemento = xvElemento::findOrFail($id);
        $xvi_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }

    public function index_02(){
        $xv_elemento = xvElementor02::get();
        $users = User::where('delete', '=', NULL)->get();

        return view('modal-elementos.formularios xv.xv-01-02.index', compact('xv_elemento', 'users'));
    }

    public function store_02(Request $request)
    {
        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'start' => 'required',
            'fecha_elaboracion' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            Session::flash('error', 'opps error al crear registro');
            return redirect()->back();
        }
        try {

            $xv_elemento = new xvElementor02;
            $xv_elemento->title = 'Auditoria Externa' . $request->get('tipo_auditoria');
            $xv_elemento->image = asset('assets/img/icons/checked.png');
            $xv_elemento->color = '#9acc2e';
            $xv_elemento->estatus = $request->get('estatus');
            $xv_elemento->check = $request->get('estatus');
            $xv_elemento->start = $request->get('start');
            $xv_elemento->end = $request->get('fecha_auditoria');
            $xv_elemento->fecha_elaboracion = $request->get('fecha_elaboracion');
            $xv_elemento->fecha_auditoria = $request->get('fecha_auditoria');
            $xv_elemento->contratista = $request->get('contratista');

            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/xv_elemento_02';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $xv_elemento->pdf = $fileName;
            }
            $xv_elemento->save();

            // Redireccion  de suuces or fail dependiedno el caso
            Session::flash('success', 'Se ha guardado sus datos con exito');
            return redirect()->route('index.xv_01_02');
        } catch (\Exception $e) {
            Session::flash('error', 'opps error al crear usuario');
            return redirect()->back();
        }
    }

    public function update_02(Request $request, $id)
    {
        $xv_elemento = xvElementor02::findOrFail($id);
        $xv_elemento->title = 'Auditoria Externa' . $request->get('tipo_auditoria');
        $xv_elemento->image = asset('assets/img/icons/checked.png');
        $xv_elemento->color = '#9acc2e';
        $xv_elemento->estatus = $request->get('estatus');
        $xv_elemento->check = $request->get('estatus');
        $xv_elemento->start = $request->get('start');
        $xv_elemento->end = $request->get('fecha_auditoria');
        $xv_elemento->fecha_elaboracion = $request->get('fecha_elaboracion');
        $xv_elemento->fecha_auditoria = $request->get('fecha_auditoria');
        $xv_elemento->contratista = $request->get('contratista');

        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/xv_elemento_02';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $xv_elemento->pdf = $fileName;
        }
        $xv_elemento->update();

        Session::flash('edit', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.xv_01_02');
    }

    public function destroy_02(Request $request, $id){

        $xv_elemento = xvElementor02::findOrFail($id);
        $xv_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }

    public function pdf_sasisopa_xv()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xv.pdf_xv', compact('config'));
        return $pdf->stream('XV Auditorias.pdf');
    }

    public function pdf_sasisopa_xv_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xv.pdf_xv', compact('config'));
        return $pdf->download('XV Auditorias.pdf');
    }

    public function pdf_sasisopa_xv_01()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xv.pdf_xv', compact('config'));
        return $pdf->stream('XV-01 Procedimiento de auditoria interna.pdf');
    }

    public function pdf_sasisopa_xv_01_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xv.pdf_xv', compact('config'));
        return $pdf->download('XV-01 Procedimiento de auditoria interna.pdf');
    }
}
