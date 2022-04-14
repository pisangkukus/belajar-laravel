<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Core>
 */
class CoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'namaBarang' => $this->faker->name(),
            'slug' => $this->faker->slug(3),
            'excerpt' => $this->faker->sentence(3),
            'description'=>$this->faker->paragraph(5),
            'harga'=>$this->faker->numberBetween(999999,11000000),
            'category_id'=>mt_rand(1,4),
            'user_id'=>mt_rand(1,10)
        ];
    }
}
