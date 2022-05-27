<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnonymousRequest;
use App\Http\Requests\UpdateAnonymousRequest;
use App\Models\Anonymous;

class AnonymousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnonymousRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnonymousRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anonymous  $anonymous
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnonymousRequest $request, Anonymous $anonymous)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anonymous  $anonymous
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anonymous $anonymous)
    {
        //
    }
}
