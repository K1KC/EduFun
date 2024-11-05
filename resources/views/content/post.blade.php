@extends('layout.master')

@section('content')
    <img src="{{ $post->thumbnail_link }}" alt="">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->upload_date}}</p>
    <p>Created by {{ $post->writer->name }}</p>
    <p>Viewers: {{ $post->viewers }}</p>
    <br><br>
    <p>{{ $post->post_content }}</p>
@endsection