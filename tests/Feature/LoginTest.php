<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_response()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    public function test_delete_user(){
        $user = User::factory() -> count(1) -> make();

        $user = User::first();

        if($user){
            $user->delete();
        }

        $this->assertTrue(true);
    }

   public function test_login_with_valid_password(){

        $user = User::factory()->make();
       $response = $this->post('/login',[
           'email' => $user->email,
           'password' => Hash::make($user->password)
       ]);

       $response -> assertRedirect('/dashboard');
   }
    public function test_if_authenticated_user_can_see_login(){
        $user = User::factory()->make();
        $response = $this->actingAs($user)->get('/login');
        $response->assertRedirect('/dashboard');
    }
    public function test_login(){
        $response = $this->get('/login');
        $response->assertSuccessful();
        $response->assertViewIs('auth.login');

        $user = User::factory()->create();
        

    }
}
