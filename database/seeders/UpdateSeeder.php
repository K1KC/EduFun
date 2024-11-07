<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Faker\Factory as Faker;
use App\Models\Post;

class UpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        Post::all()->each(function ($post) use ($faker) {
            // Generate a random image URL (using a service like picsum.photos)
            $imageUrl = 'https://picsum.photos/1344/840?image=' . $post->id;
            
            // Update the post's thumbnail_link with the generated URL
            $post->update(['thumbnail_link' => $imageUrl]);
        });
    }
}
