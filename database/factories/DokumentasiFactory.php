<?php

namespace Database\Factories;
use App\Models\Dokumentasi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokumentasi>
 */
class DokumentasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'galery_id' => $this->faker->numberBetween(1, 5),
            'foto'=>$this->faker->randomElements(['prehoops1.png', 'prehoops2.png', 'prehoops3.png', 'Group 10.png', 'Group 11.png'], null)
        ];
    }
}
