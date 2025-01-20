@extends('backend.layout.main')
@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h3 class="card-title">Add Banner</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Title</label>
                    <div>
                        <input type="text" name="title" class="form-control" aria-describedby="slug"
                            placeholder="Enter Name title" value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Images(1 MB)</label>
                    <div>
                        <input type="file" name="image" class="form-control" aria-describedby="title"
                            accept="image/png, image/gif, image/jpeg" multiple>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <!-- TinyMCE script -->
    <script src="https://cdn.tiny.cloud/1/gafdlqc9hh36ubwwjslopo148dipwejra3hau2lsv7k2pzle/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- TinyMCE initialization -->
    <script>
        tinymce.init({
            selector: 'textarea.content', //
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
            images_upload_url: '{{ route('tiny.content') }}',
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function(callback, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.onchange = function() {
                    var file = this.files[0];
                    if (!file) {
                        return;
                    }
                    var formData = new FormData();
                    formData.append('file',
                        file);
                    fetch('{{ route('tiny.content') }}', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.location) {
                                callback(data.location, {
                                    alt: file.name
                                });
                            } else {
                                console.error('Upload gagal:', data.error);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                };

                input.click();
            }

        });
    </script>
@endsection
