@extends('layout.master')

@section('content')
    <h1 class="text-center m-5">{{ $formattedCategory }}</h1>
    @foreach ($posts as $post)
    <div class="row m-5 p-5 pt-3 align-self-start">
        <div class="col">
            @include('layout.postcard', [
                'post_id' => $post->id,
                'title' => $post->title,
                'thumbnail_link' => $post->thumbnail_link,
                'upload_date'=> $post->upload_date,
                'writer'=> $post->writer->name,
                'viewers' => $post->viewers,
                'description' => $post->description,
            ])
        </div>
    </div>
    @endforeach
    
@endsection