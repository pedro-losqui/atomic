<?php

namespace App\Http\Livewire\Situation;

use App\Models\Record;
use Livewire\Component;
use App\Repository\Soap;

class SituationComponent extends Component
{
    private $status;

    public $record, $view;

    protected $listeners = ['getStatus'];

    public function mount()
    {
        $this->view = false;
    }

    public function render()
    {
        return view('livewire.situation.situation-component');
    }

    public function query(Soap $soap)
    {
        $this->status = $soap->verificaDados($this->record);
        $this->view = true;
    }

    public function getStatus($id)
    {
        $this->view = false;
        $this->status = '';
        $this->record = Record::find($id);
    }

}
