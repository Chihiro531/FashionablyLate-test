<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Contacts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CategoryFactory extends Factory

{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1year');
        return [

        ];
    }
}
