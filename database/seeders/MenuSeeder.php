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
                'id' => '2024102401',
                'menu_name' => 'Dashboard',
                'route' => '',
                'parent_id' => NULL,  // root menu
                'icon' => 'home-icon',
                'order' => 1
            ],
            [
                'id' => '2024102402',
                'menu_name' => 'Master Data',
                'route' => '',
                'parent_id' => NULL,  // root menu
                'icon' => 'master-icon',
                'order' => 2
            ],
            // master data
            [
                'id' => '2024102419',
                'menu_name' => 'Berita',
                'route' => 'news.index',
                'parent_id' => '2024102402',  // root menu
                'icon' => 'master-icon',
                'order' => 1
            ],
            [
                'id' => '2024102413',
                'menu_name' => 'Programs',
                'route' => '',
                'parent_id' => '2024102402',  // root menu
                'icon' => 'master-icon',
                'order' => 2
            ],
            [
                'id' => '2024102414',
                'menu_name' => 'Content',
                'route' => '',
                'parent_id' => '2024102402',  // root menu
                'icon' => 'master-icon',
                'order' => 3
            ],
            [
                'id' => '2024102422',
                'menu_name' => 'Banner',
                'route' => 'banner.index',
                'parent_id' => '2024102402',  // root menu
                'icon' => 'master-icon',
                'order' => 4
            ],
            [
                'id' => '2024102404',
                'menu_name' => 'Manajemen Kategory',
                'route' => '',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 1
            ],
            //category
            [
                'id' => '2024102415',
                'menu_name' => 'Kategori Konten',
                'route' => 'category-content.index',
                'parent_id' => '2024102404',  // root menu
                'icon' => 'category-icon',
                'order' => 1
            ],
            [
                'id' => '2024102416',
                'menu_name' => 'Kategori Berita',
                'route' => 'category-news.index',
                'parent_id' => '2024102404',  // root menu
                'icon' => 'category-icon',
                'order' => 1
            ],
            [
                'id' => '2024102417',
                'menu_name' => 'Kategori Programs',
                'route' => 'category-programs.index',
                'parent_id' => '2024102404',  // root menu
                'icon' => 'category-icon',
                'order' => 1
            ],
            [
                'id' => '2024102407',
                'menu_name' => 'Jabatan Guru',
                'route' => 'teacher-position.index',
                'parent_id' => '2024102408',  // root menu
                'icon' => 'category-icon',
                'order' => 4
            ],            [
                'id' => '2024102418',
                'menu_name' => 'Guru',
                'route' => 'teacher.index',
                'parent_id' => '2024102408',  // root menu
                'icon' => 'category-icon',
                'order' => 4
            ],
            [
                'id' => '2024102408',
                'menu_name' => 'Manajemen Guru',
                'route' => '',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 3
            ],
            [
                'id' => '2024102409',
                'menu_name' => 'Gallery',
                'route' => 'gallery.index',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 5
            ],
            [
                'id' => '2024102411',
                'menu_name' => 'Management Menu',
                'route' => 'management-menu.index',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 7
            ],
            [
                'id' => '2024102412',
                'menu_name' => 'User Management',
                'route' => '',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 6
            ],
            [
                'id' => '2024102420',
                'menu_name' => 'Contact',
                'route' => 'contact.index',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 8
            ],
            [
                'id' => '2024102421',
                'menu_name' => 'Slider',
                'route' => 'slider.index',
                'parent_id' => '2024102402',  // root menu
                'icon' => 'category-icon',
                'order' => 8
            ],
            //2024102422
        ]);
    }
}
