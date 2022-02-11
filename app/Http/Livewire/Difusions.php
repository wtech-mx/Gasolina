<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Difusion;

class Difusions extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $descripcion, $externa, $interna, $fecha_inicio, $fecha_final;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.difusions.view', [
            'difusions' => Difusion::latest()
						->orWhere('descripcion', 'LIKE', $keyWord)
						->orWhere('externa', 'LIKE', $keyWord)
						->orWhere('interna', 'LIKE', $keyWord)
						->orWhere('fecha_inicio', 'LIKE', $keyWord)
						->orWhere('fecha_final', 'LIKE', $keyWord)
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
		$this->descripcion = null;
		$this->externa = null;
		$this->interna = null;
		$this->fecha_inicio = null;
		$this->fecha_final = null;
    }

    public function store()
    {
        $this->validate([
		'descripcion' => 'required',
		'externa' => 'required',
		'interna' => 'required',
		'fecha_inicio' => 'required',
		'fecha_final' => 'required',
        ]);

        Difusion::create([
			'descripcion' => $this-> descripcion,
			'externa' => $this-> externa,
			'interna' => $this-> interna,
			'fecha_inicio' => $this-> fecha_inicio,
			'fecha_final' => $this-> fecha_final
        ]);

        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Difusion Successfully created.');
    }

    public function edit($id)
    {
        $record = Difusion::findOrFail($id);

        $this->selected_id = $id;
		$this->descripcion = $record-> descripcion;
		$this->externa = $record-> externa;
		$this->interna = $record-> interna;
		$this->fecha_inicio = $record-> fecha_inicio;
		$this->fecha_final = $record-> fecha_final;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'descripcion' => 'required',
		'externa' => 'required',
		'interna' => 'required',
		'fecha_inicio' => 'required',
		'fecha_final' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Difusion::find($this->selected_id);
            $record->update([
			'descripcion' => $this-> descripcion,
			'externa' => $this-> externa,
			'interna' => $this-> interna,
			'fecha_inicio' => $this-> fecha_inicio,
			'fecha_final' => $this-> fecha_final
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Difusion Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Difusion::where('id', $id);
            $record->delete();
        }
    }
}
