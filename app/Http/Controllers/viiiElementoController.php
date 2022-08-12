<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use App\Models\User;
use App\Models\viiiElemento01;
use App\Models\viiiElemento02;
use App\Models\viiiElemento03;
use App\Models\viiiElemento04;
use App\Models\viiiElemento05;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
            $viii_elemento->revision = $request->get('revision');
            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/viii_elemento';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $viii_elemento->pdf = $fileName;
            }
            $viii_elemento->save();

            Session::flash('success', 'Se ha actualizado sus datos con exito');
            return redirect()->route('index.viii_01_01');
    }

    public function update(Request $request, $id)
    {
        $viii_elemento = viiiElemento01::findOrFail($id);
        $viii_elemento->tipo = $request->get('tipo');
        $viii_elemento->reglas = $request->get('reglas');
        $viii_elemento->fecha = $request->get('fecha');
        $viii_elemento->aprobacion = $request->get('aprobacion');
        $viii_elemento->notificacion = $request->get('notificacion');
        $viii_elemento->revision = $request->get('revision');
        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/viii_elemento';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $viii_elemento->pdf = $fileName;
        }
        $viii_elemento->update();

        Session::flash('edit', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.viii_01_01');
    }

    public function destroy(Request $request, $id){

        $viii_elemento = viiiElemento01::findOrFail($id);
        $viii_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }

    public function pdf_sasisopa_viii()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios viii.pdf_viii', compact('config'));
        return $pdf->stream('VIII - Control de documentos y registros.pdf');
    }

    public function pdf_sasisopa_viii_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios viii.pdf_viii', compact('config'));
        return $pdf->download('VIII - Control de documentos y registros.pdf');
    }

    public function pdf_sasisopa_viii_01()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios viii.pdf_viii_01', compact('config'));
        return $pdf->stream('VIII-01 Procedimiento de control de documentos.pdf');
    }

    public function pdf_sasisopa_viii_01_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios viii.pdf_viii_01', compact('config'));
        return $pdf->download('VIII-01 Procedimiento de control de documentos.pdf');
    }

    // ==========Elemento viii 02===============Elemento viii 02===========Elemento viii 02============Elemento viii 02================Elemento viii 02=========Elemento viii 02

        public function index_02()
        {
            $viii_elemento_02 = viiiElemento02::get();

            return view('modal-elementos.formularios viii.viii-01-02.index', compact('viii_elemento_02'));
        }

        public function store_02(Request $request)
        {

                $viii_elemento = new viiiElemento02;
                $viii_elemento->nombre = $request->get('nombre');
                $viii_elemento->estatus = $request->get('estatus');
                $viii_elemento->fecha = $request->get('fecha');
                $viii_elemento->modificacion = $request->get('modificacion');
                if ($request->hasFile("pdf")) {
                    $file = $request->file('pdf');
                    $path = public_path() . '/viii_elemento_02';
                    $fileName = uniqid() . $file->getClientOriginalName();

                    $file->move($path, $fileName);
                    $viii_elemento->pdf = $fileName;
                }

                $viii_elemento->save();

                Session::flash('success', 'Se ha actualizado sus datos con exito');
                return redirect()->route('index.viii_01_02');
        }

        public function update_02(Request $request, $id)
        {
            $viii_elemento = viiiElemento02::findOrFail($id);
            $viii_elemento->nombre = $request->get('nombre');
            $viii_elemento->estatus = $request->get('estatus');
            $viii_elemento->fecha = $request->get('fecha');
            $viii_elemento->modificacion = $request->get('modificacion');
            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/viii_elemento_02';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $viii_elemento->pdf = $fileName;
            }

            $viii_elemento->update();


            Session::flash('edit', 'Se ha actualizado sus datos con exito');
            return redirect()->route('index.viii_01_02');
        }

        public function destroy_02(Request $request, $id){

            $viii_elemento = viiiElemento02::findOrFail($id);
            $viii_elemento->delete();

            Session::flash('delete', 'Se Elimino su registro con exito');
            return redirect()->back();
        }

    // ==========Elemento viii 03===============Elemento viii 03===========Elemento viii 03============Elemento viii 03================Elemento viii 03=========Elemento viii 03

    public function index_03()
    {
        $viii_elemento = viiiElemento03::get();

        return view('modal-elementos.formularios viii.viii-01-03.index', compact('viii_elemento'));
    }

    public function store_03(Request $request)
    {

            $viii_elemento = new viiiElemento03;
            $viii_elemento->autorizacion = $request->get('autorizacion');
            $viii_elemento->condicionante = $request->get('condicionante');
            $viii_elemento->etapa = $request->get('etapa');
            $viii_elemento->autoridad = $request->get('autoridad');
            $viii_elemento->obtencion = $request->get('obtencion');
            $viii_elemento->renovacion = $request->get('renovacion');
            $viii_elemento->cumplimiento = $request->get('cumplimiento');
            $viii_elemento->periodicidad = $request->get('periodicidad');
            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/viii_elemento_03';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $viii_elemento->pdf = $fileName;
            }

            $viii_elemento->save();

            $viii_elemento->tiempo = $request->get('tiempo');
            $viii_elemento->start = $request->get('start');


            $config = DB::table('configuracion')->first();

            if($viii_elemento->tiempo == 'tri'){
                for($i=0; $i <= 18; $i = $i + 3){
                    $calendario = new Calendario;
                    $calendario->id_user = auth()->user()->id;
                    $calendario->title = $viii_elemento->autorizacion;
                    $date = date("Y-m-d", strtotime($request->get('start')));
                    $calendario->start = date("Y-m-d", strtotime($date."+ ".$i." month"));
                    $calendario->end = date("Y-m-d", strtotime($calendario->start."+ 1 days"));
                    $calendario->color = $config->color_temporalidad;
                    $calendario->check = 0;
                    $calendario->estatus = 0;
                    $calendario->image = 'http://gasolina.test/assets/img/icons/checked.png';
                    $calendario->save();
                }
            }elseif($viii_elemento->tiempo == 'sem'){
                for($i=0; $i <= 24; $i = $i + 6){
                    $calendario = new Calendario;
                    $calendario->id_user = auth()->user()->id;
                    $calendario->title = $viii_elemento->autorizacion;
                    $date = date("Y-m-d", strtotime($request->get('start')));
                    $calendario->start = date("Y-m-d", strtotime($date."+ ".$i." month"));
                    $calendario->end = date("Y-m-d", strtotime($calendario->start."+ 1 days"));
                    $calendario->color = $config->color_temporalidad;
                    $calendario->check = 0;
                    $calendario->estatus = 0;
                    $calendario->image = 'http://gasolina.test/assets/img/icons/checked.png';
                    $calendario->save();
                }
            }elseif($viii_elemento->tiempo == 'uno'){
                for($i=0; $i<=3; $i++){
                    $calendario = new Calendario;
                    $calendario->id_user = auth()->user()->id;
                    $calendario->title = $viii_elemento->autorizacion;
                    $date = date("Y-m-d", strtotime($request->get('start')));
                    $calendario->start = date("Y-m-d", strtotime($date."+ ".$i." year"));
                    $calendario->end = date("Y-m-d", strtotime($calendario->start."+ 1 days"));
                    $calendario->color = $config->color_temporalidad;
                    $calendario->check = 0;
                    $calendario->estatus = 0;
                    $calendario->image = 'http://gasolina.test/assets/img/icons/checked.png';
                    $calendario->save();
                }
            }elseif($viii_elemento->tiempo == 'cinco'){
                for($i=0; $i<=20; $i = $i + 5){
                    $calendario = new Calendario;
                    $calendario->id_user = auth()->user()->id;
                    $calendario->title = $viii_elemento->autorizacion;
                    $date = date("Y-m-d", strtotime($request->get('start')));
                    $calendario->start = date("Y-m-d", strtotime($date."+ ".$i." year"));
                    $calendario->end = date("Y-m-d", strtotime($calendario->start."+ 1 days"));
                    $calendario->color = $config->color_temporalidad;
                    $calendario->check = 0;
                    $calendario->estatus = 0;
                    $calendario->image = 'http://gasolina.test/assets/img/icons/checked.png';
                    $calendario->save();
                }
            }elseif($viii_elemento->tiempo == 'diez'){
                for($i=0; $i<=30; $i = $i + 10){
                    $calendario = new Calendario;
                    $calendario->id_user = auth()->user()->id;
                    $calendario->title = $viii_elemento->autorizacion;
                    $date = date("Y-m-d", strtotime($request->get('start')));
                    $calendario->start = date("Y-m-d", strtotime($date."+ ".$i." year"));
                    $calendario->end = date("Y-m-d", strtotime($calendario->start."+ 1 days"));
                    $calendario->color = $config->color_temporalidad;
                    $calendario->check = 0;
                    $calendario->estatus = 0;
                    $calendario->image = 'http://gasolina.test/assets/img/icons/checked.png';
                    $calendario->save();
                }
            }elseif($viii_elemento->tiempo == 'treinta'){
                for($i=0; $i<=90; $i = $i + 30){
                    $calendario = new Calendario;
                    $calendario->id_user = auth()->user()->id;
                    $calendario->title = $viii_elemento->autorizacion;
                    $date = date("Y-m-d", strtotime($request->get('start')));
                    $calendario->start = date("Y-m-d", strtotime($date."+ ".$i." year"));
                    $calendario->end = date("Y-m-d", strtotime($calendario->start."+ 1 days"));
                    $calendario->color = $config->color_temporalidad;
                    $calendario->check = 0;
                    $calendario->estatus = 0;
                    $calendario->image = 'http://gasolina.test/assets/img/icons/checked.png';
                    $calendario->save();
                }
            }

            Session::flash('success', 'Se ha actualizado sus datos con exito');
            return redirect()->route('index.viii_01_03');
    }

    public function update_03(Request $request, $id)
    {
        $viii_elemento = viiiElemento03::findOrFail($id);
        $viii_elemento->autorizacion = $request->get('autorizacion');
        $viii_elemento->condicionante = $request->get('condicionante');
        $viii_elemento->etapa = $request->get('etapa');
        $viii_elemento->autoridad = $request->get('autoridad');
        $viii_elemento->obtencion = $request->get('obtencion');
        $viii_elemento->renovacion = $request->get('renovacion');
        $viii_elemento->cumplimiento = $request->get('cumplimiento');
        $viii_elemento->periodicidad = $request->get('periodicidad');
        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/viii_elemento_03';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $viii_elemento->pdf = $fileName;
        }
        $viii_elemento->update();

        $config = DB::table('configuracion')->first();

        switch($viii_elemento){
            case($request->get('tiempo') == 'tri'):
                for($i=0; $i <= 18; $i = $i + 3){
                    $calendario = new Calendario;
                    $calendario->id_user = auth()->user()->id;
                    $calendario->title = $viii_elemento->autorizacion;
                    $calendario->elemento = 'viii-01-03';
                    $date = date("Y-m-d", strtotime($request->get('start')));
                    $calendario->start = date("Y-m-d", strtotime($date."+ ".$i." month"));
                    $calendario->end = date("Y-m-d", strtotime($calendario->start."+ 1 days"));
                    $calendario->color = $config->color_temporalidad;
                    $calendario->check = 0;
                    $calendario->estatus = 0;
                    $calendario->image = 'http://gasolina.test/assets/img/icons/checked.png';

                    $calendario->save();
                }
            break;
            case($request->get('tiempo') == 'sem'):
                for($i=0; $i <= 24; $i = $i + 6){
                    $calendario = new Calendario;
                    $calendario->id_user = auth()->user()->id;
                    $calendario->title = $viii_elemento->autorizacion;
                    $calendario->elemento = 'viii-01-03';
                    $date = date("Y-m-d", strtotime($request->get('start')));
                    $calendario->start = date("Y-m-d", strtotime($date."+ ".$i." month"));
                    $calendario->end = $calendario->start;
                    $calendario->color = $config->color_temporalidad;
                    $calendario->check = 0;
                    $calendario->estatus = 0;
                    $calendario->image = 'http://gasolina.test/assets/img/icons/checked.png';
                    $calendario->save();
                }
            break;
            case($request->get('tiempo') == 'uno'):
                for($i=0; $i<=3; $i++){
                    $calendario = new Calendario;
                    $calendario->id_user = auth()->user()->id;
                    $calendario->title = $viii_elemento->autorizacion;
                    $calendario->elemento = 'viii-01-03';
                    $date = date("Y-m-d", strtotime($request->get('start')));
                    $calendario->start = date("Y-m-d", strtotime($date."+ ".$i." year"));
                    $calendario->end = $calendario->start;
                    $calendario->color = $config->color_temporalidad;
                    $calendario->check = 0;
                    $calendario->estatus = 0;
                    $calendario->image = 'http://gasolina.test/assets/img/icons/checked.png';
                    $calendario->save();
                }
            break;
            case($request->get('tiempo') == 'cinco'):
                for($i=0; $i<=20; $i = $i + 5){
                    $calendario = new Calendario;
                    $calendario->id_user = auth()->user()->id;
                    $calendario->title = $viii_elemento->autorizacion;
                    $calendario->elemento = 'viii-01-03';
                    $date = date("Y-m-d", strtotime($request->get('start')));
                    $calendario->start = date("Y-m-d", strtotime($date."+ ".$i." year"));
                    $calendario->end = $calendario->start;
                    $calendario->color = $config->color_temporalidad;
                    $calendario->check = 0;
                    $calendario->estatus = 0;
                    $calendario->image = 'http://gasolina.test/assets/img/icons/checked.png';
                    $calendario->save();
                }
            break;
            case($request->get('tiempo') == 'diez'):
                for($i=0; $i<=30; $i = $i + 10){
                    $calendario = new Calendario;
                    $calendario->id_user = auth()->user()->id;
                    $calendario->title = $viii_elemento->autorizacion;
                    $calendario->elemento = 'viii-01-03';
                    $date = date("Y-m-d", strtotime($request->get('start')));
                    $calendario->start = date("Y-m-d", strtotime($date."+ ".$i." year"));
                    $calendario->end = $calendario->start;
                    $calendario->color = $config->color_temporalidad;
                    $calendario->check = 0;
                    $calendario->estatus = 0;
                    $calendario->image = 'http://gasolina.test/assets/img/icons/checked.png';
                    $calendario->save();
                }
            break;
            case($request->get('tiempo') == 'treinta'):
                for($i=0; $i<=90; $i = $i + 30){
                    $calendario = new Calendario;
                    $calendario->id_user = auth()->user()->id;
                    $calendario->title = $viii_elemento->autorizacion;
                    $calendario->elemento = 'viii-01-03';
                    $date = date("Y-m-d", strtotime($request->get('start')));
                    $calendario->start = date("Y-m-d", strtotime($date."+ ".$i." year"));
                    $calendario->end = $calendario->start;
                    $calendario->color = $config->color_temporalidad;
                    $calendario->check = 0;
                    $calendario->estatus = 0;
                    $calendario->image = 'http://gasolina.test/assets/img/icons/checked.png';
                    $calendario->save();
                }
            break;
        }


        Session::flash('edit', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.viii_01_03');
    }

    public function destroy_03(Request $request, $id){

        $viii_elemento = viiiElemento03::findOrFail($id);
        $viii_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }

    // ==========Elemento viii 04===============Elemento viii 04===========Elemento viii 04============Elemento viii 04================Elemento viii 04=========Elemento viii 04

    public function index_04()
    {
        $viii_elemento = viiiElemento04::get();

        return view('modal-elementos.formularios viii.viii-01-04.index', compact('viii_elemento'));
    }

    public function store_04(Request $request)
    {

            $viii_elemento = new viiiElemento04;
            $viii_elemento->nombre = $request->get('nombre');
            $viii_elemento->area = $request->get('area');
            $viii_elemento->descripcion = $request->get('descripcion');
            $viii_elemento->revision = $request->get('revision');
            $viii_elemento->fecha = $request->get('fecha');
            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/viii_elemento_04';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $viii_elemento->pdf = $fileName;
            }

            $viii_elemento->save();

            Session::flash('success', 'Se ha actualizado sus datos con exito');
            return redirect()->route('index.viii_01_04');
    }

    public function update_04(Request $request, $id)
    {
        $viii_elemento = viiiElemento04::findOrFail($id);
        $viii_elemento->nombre = $request->get('nombre');
        $viii_elemento->area = $request->get('area');
        $viii_elemento->descripcion = $request->get('descripcion');
        $viii_elemento->revision = $request->get('revision');
        $viii_elemento->fecha = $request->get('fecha');
        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/viii_elemento_04';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $viii_elemento->pdf = $fileName;
        }
        $viii_elemento->update();


        Session::flash('edit', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.viii_01_04');
    }

    public function destroy_04(Request $request, $id){

        $viii_elemento = viiiElemento04::findOrFail($id);
        $viii_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }

    // ==========Elemento viii 05===============Elemento viii 05===========Elemento viii 05============Elemento viii 05================Elemento viii 05=========Elemento viii 05

    public function index_05()
    {
        $viii_elemento = viiiElemento05::get();
        $users = User::get();

        return view('modal-elementos.formularios viii.viii-01-05.index', compact('viii_elemento', 'users'));
    }

    public function store_05(Request $request)
    {

            $viii_elemento = new viiiElemento05;
            $viii_elemento->tipo = $request->get('tipo');
            $viii_elemento->id_responsable = $request->get('id_responsable');
            $viii_elemento->fecha_notificacion = $request->get('fecha_notificacion');
            $viii_elemento->fecha_aprovacion = $request->get('fecha_aprovacion');
            $viii_elemento->reglas = $request->get('reglas');
            $viii_elemento->personal_objetivo = $request->get('personal_objetivo');
            if ($request->hasFile("pdf")) {
                $file = $request->file('pdf');
                $path = public_path() . '/viii_elemento_05';
                $fileName = uniqid() . $file->getClientOriginalName();

                $file->move($path, $fileName);
                $viii_elemento->pdf = $fileName;
            }

            $viii_elemento->save();

            return redirect()->route('index.viii_01_05')
                ->with('success', 'Viii-01-05 Creada Exitosamente!');
    }

    public function update_05(Request $request, $id)
    {
        $viii_elemento = viiiElemento05::findOrFail($id);
        $viii_elemento->tipo = $request->get('tipo');
        $viii_elemento->id_responsable = $request->get('id_responsable');
        $viii_elemento->fecha_notificacion = $request->get('fecha_notificacion');
        $viii_elemento->fecha_aprovacion = $request->get('fecha_aprovacion');
        $viii_elemento->reglas = $request->get('reglas');
        $viii_elemento->personal_objetivo = $request->get('personal_objetivo');
        if ($request->hasFile("pdf")) {
            $file = $request->file('pdf');
            $path = public_path() . '/viii_elemento_05';
            $fileName = uniqid() . $file->getClientOriginalName();

            $file->move($path, $fileName);
            $viii_elemento->pdf = $fileName;
        }
        $viii_elemento->update();


        Session::flash('success', 'Se ha actualizado sus datos con exito');
        return redirect()->route('index.viii_01_05');
    }

    public function destroy_05(Request $request, $id){

        $viii_elemento = viiiElemento05::findOrFail($id);
        $viii_elemento->delete();

        Session::flash('delete', 'Se Elimino su registro con exito');
        return redirect()->back();
    }
}
