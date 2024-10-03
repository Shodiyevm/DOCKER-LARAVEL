<?php

namespace Database\Seeders;

use App\Models\Ad; // E'lon modelini import qilish
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    public function run()
    {
        Ad::factory(50)->create();

    }
}
