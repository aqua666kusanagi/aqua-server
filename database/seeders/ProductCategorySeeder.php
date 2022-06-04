<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ProductCategory::factory(10)->create();
        $data = [
            [
                'description' =>    'Categoria 1',
            ],
            [
                'description' =>   'Categoria 2',
            ],
            [
                'description' =>    'Categoria extra',
            ],
        ];
        DB::table('product_categories')->insert($data);
    }
}
