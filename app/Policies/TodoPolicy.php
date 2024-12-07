<?php

namespace App\Policies;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TodoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->role === 'admin';
    }

    public function view(User $user, Todo $todo)
    {
        return $user->role === 'admin' || $user->id === $todo->user_id;
    }

    public function create(User $user)
    {
        return $user->role === 'admin' || $user->role === 'user';
    }

    public function update(User $user, Todo $todo)
    {
        return $user->role === 'admin' || $user->id === $todo->user_id;
    }

    public function delete(User $user, Todo $todo)
    {
        return $user->role === 'admin' || $user->id === $todo->user_id;
    }

    public function restore(User $user, Todo $todo)
    {
        return $user->role === 'admin';
    }

    public function forceDelete(User $user, Todo $todo)
    {
        return $user->role === 'admin';
    }
}
