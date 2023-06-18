<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Ramsey\Uuid\UuidInterface;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     *
     * @return void
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  User   $user
     *
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     *
     * @return Response
     */
    public function destroy(User $user)
    {
        //
    }

    /**
     * Create new anonymous user
     *
     * @return JsonResponse
     */
    public function createNewAnonymous(): JsonResponse
    {
        //        $uuhash = (string) Str::uuid();
        //        $newUser = new User();
        //        $newUser->anonymous = $uuhash;
        //        $newUser->email = $uuhash;
        //        $newUser->password = $uuhash;
        //        $newUser->save();
        $newUser = User::factory()->create();
        return response()->json($newUser->anonymous);
    }
}
