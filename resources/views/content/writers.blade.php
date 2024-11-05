@extends('layout.master')

@section('content')
<div class="row">
    @foreach($writers as $writer)
    <div class="col">
        <img src="{{ asset('writers/'. $writer->profile_pic) }}" alt="{{ $writer->name }}">
        <a href="{{ route('writers' , $writer->name) }}"><h1>{{ $writer->name }}</h1></a>
        <p>{{ $writer->writer_desc }}</p>
    </div>
    @endforeach
</div>
@endsection