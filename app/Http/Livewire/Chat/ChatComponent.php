<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class ChatComponent extends Component
{
    use AuthorizesRequests;

    public function render()
    {
        return view('livewire.chat.chat-component');
    }
}
