<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            'Berries',
            'Banana',
            'Orange',
            'Strawberry',
            'Apple',
            'Kiwi',
            'Grape fruit',
            'Melon',
            'Papaya',
            'Pear',
            'Pine apple',
        ];

        foreach ($products as $product) {
            \App\Models\Product::create([
                'name'  => $product,
                'price' => random_int(1, 3) . '.' . random_int(2, 9),
                'vat'   => 9,
            ]);
        }
    }
}
