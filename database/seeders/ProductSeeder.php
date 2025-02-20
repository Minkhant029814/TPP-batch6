<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products =[
            [
                'name' => 'book',
                'description' => 'To read and write',
                'price' => 120,
            ],
            [
                'name'=>'pen',
                'description'=>'To write',
                'price' => 20,
            ],
            [
                'name'=>'eraser',
                'description'=>'To delete errors',
                'price'=>10,
            ]

            ];
            foreach($products as $product){
                Products::create($product);
            }



    }
}
