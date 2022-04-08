<?php

namespace Database\Seeders;

use App\Models\ApplicationMode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicationMode::factory(10)->create();
        /*$data = [
            [
                'description' => 'en la pata de la planta'
            ]
        ];
        DB::table('application_modes')->insert($data);*/
    }
}
