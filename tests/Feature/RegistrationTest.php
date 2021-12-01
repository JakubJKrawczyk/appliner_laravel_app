<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_if_can_register(){
        $response = $this->post('/register', [
        'email'=>'jacob@gamil.com',
        'password'=>'jacob123',
        'password_confirmation' => 'jacob123',
        'first_name'=>'jacob',
        'second_name'=>'kowalski',
        'phone_number'=>'123321123',
        ]);

        $response->assertRedirect('/dashboard');
    }

    
}
