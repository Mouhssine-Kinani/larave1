<?php

namespace Database\Seeders;

use App\Models\Filem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FilemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'Two imprisoned men bond over a number of years.'
            ],
            [
                'title' => 'The Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control.'
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'Batman raises the stakes in his war on crime.'
            ],
            [
                'title' => 'Pulp Fiction',
                'description' => 'The lives of two mob hitmen, a boxer, and a pair of diner bandits intertwine.'
            ],
            [
                'title' => 'Inception',
                'description' => 'A thief who steals corporate secrets through dream-sharing technology.'
            ],
            [
                'title' => 'The Matrix',
                'description' => 'A computer programmer discovers a mysterious world.'
            ],
            [
                'title' => 'Forrest Gump',
                'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, and other historical events unfold through one man\'s perspective.'
            ],
            [
                'title' => 'Fight Club',
                'description' => 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club.'
            ],
            [
                'title' => 'Goodfellas',
                'description' => 'The story of Henry Hill and his life in the mob.'
            ],
            [
                'title' => 'The Silence of the Lambs',
                'description' => 'A young FBI cadet must receive the help of an incarcerated and manipulative cannibal killer.'
            ],
        ];

        foreach ($movies as $movie) {
            Filem::create($movie);
        }
    }
}
