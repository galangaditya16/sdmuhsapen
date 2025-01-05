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

        // $slider->create([
        //     'title' => 'Slider Utama', 
        //     'path' => 'assets/images/', 
        //     'image' => 'cover-example.jpg'
        // ]);

        $slider->create([
            'title' => 'Slider Utama', 
            'path' => 'assets/images/slider/', 
            'image' => 'slider1.jpg'
        ]);

        $slider->create([
            'title' => 'Slider Utama 2', 
            'path' => 'assets/images/slider/', 
            'image' => 'slider2.jpg'
        ]);

        $slider->create([
            'title' => 'Slider Utama 3', 
            'path' => 'assets/images/slider/', 
            'image' => 'slider3.jpg'
        ]);

        $slider->create([
            'title' => 'Slider Utama 4', 
            'path' => 'assets/images/slider/', 
            'image' => 'slider4.jpg'
        ]);

        $slider->create([
            'title' => 'Slider Utama 5', 
            'path' => 'assets/images/slider/', 
            'image' => 'slider5.jpg'
        ]);

    }
}
