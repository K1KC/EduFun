<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    private function getAllPost() {
        return Post::all();
    }

    public function showAllPost() {
        $posts = $this->getAllPost();
        return view('welcome', compact('posts'));
    }

    public function showCategoryContent($category) {
        if($category == 'data-science') {
            $formattedCategory = 'Data Science';
        } elseif ($category == 'network-security') {
            $formattedCategory = 'Network Science';
        } else {
            abort(404);
        }
        $posts = Post::where('category', $formattedCategory)->with('writers')->get();

        return view('content.category', compact('posts', 'category'));
    }

    public function getPostPerTitle($title) {
        $post = Post::where('title', $title)->first();
        return view('content.post', compact('post'));
    }

    public function getPostPerWriter($writer_id) {
        $posts = Post::where('writer_id', $writer_id)->get();
        return $posts;
    }

    public function showPopularPost() {
        $posts = Post::orderBy('viewers', 'desc')->get();
        return view('content.popular', compact('posts'));
    }
}
