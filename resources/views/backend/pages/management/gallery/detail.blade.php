@extends('backend.layout.main')
@section('css')
<link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Upload Images</h3>
                <form class="dropzone" id="dropzone-multiple" action="{{ route('upload.image-gallery',$data->id) }}" autocomplete="off"  enctype="multipart/form-data" novalidate>
                  @csrf
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
  <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Dropzone("#dropzone-multiple")
        })
    </script>
@endsection
