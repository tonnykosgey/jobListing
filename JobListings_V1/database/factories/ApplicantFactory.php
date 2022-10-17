<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicant>
 */
class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'fname' => $this->faker->firstName(),
            'skills' => 'laravel,api, backend',
            'lname' => $this->faker->lastName(),
            'email' => $this->faker->companyEmail(),
            'phone' => $this->faker->phoneNumber(),
            'status'=>'pending',
            'cv' => $this->faker->url(),
            'description' => $this->faker->paragraph(2)
        ];
    }
}
