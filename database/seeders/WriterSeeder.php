<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
  public function run()
  {
    $writers = [
      [
        'name' => 'John Doe',
        'slug' => 'john-doe',
        'bio' => 'John Doe is an expert in interactive multimedia and software engineering.'
      ],
      [
        'name' => 'Jane Smith',
        'slug' => 'jane-smith',
        'bio' => 'Jane Smith is a renowned professor in the field of software engineering.'
      ],
      // Add more writers as needed
    ];

    foreach ($writers as $writer) {
      Writer::create($writer);
    }
  }
}
