<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ModalEdit extends Component
{
    public $title;
    public $fields;
    public $showModal = false;
    public $itemId = null;

    protected $listeners = ['openEditModal', 'closeModal'];

    public function openEditModal($title, $fields, $itemId)
    {
        $this->title = $title;
        $this->fields = $fields;
        $this->itemId = $itemId;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.components.modal-edit');
    }
}
