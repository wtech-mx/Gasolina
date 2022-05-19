<?php

namespace App\Http\Controllers;

use App\Models\Difundir;
use App\Models\MedioDifundir;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class DifundirController extends Controller
{
    public function index()
    {
            $empresa = User::
            where('empresa', '=', 1)
            ->get();

            $difundirs = Difundir::get();

            return view('difundir.index', compact('empresa', 'difundirs'));
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
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        try {

        //3/3- Si la validacion es correcta se crea el registro
        $current = Carbon::now()->toDateString();
        $difundir = new Difundir;
        $difundir->id_user = auth()->user()->id;
        $difundir->id_elemento = $request->get('id_elemento');
        $difundir->fecha = $current;
        $difundir->descripcion = $request->get('descripcion');
        $difundir->tipo = $request->get('tipo');
        $difundir->inicial = $request->get('inicial');
        $difundir->final = $request->get('final');
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

            return redirect()->route('difundir_i_01_01.index')
                ->with('success', 'Difucion Creada Exitosamente!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error en el registro!!');
        }

    }

    public function update(Request $request, $id)
    {

        //1/3 - error de validacion en la sweetalert *OBLIGATORIO*
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required',
            'tipo' => 'required',
            'inicial' => 'required',
            'final' => 'required',
        ]);

        //2/3- Envia Mensaje de validacion en la Sweetalert
        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        try {

        //3/3- Si la validacion es correcta se crea el registro
        $current = Carbon::now()->toDateString();

        $difundir = Difundir::findOrFail($id);
        $difundir->id_user = auth()->user()->id;
        $difundir->id_elemento = $request->get('id_elemento');
        $difundir->fecha = $current;
        $difundir->descripcion = $request->get('descripcion');
        $difundir->tipo = $request->get('tipo');
        $difundir->inicial = $request->get('inicial');
        $difundir->final = $request->get('final');
        $difundir->update();

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

        MedioDifundir::update($insert_data);

        // Redireccion  de suuces or fail dependiedno el caso

            return redirect()->route('difundir_i_01_01.index')
                ->with('success', 'Difucion Creada Exitosamente!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error en el registro!!');
        }

    }

    public function create()
    {
        $user = DB::table('users')
            ->get();

        return view('difundir.create', compact('user'));
    }
}
