<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ejecutar;
use App\Models\Elementos;
use App\Models\Tareas;
use DB;
use Image;

class Ejecutars extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_user, $cliente, $tanque, $recibido, $salida, $operador, $identificacion, $producto, $nota, $cantidad, $remision, $factura;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        $tarea = DB::table('tareas')
        ->where('id_user', '=', auth()->user()->id)
        ->where('elementos', '=', 3)
        ->where('check', '=', 0)
        ->first();

        return view('livewire.ejecutars.view', [
            'ejecutars' => Ejecutar::latest()
						->orWhere('id_user', 'LIKE', $keyWord)
						->orWhere('cliente', 'LIKE', $keyWord)
						->orWhere('tanque', 'LIKE', $keyWord)
						->orWhere('recibido', 'LIKE', $keyWord)
						->orWhere('salida', 'LIKE', $keyWord)
						->orWhere('operador', 'LIKE', $keyWord)
						->orWhere('identificacion', 'LIKE', $keyWord)
						->orWhere('producto', 'LIKE', $keyWord)
                        ->orWhere('nota', 'LIKE', $keyWord)
                        ->orWhere('cantidad', 'LIKE', $keyWord)
						->orWhere('remision', 'LIKE', $keyWord)
						->orWhere('factura', 'LIKE', $keyWord)
						->paginate(10),
        ], compact('tarea'));
    }

    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }

    private function resetInput()
    {
		$this->id_user = null;
		$this->cliente = null;
		$this->tanque = null;
		$this->recibido = null;
		$this->salida = null;
		$this->operador = null;
		$this->identificacion = null;
		$this->producto = null;
        $this->nota = null;
        $this->cantidad = null;
		$this->remision = null;
		$this->factura = null;
    }

    public function store()
    {
        $this->validate([
		'tanque' => 'required',
		'recibido' => 'required',
		'salida' => 'required',
		'operador' => 'required',
		'identificacion' => 'required',
        'nota' => 'required',
        'cantidad' => 'required',
		'producto' => 'required',
        ]);

        if ($this-> remision) {
            $urlfoto = $this-> remision;
            $nombre = time() . "." . $urlfoto->guessExtension();
            $ruta = public_path('/ejecutar/' . $nombre);
            $compresion = Image::make($urlfoto->getRealPath())
                ->save($ruta, 10);
            $remision = $compresion->basename;
        }

        if ($this-> factura) {
            $urlfoto = $this-> factura;
            $nombre = time() . "." . $urlfoto->guessExtension();
            $ruta = public_path('/ejecutar/' . $nombre);
            $compresion = Image::make($urlfoto->getRealPath())
                ->save($ruta, 10);
            $factura = $compresion->basename;
        }

        Ejecutar::create([
			'id_user' => auth()->user()->id,
			'cliente' => '324 - PL/20543/EXP/ES/2017 - SAC XIB CHAAC, S.A. DE C.V.',
			'tanque' => $this-> tanque,
			'recibido' => $this-> recibido,
			'salida' => $this-> salida,
			'operador' => $this-> operador,
			'identificacion' => $this-> identificacion,
            'nota' => $this-> nota,
            'cantidad' => $this-> cantidad,
			'producto' => $this-> producto,
        ]);

        $tarea = Tareas::where('id_user', '=', auth()->user()->id)
        ->where('elementos', '=', 3)
        ->where('check', '=', 0)
        ->first();

        $elemento = Elementos::where('id_tareas', '=', $tarea->id)
        ->first();

        $record = Elementos::find($elemento->id);
        $record->update([
        'ejecutar' => 1
        ]);

        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Ejecutar Successfully created.');
    }

    public function edit($id)
    {
        $record = Ejecutar::findOrFail($id);

        $this->selected_id = $id;
		$this->id_user = $record-> id_user;
		$this->cliente = $record-> cliente;
		$this->tanque = $record-> tanque;
		$this->recibido = $record-> recibido;
		$this->salida = $record-> salida;
		$this->operador = $record-> operador;
		$this->identificacion = $record-> identificacion;
		$this->producto = $record-> producto;
		$this->remision = $record-> remision;
        $this->nota = $record-> nota;
		$this->cantidad = $record-> cantidad;
		$this->factura = $record-> factura;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'cliente' => 'required',
		'tanque' => 'required',
		'recibido' => 'required',
		'salida' => 'required',
		'operador' => 'required',
		'identificacion' => 'required',
		'producto' => 'required',
		'remision' => 'required',
		'factura' => 'required',
        'nota' => 'required',
		'cantidad' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Ejecutar::find($this->selected_id);
            $record->update([
			'id_user' => $this-> id_user,
			'cliente' => $this-> cliente,
			'tanque' => $this-> tanque,
			'recibido' => $this-> recibido,
			'salida' => $this-> salida,
			'operador' => $this-> operador,
			'identificacion' => $this-> identificacion,
			'producto' => $this-> producto,
            'nota' => $this-> nota,
			'cantidad' => $this-> cantidad,
			'remision' => $this-> remision,
			'factura' => $this-> factura
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Ejecutar Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Ejecutar::where('id', $id);
            $record->delete();
        }
    }

    public function pdf_ejecutar($id)
    {
        $ejecutar = Ejecutar::where('id', '=', $id)
        ->first();

        $pdf = \PDF::loadView('livewire.ejecutars.pdf', compact('ejecutar'));
        return $pdf->download('pipa '.$ejecutar->id.'.pdf');
    }
}
