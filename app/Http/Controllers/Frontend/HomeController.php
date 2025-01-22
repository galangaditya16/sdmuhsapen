<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\BeritaController;
use App\Models\AllCategoryTranslite;
use App\Models\AllContentTranslite;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\TeacherPositionnew;
use Database\Seeders\TeacherPosition;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {

        try {
            $lang  = 'id';
            $slider = Slider::all();
            DB::enableQueryLog();
            $berita  = AllContentTranslite::with(['ContentNews.hasCategory.transLite'])
                ->whereHas('ContentNews', function ($query) {
                    $query->orderBy('created_at', 'ASC');
                })->where('lang', $lang)
                ->latest()
                ->paginate(10);
            $gallerys = Gallery::orderBy('created_at', 'asc')->get();
            return view('frontend.pages.home', compact('slider', 'berita', 'lang', 'gallerys'));
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
                'ContentContent' => function ($query) {
                    $query->where('id_category', '201202506');
                },
                'ContentContent.Categorys.transLite' => function ($query) use ($lang) {
                    $query->where('lang', $lang); // Filter transLite pada Categorys berdasarkan lang
                },
            ])
                ->whereNotNull('id_content')
                ->where('lang', $lang)->first();
            return view('frontend.pages.principals-speech', compact('data', 'lang'));
        } catch (\Throwable $th) {
            dd($th);
            abort(404);
        }
    }

    public function teacherAndStaff()
    {
        try {
            $lang = 'id';
            $positions = AllCategoryTranslite::with(['CategoryTeacher' => function ($query) {
                $query->orderBy('order', 'ASC'); // Urutkan relasi
            }, 'CategoryTeacher.Guru', 'CategoryTeacher.transLite'])
                ->whereNotNull('id_teacher_position')
                ->where('lang', $lang)
                ->get()
                ->sortBy(function ($item) {
                    return $item->CategoryTeacher->order ?? null;
                });
            return view('frontend.pages.teacher-and-staff', compact('lang', 'positions'));
        } catch (\Throwable $th) {
            dd($th);
            abort(404);
        }
    }

    public function facilities()
    {
        try {
            $lang = 'id';
            $facilities = AllContentTranslite::with(['ContentContent' => function ($query) {
                $query->where('id_category', '201202507');
            }, 'ContentContent.transLite', 'ContentContent.Categorys', 'ContentContent.Categorys.transLite'])
                ->whereHas('ContentContent', function ($query) use ($lang) {
                    $query->where('lang', $lang);
                    $query->where('id_category', '201202507');
                })
                ->whereNotNull('id_content')
                ->where('lang', $lang)
                ->get();
            return view('frontend.pages.facilities', compact('facilities', 'lang'));
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function programs()
    {
        try {
            $lang = 'id';
            $programs = AllContentTranslite::with('ContentPrograms', 'ContentPrograms.Categorys.transLite', 'ContentPrograms.transLite')
                ->whereHas('ContentPrograms')->where('lang', $lang)
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
            $captcha = Str::random(6);
            return view('frontend.pages.contacts', compact('contact', 'captcha'));
        } catch (\Throwable $th) {
        }
    }

    public function news()
    {
        $lang = 'id';
        $berita  = AllContentTranslite::with(['ContentNews.hasCategory.transLite'])
            ->whereHas('ContentNews', function ($query) {
                $query->orderBy('created_at', 'ASC');
            })->where('lang', $lang)
            ->latest()
            ->paginate(10);

        return view('frontend.pages.news', [
            'news' => $berita,
        ]);
    }

    public function newsDetail(string $slug, $lang)
    {
        try {
            $relatedNews = AllContentTranslite::with('ContentNews', 'ContentNews.hasCategory', 'ContentNews.hasCategory.transLite')
                ->whereHas('ContentNews.hasCategory.transLite', function ($query) use ($lang) {
                    $query->where('lang', $lang);
                })
                ->whereNotNull('id_news')
                ->where('lang', $lang)
                ->where('slug', $slug)
                ->first();
            if($relatedNews != null){
                if ($relatedNews->ContentNews->hasCategory !== null) {
                    $title = $relatedNews->ContentNews->hasCategory->transLite->firstWhere('lang', $lang);
                } else {
                    throw new \Exception('An error occurred. Please try again later.');
                }
                return view('frontend.pages.news-detail', [
                    'title' => $title ?? '-',
                    'relatedNews' => $relatedNews,
                ]);
            }else{
                abort(404);
            }

        } catch (\Throwable $th) {
            dd($th);
            abort(404);
        }
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
            $galeries = Gallery::orderBy('created_at', 'asc')->paginate(6);
            return view('frontend.pages.galery', compact('lang', 'galeries'));
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function galeryDetail(string $slug)
    {
        $lang = 'id';
        if ($lang == 'id') {
            $gallery = Gallery::where('slug_id', $slug)->first();
        } else {
            $gallery = Gallery::where('slug_en', $slug)->first();
        }
        return view('frontend.pages.galery-detail', compact('gallery', 'lang'));
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
