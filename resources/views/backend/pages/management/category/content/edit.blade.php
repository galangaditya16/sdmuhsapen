@extends('backend.layout.main');

@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('category-content.update',$data) }}" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="card-header">
                <h3 class="card-title">Edit Category Content</h3>
            </div>
            <div class="card-body">
                @if($contentID)
                <div class="mb-3">
                    <label class="form-label required">Name Category(ID)</label>
                    <div>
                        <input type="text" class="form-control" name="title" aria-describedby="title" placeholder="Enter Name" value="{{ old('title') ?? $data->title}}">
                        @error('name')
                            <div class="invalid-feedback" style="display: block">{{ $contentID->title }}</div>
                        @enderror
                    </div>
                </div>
                @endif
                @if($contentEN)
                <div class="mb-3">
                    <label class="form-label required">Name Category(EN)</label>
                    <div>
                        <input type="text" class="form-control" name="title_translite" aria-describedby="title_translite" placeholder="Enter Name" value="{{ old('title_translite') ?? $contentEN->title}}">
                        @error('title_translite')
                            <div class="invalid-feedback" style="display: block">{{ $contentEN->id }}</div>
                        @enderror
                    </div>
                </div>
                @endif
                <div class="mb-3">
                    <label class="form-label">Link</label>
                    <div>
                        <input type="number" name="link" class="form-control" aria-describedby="link" placeholder="Enter Link" value="{{ old('link') ?? $data->link }}">
                        @error('link')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
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
