<?php

use App\Livewire\Components\ModalCreate;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ModalCreate::class)
        ->assertStatus(200);
});
