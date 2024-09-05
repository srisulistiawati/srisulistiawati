<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_produk' => 'P' . $this->faker->unique()->numerify('####'),  // Format id_produk seperti P0001
            'total_harga' => $this->faker->randomFloat(2, 50000, 200000), // total_harga antara 50k - 200k
            'ongkir' => $this->faker->randomFloat(2, 5000, 30000), // ongkir antara 5k - 30k
        ];
    }
}
