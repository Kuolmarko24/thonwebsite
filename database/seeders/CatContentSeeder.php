<?php

namespace Database\Seeders;

use App\Models\CatContent;
use Illuminate\Database\Seeder;

class CatContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CatContent::factory()->count(5)->create();
    }
}
