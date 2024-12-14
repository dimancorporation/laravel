<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Arr;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test to check if user index returns status 200
     *
     * @return void
     */
    public function test_user_index_returns_successful_response()
    {
        $user = factory(User::class)->create(['is_first_auth' => false]);
        $this->actingAs($user);

        factory(User::class, 10)->create();

        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    /**
     * Test to check if user can be stored successfully
     *
     * @return void
     */
    public function test_user_can_be_created()
    {
        $user = factory(User::class)->create(['is_first_auth' => false]);
        $this->actingAs($user);

        $data = factory(User::class)
            ->make()
            ->toArray();

        Arr::set($data, 'password', 'password');
        Arr::set($data, 'password_confirmation', 'password');

        $response = $this->postJson('/users', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('users', Arr::only($data, ['username', 'email', 'first_name', 'last_name']));
    }

    /**
     * Test to check if user details can be retrieved
     *
     * @return void
     */
    public function test_user_can_be_fetched()
    {
        $user = factory(User::class)->create(['is_first_auth' => false]);
        $this->actingAs($user);

        $data = factory(User::class)->create();

        $response = $this->getJson("/users/{$data->id}");

        $response->assertStatus(200);
    }

    /**
     * Test to check if user can be updated successfully
     *
     * @return void
     */
    public function test_user_can_be_updated()
    {
        $user = factory(User::class)->create(['is_first_auth' => false]);
        $this->actingAs($user);

        $data = factory(User::class)->create();

        $updatedData = [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane.doe@example.com',
        ];

        $response = $this->putJson("/users/{$data->id}", $updatedData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('users', $updatedData);
    }

    /**
     * Test to check if user can be deleted successfully
     *
     * @return void
     */
    public function test_user_can_be_deleted()
    {
        $user = factory(User::class)->create(['is_first_auth' => false]);
        $this->actingAs($user);

        $data = factory(User::class)->create();

        $response = $this->delete("/users/{$data->id}");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('users', Arr::only($data->toArray(), ['username', 'email']));
    }
}
