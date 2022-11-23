<?php

namespace Database\Seeders;

use App\Models\User;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'GOKOU',
            'email' => 'gokou@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'GOMA',
        //     'tags' => 'goma',
        //     'company' => 'NEGREROS',
        //     'location' => 'Chile',
        //     'email' => 'negrero@gmail.com',
        //     'website' => 'negreros.cl',
        //     'description' => 'se busca flayte culiao del duoc pa pagarle'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
