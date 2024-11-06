@extends('layout.master')

@section('content')
<h1 class="text-center m-5">POPULAR</h1>
@foreach($posts as $post)
    @include('layout.postcard', [
        'post_id' => $post->id,
        'title' => $post->title,
        'thumbnail_link' => $post->thumbnail_link,
        'upload_date'=> $post->upload_date,
        'writer'=> $post->writer->name,
        'viewers' => $post->viewers,
        'description' => $post->description,
    ])
@endforeach
<div class="pagination d-flex flex-column align-items-center mt-4">
    {{ $posts->links('pagination::bootstrap-4') }}
</div>

@endsection