<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
  use HasFactory;

  protected $fillable = ['name', 'slug', 'bio'];

  public function posts()
  {
    return $this->hasMany(Post::class);
  }
}