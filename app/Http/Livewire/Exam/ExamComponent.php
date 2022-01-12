<?php

namespace App\Http\Livewire\Exam;

use App\Models\Exam;
use Livewire\Component;

class ExamComponent extends Component
{
    public $description, $record_id;

    protected $listeners = ['getExams'];

    protected $rules = [
        'description' => 'required|string|min:4',
    ];

    public function render()
    {
        return view('livewire.exam.exam-component', [
            'exams' => Exam::where('record_id', $this->record_id)->get()
        ]);
    }

    public function getExams($id)
    {
        $this->record_id = $id;
    }

    public function save()
    {
        $this->validate();

        Exam::create([
            'record_id' => $this->record_id,
            'description' => $this->description,
        ]);

        $this->default();
    }

    public function delete($id)
    {
        $exam = Exam::find($id);
        $exam->delete();
    }

    public function default()
    {
        $this->description = '';
    }
}
