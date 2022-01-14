<?php

namespace App\Http\Livewire\ChatNotification;

use App\Models\Message;
use Livewire\Component;

class ChatNotificationComponent extends Component
{
    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.chat-notification.chat-notification-component', [
            'messages' => Message::where('status', "0")->get()
        ]);
    }
}
