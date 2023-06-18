<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class AnonymousFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $uuhash = (string) Str::uuid();
        return [
            'anonymous' => $uuhash,
            'email' => $uuhash,
            'password' => $uuhash,
        ];
    }
}
