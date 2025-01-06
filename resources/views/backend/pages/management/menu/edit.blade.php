@extends('backend.layout.main');

@section('content')
<div class="col-md-12">
    <form class="card" method="POST" action="{{ route('management-menu.update',$menu) }}">
        @csrf @method('PUT')
        <div class="card-header">
            <h3 class="card-title">Edit Menu</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label required">Nama Menu</label>
                <div>
                    <input type="text" class="form-control" name="menu_name" aria-describedby="title" placeholder="Enter Name" value="{{ $menu->menu_name  ? $menu->menu_name  : old('menu_name') }}">
                    @error('menu_name')
                        <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Route</label>
                <div>
                    <input type="text" name="route" class="form-control" aria-describedby="title" placeholder="Enter Name Route" value="{{ $menu->route ? $menu->route :  old('route') }}">
                    @error('route')
                        <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Parent</label>
                <div>
                    <select class="form-select" name="parent_id">
                        <option value="" disabled selected>---- Parent ---</option>
                        @foreach ($parents as $parent)
                        <option value="{{ $parent->id }}" {{ $menu->parent_id == $parent->id ? 'selected' : '' }}>{{ $parent->menu_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Icon</label>
                <div>
                    <input type="text" name="icon" class="form-control" aria-describedby="title" placeholder="Enter Icon" value="{{ old('icon') ?? $menu->icon }}">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Order</label>
                <div>
                    <input type="number" name="order" class="form-control" aria-describedby="title" placeholder="Enter Parent" value="{{ old('order') ?? $menu->order }}">
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
