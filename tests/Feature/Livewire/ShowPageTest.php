<?php

use App\Livewire\ShowPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ShowPage::class)
        ->assertStatus(200);
});
