<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
  public function index()
  {
    $writers = Writer::all();
    return view('writers.index', compact('writers'));
  }

  public function show($slug)
  {
    $writer = Writer::where('slug', $slug)->firstOrFail();
    $posts = $writer->posts()->paginate(6);
    return view('writers.show', compact('writer', 'posts'));
  }
}
