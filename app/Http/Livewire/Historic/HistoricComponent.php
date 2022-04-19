<?php

namespace App\Http\Livewire\Historic;

use Livewire\Component;
use App\Models\Historic;
use Illuminate\Support\Facades\Auth;

class HistoricComponent extends Component
{

    public $company_id, $note;

    protected $rules = [
        'note' => 'required|string',
    ];

    protected $validationAttributes = [
        'note' => 'anotações',
    ];

    protected $listeners = ['getId'];

    public function render()
    {

        return view('livewire.historic.historic-component', [
            'historic' => Historic::where('company_id', $this->company_id)->get()
        ]);
    }

    public function getId($id)
    {
        $this->company_id = $id;
    }

    public function save()
    {
        $this->validate();

        Historic::create([
            'user_id' => Auth::user()->id,
            'company_id' => $this->company_id,
            'note' => $this->note,
        ]);

        $this->dispatchBrowserEvent('alert', ['message' => 'Registro criado com sucesso.']);
        $this->default();
    }

    public function default()
    {
        $this->note = '';
    }

}
