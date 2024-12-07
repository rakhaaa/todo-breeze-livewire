<?php

use App\Livewire\Components\ModalRead;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ModalRead::class)
        ->assertStatus(200);
});
