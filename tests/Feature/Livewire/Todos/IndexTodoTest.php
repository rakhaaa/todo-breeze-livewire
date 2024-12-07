<?php

use App\Livewire\Todos\IndexTodo;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(IndexTodo::class)
        ->assertStatus(200);
});
