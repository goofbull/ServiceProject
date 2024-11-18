<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'laravel, apim backend',
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
