<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_compare_products()
    {
        $prodCount = Product::all()->count();
        $this->assertGreaterThan(100, $prodCount);
    }

    public function test_is_index_method_successful()
    {
        $response = $this->get('/api/products');
        $response->assertStatus(200);
    }

    public function test_is_index_response_json()
    {
        $response = $this->get('api/products');
        $this->assertInstanceOf(JsonResponse::class, $response->baseResponse);
    }
}
