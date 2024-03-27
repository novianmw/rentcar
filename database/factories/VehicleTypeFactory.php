<?php

namespace Database\Factories;

use App\Models\VehicleType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehicleType>
 */
class VehicleTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = VehicleType::class;
    public function definition(): array
    {
        $type = $this->faker->unique()->vehicleType;
        return [
            'type' => $type,
            'slug' => Str::slug($type)
        ];
    }
}
