<?php

namespace Database\Seeders;

use App\Models\Sala;
use Illuminate\Database\Seeder;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sala::factory()->create([
            'user_id' => 2,
            'name' => 'Economia Sanchez'
        ]);

        Sala::factory()->create([
            'user_id' => 3,
            'name' => 'Sala de Luis'
        ]);

        Sala::factory()->create([
            'user_id' => 4,
            'name' => 'Sala de Maria'
        ]);
    }
}
