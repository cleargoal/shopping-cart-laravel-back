<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnonymousRequest;
use App\Http\Requests\UpdateAnonymousRequest;
use App\Models\Anonymous;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class AnonymousController extends Controller
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
     * @param StoreAnonymousRequest $request
     * @param Anonymous $anonymous
     * @return JsonResponse
     */
    public function store(StoreAnonymousRequest $request, Anonymous $anonymous)
    {
        $anonymous->uuid = Str::uuid();
        $anonymous->save();
        return response()->json($anonymous->uuid);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anonymous  $anonymous
     * @return Response
     */
    public function show(Anonymous $anonymous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnonymousRequest  $request
     * @param  \App\Models\Anonymous  $anonymous
     * @return Response
     */
    public function update(UpdateAnonymousRequest $request, Anonymous $anonymous)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anonymous  $anonymous
     * @return Response
     */
    public function destroy(Anonymous $anonymous)
    {
        //
    }
}
