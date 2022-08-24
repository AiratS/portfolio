<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Personal;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personal::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->regexify('[A-Za-z0-9]{1024}'),
            'speciality' => $this->faker->regexify('[A-Za-z0-9]{1024}'),
            'info' => $this->faker->text,
            'cv_url' => $this->faker->regexify('[A-Za-z0-9]{1024}'),
            'cv_label' => $this->faker->regexify('[A-Za-z0-9]{1024}'),
            'lang' => $this->faker->word,
        ];
    }
}
