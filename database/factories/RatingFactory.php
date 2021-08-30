<?php

namespace Database\Factories;

use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rate'  => $this->faker->numberBetween($min = 1, $max = 5),

            'doctor_id' => $this->faker->numberBetween($min = 1, $max = 9),

            'user_id' => $this->faker->numberBetween($min = 1, $max = 33)
        ];
    }
}
