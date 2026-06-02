<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $plateLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

        return [
            'car_model_id' => \App\Models\CarModel::inRandomOrder()->first()->id,
            'vin' => strtoupper($this->faker->bothify('??##############')),
            'year' => $this->faker->numberBetween(2010, 2026),
            'color' => $this->faker->randomElement(['White', 'Black', 'Silver', 'Gray', 'Red', 'Blue', 'Green', 'Yellow', 'Orange', 'Brown', 'Beige', 'Gold', 'Purple']),
            'body_type' => $this->faker->randomElement(\App\Enums\BodyType::cases()),
            'fuel_type' => $this->faker->randomElement(\App\Enums\FuelType::cases()),
            'status' => $this->faker->randomElement(\App\Enums\CarStatus::cases()),
            'plate_number_type' => $this->faker->randomElement(\App\Enums\PlateNumberType::cases()),
            'plate_code' => $plateLetters[array_rand($plateLetters)] . $plateLetters[array_rand($plateLetters)] . $plateLetters[array_rand($plateLetters)],
            'plate_number' => $this->faker->numberBetween(100, 9999),
            'odometer' => $this->faker->numberBetween(0, 250000),
            'odometer_unit' => $this->faker->randomElement(\App\Enums\OdometerUnit::cases()),
        ];
    }
}
