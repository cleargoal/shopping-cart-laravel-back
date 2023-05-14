<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiscountRequest;
use App\Http\Requests\UpdateDiscountRequest;
use App\Http\Resources\CalculationResource;
use App\Http\Resources\DiscountResource;
use App\Models\Discount;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

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
     * @param StoreDiscountRequest $request
     * @return Response
     */
    public function store(StoreDiscountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Discount $discount
     *
     * @return Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDiscountRequest $request
     * @param Discount              $discount
     *
     * @return Response
     */
    public function update(UpdateDiscountRequest $request, Discount $discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Discount  $discount
     *
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
