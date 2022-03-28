<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ejecutar;
use App\Models\Elementos;
use App\Models\User;
use App\Models\Tareas;
use DB;
use Image;

class Ejecutars extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_user, $cliente, $tanque, $recibido, $salida, $operador, $identificacion, $producto, $nota, $cantidad, $remision, $factura, $producto_tanqute, $cantidad_antes, $cantidad_despues, $energia, $suspender, $trillada_antes, $trillada_despues;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
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
						->orWhere('producto_tanqute', 'LIKE', $keyWord)
						->orWhere('cantidad_antes', 'LIKE', $keyWord)
						->orWhere('cantidad_despues', 'LIKE', $keyWord)
						->orWhere('energia', 'LIKE', $keyWord)
						->orWhere('suspender', 'LIKE', $keyWord)
						->orWhere('trillada_antes', 'LIKE', $keyWord)
						->orWhere('trillada_despues', 'LIKE', $keyWord)
						->paginate(10),
        ]);
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
		$this->producto_tanqute = null;
		$this->cantidad_antes = null;
		$this->cantidad_despues = null;
		$this->energia = null;
		$this->suspender = null;
		$this->trillada_antes = null;
		$this->trillada_despues = null;
    }

    public function store()
    {
        $this->validate([
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

        Ejecutar::create([
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
			'factura' => $this-> factura,
			'producto_tanqute' => $this-> producto_tanqute,
			'cantidad_antes' => $this-> cantidad_antes,
			'cantidad_despues' => $this-> cantidad_despues,
			'energia' => $this-> energia,
			'suspender' => $this-> suspender,
			'trillada_antes' => $this-> trillada_antes,
			'trillada_despues' => $this-> trillada_despues
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
		$this->nota = $record-> nota;
		$this->cantidad = $record-> cantidad;
		$this->remision = $record-> remision;
		$this->factura = $record-> factura;
		$this->producto_tanqute = $record-> producto_tanqute;
		$this->cantidad_antes = $record-> cantidad_antes;
		$this->cantidad_despues = $record-> cantidad_despues;
		$this->energia = $record-> energia;
		$this->suspender = $record-> suspender;
		$this->trillada_antes = $record-> trillada_antes;
		$this->trillada_despues = $record-> trillada_despues;

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
		'nota' => 'required',
		'cantidad' => 'required',
		'cantidad_antes' => 'required',
		'cantidad_despues' => 'required',
		'energia' => 'required',
		'suspender' => 'required',
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
			'factura' => $this-> factura,
			'producto_tanqute' => $this-> producto_tanqute,
			'cantidad_antes' => $this-> cantidad_antes,
			'cantidad_despues' => $this-> cantidad_despues,
			'energia' => $this-> energia,
			'suspender' => $this-> suspender,
			'trillada_antes' => $this-> trillada_antes,
			'trillada_despues' => $this-> trillada_despues
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

        $usuario = User::where('id', '=', auth()->user()->id)
        ->first();

        $pdf = \PDF::loadView('livewire.ejecutars.pdf', compact('ejecutar', 'usuario'));
        return $pdf->download('pipa '.$ejecutar->id.'.pdf');
    }
}
