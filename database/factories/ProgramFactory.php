<?php

namespace Database\Factories;
use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=>$this->faker->word(),
            'deskripsi'=> $this->faker->paragraph(),
            'tujuan'=>$this->faker->randomElements(['prehoops1.png', 'prehoops2.png', 'prehoops3.png', 'Group 10.png', 'Group 11.png'], 3),
            'cover' => $this->faker->randomElement(['Group 9.png', 'Group 10.png', 'Group 11.png', 'Group 12.png', 'Group 13.png']),
            'img'=>$this->faker->randomElements(['prehoops1.png', 'prehoops2.png', 'prehoops3.png', 'Group 10.png', 'Group 11.png'], 3)
        
        ];
    }
}
