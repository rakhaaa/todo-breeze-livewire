<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ModalRead extends Component
{
    public $title;
    public $fields;
    public $showModal = false;
    public $items = [];

    protected $listeners = ['openReadModal', 'closeModal'];

    public function openReadModal($title, $fields, $items)
    {
        $this->title = $title;
        $this->fields = $fields;
        $this->items = $items;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.components.modal-read');
    }
}
