@extends('backend.layout.main')
@section('breadcrumbs')
    <h2 class="page-title">
        Management Category Content
    </h2>
@endsection
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Management Category Content</h3>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        <a href="{{ route('category-content.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            Add Category Content
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name Category Content</th>
                            <th>Slug</th>
                            <th>Icon</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = ($data->currentPage() - 1) * $data->perPage() + 1;
                        @endphp
                        @forelse ($data as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>{{ $row->icon ? $row->icon : '-' }}</td>
                                <td>
                                    {{-- @dd($row->category_id) --}}
                                    @if (!$row->is_delete)
                                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                            <a href="{{ route('category-content.edit',$row) }}"
                                                class="btn btn-primary btn-pill w-120">
                                                Edit
                                            </a>
                                            <form action="{{ route('category-content.destroy', $row) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-pill w-120" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <div class="col-6 col-sm-4 col-md- col-xl py-3">
                                            <a href="{{ route('softdel.category', ['status' => 'active', 'id' => $row->category_id]) }}"
                                                class="btn btn-warning btn-pill w-200">
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
            {!! $data->links('backend.layout.pagination') !!}
        </div>
    </div>
@endsection
