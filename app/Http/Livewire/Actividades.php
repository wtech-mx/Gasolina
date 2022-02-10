<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Actividade;

class Actividades extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $actividad, $estado, $periocidad;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.actividades.view', [
            'actividades' => Actividade::latest()
						->orWhere('actividad', 'LIKE', $keyWord)
						->orWhere('estado', 'LIKE', $keyWord)
						->orWhere('periocidad', 'LIKE', $keyWord)
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
		$this->actividad = null;
		$this->estado = null;
		$this->periocidad = null;
    }

    public function store()
    {
        $this->validate([
		'actividad' => 'required',
		'estado' => 'required',
		'periocidad' => 'required',
        ]);

        Actividade::create([ 
			'actividad' => $this-> actividad,
			'estado' => $this-> estado,
			'periocidad' => $this-> periocidad
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Actividade Successfully created.');
    }

    public function edit($id)
    {
        $record = Actividade::findOrFail($id);

        $this->selected_id = $id; 
		$this->actividad = $record-> actividad;
		$this->estado = $record-> estado;
		$this->periocidad = $record-> periocidad;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'actividad' => 'required',
		'estado' => 'required',
		'periocidad' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Actividade::find($this->selected_id);
            $record->update([ 
			'actividad' => $this-> actividad,
			'estado' => $this-> estado,
			'periocidad' => $this-> periocidad
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Actividade Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Actividade::where('id', $id);
            $record->delete();
        }
    }
}
