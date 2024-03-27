<?php

namespace Database\Factories;

use App\Models\VehicleBrand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehicleBrand>
 */
class VehicleBrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = VehicleBrand::class;
    public function definition(): array
    {
        $brand = $this->faker->unique()->vehicleBrand;
        return [
            'brand' => $brand,
            'slug' => Str::slug($brand)
        ];
    }
}
