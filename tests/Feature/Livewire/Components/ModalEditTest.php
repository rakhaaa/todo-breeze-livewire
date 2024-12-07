<?php

use App\Livewire\Components\ModalEdit;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ModalEdit::class)
        ->assertStatus(200);
});
