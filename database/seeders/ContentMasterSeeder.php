<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_contents')->insert([
            [
                'id'    => '0201202501',
                'title' => 'Visi',
                'slug'  => 'visi',
                'link'  => '-',
                'images'=> '-',
            ],
            [
                'id'    => '0201202502',
                'title' => 'Misi',
                'slug'  => 'misi',
                'link'  => '-',
                'images'=> '-',
            ],
            [
                'id'    => '0201202503',
                'title' => 'Tentang',
                'slug'  => 'tentang',
                'link'  => '-',
                'images'=> '-',
            ],
            [
                'id'    => '0201202504',
                'title' => 'Selayan Pandang',
                'slug'  => 'selayan-pandang',
                'link'  => '-',
                'images'=> '-',
            ],
            [
                'id'    => '0201202505',
                'title' => 'Tujuan',
                'slug'  => 'tujuan',
                'link'  => '-',
                'images'=> '-',
            ],
            [
                'id'    => '0201202506',
                'title' => 'Sambutan Kepala Sekolah',
                'slug'  => 'sambutan-kepala-sekolah',
                'link'  => '-',
                'images'=> '-',
            ],
            [
                'id'    => '0201202507',
                'title' => 'Fasilitas Sekolah',
                'slug'  => 'fasilitas-sekolah',
                'link'  => '-',
                'images'=> '-',
            ],
        ]);
    }
}
