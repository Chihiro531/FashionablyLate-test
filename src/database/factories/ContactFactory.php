<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Contacts;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();

        $date = $this->faker->dateTimeBetween('-1year');
        return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'gender' => $faker->numberBetween(1, 3),
        'email' => $faker->unique()->safeEmail(),
        'tel' => $faker->phoneNumber(),
        'address' => $faker->address(),
        'building' => $faker->address(),
        'category_id' => $faker->numberBetween(1, 100),
        'detail' => $faker->text(30),
        'created_at' => $date,
        'updated_at' => $date,
        ];
    }
}
