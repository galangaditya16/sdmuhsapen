<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\News;
use Database\Factories\PostFactory;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Menghasilkan 50 data palsu menggunakan factory
        \App\Models\News::factory()->count(50)->create();
    }
}
