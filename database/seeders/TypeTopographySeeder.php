<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeTopography;
class TypeTopographySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeTopography::factory(10)->create();
    }
}
