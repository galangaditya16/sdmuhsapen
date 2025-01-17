@extends('backend.layout.main')
@section('css')
    <!-- TinyMCE script -->
    <script src="https://cdn.tiny.cloud/1/gafdlqc9hh36ubwwjslopo148dipwejra3hau2lsv7k2pzle/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
@endsection
@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('teacher.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h3 class="card-title">Add Teacher</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Name</label>
                    <div>
                        <input type="text" name="name" class="form-control" aria-describedby="slug"
                            placeholder="Enter Name" value="{{ old('name') }}">
                        @error('title')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Detail Title (ID)</label>
                    <div>
                        <input type="text" name="title" class="form-control" aria-describedby="slug"
                            placeholder="Enter Name title" value="{{ old('title') }}">
                        @error('title_translite')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Detail Title (EN)</label>
                    <div>
                        <input type="text" name="title_translite" class="form-control" aria-describedby="slug"
                            placeholder="Enter Name title" value="{{ old('title_translite') }}">
                        @error('title_translite')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Title Category</label>
                    <div>
                        <select class="form-select" name="id_posotion">
                          <option disabled selected>---Pilih---</option>
                            @forelse ($catgeorys as $category)
                                <option value="{{ $category->CategoryTeacher->id }}">{{ $category->title }}</option>
                            @empty
                                <option>Kosong</option>
                            @endforelse
                        </select>
                    </div>
                    @error('id_category')
                    <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Image (MAX 1 MB)</label>
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
