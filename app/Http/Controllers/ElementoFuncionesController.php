<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleFormato;
use Illuminate\Support\Facades\DB;

class ElementoFuncionesController extends Controller
{
    public function index()
    {
        $elemento = DetalleFormato::where('elemento', '=', '1')
        ->where('id_user', '=', auth()->user()->id)
        ->first();

        return view('admin.elementos.funciones', compact('elemento'));
    }

    public static function update(Request $request)
    {
        $elemento = DetalleFormato::
        where('elemento', '=', '1')
        ->where('id_user', '=', auth()->user()->id)
        ->first();
        $elemento->start = $request->get('start');
        $elemento->update();

        return redirect()->route('index.funciones');
     }

     public function index_2()
     {
         $elemento = DetalleFormato::where('elemento', '=', '2')
         ->where('id_user', '=', auth()->user()->id)
         ->first();

         return view('admin.elementos.documentos', compact('elemento'));
     }

     public static function update_2(Request $request, $id)
     {
         $elemento = DetalleFormato::
         where('elemento', '=', '2')
         ->where('sub', '=', $id)
         ->where('id_user', '=', auth()->user()->id)
         ->first();
         $elemento->start = $request->get('start');
         $elemento->title = $request->get('title');
         $elemento->update();

         return redirect()->route('index.documentos');
      }
}
