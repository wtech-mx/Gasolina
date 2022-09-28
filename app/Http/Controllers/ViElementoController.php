<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ViElemento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Difundir;
use App\Models\MedioDifundir;
use Illuminate\Support\Facades\DB;

class ViElementoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('delete', '=', NULL)->get();

        return view('modal-elementos.formularios vi.index', compact('user'));
    }

    public function pdf_sasisopa_vi()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vi.pdf_vi', compact('config'));
        return $pdf->stream('VI - Compentecia del personal, capacitación y entrenamiento.pdf');
    }

    public function pdf_sasisopa_vi_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vi.pdf_vi', compact('config'));
        return $pdf->download('VI - Compentecia del personal, capacitación y entrenamiento.pdf');
    }

    public function pdf_sasisopa_vi_01()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vi.pdf_vi_01', compact('config'));
        return $pdf->stream('VI-01 Procedimiento de competencia, capacitación y entrenamiento interna y externa.pdf');
    }

    public function pdf_sasisopa_vi_01_download()
    {
        $config = DB::table('configuracion')->first();

        $pdf = \PDF::loadView('modal-elementos.formularios vi.pdf_vi_01', compact('config'));
        return $pdf->download('VI-01 Procedimiento de competencia, capacitación y entrenamiento interna y externa.pdf');
    }

    public function puesto()
    {
        $user = User::where('delete', '=', NULL)->get();

        return view('modal-elementos.formularios vi.puesto', compact('user'));
    }
    public function puesto_formato()
    {
        $user = User::where('delete', '=', NULL)->get();

        return view('modal-elementos.formularios vi.visualizar_puesto', compact('user'));
    }

    public function edit_empresario($id)
    {
        $users = User::where('delete', '=', NULL)->get();
        $vi = ViElemento::findOrFail($id);

        return view('modal-elementos.formularios vi.empresario', compact('users', 'vi'));
    }

    public function edit_gerente($id)
    {
        $users = User::where('delete', '=', NULL)->get();
        $vi = ViElemento::findOrFail($id);

        return view('modal-elementos.formularios vi.gerente', compact('users', 'vi'));
    }

    public function edit_gasolinero($id)
    {
        $users = User::where('delete', '=', NULL)->get();
        $vi = ViElemento::findOrFail($id);

        return view('modal-elementos.formularios vi.gasolinero', compact('users', 'vi'));
    }

    public function edit_administrativo($id)
    {
        $users = User::where('delete', '=', NULL)->get();
        $vi = ViElemento::findOrFail($id);

        return view('modal-elementos.formularios vi.administrativo', compact('users', 'vi'));
    }

    public function edit_mantenimiento($id)
    {
        $users = User::where('delete', '=', NULL)->get();
        $vi = ViElemento::findOrFail($id);

        return view('modal-elementos.formularios vi.mantenimiento', compact('users', 'vi'));
    }


    public function update_empresario(Request $request, $id)
    {
        $current = Carbon::now()->toDateString();
        $vi = ViElemento::findOrFail($id);
        $vi->elemento = $request->get('elemento');

        if(!empty($request->get('pregunta1'))){
            $vi->pregunta1 = $request->get('pregunta1');
            $vi->fecha1 = $current;
        }

        if(!empty($request->get('pregunta2'))){
            $vi->pregunta2 = $request->get('pregunta2');
            $vi->fecha2 = $current;
        }

        if(!empty($request->get('pregunta3'))){
            $vi->pregunta3 = $request->get('pregunta3');
            $vi->fecha3 = $current;
        }

        if(!empty($request->get('pregunta4'))){
            $vi->pregunta4 = $request->get('pregunta4');
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

        if(!empty($request->get('pregunta1'))){
            $vi->pregunta1 = $request->get('pregunta1');
            $vi->fecha1 = $current;
        }

        if(!empty($request->get('pregunta5'))){
            $vi->pregunta5 = $request->get('pregunta5');
            $vi->fecha5 = $current;
        }

        if(!empty($request->get('pregunta6'))){
            $vi->pregunta6 = $request->get('pregunta6');
            $vi->fecha6 = $current;
        }

        if(!empty($request->get('pregunta7'))){
            $vi->pregunta7 = $request->get('pregunta7');
            $vi->fecha7 = $current;
        }

        if(!empty($request->get('pregunta8'))){
            $vi->pregunta8 = $request->get('pregunta8');
            $vi->fecha8 = $current;
        }

        if(!empty($request->get('pregunta9'))){
            $vi->pregunta9 = $request->get('pregunta9');
            $vi->fecha9 = $current;
        }

        if(!empty($request->get('pregunta2'))){
            $vi->pregunta2 = $request->get('pregunta2');
            $vi->fecha2 = $current;
        }

        if(!empty($request->get('pregunta10'))){
            $vi->pregunta10 = $request->get('pregunta10');
            $vi->fecha10 = $current;
        }

        if(!empty($request->get('pregunta11'))){
            $vi->pregunta11 = $request->get('pregunta11');
            $vi->fecha11 = $current;
        }

        if(!empty($request->get('pregunta12'))){
            $vi->pregunta12 = $request->get('pregunta12');
            $vi->fecha12 = $current;
        }

        if(!empty($request->get('pregunta13'))){
            $vi->pregunta13 = $request->get('pregunta13');
            $vi->fecha13 = $current;
        }
        if(!empty($request->get('pregunta3'))){
            $vi->pregunta3 = $request->get('pregunta3');
            $vi->fecha3 = $current;
        }
        if(!empty($request->get('pregunta4'))){
            $vi->pregunta4 = $request->get('pregunta4');
            $vi->fecha4 = $current;
        }

        if(!empty($request->get('pregunta14'))){
            $vi->pregunta14 = $request->get('pregunta14');
            $vi->fecha14 = $current;
        }

        if(!empty($request->get('pregunta15'))){
            $vi->pregunta15 = $request->get('pregunta15');
            $vi->fecha15 = $current;
        }

        if(!empty($request->get('pregunta16'))){
            $vi->pregunta16 = $request->get('pregunta16');
            $vi->fecha16 = $current;
        }

        if(!empty($request->get('pregunta17'))){
            $vi->pregunta17 = $request->get('pregunta17');
            $vi->fecha17 = $current;
        }

        if(!empty($request->get('pregunta18'))){
            $vi->pregunta18 = $request->get('pregunta18');
            $vi->fecha18 = $current;
        }

        if(!empty($request->get('pregunta19'))){
            $vi->pregunta19 = $request->get('pregunta19');
            $vi->fecha19 = $current;
        }

        if(!empty($request->get('pregunta20'))){
            $vi->pregunta20 = $request->get('pregunta20');
            $vi->fecha20 = $current;
        }

        if(!empty($request->get('pregunta21'))){
            $vi->pregunta21 = $request->get('pregunta21');
            $vi->fecha21= $current;
        }
        if(!empty($request->get('pregunta22'))){
            $vi->pregunta22 = $request->get('pregunta22');
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

        if(!empty($request->get('pregunta1'))){
            $vi->pregunta1 = $request->get('pregunta1');
            $vi->fecha1 = $current;
        }

        if(!empty($request->get('pregunta6'))){
            $vi->pregunta6 = $request->get('pregunta6');
            $vi->fecha6 = $current;
        }

        if(!empty($request->get('pregunta7'))){
            $vi->pregunta7 = $request->get('pregunta7');
            $vi->fecha7 = $current;
        }

        if(!empty($request->get('pregunta8'))){
            $vi->pregunta8 = $request->get('pregunta8');
            $vi->fecha8 = $current;
        }

        if(!empty($request->get('pregunta9'))){
            $vi->pregunta9 = $request->get('pregunta9');
            $vi->fecha9 = $current;
        }

        if(!empty($request->get('pregunta23'))){
            $vi->pregunta23 = $request->get('pregunta23');
            $vi->fecha23= $current;
        }

        if(!empty($request->get('pregunta24'))){
            $vi->pregunta24 = $request->get('pregunta24');
            $vi->fecha24 = $current;
        }

        if(!empty($request->get('pregunta2'))){
            $vi->pregunta2 = $request->get('pregunta2');
            $vi->fecha2 = $current;
        }

        if(!empty($request->get('pregunta10'))){
            $vi->pregunta10 = $request->get('pregunta10');
            $vi->fecha10 = $current;
        }

        if(!empty($request->get('pregunta25'))){
            $vi->pregunta25 = $request->get('pregunta25');
            $vi->fecha25 = $current;
        }

        if(!empty($request->get('pregunta11'))){
            $vi->pregunta11 = $request->get('pregunta11');
            $vi->fecha11 = $current;
        }

        if(!empty($request->get('pregunta12'))){
            $vi->pregunta12 = $request->get('pregunta12');
            $vi->fecha12 = $current;
        }

        if(!empty($request->get('pregunta13'))){
            $vi->pregunta13 = $request->get('pregunta13');
            $vi->fecha13 = $current;
        }

        if(!empty($request->get('pregunta3'))){
            $vi->pregunta3 = $request->get('pregunta3');
            $vi->fecha3 = $current;
        }

        if(!empty($request->get('pregunta4'))){
            $vi->pregunta4 = $request->get('pregunta4');
            $vi->fecha4 = $current;
        }

        if(!empty($request->get('pregunta14'))){
            $vi->pregunta14 = $request->get('pregunta14');
            $vi->fecha14 = $current;
        }

        if(!empty($request->get('pregunta16'))){
            $vi->pregunta16 = $request->get('pregunta16');
            $vi->fecha16 = $current;
        }

        if(!empty($request->get('pregunta17'))){
            $vi->pregunta17 = $request->get('pregunta17');
            $vi->fecha17 = $current;
        }

        if(!empty($request->get('pregunta18'))){
            $vi->pregunta18 = $request->get('pregunta18');
            $vi->fecha18 = $current;
        }

        if(!empty($request->get('pregunta19'))){
            $vi->pregunta19 = $request->get('pregunta19');
            $vi->fecha19 = $current;
        }

        if(!empty($request->get('pregunta20'))){
            $vi->pregunta20 = $request->get('pregunta20');
            $vi->fecha20 = $current;
        }

        if(!empty($request->get('pregunta21'))){
            $vi->pregunta21 = $request->get('pregunta21');
            $vi->fecha21= $current;
        }

        if(!empty($request->get('pregunta22'))){
            $vi->pregunta22 = $request->get('pregunta22');
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

        if(!empty($request->get('pregunta1'))){
            $vi->pregunta1 = $request->get('pregunta1');
            $vi->fecha1 = $current;
        }

        if(!empty($request->get('pregunta6'))){
            $vi->pregunta6 = $request->get('pregunta6');
            $vi->fecha6 = $current;
        }

        if(!empty($request->get('pregunta7'))){
            $vi->pregunta7 = $request->get('pregunta7');
            $vi->fecha7 = $current;
        }

        if(!empty($request->get('pregunta8'))){
            $vi->pregunta8 = $request->get('pregunta8');
            $vi->fecha8 = $current;
        }

        if(!empty($request->get('pregunta9'))){
            $vi->pregunta9 = $request->get('pregunta9');
            $vi->fecha9 = $current;
        }

        if(!empty($request->get('pregunta23'))){
            $vi->pregunta23 = $request->get('pregunta23');
            $vi->fecha23= $current;
        }

        if(!empty($request->get('pregunta2'))){
            $vi->pregunta2 = $request->get('pregunta2');
            $vi->fecha2 = $current;
        }

        if(!empty($request->get('pregunta11'))){
            $vi->pregunta11 = $request->get('pregunta11');
            $vi->fecha11 = $current;
        }

        if(!empty($request->get('pregunta3'))){
            $vi->pregunta3 = $request->get('pregunta3');
            $vi->fecha3 = $current;
        }

        if(!empty($request->get('pregunta4'))){
            $vi->pregunta4 = $request->get('pregunta4');
            $vi->fecha4 = $current;
        }

        if(!empty($request->get('pregunta16'))){
            $vi->pregunta16 = $request->get('pregunta16');
            $vi->fecha16 = $current;
        }

        if(!empty($request->get('pregunta17'))){
            $vi->pregunta17 = $request->get('pregunta17');
            $vi->fecha17 = $current;
        }

        if(!empty($request->get('pregunta18'))){
            $vi->pregunta18 = $request->get('pregunta18');
            $vi->fecha18 = $current;
        }

        if(!empty($request->get('pregunta21'))){
            $vi->pregunta21 = $request->get('pregunta21');
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

        if(!empty($request->get('pregunta1'))){
            $vi->pregunta1 = $request->get('pregunta1');
            $vi->fecha1 = $current;
        }

        if(!empty($request->get('pregunta6'))){
            $vi->pregunta6 = $request->get('pregunta6');
            $vi->fecha6 = $current;
        }

        if(!empty($request->get('pregunta8'))){
            $vi->pregunta8 = $request->get('pregunta8');
            $vi->fecha8 = $current;
        }

        if(!empty($request->get('pregunta23'))){
            $vi->pregunta23 = $request->get('pregunta23');
            $vi->fecha23= $current;
        }

        if(!empty($request->get('pregunta24'))){
            $vi->pregunta24 = $request->get('pregunta24');
            $vi->fecha24 = $current;
        }

        if(!empty($request->get('pregunta25'))){
            $vi->pregunta25 = $request->get('pregunta25');
            $vi->fecha25 = $current;
        }

        if(!empty($request->get('pregunta11'))){
            $vi->pregunta11 = $request->get('pregunta11');
            $vi->fecha11 = $current;
        }

        if(!empty($request->get('pregunta12'))){
            $vi->pregunta12 = $request->get('pregunta12');
            $vi->fecha12 = $current;
        }

        if(!empty($request->get('pregunta13'))){
            $vi->pregunta13 = $request->get('pregunta13');
            $vi->fecha13 = $current;
        }

        if(!empty($request->get('pregunta3'))){
            $vi->pregunta3 = $request->get('pregunta3');
            $vi->fecha3 = $current;
        }

        if(!empty($request->get('pregunta4'))){
            $vi->pregunta4 = $request->get('pregunta4');
            $vi->fecha4 = $current;
        }

        if(!empty($request->get('pregunta16'))){
            $vi->pregunta16 = $request->get('pregunta16');
            $vi->fecha16 = $current;
        }

        if(!empty($request->get('pregunta17'))){
            $vi->pregunta17 = $request->get('pregunta17');
            $vi->fecha17 = $current;
        }

        if(!empty($request->get('pregunta18'))){
            $vi->pregunta18 = $request->get('pregunta18');
            $vi->fecha18 = $current;
        }

        if(!empty($request->get('pregunta19'))){
            $vi->pregunta19 = $request->get('pregunta19');
            $vi->fecha19 = $current;
        }

        if(!empty($request->get('pregunta20'))){
            $vi->pregunta20 = $request->get('pregunta20');
            $vi->fecha20 = $current;
        }

        if(!empty($request->get('pregunta21'))){
            $vi->pregunta21 = $request->get('pregunta21');
            $vi->fecha21= $current;
        }

        if(!empty($request->get('pregunta22'))){
            $vi->pregunta22 = $request->get('pregunta22');
            $vi->fecha22 = $current;
        }
        $vi->update();

        return redirect()->route('index.evaluacion')->with('success', 'La tarea fue Creada Exitosamente!');
    }
}
