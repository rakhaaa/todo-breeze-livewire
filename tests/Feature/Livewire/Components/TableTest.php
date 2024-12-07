<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Components\Table;
use Livewire\Livewire;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class TableTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_renders_successfully()
    {
        Livewire::test(Table::class, [
            'model' => User::class,
            'headers' => ['name' => 'Name', 'email' => 'Email', 'role' => 'Role']
        ])
        ->assertStatus(200);
    }

    #[Test]
    public function it_can_search_users()
    {
        User::factory()->create(['name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'admin']);
        User::factory()->create(['name' => 'Jane Smith', 'email' => 'jane@example.com', 'role' => 'user']);

        Livewire::test(Table::class, [
            'model' => User::class,
            'headers' => ['name' => 'Name', 'email' => 'Email', 'role' => 'Role']
        ])
        ->set('searchTerm', 'Jane')
        ->assertSee('Jane Smith')
        ->assertDontSee('John Doe');
    }
}

