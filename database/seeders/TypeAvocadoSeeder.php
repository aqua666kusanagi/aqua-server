<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeAvocadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_avocados=[
            [
                'type_avocado' => 'Hass',
            ],
            [
                'type_avocado' => 'Criollo',
            ],
            [
                'type_avocado' => 'Bacón',
            ],
            [
                'type_avocado' => 'Pinkerton',
            ],
            [
                'type_avocado' => 'Gwen',
            ],
            [
                'type_avocado' => 'Reed',
            ],
        ];
        DB::table('type_avocados')->insert ($type_avocados);
    }
}
