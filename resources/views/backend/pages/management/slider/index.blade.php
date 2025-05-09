@extends('backend.layout.main')
@section('breadcrumbs')
    <h2 class="page-title">
        Management Slider
    </h2>
@endsection
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Management Slider</h3>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        @can('slider-create')
                            <a href="{{ route('slider.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                                Add Slider
                            </a>
                        @endcan
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = ($sliders->currentPage() - 1) * $sliders->perPage() + 1;
                        @endphp
                        @forelse ($sliders as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->title }}</td>
                                <td><img src="{{ $row->path . '/' . $row->image }}"
                                        style="width: 150px; height: auto">{{ $row->slider }}</td>
                                <td>
                                    @if (!$row->delete_at)
                                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                            {{-- <a href="{{ route('slider.edit', $row->id) }}"
                                                class="btn btn-primary btn-pill w-120">
                                                Edit
                                            </a> --}}
                                            @can('slider-delete')
                                            <form action="{{ route('slider.destroy', $row->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-pill w-120"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                                    Hapus
                                                </button>
                                            </form>
                                            @endcan

                                        </div>
                                    @else
                                        <div class="col-6 col-sm-4 col-md- col-xl py-3">
                                            <a href="" class="btn btn-warning btn-pill w-200">
                                                Restore
                                            </a>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" style="text-align: center">Tidak Ada Data</td>
                            </tr>
                        @endforelse
                </table>
            </div>
            {!! $sliders->links('backend.layout.pagination') !!}
        </div>
    </div>
@endsection
