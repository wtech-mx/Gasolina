<?php

namespace App\Http\Controllers;

use App\Models\Difundir;
use App\Models\MedioDifundir;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class DifundirController extends Controller
{
    public function index()
    {
            $users = User::where('delete', '=', NULL)->get();

            $difundirs = Difundir::get();

            return view('difundir.index', compact('users', 'difundirs'));
    }

    public function create()
    {
        $user = DB::table('users')
            ->where('delete', '=', NULL)->get();

        return view('difundir.create', compact('user'));
    }

    public function store(Request $request)
    {

        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required',
            'tipo' => 'required',
            'inicial' => 'required',
            'final' => 'required',
            'comunicacion' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            Session::flash('error', 'opps error al crear usuario');
            return redirect()->back();
        }
        try {

        //3/3- Si la validacion es correcta se crea el registro
        $current = Carbon::now()->toDateString();
        $difundir = new Difundir;
        $difundir->id_user = $request->get('id_user');
        $difundir->id_elemento = $request->get('id_elemento');
        $difundir->fecha = $current;
        $difundir->descripcion = $request->get('descripcion');
        $difundir->tipo = $request->get('tipo');
        $difundir->inicial = $request->get('inicial');
        $difundir->final = $request->get('final');

        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/pdf_difundir';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $difundir->pdf = $fileName;
        }
        $difundir->save();

        $comunicacion = $request->get('comunicacion');
        $descripcion2 = $request->get('descripcion2');

        for ($count = 0; $count < count($comunicacion); $count++) {
            $data = array(
                'comunicacion' => $comunicacion[$count],
                'descripcion' => $descripcion2[$count],
                'id_difundir' => $difundir->id,
            );
            $insert_data[] = $data;
        }

        MedioDifundir::insert($insert_data);

        // Redireccion  de suuces or fail dependiedno el caso
            Session::flash('success', 'Se ha guardado sus datos con exito');
            return redirect()->back();
        } catch (\Exception $e) {
            Session::flash('error', 'opps error al crear usuario');
            return redirect()->back();
        }

    }

    public function update(Request $request, $id)
    {

        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        try {

        $difundir = Difundir::findOrFail($id);
        $difundir->id_user = $request->get('id_user');
        $difundir->descripcion = $request->get('descripcion');
        $difundir->id_elemento = $request->get('id_elemento');
        $difundir->tipo = $request->get('tipo');
        $difundir->inicial = $request->get('inicial');
        $difundir->final = $request->get('final');
        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/pdf_difundir';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $difundir->pdf = $fileName;
        }
        $difundir->update();

        // $comunicacion = $request->get('comunicacion');
        // $descripcion2 = $request->get('descripcion2');

        // for ($count = 0; $count < count($comunicacion); $count++) {
        //     $data = array(
        //         'comunicacion' => $comunicacion[$count],
        //         'descripcion' => $descripcion2[$count],
        //     );
        //     $insert_data[] = $data;
        // }

        // MedioDifundir::update($insert_data);

        // Redireccion  de suuces or fail dependiedno el caso

        Session::flash('edit', 'Se ha guardado sus datos con exito');
        return redirect()->back();
        } catch (\Exception $e) {
            Session::flash('error', 'opps error al actualizar');
            return redirect()->back();
        }

    }

    public function destroy(Request $request, $id){

        $medios_difundir = MedioDifundir::where('id_difundir', '=', $id);
        $medios_difundir->delete();

        $difundir = Difundir::findOrFail($id);
        $difundir->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }


}
