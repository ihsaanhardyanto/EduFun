@extends('layouts.app')

@section('content')
  <h1>{{ $category }} Articles</h1>
  <div class="grid grid-cols-3 gap-4">
    @foreach ($posts as $post)
      <div>
        <h2><a href="{{ route('detail.show', $post->slug) }}">{{ $post->title }}</a></h2>
        <p>{{ $post->content }}</p>
        <p>Published on: {{ $post->published_at }}</p>
        <p>By: <a href="{{ route('writers.show', $post->writer->slug) }}">{{ $post->writer->name }}</a></p>
      </div>
    @endforeach
  </div>
  {{ $posts->links() }}
@endsection
