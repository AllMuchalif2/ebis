<?php

namespace Database\Factories;

use App\Models\Skripsi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skripsi>
 */
class SkripsiFactory extends Factory
{
    protected $model = Skripsi::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $KodeSkripsi = str_pad(fake()->unique()->numberBetween(1, 9999), 3, '0', STR_PAD_LEFT);
        return [
            'KodeSkripsi' => $KodeSkripsi,
            'judul' => fake()->sentence(),
            'TanggalLulus' => fake()->dateTime(),

        ];
    }
}
