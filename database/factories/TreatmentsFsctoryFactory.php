<?php

namespace Database\Factories;

use App\Models\Trestments;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreatmentsFsctoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trestments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => $this->faker->randomElement($array = array ('','Wyleczony','Zakonczony')),

            'disease_id' => $this->faker->numberBetween($min = 1, $max = 32)
        ];
    }
}
