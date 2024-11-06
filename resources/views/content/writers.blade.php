@extends('layout.master')

@section('content')
<h1 class="m-5">Our Writers:</h1>
<div class="row">
    @foreach($writers as $writer)
    <div class="col mt-5">
        <img class="img-fluid w-25 mx-auto d-block m-2" src="{{ asset($writer->profile_pic) }}" alt="{{ $writer->name }}">
        <a class="text-center text-dark text-decoration-none link-primary" href="{{ route('writer.name' , $writer->name) }}"><h3>{{ $writer->name }}</h3></a>
        <p class="text-center fs-4">{{ $writer->writer_desc }}</p>
    </div>
    @endforeach
</div>
@endsection