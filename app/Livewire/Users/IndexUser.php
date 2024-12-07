<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class IndexUser extends Component
{
    public function render()
    {
        return view('livewire.users.index-user', [
            'users' => User::latest()->get()
        ]);
    }
}
