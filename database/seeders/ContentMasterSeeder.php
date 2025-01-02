<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('category_contents')->insert([
            'id'    => '0201202501',
            'title' => 'Visi',
            'slug'  => 'visi',
            'order' => '-',
            'link'  => '-',
            'images'=> '-',
        ],[
            'id'    => '0201202502',
            'title' => 'Misi',
            'slug'  => 'misi',
            'order' => '-',
            'link'  => '-',
            'images'=> '-',
        ],[
            'id'    => '0201202503',
            'title' => 'Tentang',
            'slug'  => 'tentang',
            'order' => '-',
            'link'  => '-',
            'images'=> '-',
        ],[
            'id'    => '0201202504',
            'title' => 'Selayan Pandang',
            'slug'  => 'selayan-pandang',
            'order' => '-',
            'link'  => '-',
            'images'=> '-',
        ],[
            'id'    => '0201202505',
            'title' => 'Tujuan',
            'slug'  => 'tujuan',
            'order' => '-',
            'link'  => '-',
            'images'=> '-',
        ],[
            'id'    => '0201202506',
            'title' => 'Sambutan Kepala Sekolah',
            'slug'  => 'sambutan-kepala-sekolah',
            'order' => '-',
            'link'  => '-',
            'images'=> '-',
        ],[
            'id'    => '0201202507',
            'title' => 'Fasilitas Sekolah',
            'slug'  => 'fasilitas-sekolah',
            'order' => '-',
            'link'  => '-',
            'images'=> '-',
        ],);
    }
}
