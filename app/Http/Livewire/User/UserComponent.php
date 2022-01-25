<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserComponent extends Component
{
    use AuthorizesRequests;

    public $user;

    public $search, $user_id, $name, $login, $password, $password_confirm, $avatar;

    protected $rules = [
        'name' => 'required',
        'login' => 'required',
        'password' => 'required|min:8',
        'password_confirm' => 'required|same:password',
        'avatar' => 'required',
    ];

    protected $validationAttributes = [
        'name' => 'nome completo',
        'login' => 'login',
        'password' => 'senha',
        'password_confirm' => 'confirmação de senha',
        'avatar' => 'avatar',
    ];

    public function render()
    {
        $this->authorize('user.home', Auth::user()->can('user.home'));

        return view('livewire.user.user-component', [
            'users' => User::where('name', 'LIKE', "%{$this->search}%")->get()
        ]);
    }

    public function create()
    {
        $this->authorize('user.create', Auth::user()->can('user.create'));

        $this->modal('userCreate', 'show');
    }

    public function save()
    {
        $data = $this->validate();
        $this->hash();
        User::create($data);
        $this->modal('userCreate', 'hide');
        session()->flash('message', 'Usuário cadastrado com sucesso.');
        $this->default();
    }

    public function edit($id)
    {
        $this->modal('userCreate', 'show');
        $this->user = User::findOrFail($id);
        $this->user_id = $this->user->id;
        $this->name = $this->user->name;
        $this->login = $this->user->login;
    }

    public function update()
    {
        # code...
    }

    public function modal($name, $action)
    {
        $this->default();
        $this->dispatchBrowserEvent('modal', [
            'action' => $action,
            'name' => $name,
        ]);
    }

    public function hash()
    {
        $this->password = Hash::make($this->password);
    }

    public function default()
    {
        $this->user_id = '';
        $this->name = '';
        $this->login = '';
        $this->password = '';
        $this->avatar = '';
    }
}
