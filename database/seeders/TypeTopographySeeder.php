<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeTopography;
use Illuminate\Support\Facades\DB;

class TypeTopographySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TypeTopography::factory(10)->create();
        $type_topography=[
            [
                'type_topography' => 'nombre de la topografia',
                'description' => 'descripcion general',
            ],
            [
                'type_topography' => 'nombre de la topografia',
                'description' => 'descripcion general',
            ],
        ];
        DB::table('type_topographies')->insert ($type_topography);
    }
}
