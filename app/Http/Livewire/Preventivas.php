<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Preventiva;
use App\Models\User;
use Carbon\Carbon;

class Preventivas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $descripcion, $estatus, $fecha;
    public $updateMode = false;

    public function render()
    {
        $users = User::where('id', '=', auth()->user()->id)->first();

		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.preventivas.view', compact('users'), [
            'preventivas' => Preventiva::latest()
						->orWhere('descripcion', 'LIKE', $keyWord)
						->orWhere('estatus', 'LIKE', $keyWord)
						->orWhere('fecha', 'LIKE', $keyWord)
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
		$this->estatus = null;
		$this->fecha = null;
    }

    public function store()
    {
        $this->validate([
            'descripcion' => 'required',
            ]);

        $current = Carbon::now()->toDateString();

        Preventiva::create([
            'id_user' => auth()->user()->id,
			'elemento' => $this-> elemento,
            'estado' => '1',
			'fecha' => $current,
			'descripcion' => $this-> descripcion,
			'estatus' => 'solicitud'
        ]);

        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Preventiva Successfully created.');
    }

    public function edit($id)
    {
        $record = Preventiva::findOrFail($id);

        $this->selected_id = $id;
        $this->id_user = $record-> id_user;
        $this->elemento = $record-> elemento;
		$this->descripcion = $record-> descripcion;
		$this->estatus = $record-> estatus;
		$this->fecha = $record-> fecha;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
        ]);

        if ($this->selected_id) {
			$record = Preventiva::find($this->selected_id);
            $record->update([
			'descripcion' => $this-> descripcion,
			'estatus' => $this-> estatus,
			'fecha' => $this-> fecha
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Preventiva Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Preventiva::where('id', $id);
            $record->delete();
        }
    }
}
