<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\xviElemento;
use App\Models\xviElemento02;
use App\Models\xviElementoVinculacion;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;

class xviElementoController extends Controller
{
    public function index()
    {
        $xvi_elemento = xviElemento::get();
        $xvi_elemento_vinculacion = xviElementoVinculacion::get();
        $users = User::get();

        $config = DB::table('configuracion')->first();

        return view('modal-elementos.formularios xvi.xvi-01-01.index', compact('xvi_elemento', 'users', 'xvi_elemento_vinculacion', 'config'));
    }

    public function store(Request $request)
    {
        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'area' => 'required',
            'daño_accidente' => 'required',
            'tipo_personal' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            Session::flash('error', 'opps error al crear notificacion');
            return redirect()->back();
        }
        try {

            $xvi_elemento = new xviElemento;
            $xvi_elemento->fecha = $request->get('fecha');
            $xvi_elemento->hora = $request->get('hora');
            $xvi_elemento->area = $request->get('area');
            $xvi_elemento->daño_accidente = $request->get('daño_accidente');
            $xvi_elemento->tipo_personal = $request->get('tipo_personal');
            $xvi_elemento->usuario = $request->get('usuario');
            $xvi_elemento->descripcion = $request->get('descripcion');

            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/xvi_elemento';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $xvi_elemento->pdf = $fileName;
            }
            $xvi_elemento->save();

            $tipo_vinculacion = $request->get('tipo_vinculacion');

            $nombre = $request->get('nombre');

            for ($count = 0; $count < count($tipo_vinculacion); $count++) {
                $data = array(
                    'tipo_vinculacion' => $tipo_vinculacion[$count],
                    'nombre' => $nombre[$count],
                    'id_difundir' => $xvi_elemento->id,
                );
                $insert_data[] = $data;
            }
            xviElementoVinculacion::insert($insert_data);

            // Redireccion  de suuces or fail dependiedno el caso
            Session::flash('success', 'Se ha guardado sus datos con exito');
            return redirect()->route('index.xvi_01_01');
        } catch (\Exception $e) {
            Session::flash('error', 'opps error al crear usuario');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $xvi_elemento = xviElemento::findOrFail($id);
        $xvi_elemento->fecha = $request->get('fecha');
        $xvi_elemento->hora = $request->get('hora');
        $xvi_elemento->area = $request->get('area');
        $xvi_elemento->daño_accidente = $request->get('daño_accidente');
        $xvi_elemento->tipo_personal = $request->get('tipo_personal');
        $xvi_elemento->usuario = $request->get('usuario');
        $xvi_elemento->descripcion = $request->get('descripcion');

        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/xvi_elemento';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $xvi_elemento->pdf = $fileName;
        }
        $xvi_elemento->update();

        Session::flash('edit', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.xvi_01_01');
    }

    public function destroy(Request $request, $id){

        $xvi_elemento_vinculacion = xviElementoVinculacion::where('id_xvi', '=', $id);
        $xvi_elemento_vinculacion->delete();

        $xvi_elemento = xviElemento::findOrFail($id);
        $xvi_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }

    public function index_02()
    {
        $xvi_elemento = xviElemento02::get();
        $users = User::get();

        $config = DB::table('configuracion')->first();

        return view('modal-elementos.formularios xvi.xvi-01-02.index', compact('xvi_elemento', 'users', 'config'));
    }

    public function store_02(Request $request)
    {
        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'situacion_observada' => 'required',
            'tipo' => 'required',
            'lugar' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            Session::flash('error', 'opps error al crear notificacion');
            return redirect()->back();
        }
        try {

            $xvi_elemento = new xviElemento02;
            $xvi_elemento->id_usuarios = auth()->user()->id;
            $xvi_elemento->situacion_observada = $request->get('situacion_observada');
            $xvi_elemento->tipo = $request->get('tipo');
            $xvi_elemento->lugar = $request->get('lugar');
            $xvi_elemento->descripcion = $request->get('descripcion');
            $xvi_elemento->usuario = $request->get('usuario');
            $xvi_elemento->fecha = $request->get('fecha');

            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/xvi_elemento';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $xvi_elemento->pdf = $fileName;
            }
            $xvi_elemento->save();

            // Redireccion  de suuces or fail dependiedno el caso
            Session::flash('success', 'Se ha guardado sus datos con exito');
            return redirect()->route('index.xvi_01_02');
        } catch (\Exception $e) {
            Session::flash('error', 'opps error al crear usuario');
            return redirect()->back();
        }
    }

    public function update_02(Request $request, $id)
    {
        $xvi_elemento = xviElemento02::findOrFail($id);
        $xvi_elemento->situacion_observada = $request->get('situacion_observada');
        $xvi_elemento->tipo = $request->get('tipo');
        $xvi_elemento->lugar = $request->get('lugar');
        $xvi_elemento->descripcion = $request->get('descripcion');
        $xvi_elemento->usuario = $request->get('usuario');
        $xvi_elemento->fecha = $request->get('fecha');

        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/xvi_elemento';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $xvi_elemento->pdf = $fileName;
        }
        $xvi_elemento->update();

        Session::flash('edit', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.xvi_01_02');
    }

    public function destroy_02(Request $request, $id){

        $xvi_elemento = xviElemento02::findOrFail($id);
        $xvi_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }
}
