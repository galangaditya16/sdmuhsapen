@extends('backend.layout.main');

@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('category-news.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h3 class="card-title">Add Category News</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Name Category</label>
                    <div>
                        <input type="text" class="form-control" name="title" aria-describedby="title" placeholder="Enter Name" value="{{ old('title')}}">
                        @error('title')     
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Slug</label>
                    <div>
                        <input type="text" name="slug" class="form-control" aria-describedby="slug" placeholder="Enter Name Route" value="{{ old('slug') }}">
                        @error('slug')     
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Icon</label>
                    <div>
                        <input type="file"  name="images" class="form-control" aria-describedby="title"  accept="image/png, image/gif, image/jpeg" value="{{ old('icon') }}">
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection