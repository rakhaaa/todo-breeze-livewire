<?php

use App\Livewire\Users\IndexUser;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(IndexUser::class)
        ->assertStatus(200);
});
