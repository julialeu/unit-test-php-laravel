<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Attributes\Test;

class UserTest extends TestCase
{
    #[Test]
    public function it_can_create_a_user_instance()
    {
        $user = new User([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'password' => Hash::make('password123'),
        ]);

        $this->assertEquals('Jane Doe', $user->name);
        $this->assertEquals('jane@example.com', $user->email);
        $this->assertTrue(Hash::check('password123', $user->password));
    }

    #[Test]
    public function it_can_check_if_email_is_valid()
    {
        $user = new User(['email' => 'invalid-email']);

        $this->assertFalse(filter_var($user->email, FILTER_VALIDATE_EMAIL));
    }
}
