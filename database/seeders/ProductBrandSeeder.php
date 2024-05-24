<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductBrand;
use Illuminate\Support\Facades\DB;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_brand')->insert([

            [
                'name' => 'India gate',
            ],
            [
                'name' => '1313',
            ],
            [
                'name' => 'Jaaza',
            ],
            [
                'name' => 'Heer',
            ],
            [
                'name' => 'Qilla',
            ],
            [
                'name' => 'Sweetha',
            ],
            [
                'name' => 'Hanif',
            ],
            [
                'name' => 'Guruji',
            ],
            [
                'name' => 'Lal qilla',
            ],
            [
                'name' => '507',
            ],
            [
                'name' => 'Elephant',
            ],
            [
                'name' => 'Royal qilla',
            ],
            [
                'name' => 'Kohinoor',
            ],
            [
                'name' => 'Sher',
            ]

        ]);
    }
}
