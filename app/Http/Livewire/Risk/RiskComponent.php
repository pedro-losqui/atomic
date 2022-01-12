<?php

namespace App\Http\Livewire\Risk;

use App\Models\Risk;
use Livewire\Component;

class RiskComponent extends Component
{
    public $risk;

    public $physicist, $chemical, $biological, $ergonomic, $accident, $other;

    protected $listeners = ['risks' => 'save'];

    public function mount(Risk $risk)
    {
        $this->risk = $risk;
    }

    public function render()
    {
        return view('livewire.risk.risk-component');
    }

    public function save($id)
    {
        Risk::create([
            'record_id' => $id,
            'physicist' => $this->physicist,
            'chemical' => $this->chemical,
            'biological' => $this->biological,
            'ergonomic' => $this->ergonomic,
            'accident' => $this->accident,
            'other' => $this->other,
        ]);
    }
}
