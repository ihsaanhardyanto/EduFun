@extends('layouts.app')

@section('content')
  <h1>{{ $post->title }}</h1>
  <p>{{ $post->content }}</p>
  <p>Published on: {{ $post->published_at }}</p>
  <p>By: <a href="{{ route('writers.show', $post->writer->slug) }}">{{ $post->writer->name }}</a></p>
@endsection
