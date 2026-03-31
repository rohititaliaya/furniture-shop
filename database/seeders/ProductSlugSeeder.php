<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = \App\Models\Product::whereNull('slug')->get();
        foreach ($products as $product) {
            $product->slug = \Illuminate\Support\Str::slug($product->name) . '-' . $product->product_id;
            $product->save();
        }
    }
}
