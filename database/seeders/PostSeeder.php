<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
  public function run()
  {
    $posts = [
      [
        'title' => 'Introduction to Human-Computer Interaction',
        'slug' => 'introduction-to-human-computer-interaction',
        'content' => 'This article discusses the fundamentals of human-computer interaction and its importance in designing effective ...',
        'category' => 'Interactive Multimedia',
        'writer_id' => 1,
        'published_at' => now()
      ],
      [
        'title' => 'Agile Software Development Methodologies',
        'slug' => 'agile-software-development-methodologies',
        'content' => 'Agile software development is a widely adopted approach that emphasizes flexibility, collaboration, and rapid iteration. This article ...',
        'category' => 'Software Engineering',
        'writer_id' => 2,
        'published_at' => now()
      ],
      // Add more posts as needed
    ];

    foreach ($posts as $post) {
      Post::create($post);
    }
  }
}
