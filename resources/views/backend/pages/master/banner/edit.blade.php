@extends('backend.layout.main')
@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('banner.update',$data->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h3 class="card-title">Edit Banner</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Title</label>
                    <div>
                        <input type="text" name="title" class="form-control" aria-describedby="slug"
                            placeholder="Enter Name title" value="{{ $data->title ?? old('title') }}">
                        @error('title')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                  <label class="form-label required">Link</label>
                  <div>
                      <input type="text" name="link" class="form-control" aria-describedby="slug"
                          placeholder="Enter Link" value="{{ $data->link ?? old('link') }}">
                      @error('link')
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
    <script src="https://cdn.tiny.cloud/1/gafdlqc9hh36ubwwjslopo148dipwejra3hau2lsv7k2pzle/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
