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

            'day'  => $this->faker->dateTimeBetween('-1 month', '+1 month'),

            'time'  => $this->faker->randomElement($array = array ('08:00','08:20','08:40', '09:00', '09:20', '09:40', '10:00')),

            'visit_type_id'  => $this->faker->numberBetween($min = 1, $max = 4),

            'patient_desc'  => $this->faker->text($maxNbChars = 200)

        ];
    }
}
