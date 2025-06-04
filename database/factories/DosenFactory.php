<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nidn = str_pad(fake()->unique()->numberBetween(1,9999),10,'0',STR_PAD_LEFT);
        $name = fake()->name;
        $gelar = fake()->title;
        $bidang = ['Web Dev','Data Science','Mobile Dev','Analyst System','Database Administration','Cloud Engineer'];
        $keahlian = fake()->randomElement($bidang);
        $nama = $name . ',' . $gelar;
        return [
            'nidn' => $nidn,
            'nama' => $nama,
            'keahlian' => $keahlian,
        ];
    }
}
