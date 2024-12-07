<?php

namespace App\Livewire\Components;

use Livewire\Component;

class FormTextArea extends Component
{
    public $label;
    public $id;
    public $placeholder;
    public $value;
    public $class;
    public $classNames;
    public function render()
    {
        return view('livewire.components.form-text-area');
    }
}
