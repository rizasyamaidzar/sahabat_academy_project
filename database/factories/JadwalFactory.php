<?php

namespace Database\Factories;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jadwal>
 */
class JadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'hari'=>$this->faker->word(),
            'jam_mulai'=>$this->faker->time(),
            'jam_selesai'=>$this->faker->time(),
            'lokasi'=> $this->faker->paragraph(),
            'program_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
