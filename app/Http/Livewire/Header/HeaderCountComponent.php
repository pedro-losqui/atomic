<?php

namespace App\Http\Livewire\Header;

use App\Models\Record;
use Livewire\Component;

class HeaderCountComponent extends Component
{
    public $solicitados, $agendados, $recebidos, $concluidos;

    public function mount()
    {
        $this->countSolicitados();
        $this->countAgendados();
        $this->countRecebidos();
        $this->countConcluidos();
    }

    public function render()
    {
        return view('livewire.header.header-count-component');
    }

    public function countSolicitados()
    {
        $this->solicitados = count(Record::where('status', 1)->get());
    }

    public function countAgendados()
    {
        $this->agendados = count(Record::where('status', 2)->get());
    }

    public function countRecebidos()
    {
        $this->recebidos = count(Record::where('status', 3)->get());
    }

    public function countConcluidos()
    {
        $this->concluidos = count(Record::where('status', 4)->get());
    }
}
