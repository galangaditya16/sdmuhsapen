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
                'menu_name' => 'Dashboard',
                'parent_id' => null,  // root menu
                'route' => '',
                'icon' => 'home-icon',
                'order' => 1,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Master Data',
                'parent_id' => null,  // root menu
                'route' => '',
                'icon' => 'master-icon',
                'order' => 2,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Kategori Konten',
                'route' => '',
                'parent_id' => 2,  // root menu
                'icon' => 'category-icon',
                'order' => 1,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Kategori Program',
                'route' => '',
                'parent_id' => 2,  // root menu
                'icon' => 'category-icon',
                'order' => 2,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Kategori Berita',
                'route' => '',
                'parent_id' => 3,  // root menu
                'icon' => 'category-icon',
                'order' => 2,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Jabatan Guru',
                'route' => '',
                'parent_id' => 3,  // root menu
                'icon' => 'category-icon',
                'order' => 4,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Manajemen Guru',
                'route' => '',
                'parent_id' => '',  // root menu
                'icon' => 'category-icon',
                'order' => 4,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Achievement',
                'route' => '',
                'parent_id' => '',  // root menu
                'icon' => 'category-icon',
                'order' => 5,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Landingpage Management',
                'route' => '',
                'parent_id' => '',  // root menu
                'icon' => 'category-icon',
                'order' => 3,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'User Management',
                'route' => '',
                'parent_id' => '',  // root menu
                'icon' => 'category-icon',
                'order' => 6,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'menu_name' => 'Contact',
                'route' => '',
                'parent_id' => '',  // root menu
                'icon' => 'category-icon',
                'order' => 7,
                'is_active' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
