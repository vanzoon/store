<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Currency;

class ProductFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $currencies = Currency::all()->pluck('id')->toArray();
    return [
      'name' => $this->faker->name(),
      'description' => $this->faker->sentence(17),
      'price' => $this->faker->numberBetween(1, 20000),
      'currencies_id' => $this->faker->randomElement($currencies),
      'categories_id' => $this->faker->numberBetween(14, 17),
      //
    ];
  }
}
