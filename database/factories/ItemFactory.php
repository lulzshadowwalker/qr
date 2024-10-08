<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Item;
use App\Models\Restaurant;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => ['en' => $this->faker->word()],
            'description' => ['en' => $this->faker->paragraph()],
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'category_id' => Category::factory(),
            'restaurant_id' => Restaurant::factory(),
        ];
    }
}
