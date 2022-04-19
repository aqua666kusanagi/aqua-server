<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSoilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_soils=[
            [
                'type_soil' => 'Arcilloso',
            ],
            [
                'type_soil' => 'Limosa',
            ],
            [
                'type_soil' => 'Arenoso',
            ],
            [
                'type_soil' => 'Arenoso',
            ],
            [
                'type_soil' => 'Arenoso',
            ],
            [
                'type_soil' => 'Arenoso',
            ],
        ];
        DB::table('type_soils')->insert ($type_soils);

    }
}
