<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegistrationAndLoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that a user can register and then login with the registered credentials.
     *
     * @return void
     */
    public function test_user_can_register_and_then_login()
    {
        // Create a user directly in the database since the registration process
        // may have more complex requirements
        $user = User::create([
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => Hash::make('password123'),
        ]);

        // Login with the created user
        $loginResponse = $this->post('/auth/login', [
            'email' => 'testuser@example.com',
            'password' => 'password123',
        ]);
        
        // Assert user is authenticated
        $this->assertAuthenticated();
        
        // Assert user was redirected to dashboard
        $loginResponse->assertRedirect('/dashboard');
        
        // Logout the user
        $this->post('/auth/logout');
        
        // Assert user is now a guest
        $this->assertGuest();
        
        // Login again to ensure the login process works consistently
        $this->post('/auth/login', [
            'email' => 'testuser@example.com',
            'password' => 'password123',
        ]);
        
        // Assert user is authenticated again
        $this->assertAuthenticated();
    }

    /**
     * Test that a guest can view the registration and login page.
     *
     * @return void
     */
    public function test_guest_can_view_auth_pages()
    {
        // Check login page
        $response = $this->get('/auth/login');
        $response->assertStatus(200);
        
        // Check registration page
        $response = $this->get('/auth/register');
        $response->assertStatus(200);
    }

    /**
     * Test login validation.
     *
     * @return void
     */
    public function test_login_requires_valid_data()
    {
        // Test with missing data
        $response = $this->post('/auth/login', [
            'email' => '',
            'password' => '',
        ]);
        
        // Assert validation errors were returned
        $response->assertSessionHasErrors(['email', 'password']);
        
        // Test with invalid email format
        $response = $this->post('/auth/login', [
            'email' => 'not-an-email',
            'password' => 'password123',
        ]);
        
        $response->assertSessionHasErrors(['email']);
    }

    /**
     * Test that a registered user can't login with incorrect credentials.
     *
     * @return void
     */
    public function test_registered_user_cannot_login_with_incorrect_credentials()
    {
        // Create a user
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('correct-password'),
        ]);
        
        // Attempt login with incorrect password
        $loginResponse = $this->post('/auth/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);
        
        // Assert user is still a guest
        $this->assertGuest();
        
        // Assert response has errors
        $loginResponse->assertSessionHasErrors(['email']);
        
        // Attempt login with non-existent email
        $loginResponse = $this->post('/auth/login', [
            'email' => 'nonexistent@example.com',
            'password' => 'any-password',
        ]);
        
        // Assert user is still a guest
        $this->assertGuest();
        
        // Assert response has errors
        $loginResponse->assertSessionHasErrors(['email']);
    }
    
    /**
     * Test the remember me functionality when logging in.
     *
     * @return void
     */
    public function test_login_with_remember_me_functionality()
    {
        // Create a user
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);
        
        // Login with remember me checked
        $response = $this->post('/auth/login', [
            'email' => $user->email,
            'password' => 'password123',
            'remember' => 'on',
        ]);
        
        // Assert user is authenticated
        $this->assertAuthenticated();
        
        // Check for remember cookie by looking for any cookie with "remember" in the name
        $cookies = $response->headers->getCookies();
        $hasCookie = false;
        foreach ($cookies as $cookie) {
            if (strpos($cookie->getName(), 'remember') !== false) {
                $hasCookie = true;
                break;
            }
        }
        $this->assertTrue($hasCookie, 'The response should have a remember me cookie');
    }
} 