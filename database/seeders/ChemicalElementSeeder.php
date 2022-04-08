<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChemicalElement;

class ChemicalElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChemicalElement::factory(10)->create();
    }
}
