<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CatContent;
use App\Models\Category;

class CatContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CatContent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(4),
            'backgroundImage' => $this->faker->word,
            'description' => $this->faker->text,
            'videourl' => $this->faker->word,
            'featured' => $this->faker->boolean,
        ];
    }
}
