<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Writer;
use App\Http\Controllers\PostController;

class WriterController extends Controller
{
    public function showAllWriters() {
        $writers = Writer::all();
        return view('content.writers', compact('writers'));
    }

    public function showAllWriterPost($name) {
        $postController = app(PostController::class);
        $decoded_name = urldecode(trim($name));
        $writer = Writer::where('name', $decoded_name)->first();
        if ($writer) {
            $writer_id = $writer->id;
        } else {
            // Handle the case where the writer is not found
            return redirect()->route('writers')->with('error', 'Writer not found');
        }

        $posts = $postController->getPostPerWriter($writer_id);
        return view('content.post_per_writer', compact('posts'));
    }
}
