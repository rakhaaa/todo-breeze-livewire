<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ModalCreate extends Component
{
    public $title;
    public $fields;
    public $showModal = false;

    protected $listeners = ['openCreateModal', 'closeModal'];

    public function openCreateModal($title, $fields)
    {
        $this->title = $title;
        $this->fields = $fields;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.components.modal-create');
    }
}
