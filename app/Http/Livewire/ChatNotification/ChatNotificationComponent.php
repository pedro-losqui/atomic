<?php

namespace App\Http\Livewire\ChatNotification;

use App\Models\Message;
use Livewire\Component;

class ChatNotificationComponent extends Component
{
    public $notification;

    public function mount()
    {
        $this->notification();
    }

    public function render()
    {
        return view('livewire.chat-notification.chat-notification-component', [
            'messages' => Message::where('status', "0")
            ->whereNotNull('request_name')
            ->get()
        ]);
    }

    public function notification()
    {
        $this->notification = count(Message::where('status', "0")
        ->whereNotNull('request_name')
        ->get());
    }
}
