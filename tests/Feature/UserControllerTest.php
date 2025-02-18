<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use PHPUnit\Framework\Attributes\Test;

class UserControllerTest extends TestCase
{
    /* use RefreshDatabase;

    #[Test]
    public function it_can_list_users()
    {
        User::factory(5)->create();

        $response = $this->getJson('/api/users');

        $response->assertStatus(200)
                 ->assertJsonCount(5);
    } */

    //#[Test]
   /*  public function it_can_create_a_user_via_api()
    {
        $response = $this->postJson('/api/users', [
            'name' => 'New User',
            'email' => 'newuser@example.com',
            'password' => 'password123',
        ]);

        $response->assertStatus(201)
                 ->assertJson(['message' => 'User created successfully']);
    } */
}
