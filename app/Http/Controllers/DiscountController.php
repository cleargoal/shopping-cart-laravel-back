<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiscountRequest;
use App\Http\Requests\UpdateDiscountRequest;
use App\Http\Resources\CalculationResource;
use App\Http\Resources\DiscountResource;
use App\Models\Discount;
use App\Services\DiscountService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(DiscountResource::collection(Discount::all()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiscountRequest  $request
     * @return Response
     */
    public function store(StoreDiscountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiscountRequest  $request
     * @param  \App\Models\Discount  $discount
     * @return Response
     */
    public function update(UpdateDiscountRequest $request, Discount $discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discount  $discount
     * @return Response
     */
    public function destroy(Discount $discount)
    {
        //
    }

    /**
     * Return discounts for calculation
     * @return JsonResponse
     */
    public function calculation(): JsonResponse
    {
        return response()->json(CalculationResource::collection(Discount::all()));
    }
}
