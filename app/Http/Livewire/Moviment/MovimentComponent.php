<?php

namespace App\Http\Livewire\Moviment;

use App\Models\Moviment;
use Livewire\Component;

class MovimentComponent extends Component
{
    public $moviment, $record_id;

    protected $listeners = ['getMoviments', 'moviment', 'completion'];

    protected $rules = [
        'moviment.note' => 'required|string|min:4',
    ];

    public function mount(Moviment $moviment)
    {
        $this->moviment = $moviment;
    }

    public function render()
    {
        return view('livewire.moviment.moviment-component', [
            'moviments' => Moviment::where('record_id', $this->record_id)->get()
        ]);
    }

    public function getMoviments($id)
    {
        $this->record_id = $id;
    }

    public function moviment($record_id, $user_id, $status)
    {
        Moviment::create([
            'user_id' =>  $user_id,
            'record_id' => $record_id,
            'note' => $this->notes($status),
        ]);
    }

    public function notes($status)
    {
        switch ($status) {
            case '2':
                return 'O status do registro foi atualizado para agendado.';
                break;
            case '3':
                return 'O status do registro foi atualizado para recebido.';
                break;
            case '4':
                return 'O atendimento foi finalizado.';
                break;
            case '5':
                return 'Kit de atendimento gerado.';
                break;
        }
    }

    public function save()
    {
        $this->validate();
        Moviment::create([
            'user_id' => 1,
            'record_id' => $this->record_id,
            'datSta' => $this->getDate(),
            'horSta' => $this->getHour(),
            'note' => $this->moviment->note,
        ]);
        $this->default();
    }

    public function getDate()
    {
        return date('d/m/Y');
    }

    public function getHour()
    {
        $partes = explode(":", date("H:i"));
        $minutos = $partes[0]*60+$partes[1];
        return ($minutos);
    }

    public function default()
    {
        $this->moviment->note = '';
    }

}
