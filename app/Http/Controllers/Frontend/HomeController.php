<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $beritaTerkini = BeritaController::getListBerita(['*'], null, 1, 6);
        $slider = SliderController::getListSlider();
        $result = [
            'berita' => $beritaTerkini['data'],
            'slider' => $slider
        ];

        return view('frontend.pages.home', $result);
    }

    public function profile()
    {
        return view('frontend.pages.profile');
    }

    public function organization()
    {
        return view('frontend.pages.organization');
    }

    public function principalsSpeech()
    {
        return view('frontend.pages.principals-speech');
    }

    public function teacherAndStaff()
    {
        return view('frontend.pages.teacher-and-staff');
    }

    public function facilities()
    {
        $facilities = [
            [
                'title' => 'Masjid Safinatunnajah',
                'details' => [
                    "Dapat menampung 500 siswa dan karyawan",
                    "Memiliki 1 tiang bendera",
                    "Alas berupa paving block",
                    "Saluran air anti mampet",
                ],
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
            [
                'title' => 'Masjid Safinatunnajah',
                'details' => [
                    "Dapat menampung 500 siswa dan karyawan",
                    "Memiliki 1 tiang bendera",
                    "Alas berupa paving block",
                    "Saluran air anti mampet",
                ],
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
            [
                'title' => 'Masjid Safinatunnajah',
                'details' => [
                    "Dapat menampung 500 siswa dan karyawan",
                    "Memiliki 1 tiang bendera",
                    "Alas berupa paving block",
                    "Saluran air anti mampet",
                ],
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
        ];

        return view('frontend.pages.facilities', ['facilities' => $facilities]);
    }

    public function programs()
    {
        $programs = [
            [
                'title' => 'Program Kelas CIMIPA',
                'details' => "Kelas olah raga merupakan salah satu program SD Muhammadiyah Sapen yang sudah berjalan dan banyak peminatnya. Pada kelas ini, siswa dilatih untuk menjadi atlet profesional. Guru yang kompeten pada kelas ini akan mendorong siswa untuk meraih prestasi dan mengembangkan bakat yang dimiliki",
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
            [
                'title' => 'Kelas Bakat Istimewa Olah Raga',
                'details' => "Kelas olah raga merupakan salah satu program SD Muhammadiyah Sapen yang sudah berjalan dan banyak peminatnya. Pada kelas ini, siswa dilatih untuk menjadi atlet profesional. Guru yang kompeten pada kelas ini akan mendorong siswa untuk meraih prestasi dan mengembangkan bakat yang dimiliki",
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
        ];

        return view('frontend.pages.programs', ['programs' => $programs]);
    }

    public function contacts()
    {
        return view('frontend.pages.contacts');
    }

    public function news()
    {
        $news = [
            [
                'title' => 'Prestasi SD Muhammadiyah Sapen di Olimpiade Internasional',
                'body' => 'SD Muhammadiyah Sapen menyediakan berbagai sarana prasarana yang mendukung pembalajaran siswa untuk meraih prestasi akademis dan',
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
            [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
            [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
            [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
        ];

        return view('frontend.pages.news', [
            'news' => $news,
        ]);
    }

    public function newsDetail(string $slug)
    {
        $relatedNews = [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg'),
                'date' => now()->format('d M')
            ];

        return view('frontend.pages.news-detail', [
            'slug' => $slug,
            'relatedNews' => $relatedNews,
        ]);
    }

    public function searchNews(Request $request)
    {
        $news = [
            [
                'title' => 'Prestasi SD Muhammadiyah Sapen di Olimpiade Internasional',
                'body' => 'SD Muhammadiyah Sapen menyediakan berbagai sarana prasarana yang mendukung pembalajaran siswa untuk meraih prestasi akademis dan',
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
            [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
            [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
            [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
        ];

        return view('frontend.pages.search-news', ['news' => $news]);
    }

    public function galery()
    {
        $galeries = [
            [
                'title' => 'Galeri: Prestasi SD Muhammadiyah Sapen',
                'date' => 'Diposting 24 September 2024',
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
            [
                'title' => 'Galeri: Kelas WFH Membantu Siswa Beradaptasi',
                'date' => 'Diposting 24 September 2024',
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
            [
                'title' => 'Galeri: Upacara Peringatan Hari Kemerdekaan Indonesia',
                'date' => 'Diposting 24 September 2024',
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
            [
                'title' => 'Galeri: Prestasi SD Muhammadiyah Sapen',
                'date' => 'Diposting 24 September 2024',
                'bg-image' => asset('assets/images/dummy-1.jpeg')
            ],
        ];

        return view('frontend.pages.galery', ['galeries' => $galeries]);
    }

    public function galeryDetail(string $slug)
    {
        return view('frontend.pages.galery-detail');
    }
}
