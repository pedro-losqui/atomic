<?php

namespace App\Http\Livewire\Search;

use App\Models\Record;
use Livewire\Component;

class SearchComponent extends Component
{
    public $search, $results;

    public function render()
    {
        return view('livewire.search.search-component');
    }

    public function searchRecord()
    {
        $this->results = '';
        $this->results =  Record::where('nomColaborador', 'LIKE', "%{$this->search}%")
        ->get(['id', 'nomColaborador', 'visualization', 'status', 'retTipExa']);
    }

    public function view($id)
    {
        $this->emit('find', $id);
        $this->search = '';
    }

    public function clear()
    {
        $this->search = '';
        $this->results = '';
    }
}
