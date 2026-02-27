<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdminAuthFlowTest extends TestCase
{
    public function test_admin_dashboard_redirects_guests_to_login(): void
    {
        $response = $this->get('/admin');

        $response->assertRedirect(route('admin.login'));
    }

    public function test_admin_login_with_valid_credentials_redirects_to_dashboard(): void
    {
        $response = $this->post(route('admin.login.submit'), [
            'username' => (string) env('ADMIN_USERNAME', 'admin'),
            'password' => (string) env('ADMIN_PASSWORD', 'admin12345'),
        ]);

        $response->assertRedirect(route('admin.content.index'));
        $response->assertSessionHas('admin_authenticated', true);
    }
}
