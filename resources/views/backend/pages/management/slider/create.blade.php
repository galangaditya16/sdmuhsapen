@extends('backend.layout.main');
@section('css')
@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h3 class="card-title">Add Menu</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Title Slider</label>
                    <div>
                        <input type="text" class="form-control" name="title" aria-describedby="title" placeholder="Enter Name" value="{{ old('menu_name')}}">
                        @error('title')     
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <div>
                        <input type="file" name="image" class="form-control dropzone" aria-describedby="title" placeholder="Enter Parent" value="{{ old('image') }}">
                    </div>
                    @error('image')     
                    <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
@section('js')
@endsection

