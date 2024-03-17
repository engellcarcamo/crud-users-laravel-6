<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
     /** @test */
 public function it_welcomes_users()
 {
     $response = $this->get('/greeting/engels/carcamo');
     $response->assertStatus(200)->assertSee('Welcome Engels carcamo');

     $response = $this->get('/greeting/engels');
     $response->assertStatus(200)->assertSee('Welcome Engels');
 }

}


