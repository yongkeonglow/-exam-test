<?php

// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'tomato',
            'price' => 2.70,
            'description' => 'tomato kampung',
        ]);

        Product::create([
            'name' => 'potato',
            'price' => 4.56,
            'description' => 'potato kuala',
        ]);

        Product::create([
            'name' => 'carrot',
            'price' => 3.99,
            'description' => 'carrot taiping',
        ]);
        Product::create([
            'name' => 'watermelon',
            'price' => 9.80,
            'description' => 'watermelon Singapore',
        ]);
        Product::create([
            'name' => 'chili',
            'price' => 3.99,
            'description' => 'chili sops',
        ]);
        Product::create([
            'name' => 'vegetable',
            'price' => 9.80,
            'description' => 'vegetable set',
        ]);
        Product::create([
            'name' => 'mushroom',
            'price' => 2.70,
            'description' => 'mushroom sets',
        ]);

        Product::create([
            'name' => 'apple',
            'price' => 3.50,
            'description' => 'apple sets',
        ]);
}
}