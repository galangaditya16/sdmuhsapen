<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slider = new Slider();

        $slider->create([
            'title' => 'Slider Utama', 
            'path' => 'assets/images/', 
            'image' => 'cover-example.jpg'
        ]);
    }
}
