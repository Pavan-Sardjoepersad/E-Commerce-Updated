<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $products = [
            'UnderArmour Cap',
            'Nike Dunk Low Retro',
            'New Balance Sweater',
            'Adidas Originals',
            'Chicago Bulls Tracksuit',
            'Asics Track Shoes',
            'The North Face Fleece',
            'Adidas Hoodie',
            
            
        ];
        
        // to randomize products to be displayed
        // $randomProduct = $products[rand(0, count($products) - 1)];

        static $counter = 0;

        // Select the item based on the counter variable
        $randomProduct = isset($products[$counter]) ? $products[$counter] : null;
        $counter++;

        return [
            'name' => $randomProduct,
            'description' => fake()->sentence(),
            'price' => fake()->numberBetween(50,120),
            'slug' => Str::slug($randomProduct, '-')


        ];
    }
}
