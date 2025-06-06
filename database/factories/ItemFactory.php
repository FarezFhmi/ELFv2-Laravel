<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FoundItem;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FoundItem>
 */
class ItemFactory extends Factory
{
    protected $model = FoundItem::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'location_found' => $this->faker->address(),
            'time_found' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'date_found' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'category_id' => $this->faker->randomElement(Category::pluck('id')),
            'path' => $this->faker->file($sourceDir = '/tmp', $targetDir = '/tmp'),
            'description' => $this->faker->sentence(),
            'status_id' => $this->faker->randomElement(['pending',]),
            'uploaded_by' => $this->faker->randomElement(User::pluck('id')),
        ];
    }
}
