<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Table extends Component
{
    use WithPagination;

    public $model;
    public $headers;
    public $fields;
    public $perPage = 10;
    public $showCreateModal = false;
    public $showEditModal = false;
    public $showReadModal = false;
    public $showDeleteModal = false;
    public $modalTitle;
    public $selectedItem;
    public $itemData = [];
    public $message = '';
    public $showNotification = false;

    protected $listeners = ['closeModal', 'itemDeleted' => 'render'];

    public function openCreateModal()
    {
        $this->modalTitle = 'Create New Item';
        $this->fields = collect($this->fields)->map(function ($field) {
            if ($field['id'] === 'user_id' && Auth::check()) {
                $field['value'] = Auth::id();
            } else {
                $field['value'] = '';
            }
            return $field;
        })->toArray();
        $this->showCreateModal = true;
    }

    public function openEditModal($itemId)
    {
        $this->selectedItem = $itemId;
        $this->modalTitle = 'Edit Item';
        $item = $this->model::find($itemId);
        $this->fields = collect($this->fields)->map(function ($field) use ($item) {
            $field['value'] = $item->{$field['id']};
            return $field;
        })->toArray();
        $this->showEditModal = true;
    }

    public function openReadModal($itemId)
    {
        $this->selectedItem = $itemId;
        $this->modalTitle = 'View Item';
        $item = $this->model::find($itemId);
        $this->fields = collect($this->fields)->map(function ($field) use ($item) {
            $field['value'] = $item->{$field['id']};
            return $field;
        })->toArray();
        $this->showReadModal = true;
    }

    public function openDeleteModal($itemId)
    {
        $this->selectedItem = $itemId;
        $this->modalTitle = 'Confirm Deletion';
        $this->showDeleteModal = true;
    }

    public function closeModal()
    {
        $this->showCreateModal = false;
        $this->showEditModal = false;
        $this->showReadModal = false;
        $this->showDeleteModal = false;
    }

    public function delete()
    {
        $this->model::find($this->selectedItem)->delete();
        $this->showNotification('Item deleted successfully');
        $this->closeModal();
    }

    public function create()
    {
        $data = collect($this->fields)->pluck('value', 'id')->toArray();
        $data['user_id'] = Auth::id();
        $data['status'] = 'pending';
        $this->model::create($data);
        $this->showNotification('Item created successfully');
        $this->showCreateModal = false;
        $this->showNotification = true;
    }
    public function edit()
    {
        $data = collect($this->fields)->pluck('value', 'id')->toArray();
        $this->model::find($this->selectedItem)->update($data);
        $this->showNotification('Item updated successfully');
        $this->closeModal();
    }

    public function showNotification($message)
    {
        $this->message = $message;
        $this->showNotification = true;
    }

    public function render()
    {
        if (Auth::user()->role === 'admin') {
            $items = $this->model::with('user')->paginate($this->perPage);
        } else {
            $items = $this->model::with('user')->where('user_id', Auth::id())->paginate($this->perPage);
        }
        return view('livewire.components.table', compact('items'));
    }
}
