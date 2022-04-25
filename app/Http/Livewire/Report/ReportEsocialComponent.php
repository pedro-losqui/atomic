<?php

namespace App\Http\Livewire\Report;

use App\Models\Company;
use Livewire\Component;
use App\Exports\InvoicesExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Repository\Guzzle\GuzzleQuery;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ReportEsocialComponent extends Component
{
    use AuthorizesRequests;

    public $from, $to, $group;

    protected $rules = [
        'group' => 'required',
    ];

    protected $validationAttributes = [
        'group' => 'grupo de empresas',
    ];

    public function mount()
    {
       $this->from = date('2022-01-10');
       $this->to = date('Y-m-d');
    }

    public function render()
    {
        $this->authorize('reportEsocial.home', Auth::user()->can('reportEsocial.home'));

        return view('livewire.report.report-esocial-component');
    }

    public function generate()
    {
        $this->validate();

        $codigo = $this->getCodigo();
        $nome = $this->getNome();

        $export = new InvoicesExport($this->query($codigo, $this->from, $this->to), $nome);

        if ($this->group == 0) {
            $group = "Outras Empresas";
        } else {
            $group = "Grupo Elis";
        }

        return Excel::download($export, 'relatario de erros (' . $group . ')' .'.xlsx');
    }

    public function query($codigo, $from, $to)
    {
        $query = new GuzzleQuery();
        return $query->querySoc($codigo, $from, $to);
    }

    public function getCodigo()
    {
        $codigo = [];

        $companies = Company::where('elis', $this->group)->get();

        foreach ($companies as $value) {
            array_push($codigo, $value->code);
        }

        return $codigo;
    }

    public function getNome()
    {
        $nome = [];

        $companies = Company::where('elis', $this->group)->get();

        foreach ($companies as $value) {
            array_push($nome, $value->company_name);
        }

        return $nome;
    }
}
