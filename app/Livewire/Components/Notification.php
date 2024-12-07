<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Notification extends Component
{
    public $message = '';
    public $type = 'info';
    public $showNotification = false;

    protected $listeners = ['notify'];

    public function notify($message, $type = 'info')
    {
        $this->message = $message;
        $this->type = $type;
        $this->showNotification = true;
    }

    public function render()
    {
        return view('livewire.components.notification');
    }
}
