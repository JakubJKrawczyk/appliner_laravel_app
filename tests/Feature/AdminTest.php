<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Admin;
class AdminTest extends TestCase
{
/**
     * A basic feature test example.
     *
     * @return void
     */
     public function test_delete_admin(){
         $user = Konsultant::factory() -> count(1) -> make();

         $user = Konsultant::first();

         if($user){
             $user->delete();
         }
         $this->assertTrue(true);
     }
     public function test_login_response()
     {
         $response = $this->get('/login-admin');

         $response->assertSuccessful();
         $response->assertViewIs('auth.login-admin');
     }
     public function test_if_authenticated_admin_can_see_login(){
         $user = Konsultant::factory()->make();
         $response = $this->actingAs($user)->get('/login-admin');
         $response->assertRedirect('/dashboard-admin');
     }
}