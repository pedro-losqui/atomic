<?php

namespace App\Http\Livewire\Search;

use App\Models\Record;
use Livewire\Component;

class SearchComponent extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.search.search-component', [
            'results' => Record::where('nomColaborador', 'LIKE', "%{$this->search}%")->get()
        ]);
    }

    public function view($id)
    {
        $this->emit('find', $id);
        $this->search = '';
    }
}
