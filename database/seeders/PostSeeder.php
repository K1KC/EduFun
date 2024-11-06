<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;
use App\Models\Writer;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        /* 
        Make the writer ID only from existing writer

        1) Take all ID exist in Writer and put to array and then take random element from the array (with Factory)
        $writerIds = Writer::pluck('id')->toArray();

        Post::factory(6)->create([
            // Other field seeder
            'writers_id' => fn () => $this->faker->randomElement($writerIds);
        ])

        2) Directly iterate through the writer and get random ID
        */
        
        for($i=0; $i < 15; $i++) { 
            $category = $faker->randomelement(['Data Science', 'Network Security']);
            $title = $category === 'Data Science'
                ? $faker->randomElement(['Machine Learning', 'Deep Learning', 'Natural Language Processing'])
                : $faker->randomElement(['Software Security', 'Network Administration', 'Popular Network Technology']);
            
            $thumbnailPath = $faker->image(storage_path('app/public/thumbnail'), 640, 480, null, false);
        
            Post::create ([
                'title' => $title,
                'category' => $category,
                'thumbnail_link' => 'storage/thumbnail'. basename($thumbnailPath),
                'upload_date' => $faker->date(),
                'writers_id' => Writer::inRandomOrder()->first()->id,
                'viewers' => $faker->numberBetween(100, 50000),
                'description' => $faker->paragraph,
                'post_content' => implode("\n\n", $faker->paragraphs(2)),
                'created_at' => now(),
                'updated_at' => now(),            
            ]);
        }

        // \App\Models\Post::factory(6)->create(); for faker from factory
    }
}
