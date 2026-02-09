<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->unique()->phoneNumberWithExtension(),
            'job_title' => fake()->jobTitle(),
            'company' => fake()->company(),
            'country' => fake()->country(),
            'country_code' => fake()->countryCode(),
            'user_id' => User::all()->random()->id,
        ];
    }
}
