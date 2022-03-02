<?php

namespace Database\Seeders;

use App\Models\Privacypolicy;
use Illuminate\Database\Seeder;

class PrivacypolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Privacypolicy::factory()->count(5)->create();
    }
}
