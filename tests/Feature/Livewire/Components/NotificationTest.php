<?php

use App\Livewire\Components\Notification;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Notification::class)
        ->assertStatus(200);
});
