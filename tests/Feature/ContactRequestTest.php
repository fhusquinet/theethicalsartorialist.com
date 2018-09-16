<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactRequestTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_name_a_mail_and_a_message_are_required_to_created_a_contact_request()
    {
        $response = $this->post( route('contact') );

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }

    /**
     * @test
     */
    public function a_valid_mail_is_required_to_created_a_contact_request()
    {
        $response = $this->post( route('contact'), [
            'name' => 'test',
            'email' => 'test',
            'message' => 'test'
        ] );

        $response->assertSessionHasErrors(['email']);
    }

    /**
     * @test
     */
    public function a_contact_request_can_be_created()
    {
        $response = $this->post( route('contact'), [
            'name' => 'test',
            'email' => 'test@test.com',
            'message' => 'test'
        ]);

        $response->assertRedirect( config('app.url') )
            ->assertSessionHas('success', 'Thanks!');

        $this->assertDatabaseHas('contact_requests', [
            'name' => 'test',
            'email' => 'test@test.com',
            'message' => 'test'
        ]);
    }
}
