@extends('layouts.app')

@section('content')
  <h1>Categories</h1>
  <ul>
    @foreach ($categories as $category)
      <li><a href="{{ route('category.show', $category) }}">{{ $category }}</a></li>
    @endforeach
  </ul>
@endsection
