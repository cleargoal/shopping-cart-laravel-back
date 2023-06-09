<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    protected array $cereals;
    protected array $fruits;
    protected array $nuts;
    protected array $seeds;
    protected array $vegetables;
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
            $data = include('database/seeders/src/' . $category->alias . '.php');

            foreach ($data as $key => $item) {
                Product::factory()
                    ->create([
                        'category_id' => $category->id,
                        'title' => $key,
                        'slug' => Str::slug($key, '-'),
                        'image' => Str::slug($category->alias . ' ' . $key) . '.jpg',
                        'description' => $item,
                    ]);
            }
        }
    }
}
