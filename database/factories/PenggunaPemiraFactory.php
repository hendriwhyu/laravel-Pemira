<?php

namespace Database\Factories;
use Faker\Factory as Faker;

// load Faker autoloader
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PenggunaPemira>
 */
class PenggunaPemiraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        return [
            'nama_pengguna' => $faker->name(),
            'jurusan' => Arr::random(['Teknik Informatika', 'Teknik Mesin', 'Teknik Listrik']),
            'username' => $faker->userName(),
            'password' => $faker->password(),
            'level' => 'Pemilih',
            'status' => 2,
            'email' => $faker->email()
        ];
    }
}
