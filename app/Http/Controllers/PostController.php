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
            $formattedCategory = 'Network Security';
        } else {
            abort(404);
        }

        $posts = Post::where('category', $formattedCategory)->with('writer')->get();

        return view('content.category', compact('posts', 'formattedCategory'));
    }

    public function getPostPerId($post_id) {
        $post = Post::where('id', $post_id)->first();
        return view('content.post', compact('post'));
    }

    public function getPostPerWriter($writer_id) {
        $posts = Post::with('writer')->where('writers_id', $writer_id)->get();
        return $posts;
    }

    public function showPopularPost() {
        $posts = Post::orderBy('viewers', 'desc')->with('writer')->paginate(3);
        return view('content.popular', compact('posts'));
    }
}
