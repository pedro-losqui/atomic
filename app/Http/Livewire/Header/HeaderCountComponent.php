<?php

namespace App\Http\Livewire\Header;

use App\Models\Record;
use Livewire\Component;

class HeaderCountComponent extends Component
{
    public $solicitados, $agendados, $recebidos, $concluidos, $admissional, $periodico, $demissional, $mudanca, $retorno, $transferencia;

    public function mount()
    {
        $this->countSolicitados();
        $this->countAgendados();
        $this->countRecebidos();
        $this->countConcluidos();
        $this->countAdmissional();
        $this->countPeriodico();
        $this->countMudanca();
        $this->countRetorno();
        $this->countDemissional();
        $this->countTransferencia();
    }

    public function render()
    {
        return view('livewire.header.header-count-component');
    }

    public function countSolicitados()
    {
        $this->solicitados = count(Record::where('status', 1)->where('visualization', '0')->get());
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

    public function countAdmissional()
    {
        $this->admissional = count(Record::where('status', 1)->where('visualization', '0')->where('retTipExa', '1')->get());
    }

    public function countPeriodico()
    {
        $this->periodico = count(Record::where('status', 1)->where('visualization', '0')->where('retTipExa', '2')->get());
    }

    public function countMudanca()
    {
        $this->mudanca = count(Record::where('status', 1)->where('visualization', '0')->where('retTipExa', '3')->get());
    }

    public function countRetorno()
    {
        $this->retorno = count(Record::where('status', 1)->where('visualization', '0')->where('retTipExa', '4')->get());
    }

    public function countDemissional()
    {
        $this->demissional = count(Record::where('status', 1)->where('visualization', '0')->where('retTipExa', '5')->get());
    }

    public function countTransferencia()
    {
        $this->transferencia = count(Record::where('status', 1)->where('visualization', '0')->where('retTipExa', '6')->get());
    }
}
