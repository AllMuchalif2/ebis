<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mahasiswa1>
 */
class mahasiswaFactory extends Factory
{
    protected $model = Mahasiswa::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $year = fake()->numberBetween(20,23);

        $prodiCodes = [
            '240' => 'Teknik Informatika',
            '230' => 'Sistem Informasi',
            '120' => 'KA',
            '110' => 'MI',
        ];

        $prodiCode = fake()->randomElement(array_keys($prodiCodes));
        $programStudi = $prodiCodes[$prodiCode];

        $serialNumber = str_pad(fake()->unique()->numberBetween(1, 9999),4,'0',STR_PAD_LEFT);

        $nim = $year.'.'.$prodiCode.'.'.$serialNumber;
        return [
            'nim' => $nim,
            'nama' => fake()->name,
            'progdi' => $programStudi,
        ];
    }
}
