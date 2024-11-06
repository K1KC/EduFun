@extends('layout.master')
@section('content')
    <h1 class="text-center m-5">{{ $posts->first()->writer->name }}</h1>
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
@endsection