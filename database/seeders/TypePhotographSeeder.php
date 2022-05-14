<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TypePhotograph;
class TypePhotographSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TypePhotograph::factory(10)->create();
        $data = [
            [
                'type_photograph' =>    '',
                'description' =>    '',
            ],
        ];
        DB::table('type_photographs')->insert($data);
    }
}
