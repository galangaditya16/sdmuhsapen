@extends('backend.layout.main');

@section('content')

    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('teacher-position.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h3 class="card-title">Add Teacher Position</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Nama Kategori(ID)</label>
                    <div>
                        <input type="text" class="form-control" name="name" aria-describedby="title" placeholder="Enter Name" value="{{ old('title')}}">
                        @error('title')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Name Category(EN)</label>
                    <div>
                        <input type="text" class="form-control" name="name_translite" aria-describedby="title" placeholder="Enter Name" value="{{ old('title')}}">
                        @error('title_translite')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Order</label>
                    <div>
                        <input type="number" class="form-control" name="order" aria-describedby="title" placeholder="Enter order" value="{{ old('order')}}">
                        @error('order')
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
