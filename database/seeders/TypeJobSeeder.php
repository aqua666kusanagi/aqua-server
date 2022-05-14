<?php

namespace Database\Seeders;

use App\Models\TypeJob;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'type_job' =>    'Poda',
                'description' =>    'Despuntar la planta para que ramifique y no crezca en una sola direccion',
            ],
            [
                'type_job' =>    'Abonado',
                'description' =>   'Abonar suplementos por encima de la superficie de la planta',
            ],
            [
                'type_job' =>    'Riego de agua',
                'description' =>    'Regar cantidad de agua suficiente para su frezcura',
            ],
            [
                'type_job' =>    'Cosecha',
                'description' =>    'Cortar los agucates maduros de los arboles',
            ],
            [
                'type_job' =>    'Empaquetado',
                'description' =>    'Empaquetar los aguacates para su exportacion',
            ]
        ];
        DB::table('type_jobs')->insert($data);
    }
}
