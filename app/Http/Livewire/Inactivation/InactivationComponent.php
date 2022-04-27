<?php

namespace App\Http\Livewire\Inactivation;

use App\Models\Record;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class InactivationComponent extends Component
{
    public $note, $record;

    protected $listeners = ['getRecord'];

    protected $rules = [
        'note' => 'required|string|min:15',
    ];

    protected $validationAttributes = [
        'note' => 'descrição'
    ];

    public function render()
    {
        return view('livewire.inactivation.inactivation-component');
    }

    public function save()
    {
       $data = $this->validate();
       $this->record->visualization = '1';
       $this->record->save();
       $this->getInactivationMoviment(['note' => 'Registro inativado: ' . $data['note']]);
       $this->default();
       $this->modal('inactivationModal', 'hide');
    }

    public function getInactivationMoviment($data)
    {
        $this->emit('getInactivationMoviment', $this->record->id, Auth::user()->id, $data);
    }

    public function getRecord($id)
    {
        $this->record = Record::find($id);
    }

    public function modal($name, $action)
    {
        $this->default();
        $this->dispatchBrowserEvent('modal', [
            'action' => $action,
            'name' => $name,
        ]);
    }

    public function default()
    {
        $this->note = '';
    }
}
