<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhenophaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phenophases=[
            [
                'phenophase' => 'Hass',
            ],
            [
                'phenophase' => 'Hass',
            ],
            [
                'phenophase' => 'Hass',
            ],
            [
                'phenophase' => 'Hass',
            ],
            [
                'phenophase' => 'Hass',
            ],

        ];
        DB::table('phenophases')->insert ($phenophases);

    }
}
