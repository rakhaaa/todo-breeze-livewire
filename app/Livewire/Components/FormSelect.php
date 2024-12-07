<?php

namespace App\Livewire\Components;

use Livewire\Component;

class FormSelect extends Component
{
    public $label;
    public $id;
    public $options;
    public $value;
    public $class;
    public $classNames;
    public $required;

    public function render()
    {
        return view('livewire.components.form-select');
    }
}
