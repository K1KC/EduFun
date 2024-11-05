@extends('layout.master')
@section('content')
    <h1>{{ $posts->writer->name }}</h1>
    @foreach($posts as $post)
        @include('layout.postcard', [
            'title' => $post->title,
            'thumbnail_link' => $post->thumbnail_link,
            'upload_date'=> $post->upload_date,
            'writer'=> $post->writer->name,
            'viewers' => $post->viewers,
            'description' => $post->description,
        ])
    @endforeach
@endsection