<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ViElemento;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ViElementoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::get();

        return view('modal-elementos.formularios vi.index', compact('user'));
    }

    public function puesto()
    {
        $user = User::get();

        return view('modal-elementos.formularios vi.puesto', compact('user'));
    }
    public function puesto_formato()
    {
        $user = User::get();

        return view('modal-elementos.formularios vi.visualizar_puesto', compact('user'));
    }

    public function edit_empresario($id)
    {
        $users = User::get();
        $vi = ViElemento::findOrFail($id);

        return view('modal-elementos.formularios vi.empresario', compact('users', 'vi'));
    }

    public function edit_gerente($id)
    {
        $users = User::get();
        $vi = ViElemento::findOrFail($id);

        return view('modal-elementos.formularios vi.gerente', compact('users', 'vi'));
    }

    public function edit_gasolinero($id)
    {
        $users = User::get();
        $vi = ViElemento::findOrFail($id);

        return view('modal-elementos.formularios vi.gasolinero', compact('users', 'vi'));
    }

    public function edit_administrativo($id)
    {
        $users = User::get();
        $vi = ViElemento::findOrFail($id);

        return view('modal-elementos.formularios vi.administrativo', compact('users', 'vi'));
    }

    public function edit_mantenimiento($id)
    {
        $users = User::get();
        $vi = ViElemento::findOrFail($id);

        return view('modal-elementos.formularios vi.mantenimiento', compact('users', 'vi'));
    }


    public function update_empresario(Request $request, $id)
    {
        $current = Carbon::now()->toDateString();
        $vi = ViElemento::findOrFail($id);
        $vi->elemento = $request->get('elemento');
        $vi->pregunta1 = $request->get('pregunta1');
        if(!empty($request->get('pregunta1'))){
            $vi->fecha1 = $current;
        }
        $vi->pregunta2 = $request->get('pregunta2');
        if(!empty($request->get('pregunta2'))){
            $vi->fecha2 = $current;
        }
        $vi->pregunta3 = $request->get('pregunta3');
        if(!empty($request->get('pregunta3'))){
            $vi->fecha3 = $current;
        }
        $vi->pregunta4 = $request->get('pregunta4');
        if(!empty($request->get('pregunta4'))){
            $vi->fecha4 = $current;
        }
        $vi->update();

        return redirect()->route('index.evaluacion')->with('success', 'La tarea fue Creada Exitosamente!');
    }

    public function update_gerente(Request $request, $id)
    {
        $current = Carbon::now()->toDateString();

        $vi = ViElemento::findOrFail($id);
        $vi->elemento = $request->get('elemento');
        $vi->pregunta1 = $request->get('pregunta1');
        if(!empty($request->get('pregunta1'))){
            $vi->fecha1 = $current;
        }
        $vi->pregunta5 = $request->get('pregunta5');
        if(!empty($request->get('pregunta5'))){
            $vi->fecha5 = $current;
        }
        $vi->pregunta6 = $request->get('pregunta6');
        if(!empty($request->get('pregunta6'))){
            $vi->fecha6 = $current;
        }
        $vi->pregunta7 = $request->get('pregunta7');
        if(!empty($request->get('pregunta7'))){
            $vi->fecha7 = $current;
        }
        $vi->pregunta8 = $request->get('pregunta8');
        if(!empty($request->get('pregunta8'))){
            $vi->fecha8 = $current;
        }
        $vi->pregunta9 = $request->get('pregunta9');
        if(!empty($request->get('pregunta9'))){
            $vi->fecha9 = $current;
        }
        $vi->pregunta2 = $request->get('pregunta2');
        if(!empty($request->get('pregunta2'))){
            $vi->fecha2 = $current;
        }
        $vi->pregunta10 = $request->get('pregunta10');
        if(!empty($request->get('pregunta10'))){
            $vi->fecha10 = $current;
        }
        $vi->pregunta11 = $request->get('pregunta11');
        if(!empty($request->get('pregunta11'))){
            $vi->fecha11 = $current;
        }
        $vi->pregunta12 = $request->get('pregunta12');
        if(!empty($request->get('pregunta12'))){
            $vi->fecha12 = $current;
        }
        $vi->pregunta13 = $request->get('pregunta13');
        if(!empty($request->get('pregunta13'))){
            $vi->fecha13 = $current;
        }
        $vi->pregunta3 = $request->get('pregunta3');
        if(!empty($request->get('pregunta3'))){
            $vi->fecha3 = $current;
        }
        $vi->pregunta4 = $request->get('pregunta4');
        if(!empty($request->get('pregunta4'))){
            $vi->fecha4 = $current;
        }
        $vi->pregunta14 = $request->get('pregunta14');
        if(!empty($request->get('pregunta14'))){
            $vi->fecha14 = $current;
        }
        $vi->pregunta15 = $request->get('pregunta15');
        if(!empty($request->get('pregunta15'))){
            $vi->fecha15 = $current;
        }
        $vi->pregunta16 = $request->get('pregunta16');
        if(!empty($request->get('pregunta16'))){
            $vi->fecha16 = $current;
        }
        $vi->pregunta17 = $request->get('pregunta17');
        if(!empty($request->get('pregunta17'))){
            $vi->fecha17 = $current;
        }
        $vi->pregunta18 = $request->get('pregunta18');
        if(!empty($request->get('pregunta18'))){
            $vi->fecha18 = $current;
        }
        $vi->pregunta19 = $request->get('pregunta19');
        if(!empty($request->get('pregunta19'))){
            $vi->fecha19 = $current;
        }
        $vi->pregunta20 = $request->get('pregunta20');
        if(!empty($request->get('pregunta20'))){
            $vi->fecha20 = $current;
        }
        $vi->pregunta21 = $request->get('pregunta21');
        if(!empty($request->get('pregunta21'))){
            $vi->fecha21= $current;
        }
        $vi->pregunta22 = $request->get('pregunta22');
        if(!empty($request->get('pregunta22'))){
            $vi->fecha22 = $current;
        }
        $vi->update();

        return redirect()->route('index.evaluacion')->with('success', 'La tarea fue Creada Exitosamente!');
    }

    public function update_gasolinero(Request $request, $id)
    {
        $current = Carbon::now()->toDateString();

        $vi = ViElemento::findOrFail($id);
        $vi->elemento = $request->get('elemento');
        $vi->pregunta1 = $request->get('pregunta1');
        if(!empty($request->get('pregunta1'))){
            $vi->fecha1 = $current;
        }
        $vi->pregunta6 = $request->get('pregunta6');
        if(!empty($request->get('pregunta6'))){
            $vi->fecha6 = $current;
        }
        $vi->pregunta7 = $request->get('pregunta7');
        if(!empty($request->get('pregunta7'))){
            $vi->fecha7 = $current;
        }
        $vi->pregunta8 = $request->get('pregunta8');
        if(!empty($request->get('pregunta8'))){
            $vi->fecha8 = $current;
        }
        $vi->pregunta9 = $request->get('pregunta9');
        if(!empty($request->get('pregunta9'))){
            $vi->fecha9 = $current;
        }
        $vi->pregunta23 = $request->get('pregunta23');
        if(!empty($request->get('pregunta23'))){
            $vi->fecha23= $current;
        }
        $vi->pregunta24 = $request->get('pregunta24');
        if(!empty($request->get('pregunta24'))){
            $vi->fecha24 = $current;
        }
        $vi->pregunta2 = $request->get('pregunta2');
        if(!empty($request->get('pregunta2'))){
            $vi->fecha2 = $current;
        }
        $vi->pregunta10 = $request->get('pregunta10');
        if(!empty($request->get('pregunta10'))){
            $vi->fecha10 = $current;
        }
        $vi->pregunta25 = $request->get('pregunta25');
        if(!empty($request->get('pregunta25'))){
            $vi->fecha25 = $current;
        }
        $vi->pregunta11 = $request->get('pregunta11');
        if(!empty($request->get('pregunta11'))){
            $vi->fecha11 = $current;
        }
        $vi->pregunta12 = $request->get('pregunta12');
        if(!empty($request->get('pregunta12'))){
            $vi->fecha12 = $current;
        }
        $vi->pregunta13 = $request->get('pregunta13');
        if(!empty($request->get('pregunta13'))){
            $vi->fecha13 = $current;
        }
        $vi->pregunta3 = $request->get('pregunta3');
        if(!empty($request->get('pregunta3'))){
            $vi->fecha3 = $current;
        }
        $vi->pregunta4 = $request->get('pregunta4');
        if(!empty($request->get('pregunta4'))){
            $vi->fecha4 = $current;
        }
        $vi->pregunta14 = $request->get('pregunta14');
        if(!empty($request->get('pregunta14'))){
            $vi->fecha14 = $current;
        }
        $vi->pregunta16 = $request->get('pregunta16');
        if(!empty($request->get('pregunta16'))){
            $vi->fecha16 = $current;
        }
        $vi->pregunta17 = $request->get('pregunta17');
        if(!empty($request->get('pregunta17'))){
            $vi->fecha17 = $current;
        }
        $vi->pregunta18 = $request->get('pregunta18');
        if(!empty($request->get('pregunta18'))){
            $vi->fecha18 = $current;
        }
        $vi->pregunta19 = $request->get('pregunta19');
        if(!empty($request->get('pregunta19'))){
            $vi->fecha19 = $current;
        }
        $vi->pregunta20 = $request->get('pregunta20');
        if(!empty($request->get('pregunta20'))){
            $vi->fecha20 = $current;
        }
        $vi->pregunta21 = $request->get('pregunta21');
        if(!empty($request->get('pregunta21'))){
            $vi->fecha21= $current;
        }
        $vi->pregunta22 = $request->get('pregunta22');
        if(!empty($request->get('pregunta22'))){
            $vi->fecha22 = $current;
        }
        $vi->update();

        return redirect()->route('index.evaluacion')->with('success', 'La tarea fue Creada Exitosamente!');
    }

    public function update_administrativo(Request $request, $id)
    {
        $current = Carbon::now()->toDateString();

        $vi = ViElemento::findOrFail($id);
        $vi->elemento = $request->get('elemento');
        $vi->pregunta1 = $request->get('pregunta1');
        if(!empty($request->get('pregunta1'))){
            $vi->fecha1 = $current;
        }
        $vi->pregunta6 = $request->get('pregunta6');
        if(!empty($request->get('pregunta6'))){
            $vi->fecha6 = $current;
        }
        $vi->pregunta7 = $request->get('pregunta7');
        if(!empty($request->get('pregunta7'))){
            $vi->fecha7 = $current;
        }
        $vi->pregunta8 = $request->get('pregunta8');
        if(!empty($request->get('pregunta8'))){
            $vi->fecha8 = $current;
        }
        $vi->pregunta9 = $request->get('pregunta9');
        if(!empty($request->get('pregunta9'))){
            $vi->fecha9 = $current;
        }
        $vi->pregunta23 = $request->get('pregunta23');
        if(!empty($request->get('pregunta23'))){
            $vi->fecha23= $current;
        }
        $vi->pregunta2 = $request->get('pregunta2');
        if(!empty($request->get('pregunta2'))){
            $vi->fecha2 = $current;
        }
        $vi->pregunta11 = $request->get('pregunta11');
        if(!empty($request->get('pregunta11'))){
            $vi->fecha11 = $current;
        }
        $vi->pregunta3 = $request->get('pregunta3');
        if(!empty($request->get('pregunta3'))){
            $vi->fecha3 = $current;
        }
        $vi->pregunta4 = $request->get('pregunta4');
        if(!empty($request->get('pregunta4'))){
            $vi->fecha4 = $current;
        }
        $vi->pregunta16 = $request->get('pregunta16');
        if(!empty($request->get('pregunta16'))){
            $vi->fecha16 = $current;
        }
        $vi->pregunta17 = $request->get('pregunta17');
        if(!empty($request->get('pregunta17'))){
            $vi->fecha17 = $current;
        }
        $vi->pregunta18 = $request->get('pregunta18');
        if(!empty($request->get('pregunta18'))){
            $vi->fecha18 = $current;
        }
        $vi->pregunta21 = $request->get('pregunta21');
        if(!empty($request->get('pregunta21'))){
            $vi->fecha21= $current;
        }
        $vi->update();

        return redirect()->route('index.evaluacion')->with('success', 'La tarea fue Creada Exitosamente!');
    }

    public function update_mantenimiento(Request $request, $id)
    {
        $current = Carbon::now()->toDateString();

        $vi = ViElemento::findOrFail($id);
        $vi->elemento = $request->get('elemento');
        $vi->pregunta1 = $request->get('pregunta1');
        if(!empty($request->get('pregunta1'))){
            $vi->fecha1 = $current;
        }
        $vi->pregunta6 = $request->get('pregunta6');
        if(!empty($request->get('pregunta6'))){
            $vi->fecha6 = $current;
        }
        $vi->pregunta8 = $request->get('pregunta8');
        if(!empty($request->get('pregunta8'))){
            $vi->fecha8 = $current;
        }
        $vi->pregunta23 = $request->get('pregunta23');
        if(!empty($request->get('pregunta23'))){
            $vi->fecha23= $current;
        }
        $vi->pregunta24 = $request->get('pregunta24');
        if(!empty($request->get('pregunta24'))){
            $vi->fecha24 = $current;
        }
        $vi->pregunta25 = $request->get('pregunta25');
        if(!empty($request->get('pregunta25'))){
            $vi->fecha25 = $current;
        }
        $vi->pregunta11 = $request->get('pregunta11');
        if(!empty($request->get('pregunta11'))){
            $vi->fecha11 = $current;
        }
        $vi->pregunta12 = $request->get('pregunta12');
        if(!empty($request->get('pregunta12'))){
            $vi->fecha12 = $current;
        }
        $vi->pregunta13 = $request->get('pregunta13');
        if(!empty($request->get('pregunta13'))){
            $vi->fecha13 = $current;
        }
        $vi->pregunta3 = $request->get('pregunta3');
        if(!empty($request->get('pregunta3'))){
            $vi->fecha3 = $current;
        }
        $vi->pregunta4 = $request->get('pregunta4');
        if(!empty($request->get('pregunta4'))){
            $vi->fecha4 = $current;
        }
        $vi->pregunta16 = $request->get('pregunta16');
        if(!empty($request->get('pregunta16'))){
            $vi->fecha16 = $current;
        }
        $vi->pregunta17 = $request->get('pregunta17');
        if(!empty($request->get('pregunta17'))){
            $vi->fecha17 = $current;
        }
        $vi->pregunta18 = $request->get('pregunta18');
        if(!empty($request->get('pregunta18'))){
            $vi->fecha18 = $current;
        }
        $vi->pregunta19 = $request->get('pregunta19');
        if(!empty($request->get('pregunta19'))){
            $vi->fecha19 = $current;
        }
        $vi->pregunta20 = $request->get('pregunta20');
        if(!empty($request->get('pregunta20'))){
            $vi->fecha20 = $current;
        }
        $vi->pregunta21 = $request->get('pregunta21');
        if(!empty($request->get('pregunta21'))){
            $vi->fecha21= $current;
        }
        $vi->pregunta22 = $request->get('pregunta22');
        if(!empty($request->get('pregunta22'))){
            $vi->fecha22 = $current;
        }
        $vi->update();

        return redirect()->route('index.evaluacion')->with('success', 'La tarea fue Creada Exitosamente!');
    }
}
