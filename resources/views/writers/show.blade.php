@extends('layouts.app')

@section('content')
  <h1>{{ $writer->name }}</h1>
  <p>{{ $writer->bio }}</p>
  <h2>Articles by {{ $writer->name }}</h2>
  <div class="grid grid-cols-3 gap-4">
    @foreach ($posts as $post)
      <div>
        <h3><a href="{{ route('detail.show', $post->slug) }}">{{ $post->title }}</a></h3>
        <p>{{ $post->content }}</p>
        <p>Published on: {{ $post->published_at }}</p>
      </div>
    @endforeach
  </div>
  {{ $posts->links() }}
@endsection
