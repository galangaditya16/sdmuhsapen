<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Guru',
            'slug' => 'guru',
            'order' => '1',
        ]);
        Category::create([
            'name' => 'Fasilitas',
            'slug' => 'fasilitas',
            'order' => '2',
        ]);
        Category::create([
            'name' => 'Sambutan',
            'slug' => 'sambutan',
            'order' => '3',
        ]);
        Category::create([
            'name' => 'Struktur Organisasi ',
            'slug' => 'struktur-organisasi',
            'order' => '4',
        ]);
        Category::create([
            'name' => 'Tentang',
            'slug' => 'tentang',
            'order' => '5',
        ]);
        Category::create([
            'name' => 'Sejarah',
            'slug' => 'sejarah',
            'order' => '6',
        ]);
        Category::create([
            'name' => 'Visi',
            'slug' => 'visi',
            'order' => '7',
        ]);
        Category::create([
            'name' => 'Misi',
            'slug' => 'misi',
            'order' => '8',
        ]);
        Category::create([
            'name' => 'Tujuan',
            'slug' => 'tujuan',
            'order' => '9',
        ]);

    }
}
