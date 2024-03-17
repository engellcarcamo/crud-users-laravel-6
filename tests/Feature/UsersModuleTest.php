<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /** @test */
    public function it_loads_the_users_list_page()
    {
        $response = $this->get('/users');
        $response->assertStatus(200);
        $response->assertSee('User list');
    }

    /** @test */
    public function it_loads_the_user_detail_page()
    {
        $response = $this->get('/users/5');
        $response->assertStatus(200);
        $response->assertSee('showing user detail: 5');
    }

    /** @test */
    public function it_loads_the_new_users_page()
    {
        $response = $this->get('/users/new');
        $response->assertStatus(200)->assertSee('Create a new user');
    }

    /** @test */
    public function it_loads_the_user_edit_page()
    {
        // Successful test for editing a user with integer ID (e.g. 5)
        $response = $this->get('/users/5/edit');
        $response->assertStatus(200)->assertSee("Edit the user with id: 5");
        // Test to verify that editing a user with a non-integer ID (e.g. 'texts') returns a 404 error
        $response = $this->get('/users/texts/edit');
        $response->assertStatus(404);
    }
}
