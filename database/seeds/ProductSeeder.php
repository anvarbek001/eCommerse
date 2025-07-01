<?php

use App\Product;
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
        factory(Product::class, 100)->create()->each(function ($product) {
            $product->stocks()->create([
                'quantity' => rand(1, 10),
                'attributes' => json_encode(
                    [
                        [
                            'attribute_id' => 1,
                            'value_id' => rand(1, 3),
                        ],
                        [
                            'attribute_id' => 2,
                            'value_id' => rand(4, 5),
                        ]
                    ]
                )
            ]);
        });
    }
}
