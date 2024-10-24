@extends('backend.layout.main');

@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="card-header">
                <h3 class="card-title">Edit Category Content</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Name Category Content</label>
                    <div>
                        <input type="text" class="form-control" name="name" aria-describedby="title" placeholder="Enter Name" value="{{ old('name') ?? $data->name}}">
                        @error('name')     
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Slug</label>
                    <div>
                        <input type="text" name="slug" class="form-control" aria-describedby="slug" placeholder="Enter Name Slug" value="{{ old('slug') ?? $data->slug }}">
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
                <div class="mb-3">
                    <label class="form-label">Order</label>
                    <div>
                        <input type="number" name="order" class="form-control" aria-describedby="slug" placeholder="Enter Order" value="{{ old('order') ?? $data->order }}">
                        @error('order')     
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
