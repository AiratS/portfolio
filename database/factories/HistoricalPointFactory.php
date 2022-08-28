<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\HistoricalPointTypeEnum;
use App\Models\HistoricalPoint;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoricalPointFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HistoricalPoint::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'place' => $this->faker->word,
            'years' => $this->faker->word,
            'info' => $this->faker->text,
            'type' => HistoricalPointTypeEnum::EDUCATION->value,
        ];
    }
}
