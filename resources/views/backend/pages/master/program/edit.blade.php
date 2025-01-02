@extends('backend.layout.main')
@section('css')
    <!-- TinyMCE script -->
    <script src="https://cdn.tiny.cloud/1/gafdlqc9hh36ubwwjslopo148dipwejra3hau2lsv7k2pzle/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <!-- TinyMCE initialization -->
    <script>
        tinymce.init({
            selector: 'textarea#news', // change this value according to your HTML
            plugins: 'a_tinymce_plugin',
            a_plugin_option: true,
            height: 750,
            a_configuration_option: 400,
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen',
                'insertdatetime',
                'media', 'table', 'emoticons', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {
                    title: 'My Favorites',
                    items: 'code visualaid | searchreplace | emoticons'
                }
            },
            menubar: 'favs file edit view insert format tools table help',
            images_upload_url: '{{ route('tiny.content') }}', // Sesuaikan URL dengan server endpoint Anda
            automatic_uploads: true,
            file_picker_types: 'image', // Menentukan tipe file yang dapat diunggah (contoh: image)
            file_picker_callback: function(callback, value, meta) {
                // Membuat input file untuk memilih file dari komputer pengguna
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*'); // Batasi hanya gambar

                input.onchange = function() {
                    var file = this.files[0];

                    // Jika tidak ada file yang dipilih, keluar dari fungsi
                    if (!file) {
                        return;
                    }

                    // Membuat FormData untuk mengunggah file
                    var formData = new FormData();
                    formData.append('file',
                        file); // Pastikan nama field sesuai dengan yang diterima di server

                    // Mengirim request ke server
                    fetch('{{ route('tiny.content') }}', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Jika menggunakan CSRF token
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            // Memeriksa apakah upload berhasil
                            if (data.location) {
                                // Kirim URL gambar yang diunggah ke TinyMCE
                                callback(data.location, {
                                    alt: file.name
                                });
                            } else {
                                console.error('Upload gagal:', data.error);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                };

                input.click(); // Memanggil dialog pemilihan file
            }

        });
    </script>
@endsection
@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('programs.update',$data->id) }}" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="card-header">
                <h3 class="card-title">Update News</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Title(ID)</label>
                    @if($contentID)
                        <div>
                            <input type="text" name="title" class="form-control" aria-describedby="slug"
                                placeholder="Enter Name title" value="{{ old('title') ??  $contentID->title }}">
                            @error('title')
                                <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                            @enderror
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label required">Title(EN)</label>
                    <div>
                        @if($contentEN)
                            <input type="text" name="title_translite" class="form-control" aria-describedby="slug"
                                placeholder="Enter Name title" value="{{ old('title_translite') ?? $contentEN->title }}">
                            @error('title_translite')
                                <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                            @enderror
                        @endif
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Category</label>
                    <div>
                        <select class="form-select" name="id_category">
                            @forelse ($categorys as $category)
                                <option value="{{ $category->CategoryPrograms->id }}" {{ $data->category_id == $category->CategoryPrograms->id ? 'selected' : '' }}>{{ $category->title }}</option>
                            @empty
                                <option>Kosong</option>
                            @endforelse
                        </select>
                    </div>
                    @error('id_category')
                    <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Images</label>
                    <div>
                        <input type="file" name="images" class="form-control" aria-describedby="title"
                            accept="image/png, image/gif, image/jpeg" multiple>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Body(ID)</label>
                    <div>

                        <textarea id="news" name="body">
                            {!! $contentID->body !!}
                        </textarea>

                    </div>
                    @error('body')
                    <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label required">Body(EN)</label>
                    <div>

                        <textarea id="news" name="body_translite">
                            {!! $contentEN->body !!}
                        </textarea>

                    </div>
                    @error('body_translite')
                        <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
