<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        ProductType::create([
            'name' => 'Giày thể thao',
            'status' => '1',
        ],
        [
            'name'=>'Giày tây âu',
            'status'=>'1'

        ]);
    }
}
