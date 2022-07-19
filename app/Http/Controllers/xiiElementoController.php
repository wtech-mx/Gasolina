<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\xiiElemento;
use App\Models\xiiElementoUsuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class xiiElementoController extends Controller
{
    public function index()
    {
        $xii_elemento = xiiElemento::get();
        $users = User::get();
        $xii_elemento_user = xiiElementoUsuarios::get();

        return view('modal-elementos.formularios xii.index', compact('xii_elemento', 'users', 'xii_elemento_user'));
    }

    public function store(Request $request)
    {
            $xii_elemento = new xiiElemento;
            $xii_elemento->fecha_alta = $request->get('fecha_alta');
            $xii_elemento->nombre = $request->get('nombre');
            $xii_elemento->tipo = $request->get('tipo');
            $xii_elemento->estatus = $request->get('estatus');
            $xii_elemento->razon_social = $request->get('razon_social');
            $xii_elemento->email = $request->get('email');
            $xii_elemento->telefono = $request->get('telefono');
            $xii_elemento->direccion = $request->get('direccion');
            $xii_elemento->id_responsable = $request->get('id_responsable');
            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/xii_elemento';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $xii_elemento->pdf = $fileName;
            }
            $xii_elemento->save();


            $id_usuarios = $request->id_usuarios;

            for ($count = 0; $count < count($id_usuarios); $count++) {
                $data = array(
                    'id_usuarios' => $id_usuarios[$count],
                    'id_xii' => $xii_elemento->id,
                );
                $insert_data[] = $data;
            }

            xiiElementoUsuarios::insert($insert_data);

            Session::flash('success', 'Se ha actualizado sus datos con exito');
            return redirect()->route('index.xii_01_01');
    }

    public function update(Request $request, $id)
    {
        $xii_elemento = xiiElemento::findOrFail($id);
        $xii_elemento->fecha_alta = $request->get('fecha_alta');
        $xii_elemento->nombre = $request->get('nombre');
        $xii_elemento->tipo = $request->get('tipo');
        $xii_elemento->estatus = $request->get('estatus');
        $xii_elemento->razon_social = $request->get('razon_social');
        $xii_elemento->email = $request->get('email');
        $xii_elemento->telefono = $request->get('telefono');
        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/xii_elemento';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $xii_elemento->pdf = $fileName;
        }
        $xii_elemento->update();


        Session::flash('edit', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.xii_01_01');
    }

    public function destroy(Request $request, $id){

        $xii_elemento_usuarios = xiiElementoUsuarios::where('id_xii', '=', $id);
        $xii_elemento_usuarios->delete();

        $xii_elemento = xiiElemento::findOrFail($id);
        $xii_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }

    public function pdf_sasisopa_xii()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xii.pdf_xii', compact('config'));
        return $pdf->stream('XII - Seguridad a contratistas.pdf');
    }

    public function pdf_sasisopa_xii_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xii.pdf_xii', compact('config'));
        return $pdf->download('XII - Seguridad a contratistas.pdf');
    }

    public function pdf_sasisopa_xii_01()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xii.pdf_xii_01', compact('config'));
        return $pdf->stream('XII-01 Procedimiento de seguridad de contratistas.pdf');
    }

    public function pdf_sasisopa_xii_01_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios xii.pdf_xii_01', compact('config'));
        return $pdf->download('XII-01 Procedimiento de seguridad de contratistas.pdf');
    }
}
