@extends('layout.master')

@section('content')
<h1>Popular</h1>
@foreach($posts as $post)
    @include('layout.postcard')
@endsection