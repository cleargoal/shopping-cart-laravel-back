<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    protected array $cereals, $fruits, $nuts, $seeds, $vegetables;
    protected Collection $categories;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            $data = include('database/seeders/src/' . $category->title . '.php');

            foreach ($data as $key => $item) {
                Product::factory()
                    ->create(['category_id' => $category->id, 'title' => $item, 'image' => $category->title . '_' . $key + 1]);
            }
        }
    }
}
