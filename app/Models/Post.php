<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  protected $fillable = ['title', 'slug', 'content', 'category', 'writer_id', 'published_at'];

  public function writer()
  {
    return $this->belongsTo(Writer::class);
  }
}
