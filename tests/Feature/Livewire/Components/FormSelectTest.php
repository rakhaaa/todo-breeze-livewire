<?php

use App\Livewire\Components\FormSelect;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(FormSelect::class)
        ->assertStatus(200);
});
