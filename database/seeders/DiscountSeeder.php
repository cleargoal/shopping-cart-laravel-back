<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default = [
            ['title' => 'At least 2 prods in diff cats exclude seeds', 'requirements' =>
                '{"requirements":[{"target":{"categories":[-1]},"items":2}],"include":[],"exclude":[{"categories":[4],"exactly":[76,82]}],"value":{"type":"perc","amount":5}}'],
            ['title' => 'At least 3 prods in cat A & 1 prod in C ', 'requirements' =>
            '{"requirements":[{"target":{"categories":[3]},"items":1}],"include":[{"target":{"categories":[1]},"items":3}],"exclude":[{"categories":[4],"exactly":[76,82]}],"value":{"type":"perc","amount":20}}',]
        ];

        foreach($default as $item) {
            Discount::factory()->create(['title' => $item['title'], 'requirements' => $item['requirements']]);
        }
    }
}
