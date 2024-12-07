<?php

use App\Livewire\Components\ModalDelete;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ModalDelete::class)
        ->assertStatus(200);
});
