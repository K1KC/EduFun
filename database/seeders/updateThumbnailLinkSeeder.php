<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;

class updateThumbnailLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('id_ID');

        Post::all()->each(function ($post) use ($faker) {
            $post->update(['thumbnail_link' => 'storage/thumbnail/'. $faker->image('public/storage/thumbnail', 640, 480, null, true)
            ]);
        });
    }
}
