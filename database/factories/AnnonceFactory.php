<?php

namespace Database\Factories;

use App\Models\Annonce;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Annonce::class;
    public function definition()
    {
        return [
          'title'=> $this->faker->sentence(),
          'slug' => $this->faker->sentence(),
          'description' => $this->faker->paragraph(),
          'content'=> $this->faker->paragraphs(),
          'created_at' => now()
        ];
    }
}
