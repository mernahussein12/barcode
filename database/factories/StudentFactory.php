<?php

namespace Database\Factories;

use App\Models\Student;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model =Student::class;
    public function definition(): array
    {
        return [
            'uu_id' => $this->faker->uuid, // UUID فريد
            'name' => $this->faker->name, // اسم الطالب
            'national_id' => $this->faker->unique()->numerify('###########'), // الرقم القومي
        ];
    }
}
