<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CategoryController extends Controller
{
  public function index()
  {
    $categories = ['Interactive Multimedia', 'Software Engineering'];
    return view('category.index', compact('categories'));
  }

  public function show($slug)
  {
    $category = $slug;
    $posts = Post::where('category', $category)->paginate(6);
    return view('category.show', compact('category', 'posts'));
  }
}
