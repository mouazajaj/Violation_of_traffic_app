<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\User;
use App\Models\Violation;
use App\Models\Violation_Type;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Violation>
 */
class ViolationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Violation::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $violation_type = Violation_Type::all()->random(1);
        return [
            'User_id' => $this->faker->randomElement(User::pluck('id')),
            'Car_Number' => $this->faker->randomElement(Car::pluck('Car_Number')),
            'type' =>   $violation_type->value('type'),
            'price' => $violation_type->value('price'),
            'location' => Str::random(10),
        ];
    }
}
