<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\BeritaController;
use App\Models\AllContentTranslite;
use App\Models\Contact;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {

        try {
          $lang  = 'id';
          $slider= Slider::all();
          DB::enableQueryLog();
          $berita  =AllContentTranslite::with(['ContentNews.hasCategory.transLite'])
          ->whereHas('ContentNews', function($query){
                $query->orderBy('created_at','ASC');
          })->where('lang',$lang)
          ->paginate(10);
          $gallerys = Gallery::whereNotNull('headline')->orderBy('created_at', 'asc')->get();
          return view('frontend.pages.home', compact('slider','berita','lang','gallerys'));
        } catch (\Throwable $th) {
            dd($th);
            return view('errors.404');
        }

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
        try {
            $lang  = 'id';
            $data = AllContentTranslite::with([
                'ContentContent.transLite' => function ($query) use ($lang) {
                    $query->where('lang', $lang); // Filter transLite berdasarkan lang
                },
                'ContentContent.Categorys',
                'ContentContent.Categorys.transLite' => function ($query) use ($lang) {
                    $query->where('lang', $lang); // Filter transLite pada Categorys berdasarkan lang
                }
            ])->where('lang', $lang)->first();
            return view('frontend.pages.principals-speech',compact('data','lang'));
        } catch (\Throwable $th) {
            dd($th);
            abort(404);
        }
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
        try {
            $lang = 'id';
            $programs = AllContentTranslite::with('ContentPrograms','ContentPrograms.Categorys.transLite','ContentPrograms.transLite')
            ->whereHas('ContentPrograms')->where('lang',$lang)
            ->get();
            return view('frontend.pages.programs', compact('programs'));
        } catch (\Throwable $th) {
            //throw $th;
        }

    }

    public function contacts()
    {
        try {
            $contact = Contact::latest()->first();
            return view('frontend.pages.contacts',compact('contact'));
        } catch (\Throwable $th) {

        }

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


        try {
            $lang = 'id';
            $galeries = Gallery::whereNotNull('headline')->orderBy('created_at', 'asc')->paginate(6);
            return view('frontend.pages.galery', compact('lang','galeries'));
        } catch (\Throwable $th) {
            abort(404);
        }

    }

    public function galeryDetail(string $slug)
    {
        $lang = 'id';
        if($lang == 'id'){
            $gallery = Gallery::where('slug_id', $slug)->first();
        }else{
            $gallery = Gallery::where('slug_en', $slug)->first();

        }
        return view('frontend.pages.galery-detail',compact('gallery','lang'));
    }

    public function globalSearch()
    {
        $lists = [
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

        return view('frontend.pages.global-search', [
            'lists' => $lists,
        ]);
    }
}
