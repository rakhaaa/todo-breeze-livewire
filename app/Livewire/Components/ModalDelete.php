<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ModalDelete extends Component
{
    public $title;
    public $showModal = false;
    public $itemId = null;
    public $model = null;

    protected $listeners = ['openDeleteModal', 'closeModal'];

    public function openDeleteModal($title, $itemId, $model)
    {
        $this->title = $title;
        $this->itemId = $itemId;
        $this->model = $model;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function delete()
    {
        $modelClass = 'App\\Models\\' . $this->model;
        $modelClass::find($this->itemId)->delete();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.components.modal-delete');
    }
}
