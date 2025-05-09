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
                'slug'  => 'dashboard',
                'route' => '',
                'parent_id' => NULL,  // root menu
                'icon' => 'home-icon',
                'order' => 1
            ],
            [
                'id'        => '2024102402',
                'menu_name' => 'Master Data',
                'slug'      => 'master-data',
                'route'     => '',
                'parent_id' => NULL,    // Gunakan NULL tanpa tanda kutip
                'icon'      => 'master-icon',
                'order'     => 2
            ],
            // master data
            [
                'id' => '2024102419',
                'menu_name' => 'Berita',
                'slug'  => 'berita',
                'route' => 'news.index',
                'parent_id' => '2024102402',  // root menu
                'icon' => 'master-icon',
                'order' => 1
            ],
            [
                'id' => '2024102413',
                'menu_name' => 'Programs',
                'slug' => 'prorgams',
                'route' => '',
                'parent_id' => '2024102402',  // root menu
                'icon' => 'master-icon',
                'order' => 2
            ],
            [
                'id' => '2024102414',
                'menu_name' => 'Content',
                'slug' => 'content',
                'route' => '',
                'parent_id' => '2024102402',  // root menu
                'icon' => 'master-icon',
                'order' => 3
            ],
            [
                'id' => '2024102422',
                'menu_name' => 'Banner',
                'slug' => 'banner',
                'route' => 'banner.index',
                'parent_id' => '2024102402',  // root menu
                'icon' => 'master-icon',
                'order' => 4
            ],
            [
                'id' => '2024102404',
                'menu_name' => 'Manajemen Kategory',
                'slug' => 'manajemen-kategory',
                'route' => '',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 1
            ],
            //category
            [
                'id' => '2024102415',
                'menu_name' => 'Kategori Konten',
                'slug' => 'kategori-konten',
                'route' => 'category-content.index',
                'parent_id' => '2024102404',  // root menu
                'icon' => 'category-icon',
                'order' => 1
            ],
            [
                'id' => '2024102416',
                'menu_name' => 'Kategori Berita',
                'slug' => 'kategori-berita',
                'route' => 'category-news.index',
                'parent_id' => '2024102404',  // root menu
                'icon' => 'category-icon',
                'order' => 1
            ],
            [
                'id' => '2024102417',
                'menu_name' => 'Kategori Programs',
                'slug' => 'kategori-programs',
                'route' => 'category-programs.index',
                'parent_id' => '2024102404',  // root menu
                'icon' => 'category-icon',
                'order' => 1
            ],
            [
                'id' => '2024102407',
                'menu_name' => 'Jabatan Guru',
                'slug' => 'jabatan-guru',
                'route' => 'teacher-position.index',
                'parent_id' => '2024102408',  // root menu
                'icon' => 'category-icon',
                'order' => 4
            ],
            [
                'id' => '2024102418',
                'menu_name' => 'Guru',
                'slug' => 'guru',
                'route' => 'teacher.index',
                'parent_id' => '2024102408',  // root menu
                'icon' => 'category-icon',
                'order' => 4
            ],
            [
                'id' => '2024102408',
                'menu_name' => 'Manajemen Guru',
                'slug' => 'manajemen-guru',
                'route' => '',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 3
            ],
            [
                'id' => '2024102409',
                'menu_name' => 'Gallery',
                'slug' => 'gallery',
                'route' => 'gallery.index',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 5
            ],
            [
                'id' => '2024102411',
                'menu_name' => 'Management Menu',
                'slug' => 'management-menu',
                'route' => 'management-menu.index',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 7
            ],
            [
                'id' => '2024102412',
                'menu_name' => 'User Management',
                'slug' => 'user-management',
                'route' => 'users.index',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 6
            ],
            [
                'id' => '2024102420',
                'menu_name' => 'Contact',
                'slug' => 'contact',
                'route' => 'contact.index',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 8
            ],
            [
                'id' => '2024102421',
                'menu_name' => 'Slider',
                'slug' => 'slider',
                'route' => 'slider.index',
                'parent_id' => '2024102402',  // root menu
                'icon' => 'category-icon',
                'order' => 8
            ],
            [
                'id' => '2024102423',
                'menu_name' => 'Role & Permission',
                'slug' => 'role',
                'route' => '',
                'parent_id' => NULL,  // root menu
                'icon' => 'category-icon',
                'order' => 0,
            ],
            [
                'id' => '2024102424',
                'menu_name' => 'Manage Role',
                'slug' => 'permission-role',
                'route' => 'permission.index',
                'parent_id' => '2024102423',  // root menu
                'icon' => 'category-icon',
                'order' => 1,
            ],
            //2024102425
        ]);
    }
}
