<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\xElemento;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class xElementoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'tanque' => 'required',
            'recibido' => 'required',
            'salida' => 'required',
            'operador' => 'required',
            'identificacion' => 'required',
            'producto' => 'required',
            'nota' => 'required',
            'cantidad' => 'required',
            'cantidad_antes' => 'required',
            'cantidad_despues' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        try {

            $xelemento = new xElemento;
            $xelemento->id_user = auth()->user()->id;
            $xelemento->estado = $request->get('estado');
            $xelemento->elemento = $request->get('elemento');
            $xelemento->cliente = $request->get('cliente');
            $xelemento->tanque = $request->get('tanque');
            $xelemento->recibido = $request->get('recibido');
            $xelemento->salida = $request->get('salida');
            $xelemento->operador = $request->get('operador');
            $xelemento->identificacion = $request->get('identificacion');
            $xelemento->producto = $request->get('producto');
            $xelemento->nota = $request->get('nota');
            $xelemento->cantidad = $request->get('cantidad');
            $xelemento->cantidad_antes = $request->get('cantidad_antes');
            $xelemento->cantidad_despues = $request->get('cantidad_despues');
            $xelemento->producto_tanqute = $request->get('producto_tanqute');
            $xelemento->energia = $request->get('energia');
            $xelemento->suspender = $request->get('suspender');
            $xelemento->remision = $request->get('remision');
            $xelemento->factura = $request->get('factura');
            $xelemento->save();

                return redirect()->route('home')
                ->with('success', 'La tarea fue Creada Exitosamente!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error en el registro!!');
        }
    }

    public function create_preguntas()
    {
        $users = User::where('delete', '=', NULL)->get();

        return view('modal-elementos.fomularios X.x-01-02', compact('users'));
    }

    public function create_x_02_01()
    {
        $users = User::where('delete', '=', NULL)->get();

        return view('modal-elementos.fomularios X.x-02-01', compact('users'));
    }

    public function store_preguntas(Request $request)
    {

            $xelemento = new xElemento;
            $xelemento->id_user = auth()->user()->id;
            $xelemento->id_evaluacion = $request->get('id_evaluacion');
            $xelemento->estado = $request->get('estado');
            $xelemento->elemento = $request->get('elemento');
            $xelemento->nota = 'Evaluacion '.$xelemento->elemento;
            $xelemento->cliente = $request->get('cliente');
            $xelemento->producto = $request->get('producto');

            $xelemento->pregunta1 = $request->get('pregunta1');
            $xelemento->pregunta2 = $request->get('pregunta2');
            $xelemento->pregunta3 = $request->get('pregunta3');
            $xelemento->pregunta4 = $request->get('pregunta4');
            $xelemento->pregunta5 = $request->get('pregunta5');
            $xelemento->pregunta6 = $request->get('pregunta6');
            $xelemento->pregunta7 = $request->get('pregunta7');
            $xelemento->pregunta8 = $request->get('pregunta8');
            $xelemento->pregunta9 = $request->get('pregunta9');
            $xelemento->pregunta10 = $request->get('pregunta10');
            $xelemento->pregunta11 = $request->get('pregunta11');
            $xelemento->pregunta12 = $request->get('pregunta12');
            $xelemento->pregunta13 = $request->get('pregunta13');
            $xelemento->pregunta14 = $request->get('pregunta14');
            $xelemento->pregunta15 = $request->get('pregunta15');
            $xelemento->pregunta16 = $request->get('pregunta16');
            $xelemento->pregunta17 = $request->get('pregunta17');
            $xelemento->pregunta18 = $request->get('pregunta18');
            $xelemento->pregunta19 = $request->get('pregunta19');
            $xelemento->pregunta20 = $request->get('pregunta20');
            $xelemento->pregunta21 = $request->get('pregunta21');
            $xelemento->pregunta22 = $request->get('pregunta22');
            $xelemento->pregunta23 = $request->get('pregunta23');
            $xelemento->pregunta24 = $request->get('pregunta24');
            $xelemento->pregunta25 = $request->get('pregunta25');
            $xelemento->pregunta26 = $request->get('pregunta26');
            $xelemento->pregunta27 = $request->get('pregunta27');
            $xelemento->pregunta28 = $request->get('pregunta28');
            $xelemento->pregunta29 = $request->get('pregunta29');
            $xelemento->pregunta30 = $request->get('pregunta30');
            $xelemento->pregunta31 = $request->get('pregunta31');
            $xelemento->pregunta32 = $request->get('pregunta32');
            $xelemento->pregunta33 = $request->get('pregunta33');
            $xelemento->pregunta34 = $request->get('pregunta34');
            $xelemento->pregunta35 = $request->get('pregunta35');
            $xelemento->pregunta36 = $request->get('pregunta36');
            $xelemento->pregunta37 = $request->get('pregunta37');
            $xelemento->pregunta38 = $request->get('pregunta38');
            $xelemento->pregunta39 = $request->get('pregunta39');
            $xelemento->pregunta40 = $request->get('pregunta40');
            $xelemento->pregunta41 = $request->get('pregunta41');

            $xelemento->save();

            return redirect()->route('home')
            ->with('success', 'La tarea fue Creada Exitosamente!');

    }
}
