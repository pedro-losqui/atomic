<?php

namespace App\Http\Livewire\Record;

use App\Models\Record;
use Livewire\Component;
use Livewire\WithPagination;

class RecordComponent extends Component
{
    use WithPagination;

    public $record;

    public $search, $attendance, $status, $from, $to, $date;

    protected $rules = [
        'date' => 'required',
    ];

    protected $listeners = ['find'];

    public function mount(Record $record)
    {
        $this->from = date('Y-m-d', strtotime('-25 day'));
        $this->to = date('Y-m-d', strtotime('+1 day'));
        $this->status = 1;
        $this->record = $record;
    }

    public function render()
    {
        return view('livewire.record.record-component', [
            'records' =>  Record::where(function ($query) {
                $query->whereBetween('created_at', [$this->from, $this->to]);
                if ($this->attendance != 0) {
                    $query->where('retTipExa', $this->attendance);
                }
                $query->where('status', $this->status);
                $query->where('nomColaborador', 'LIKE', "%{$this->search}%");
            })
            ->orderBy('id', 'ASC')
            ->paginate(15)
        ]);
    }

    public function findStatus($id)
    {
        $this->record = Record::find($id);
        $this->modal('recordUpdate', 'show');
    }

    public function updateStatus()
    {
        $this->record->status ++;
        $this->record->save();
        $this->emit('moviment', $this->record->id, 1, $this->record->status);
        $this->modal('recordUpdate', 'hide');
    }

    public function updatePrint()
    {
        $this->emit('risks', $this->record->id);
        $this->emit('updateWork', $this->record->id);
        $this->record->print = '1';
        $this->record->save();
        $this->emit('moviment', $this->record->id, 1, 5);
    }

    public function completion()
    {
        $this->validate();
        $this->updateStatus();
        $this->default();
    }

    public function find($id)
    {
        $this->record = Record::find($id);
        $this->modal('recordModal', 'show');
        $this->getMoviments();
        $this->getExams();
        $this->getWork();
    }

    public function modal($name, $action)
    {
        $this->default();
        $this->dispatchBrowserEvent('modal', [
            'action' => $action,
            'name' => $name,
        ]);
    }

    public function getMoviments()
    {
        $this->emit('getMoviments', $this->record->id);
    }

    public function getExams()
    {
        $this->emit('getExams', $this->record->id);
    }

    public function getWork()
    {
        $this->emit('getWork', $this->record->id);
    }

    public function resetPage()
    {
        return redirect()->to('/record');
    }

    public function default()
    {
        $this->date = '';
    }
}
