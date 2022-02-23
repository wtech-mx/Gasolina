<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendario;
use App\Models\Elementos;
use Illuminate\Support\Facades\DB;

class CalendarioController extends Controller
{
    public function store_calendar(Request $request)
    {
        $datosEvento = request()->except(['_token', '_method'], []);

        Calendario::insert($datosEvento);
    }

    public function show_calendar()
    {
            $json2 = $data2['calendario'] = Calendario::all();
            $json3 = $data3['formato'] = Elementos::all();

            //los convieerte en array
            $decode2 = json_decode($json2);
            $decode3 = json_decode($json3);

            //Une los array en uno solo
            $resultado = array_merge($decode2, $decode3);

        //retorna a la vista sn json
        return response()->json($resultado);
    }

    public function update_calendar(Request $request, $id)
    {
        $datosEvento = request()->except(['_token', '_method']);
        $color = $datosEvento['color'];
        $title = $datosEvento['title'];

        switch ($color) {
            case ($color == "#2ECC71"):
                $respuesta = Calendario::where('id', '=', $id)->update($datosEvento);
                break;
            case ($color == '#4298D6'):
                $respuesta = Elementos::where('id', '=', $id)->update($datosEvento);
                break;
        }
    }

    public function destroy_calendar($id)
    {
        $datosEvento = request();
        $color = $datosEvento['color'];

        switch ($color) {
            case ($color == "#2ECC71"):
                Calendario::destroy($id);
                break;
            case ($color == '#4298D6'):
                $seguro = Elementos::findOrFail($id);
                $seguro->start = NULL;
                $seguro->update();
                break;
        }

        return response()->json($id);
    }

}
