<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Difundir;

class Difundirs extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_user, $id_elemento, $fecha, $descripcion, $tipo, $inicial, $final;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.difundirs.view', [
            'difundirs' => Difundir::latest()
						->orWhere('id_user', 'LIKE', $keyWord)
						->orWhere('id_elemento', 'LIKE', $keyWord)
						->orWhere('fecha', 'LIKE', $keyWord)
						->orWhere('descripcion', 'LIKE', $keyWord)
						->orWhere('tipo', 'LIKE', $keyWord)
						->orWhere('inicial', 'LIKE', $keyWord)
						->orWhere('final', 'LIKE', $keyWord)
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
		$this->id_elemento = null;
		$this->fecha = null;
		$this->descripcion = null;
		$this->tipo = null;
		$this->inicial = null;
		$this->final = null;
    }

    public function store()
    {
        $this->validate([
		'fecha' => 'required',
		'descripcion' => 'required',
		'tipo' => 'required',
		'inicial' => 'required',
		'final' => 'required',
        ]);

        Difundir::create([ 
			'id_user' => $this-> id_user,
			'id_elemento' => $this-> id_elemento,
			'fecha' => $this-> fecha,
			'descripcion' => $this-> descripcion,
			'tipo' => $this-> tipo,
			'inicial' => $this-> inicial,
			'final' => $this-> final
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Difundir Successfully created.');
    }

    public function edit($id)
    {
        $record = Difundir::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_user = $record-> id_user;
		$this->id_elemento = $record-> id_elemento;
		$this->fecha = $record-> fecha;
		$this->descripcion = $record-> descripcion;
		$this->tipo = $record-> tipo;
		$this->inicial = $record-> inicial;
		$this->final = $record-> final;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'fecha' => 'required',
		'descripcion' => 'required',
		'tipo' => 'required',
		'inicial' => 'required',
		'final' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Difundir::find($this->selected_id);
            $record->update([ 
			'id_user' => $this-> id_user,
			'id_elemento' => $this-> id_elemento,
			'fecha' => $this-> fecha,
			'descripcion' => $this-> descripcion,
			'tipo' => $this-> tipo,
			'inicial' => $this-> inicial,
			'final' => $this-> final
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Difundir Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Difundir::where('id', $id);
            $record->delete();
        }
    }
}
