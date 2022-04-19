<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CompanyComponent extends Component
{
    use WithPagination;

    public $company, $code, $company_name, $import, $pendency, $esocial, $elis;

    public $edit, $search;

    protected $rules = [
        'code' => 'required|string',
        'company_name' => 'required|string',
        'import' => 'required',
        'pendency' => 'required',
        'esocial' => 'required',
    ];

    protected $validationAttributes = [
        'code' => 'código',
        'company_name' => 'razão social',
        'import' => 'importação',
        'pendency' => 'pendência',
        'esocial' => 'eSocial',
    ];

    public function mount()
    {
        $this->edit = false;
    }

    public function render()
    {
        return view('livewire.company.company-component', [
            'companies' => Company::where('company_name', 'LIKE', "%{$this->search}%")
            ->orderBy('id', 'ASC')
            ->paginate(10)
        ]);
    }

    public function save()
    {
        $this->uppercase();

        Company::create($this->validate());
        $this->dispatchBrowserEvent('alert', ['message' => 'Empresa cadastrada com sucesso.']);
        $this->default();
    }

    public function edit($id)
    {
        $this->company = Company::findOrFail($id);
        $this->code = $this->company->code;
        $this->company_name = $this->company->company_name;
        $this->import = $this->company->import;
        $this->pendency = $this->company->pendency;
        $this->esocial = $this->company->esocial;

        $this->edit = true;
    }

    public function update()
    {
        $this->uppercase();

        $this->company->update([
            'code' => $this->code,
            'company_name' => $this->company_name,
            'import' => $this->import,
            'pendency' => $this->pendency,
            'esocial' => $this->esocial
        ]);
        $this->dispatchBrowserEvent('alert', ['message' => 'Dados atualizados com sucesso.']);
        $this->default();
        $this->edit = false;
    }

    public function uppercase()
    {
        $this->company_name = strtoupper($this->company_name);
    }

    public function historic($id)
    {
        $this->emit('getId', $id);
        $this->modal('companyModal', 'show');
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
        $this->code = '';
        $this->company_name = '';
        $this->import = '';
        $this->pendency = '';
        $this->esocial = '';
    }
}
