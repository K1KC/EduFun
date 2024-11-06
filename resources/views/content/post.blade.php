@extends('layout.master')

@section('content')
    <div class="row">
        <img class="m-4" src="{{ asset($post->thumbnail_link) }}" alt="">
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <h1 class="text-center m-5">{{ $post->title }}</h1>
            <p>{{ $post->upload_date}}  |   by {{ $post->writer->name }}</p>
            <p>Viewers: {{ $post->viewers }}</p>
            <br><br>
            <p>{{ $post->post_content }}</p>            
        </div>
        <div class="col"></div>
    </div>

@endsection