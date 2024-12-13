<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show create user form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateUserRequest $request
     * @return Builder|Model
     */
    public function store(CreateUserRequest $request): Model
    {
        return User::query()->create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return User
     */
    public function show(User $user): User
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User  $user
     * @return User
     */
    public function edit(User $user): User
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserRequest $request
     * @param  User  $user
     * @return User
     */
    public function update(UpdateUserRequest $request, User $user): User
    {
        $user->update($request->validated());

        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $user
     * @return Response
     */
    public function destroy(User $user): Response
    {
        try {
            $user->delete();
        } catch (\Exception $e) {
            return response(['message' => 'Can\'t delete user'], 422);
        }

        return response(['message' => 'User deleted'], 204);
    }
}
