<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('all_category_translites')->insert([
            'lang'                 => 'id',
            'id_category_content'  => '0201202501',
            'title'                => 'Visi',
            'slug'                 => 'visi',
        ],[
            'lang'                 => 'en',
            'id_category_content'  => '0201202501',
            'title'                => 'Vision',
            'slug'                 => 'vision',
        ],[
            'lang'                 => 'id',
            'id_category_content'  => '0201202502',
            'title'                => 'Misi',
            'slug'                 => 'misi',
        ],[
            'lang'                 => 'en',
            'id_category_content'  => '0201202502',
            'title'                => 'Mission',
            'slug'                 => 'mission',
        ],[
            'lang'                 => 'id',
            'id_category_content'  => '0201202503',
            'title'                => 'Tentang',
            'slug'                 => 'tentang',
        ],[
            'lang'                 => 'en',
            'id_category_content'  => '0201202503',
            'title'                => 'About',
            'slug'                 => 'about',
        ],[
            'lang'                 => 'id',
            'id_category_content'  => '0201202504',
            'title'                => 'Selayan Pandang',
            'slug'                 => 'selayan-pandang',
        ],[
            'lang'                 => 'en',
            'id_category_content'  => '0201202504',
            'title'                => 'Get To now about us',
            'slug'                 => 'get-to-now-about-us',
        ],[
            'lang'                 => 'id',
            'id_category_content'  => '0201202505',
            'title'                => 'Tujuan',
            'slug'                 => 'tujuan',
        ],[
            'lang'                 => 'en',
            'id_category_content'  => '0201202505',
            'title'                => 'Objective',
            'slug'                 => 'objective',
        ],[
            'lang'                 => 'id',
            'id_category_content'  => '0201202506',
            'title'                => 'Sambutan Kepala Sekolah',
            'slug'                 => 'sambutan-kepala-sekolah',
        ],[
            'lang'                 => 'en',
            'id_category_content'  => '0201202506',
            'title'                => 'Principal’s Welcome',
            'slug'                 => 'principal’s-welcome',
        ],[
            'lang'                 => 'id',
            'id_category_content'  => '0201202507',
            'title'                => 'Fasilitas Sekolah',
            'slug'                 => 'fasilitas-sekolah',
        ],[
            'lang'                 => 'en',
            'id_category_content'  => '0201202507',
            'title'                => 'School Facilities',
            'slug'                 => 'school-facilities',
        ]);
    }
}
