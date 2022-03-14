<?php

namespace App\Http\Livewire\Appear;

use App\Models\Appear;
use Livewire\Component;

class AppearComponent extends Component
{
    public $description, $record_id;

    protected $listeners = ['getAppear'];

    protected $rules = [
        'description' => 'required|string|min:4',
    ];

    public function render()
    {
        return view('livewire.appear.appear-component', [
            'appears' => Appear::where('record_id', $this->record_id)->get()
        ]);
    }


    public function getAppear($id)
    {
        $this->record_id = $id;
    }

    public function save()
    {
        $this->validate();

        $this->firstUppercase();

        Appear::create([
            'record_id' => $this->record_id,
            'description' => $this->description,
        ]);

        $this->default();
    }

    public function delete($id)
    {
        $appear = Appear::find($id);
        $appear->delete();
    }

    public function firstUppercase()
    {
        $this->description = ucwords(mb_strtolower($this->description, 'UTF-8'));
    }

    public function default()
    {
        $this->description = '';
    }
}
