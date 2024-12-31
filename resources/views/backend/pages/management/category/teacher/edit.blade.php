@extends('backend.layout.main');

@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('teacher-position.update',$category) }}" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="card-header">
                <h3 class="card-title">Update Teacher Position</h3>
            </div>
            <div class="card-body">
                @if ($categoryID)
                <div class="mb-3">
                    <label class="form-label required">Nama Kategori(ID)</label>
                    <div>
                        <input type="text" class="form-control" name="name" aria-describedby="title" placeholder="Enter Name" value="{{ old('title') ?? $categoryID->title }}">
                        @error('name')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                @endif
                @if ($categoryEN)
                <div class="mb-3">
                    <label class="form-label required">Name Category (EN)</label>
                    <div>
                        <input type="text" class="form-control" name="name_translite" aria-describedby="title" placeholder="Enter Name" value="{{ old('title') ?? $categoryEN->title }}">
                        @error('name_translite')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                @endif
                <div class="mb-3">
                    <label class="form-label required">Order</label>
                    <div>
                        <input type="number" class="form-control" name="order" aria-describedby="title" placeholder="Enter order" value="{{ $category->order ?? old('order')}}">
                        @error('order')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Icon</label>
                    <div>
                        <input type="file"  name="images" class="form-control" aria-describedby="title"  accept="image/png, image/gif, image/jpeg">
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <a type="button" class="btn btn-secondary" href="{{ route('teacher-position.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
