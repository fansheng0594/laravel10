<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_registration_screen_can_be_rended(): void
    {
        $response = $this->get('/signup');

        $response->assertStatus(200);
    }

    public function test_new_user_can_register(): void
    {
        $response = $this->post('/signup', [
            'name' => 'Jane',
            'email' => 'jane@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
