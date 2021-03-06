<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserComponent extends Component
{
    use AuthorizesRequests;

    public $profile;

    public $user;

    public $search, $user_id, $name, $login, $password, $password_confirm, $avatar, $acess;

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

    public function mount()
    {
        $this->profile = Role::all();
    }

    public function render()
    {
        $this->authorize('user.home', Auth::user()->can('user.home'));

        return view('livewire.user.user-component', [
            'users' => User::where('name', 'LIKE', "%{$this->search}%")
            ->orderBy('id', 'DESC')
            ->get()
        ]);
    }

    public function create()
    {
        $this->authorize('user.create', Auth::user()->can('user.create'));

        $this->modal('userCreate', 'show');
    }

    public function save()
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'login' => $this->name,
            'password' => Hash::make($this->password),
            'avatar' => $this->avatar,
        ]);
        $this->modal('userCreate', 'hide');
        session()->flash('message', 'Usuário cadastrado com sucesso.');
        $this->default();
    }

    public function edit($id)
    {
        $this->modal('userEdit', 'show');
        $this->user = User::findOrFail($id);
        $this->user_id = $this->user->id;
        $this->name = $this->user->name;
        $this->login = $this->user->login;
    }

    public function update()
    {

        $this->user->update([
            'name' => $this->name,
            'login'=> $this->login,
        ]);

        if ($this->password) {
            $this->user->update([
                'password' => Hash::make($this->password),
            ]);
        }

        if ($this->acess) {
            $this->user->assignRole($this->acess);
        }

        $this->modal('userEdit', 'hide');
    }

    public function modal($name, $action)
    {
        $this->default();
        $this->dispatchBrowserEvent('modal', [
            'action' => $action,
            'name' => $name,
        ]);
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
