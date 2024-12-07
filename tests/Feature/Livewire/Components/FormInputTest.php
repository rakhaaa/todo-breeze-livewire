<?php

use App\Livewire\Components\FormInput;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(FormInput::class)
        ->assertStatus(200);
});
