<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = [
            'berries' => 'Berries are small, juicy and often brightly colored fruits. They are packed with vitamins, minerals, and antioxidants that are important for maintaining good health. Some common types of berries include strawberries, blueberries, raspberries, blackberries',
            'cereals' => 'Cereals are grains that are typically used for making breakfast foods such as oatmeal, granola, and cereal. They are a good source of carbohydrates, fiber, and many essential vitamins and minerals. Some types of cereals include oats, wheat, corn, and rice',
            'fruits' => 'Fruits are sweet, juicy, and nutritious foods that are an important part of a healthy diet. They are a good source of vitamins, minerals, fiber, and antioxidants. Some common types of fruits include apples, bananas, oranges, and grapes.',
            'nuts' => 'Nuts are nutrient-dense foods that are rich in healthy fats, protein, fiber, and many essential vitamins and minerals. They are often eaten as snacks or used in cooking and baking. Some common types of nuts include almonds, walnuts, cashews, and peanuts.',
            'seeds' => 'Seeds are small, nutrient-dense foods that are packed with vitamins, minerals, and healthy fats. They are often used in cooking, baking, and as a topping for salads and other dishes. Some types of seeds include flax seeds, pumpkin seeds, sunflower seeds',
            'vegetables' => 'Vegetables are a diverse group of plants that are important for maintaining good health. They are a good source of vitamins, minerals, fiber, and other essential nutrients. Some common types of vegetables include broccoli, carrots, spinach, and tomatoes.'
        ];


        foreach ($categories as $key => $category) {
            Category::factory()
                ->create(['title' => $key, 'alias' => $key, 'description' => $category]);
        }
    }
}
