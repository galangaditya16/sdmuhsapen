<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('menus')->insert([
            [
                'menu_name' => 'Konten',
                'parent_id' => null,  // root menu
                'route' => 'dashboard',
                'icon' => 'home-icon',
                'order' => 1,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Manajemen Konten',
                'route' => 'manajemen-konten.index',
                'parent_id' => 1,  // root menu
                'icon' => 'news-icon',
                'order' => 1,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Kategori Konten',
                'route' => 'kategori-konten.index',
                'parent_id' => 1,  // root menu
                'icon' => 'category-icon',
                'order' => 2,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
