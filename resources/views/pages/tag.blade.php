@extends('layouts.frontLayout.front_design')

@section('content')
@foreach($tag->posts as $post)
{{ $post->title }}
@endforeach
@endsection