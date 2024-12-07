<?php

use App\Livewire\Components\FormTextArea;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(FormTextArea::class)
        ->assertStatus(200);
});
