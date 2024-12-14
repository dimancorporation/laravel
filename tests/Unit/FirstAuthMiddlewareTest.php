<?php

namespace Tests\Unit;

use App\Http\Middleware\FirstAuthMiddleware;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery;
use Tests\TestCase;

class FirstAuthMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    /** @var FirstAuthMiddleware */
    private $middleware;

    public function setUp(): void
    {
        parent::setUp();

        $this->middleware = new FirstAuthMiddleware();
    }

    public function testHandleUserIsFirstAuth()
    {
        $user = factory(User::class)->create(['is_first_auth' => true]);
        Auth::shouldReceive('user')->andReturn($user);

        $request = Mockery::mock(Request::class);

        $next = function () {
            return response('OK');
        };

        $response = $this->middleware->handle($request, $next);

        $this->assertEquals(302, $response->getStatusCode());
    }

    public function testHandleUserIsNotFirstAuth()
    {
        $user = factory(User::class)->create(['is_first_auth' => false]);
        Auth::shouldReceive('user')->andReturn($user);

        $request = Mockery::mock(Request::class);

        $next = function ($request) {
            return $request;
        };

        $response = $this->middleware->handle($request, $next);

        $this->assertSame($request, $response);
    }

    public function testHandleUserIsNull()
    {
        $request = Mockery::mock(Request::class);
        $next = function ($request) {
            return $request;
        };

        $request->shouldReceive('user')->andReturn(null);

        $response = $this->middleware->handle($request, $next);

        $this->assertEquals(302, $response->getStatusCode());
    }
}
