@extends('backend.layout.main');

@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('category-programs.update',$data->id) }}" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="card-header">
                <h3 class="card-title">Update Category Programs</h3>
            </div>
            <div class="card-body">
                @if ($contentID)
                <div class="mb-3">
                    <label class="form-label required">Name Category(ID)</label>
                    <div>
                        <input type="text" class="form-control" name="title" aria-describedby="title" placeholder="Enter Name" value="{{ old('title') ?? $contentID->title }}">
                        @error('title')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                @endif
                @if ($contentEN)
                <div class="mb-3">
                    <label class="form-label required">Name Category(EN)</label>
                    <div>
                        <input type="text" class="form-control" name="title_translite" aria-describedby="title_translite" placeholder="Enter Name" value="{{ old('title_translite') ?? $contentEN->title }}">
                        @error('title_translite')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                @endif
                <div class="mb-3">
                    <label class="form-label">Icon</label>
                    <div>
                        <input type="file"  name="images" class="form-control" aria-describedby="title"  accept="image/png, image/gif, image/jpeg">
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
