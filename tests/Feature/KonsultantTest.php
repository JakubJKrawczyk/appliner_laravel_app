<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Konsultant;
class KonsultantTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     public function test_delete_konsultant(){
         $user = Konsultant::factory() -> count(1) -> make();

         $user = Konsultant::first();

         if($user){
             $user->delete();
         }
         $this->assertTrue(true);
     }
     public function test_login_response()
     {
         $response = $this->get('/login-konsultant');

         $response->assertSuccessful();
         $response->assertViewIs('auth.login-konsultant');
     }
     public function test_if_authenticated_konsultant_can_see_login(){
         $user = Konsultant::factory()->make();
         $response = $this->actingAs($user)->get('/login-konsultant');
         $response->assertRedirect('/dashboard-konsultant');
     }
}
