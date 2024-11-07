@extends('layouts.app')

@section('content')
  <h1>Our Writers</h1>
  <ul>
    @foreach ($writers as $writer)
      <li><a href="{{ route('writers.show', $writer->slug) }}">{{ $writer->name }}</a></li>
    @endforeach
  </ul>
@endsection
