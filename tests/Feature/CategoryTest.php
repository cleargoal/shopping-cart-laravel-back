<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    //    use RefreshDatabase;


    public function test_db_categories_count()
    {
        //        $this->seed();
        $this->assertDatabaseCount('categories', 6);
    }

    public function test_is_index_method_successful()
    {
        $response = $this->get('/api/categories');
        $response->assertStatus(200);
    }

    public function test_is_index_response_json()
    {
        $response = $this->get('api/categories');
        $this->assertInstanceOf(JsonResponse::class, $response->baseResponse);
    }

    public function test_response_structure()
    {
        $firstId = Category::first()->id;
        $response = $this->getJson('api/categories/' . $firstId);
        $response->assertJsonStructure(
            [
                'id',
                'label',
                'to',
            ]
        );
    }

}
