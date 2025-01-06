@extends('backend.layout.main')
@section('css')
  <link href="{{ asset('assets/backend/libs/dropzone/dist/dropzone.css?1692870487') }}" rel="stylesheet"/>
@endsection
@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h3 class="card-title">Add Images</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Nama(ID)</label>
                    <div>
                        <input type="text" class="form-control" name="title_id" aria-describedby="title" placeholder="Enter Name ID" value="{{ old('name_id')}}">
                        @error('menu_name')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                  <label class="form-label required">Nama(EN)</label>
                  <div>
                      <input type="text" class="form-control" name="title_en" aria-describedby="title" placeholder="Enter Name EN" value="{{ old('name_en')}}">
                      @error('menu_name')
                          <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
                <div class="mb-3">
                    <label class="form-label">Thumnail</label>
                    <div>
                        <input type="file" name="image_thumnail" class="form-control" aria-describedby="title" placeholder="Enter Images" >
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
@section('js')
  <script src="{{ asset('assets/backend/libs/dropzone/dist/dropzone-min.js?1692870487') }}" defer></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      new Dropzone("#dropzone-multiple")
    })
  </script>
@endsection
