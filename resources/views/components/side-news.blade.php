<div class="px-4 space-y-10">
  <div>
    <div>
      <p class="text-2xl font-bold">Berita Terbaru</p>
      <div class="block w-40 h-1 bg-biru-tua mt-1"></div>
    </div>

    <div class="grid">
      @forelse ( $currentNews as $relatedNew )
      <a href="{{ route('newsDetail', ['id' => $relatedNew->slug, 'lang' => $lang]) }}" class="block w-full">
        <div class="flex mt-5 gap-x-3 wrapper-flip-date">
          <div class="relative h-[50px] w-[100px] rounded-xl bg-cover"
          style="background-image: url('{{ !empty($relatedNew->ContentNews->images) ? asset('assets/images/news').'/'.$relatedNew->ContentNews->getFirstImage() : asset('assets/images/default.jpg') }}');">
            <div class="absolute h-full bg-gray-300 bg-opacity-70 top-0 w-full rounded-xl text-biru-tua text-lg font-bold items-center justify-center text-wrap hidden flip-date">
              <p>{{ $relatedNew->created_at->format('d M') ?? '-'}}</p>
            </div>
          </div>
          <p class="w-full">{{ $relatedNew->title ?? '-' }}</p>
        </div>
      </a>
      @empty
      @endforelse
    </div>
  </div>

  <div>
    <div>
      <p class="text-2xl font-bold">Berita Pilihan</p>
      <div class="block w-40 h-1 bg-biru-tua mt-1"></div>
    </div>
    <div class="grid">
      @foreach ($relatedNews as $relatedNew)
        <a href="{{ route('newsDetail', ['id' => $relatedNew->slug, 'lang' => $lang]) }}" class="block w-full">
          <div class="flex mt-5 gap-x-3 wrapper-flip-date">
            <div class="relative h-[50px] w-[100px] rounded-xl bg-cover"
              style="background-image: url('{{ !empty($relatedNew->ContentNews->images) ? asset('assets/images/news').'/'.$relatedNew->ContentNews->getFirstImage() : asset('assets/images/default.jpg') }}');">
              <div class="absolute h-full bg-gray-300 bg-opacity-70 top-0 w-full rounded-xl text-biru-tua text-lg font-bold items-center justify-center text-wrap hidden flip-date">
                <p>{{ $relatedNew->created_at->format('d M') ?? '-'}}</p>
              </div>
            </div>
            <p class="w-full">{{ $relatedNew->title ?? '-' }}</p>
          </div>
        </a>
      @endforeach
    </div>
  </div>
  @forelse ( $banners as $banner )
  <a href="{{ $banner->link !=  NULL ? $banner->link : '#'  }}">
    <div class="bg-cover bg-center h-40 rounded-3xl hidden md:block mt-10"
         style="background-image: url('{{ asset('assets/images/banner/').'/'.$banner->images }}'); ">
    </div>
  </a>
  @empty

  @endforelse

  </div>
</div>

