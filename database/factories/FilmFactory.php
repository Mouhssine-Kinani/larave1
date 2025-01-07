<?php

namespace Database\Factories;

use App\Models\Film;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    protected $model = Film::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'year' => $this->faker->year(),
            'description' => $this->faker->paragraph(),
            'category_id' => Category::factory(),
        ];
    }
}