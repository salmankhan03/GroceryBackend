<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_brand')->insert([

            [ 'name' => 'Rice' ],
            [ 'name' => 'Daal' ],
            [ 'name' => 'Beef' ],
            [ 'name' => 'Veal' ],
            [ 'name' => 'Poultry' ],
            [ 'name' => 'Goat Lamb' ],
            [ 'name' => 'Frozen' ]

        ]);
    }
}
