<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Writer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Post::class;
    public function definition(): array
    {
        return [
            'category'=> $category = $this->faker->randomelement(['Data Science', 'Network Security']),
            'title' => $category === 'Data Science'
                ? $this->faker->randomElement(['Machine Learning', 'Deep Learning', 'Natural Language Processing'])
                : $this->faker->randomElement(['Software Security', 'Network Administration', 'Popular Network Technology']),
                  
            'thumbnail_link' => 'images/' . $this->faker->image('public/images', 640, 480, null, false),
            'upload_date' => $this->faker->date(),
            'writers_id' => Writer::inRandomOrder()->first()->id,
            'viewers' => $this->faker->numberBetween(100, 50000),
            'description' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    
}
