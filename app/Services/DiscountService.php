<?php

namespace App\Services;

use App\Models\Discount;

class DiscountService
{
    /**
     * Calculate Discounts
     *
     * @param
     */
    public function prepareDiscounts()
    {
        $discounts = Discount::all();
    }
}
