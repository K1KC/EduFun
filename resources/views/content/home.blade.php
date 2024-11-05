@extends('layout.master')

@section('content')
<div class="container-fluid p-0">
    <img src="{{ asset('images/banner.png') }}" class="img-fluid" alt="">
    <div class="postcard-list">
        <div class="row m-5 p-5 pt-3 align-self-start">
            <div class="col">
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
            </div>
        </div>
    </div>
</div>
@endsection


