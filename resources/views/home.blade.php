@extends('layouts.app')

@section('content')
  <h1>Welcome to EduFun</h1>
  <p>Explore our articles on Interactive Multimedia and Software Engineering.</p>

  <h2>Recent Posts</h2>
  <ul>
    @foreach ($recentPosts as $post)
      <li><a href="{{ route('detail.show', $post->slug) }}">{{ $post->title }}</a></li>
    @endforeach
  </ul>
@endsection
