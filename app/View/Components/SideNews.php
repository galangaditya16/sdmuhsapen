<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SideNews extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $relatedNews = [
            [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg'),
                'date' => now()->format('d M')
            ],
            [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg'),
                'date' => now()->format('d M')
            ],
            [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg'),
                'date' => now()->format('d M')
            ],
        ];

        $currentNews = [
            [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg'),
                'date' => now()->format('d M')
            ],
            [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg'),
                'date' => now()->format('d M')
            ],
            [
                'title' => 'Kelas WFH Membantu Siswa Beradaptasi dengan Teknologi',
                'body' => 'Kelas WFH (Work From Home) telah menjadi tantangan sekaligus peluang bagi siswa untuk beradaptasi dengan teknologi. Berikut beberapa cara di mana pembelajaran jarak jauh...',
                'bg-image' => asset('assets/images/dummy-1.jpeg'),
                'date' => now()->format('d M')
            ],
        ];

        return view('components.side-news', [
            'relatedNews' => $relatedNews,
            'currentNews' => $currentNews,
        ]);
    }
}
