<?php

// database/factories/StudentFactory.php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'address' => $this->faker->address,
            'age' => $this->faker->numberBetween(18, 25),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'school' => $this->faker->sentence(2),
        ];
    }
}

