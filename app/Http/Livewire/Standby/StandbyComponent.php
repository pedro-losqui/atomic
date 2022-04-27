<?php

namespace App\Http\Livewire\Standby;

use App\Models\Record;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class StandbyComponent extends Component
{
    public $note, $record;

    protected $rules = [
        'note' => 'required|string|min:15',
    ];

    protected $validationAttributes = [
        'note' => 'descrição'
    ];

    protected $listeners = ['getRecordStandby', 'getFindRecordActive'];

    public function render()
    {
        return view('livewire.standby.standby-component');
    }

    public function save()
    {
       $data = $this->validate();
       $this->record->standby = '1';
       $this->record->save();
       $this->getStandbyMoviment(['note' => 'O registro está em espera: ' . $data['note']]);
       $this->default();
       $this->modal('standbyModal', 'hide');
       return redirect()->to('/record');
    }

    public function update()
    {
        $this->record->standby = '0';
        $this->record->save();
        $this->getStandbyMoviment(['note' => 'O registro foi reativado.']);
        return redirect()->to('/record');
    }

    public function getStandbyMoviment($data)
    {
        $this->emit('getStandbyMoviment', $this->record->id, Auth::user()->id, $data);
    }

    public function getRecordStandby($id)
    {
        $this->record = Record::find($id);
    }

    public function getFindRecordActive($id)
    {
        $this->record = Record::find($id);
        $this->update();
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
