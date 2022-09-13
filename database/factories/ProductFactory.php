<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 2),
            'barcode' => $this->faker->unixTime(),
            'name' => $this->faker->sentence(3),
            'slug' => $this->faker->slug(3),
            'unit_id' => $this->faker->numberBetween(1, 2),
            'buy_price' => $this->faker->randomNumber(5, true),
            'sold_price' => $this->faker->randomNumber(5, true),
            'variant' => $this->faker->word(),
            'store_stock' => $this->faker->numberBetween(1, 20),
            'storage_stock' => $this->faker->numberBetween(1, 20),
            'weight' => $this->faker->numberBetween(10, 50),
            'description' => $this->faker->paragraph(),
            'image_urls' => $this->faker->imageUrl(360, 360, 'product', true, null, false, 'jpeg')
        ];
    }
}
