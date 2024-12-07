<?php

namespace App\Livewire\Components;

use Livewire\Component;

class FormInput extends Component
{
    public $type;
    public $label;
    public $id;
    public $placeholder;
    public $value;
    public $class;
    public $classNames;
    public $required;

    public function render()
    {
        return view('livewire.components.form-input');
    }
}
