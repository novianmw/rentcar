<?php
namespace Database\Factories;

use App\Models\Location;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Str;
use App\Models\VehicleBrand;
use App\Models\VehicleType;
use Faker\Provider\FakeCar;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new FakeCar($this->faker));
        $vehicle = $this->faker->vehicleArray();

        return [
            'user_id' => $this->faker->numberBetween(1,50),
            // 'vehicle_type' => $this->faker->unique(true)->randomElement(['Sedan', 'Hatchback', 'SUV', 'Sport', 'EV']),
            // 'vehicle_brand' => $this->faker->unique(true)->randomElement(['Toyota', 'Honda', 'Nissan', 'Daihatsu', 'Suzuki', 'Hyundai', 'Mitsubishi', 'Chevrolet']),
            'vehicle_type_id' => $this->faker->numberBetween(1,5),
            'vehicle_brand_id' => $this->faker->numberBetween(1,8),
            'location' => $this->faker->unique(true)->randomElement(['Jakarta', 'Semarang', 'Bali', 'Surabaya', 'Lombok']),
            'model' => $vehicle['model'],
            'slug' => Str::slug($vehicle['model']),
            'year' =>  $this->faker->numberBetween(2010, 2024),
            'color' => $this->faker->colorName(),
            'transmission' => $this->faker->vehicleGearBoxType,
            'fuel' => $this->faker->vehicleFuelType,
            'seat' => $this->faker->vehicleSeatCount,
            'price' => $this->faker->numberBetween(250000, 3000000),
            // 'published_at' => $this->faker->date(),
            // 'start_date' => '2024-01-01',
            // 'end_date' => '2025-12-31'
            // 'start_date' => $this->faker->date(),
            // 'end_date' => $this->faker->date(),
        ];
    }
    // public function definition()
    // {
    //     $this->faker->addProvider(new FakeCar($this->faker));
    //     $vehicle = $this->faker->vehicleArray();

    //     return [
    //         'user_id' => $this->faker->numberBetween(1, 20),
    //         'vehicle_type_id' => $this->faker->numberBetween(1, 5),
    //         'vehicle_brand_id' => $this->faker->numberBetween(1, 10),
    //         'location_id' => $this->faker->numberBetween(1, 5),
    //         // 'brand' => $vehicle['brand'],
    //         // 'model' => $vehicle['model'],
    //         'year' =>  $this->faker->biasedNumberBetween(2010, date('Y'), 'sqrt'),
    //         'color' => $this->faker->colorName(),
    //         'transmission' => $this->faker->vehicleGearBoxType,
    //         'fuel' => $this->faker->vehicleFuelType,
    //         'seat' => $this->faker->vehicleSeatCount,
    //         'price' => $this->faker->numerify('###000'),
    //     ];
    // }
}