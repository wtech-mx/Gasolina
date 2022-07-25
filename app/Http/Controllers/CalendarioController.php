<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendario;
use App\Models\Tareas;
use App\Models\xvElemento;
use App\Models\xvElementor02;
use Illuminate\Support\Facades\DB;

class CalendarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store_calendar(Request $request)
    {
        $datosEvento = request()->except(['_token', '_method'], []);

        Calendario::insert($datosEvento);
    }

    public function show_calendar()
    {
            $json2 = $data2['calendario'] = Calendario::
            where('id_user', '=', auth()->user()->id)
            ->get();

            $json3 = $data3['formato'] = Tareas::
            where('id_user', '=', auth()->user()->id)
            ->get();

            $json4 = $data4['calendario'] = xvElemento::get();
            $json5 = $data5['calendario'] = xvElementor02::get();

            //los convieerte en array
            $decode2 = json_decode($json2);
            $decode3 = json_decode($json3);
            $decode4 = json_decode($json4);
            $decode5 = json_decode($json5);
            //Une los array en uno solo
            $resultado = array_merge($decode2, $decode3, $decode4, $decode5);

        //retorna a la vista sn json
        return response()->json($resultado);
    }

    public function update_calendar(Request $request, $id)
    {
        $config = DB::table('configuracion')->first();
        $datosEvento = request()->except(['_token', '_method']);
        $color = $datosEvento['color'];
        $title = $datosEvento['title'];
        $check = $datosEvento['check'];

        if($color == $config->color_diaria){
            $respuesta = Calendario::where('id', '=', $id)->update($datosEvento);
        }elseif($color == '#cc2e5c'){
            $respuesta = xvElemento::where('id', '=', $id)->update($datosEvento);
        }elseif($color == '#9acc2e'){
            $respuesta = xvElementor02::where('id', '=', $id)->update($datosEvento);
        }else{
            $respuesta = Tareas::where('id', '=', $id)->update($datosEvento);
        }
    }

    public function destroy_calendar($id)
    {
        $config = DB::table('configuracion')->first();
        $datosEvento = request();
        $color = $datosEvento['color'];

        if($color == $config->color_diaria){
            Calendario::destroy($id);
        }elseif($color == '#cc2e5c'){
            xvElemento::destroy($id);
        }elseif($color == '#9acc2e'){
            xvElementor02::destroy($id);
        }else{
            $seguro = Tareas::findOrFail($id);
            $seguro->start = NULL;
            $seguro->update();
        }

        return response()->json($id);
    }

    public function temp(Request $request)
    {
        $config = DB::table('configuracion')->first();
        for ($i = 0; $i < $request->get('num_veces'); $i++){
            $tarea = new Calendario;
            $tarea->id_user = auth()->user()->id;
            $tarea->descripcion = $request->get('descripcion');

            $tarea->title = $request->get('title');
            $tarea->image = $request->get('image');
            $tarea->estatus = 0;
            $tarea->check = 0;
            $tarea->start = $request->get('start');
            $tarea->color = $config->color_temporalidad;

            $dia = $tarea->start;

            $año_actual = date("Y");
            $mes_actual = date("m");

            $num_month = "+".$i." month";

            $num_veces_month = $año_actual."-".$request->get('mes')."-".$dia;

            $nuevafecha = strtotime ( $num_month , strtotime ( $num_veces_month ) ) ;

            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
            $tarea->end = $nuevafecha;
            $tarea->start = $nuevafecha;

            $tarea->save();

        }

        return redirect()->route('home')
        ->with('success', 'La tarea fue Creada Exitosamente!');
    }

}
