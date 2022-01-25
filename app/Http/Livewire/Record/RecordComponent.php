<?php

namespace App\Http\Livewire\Record;

use App\Models\Record;
use Livewire\Component;
use App\Repository\Soap;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RecordComponent extends Component
{
    use WithPagination, AuthorizesRequests;

    public $record;

    public $search, $attendance, $status, $from, $to, $date, $note;

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
        $this->authorize('record.home', Auth::user()->can('record.home'));

        return view('livewire.record.record-component', [
            'records' =>  Record::where('visualization', '0')
            ->where(function ($query) {
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
        $this->authorize('record.update', Auth::user()->can('record.update'));

        $this->record = Record::find($id);
        $this->modal('recordUpdate', 'show');
    }

    public function updateStatus()
    {
        $this->record->status ++;
        $this->record->save();
        $this->emit('moviment', $this->record->id, Auth::user()->id, $this->record->status);
        $this->modal('recordUpdate', 'hide');
        session()->flash('message.success', 'Status atualizado com sucesso.');
    }

    public function updatePrint()
    {
        $this->emit('risks', $this->record->id);
        $this->emit('updateWork', $this->record->id);
        $this->record->print = '1';
        $this->record->save();
        $this->emit('moviment', $this->record->id, Auth::user()->id, 5);
    }

    public function completion(Soap $soap)
    {
        $this->record->datExe = $this->validate()['date'];
        $this->record->save();
        $soap->RetornaCadastro($this->record);
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
        $this->getStatus();
    }

    public function findRecord($id)
    {
        $this->authorize('record.delete', Auth::user()->can('record.delete'));

        $this->record = Record::find($id);
        $this->modal('inactivationModal', 'show');
        $this->getRecord();
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

    public function getRecord()
    {
        $this->emit('getRecord', $this->record->id);
    }

    public function getStatus()
    {
        $this->emit('getStatus', $this->record->id);
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
