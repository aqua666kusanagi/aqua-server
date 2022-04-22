<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClimateTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $climate_types=[
            [
                'climate_type' => 'Calido',
            ],
            [
                'climate_type' => 'frio',
            ],
            [
                'climate_type' => 'Humedo',
            ],
            [
                'climate_type' => 'Templado',
            ],
            [
                'climate_type' => 'tropical',
            ],
            [
                'climate_type' => 'subtropical',
            ],
        ];
        DB::table('climate_types')->insert ($climate_types);
    }
}
