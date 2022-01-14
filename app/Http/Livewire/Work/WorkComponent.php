<?php

namespace App\Http\Livewire\Work;

use App\Models\Record;
use Livewire\Component;

class WorkComponent extends Component
{
    public $work, $nomPosto, $nomCargo, $record_id;

    protected $listeners = ['getWork', 'updateWork'];

    public function render()
    {
        return view('livewire.work.work-component');
    }

    public function getWork($id)
    {
        $this->record_id = $id;
        $this->getData();
    }

    public function getData()
    {
        $work = Record::findOrFail($this->record_id);
        $this->nomPosto = $work->nomPosto;
        $this->nomCargo = $work->nomCargo;
    }


    public function updateWork($id)
    {
        $work = Record::findOrFail($id);
        $work->nomPosto = $this->nomPosto;
        $work->nomCargo = $this->nomCargo;
        $work->save();
    }
}
