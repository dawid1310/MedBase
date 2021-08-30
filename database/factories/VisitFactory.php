<?php

namespace Database\Factories;

use App\Models\Visit;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Visit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_id' => $this->faker->numberBetween($min = 1, $max = 9),

            'user_id' => $this->faker->numberBetween($min = 1, $max = 33),

            'day'  => $this->faker->date($format = 'Y-m-d', $min = '2021-07-01', $max = '2021-09-30'),

            'time'  => $this->faker->time($format = 'H:i', $min = '08:00', $max = '16:00'),

            'visit_type_id'  => $this->faker->numberBetween($min = 1, $max = 4)
        ];
    }
}
