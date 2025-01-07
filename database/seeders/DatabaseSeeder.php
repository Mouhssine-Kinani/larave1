<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Film;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Category::factory(5)->create();
        Film::factory(10)->create();
    }
}