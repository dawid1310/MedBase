<?php

namespace Database\Factories;

use App\Models\Treatment;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreatmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Treatment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => $this->faker->randomElement($array = array ('Leczenie','Wyleczony','Zakonczony')),

            'disease_id' => $this->faker->numberBetween($min = 1, $max = 32)
        ];
    }
}
