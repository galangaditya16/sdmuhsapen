@extends('backend.layout.main')
@section('breadcrumbs')
    <h2 class="page-title">
        Management Category
    </h2>
@endsection
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Management Category</h3>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        <a href="{{ route('management-menu.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            Add Category
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name Category</th>
                            <th>Slug</th>
                            <th>Parent</th>
                            <th>published</th>
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
                                <td>{{ $row->parent ? $row->parent->name : '-' }}</td>
                                <td>{{ $row->published == 1 ? 'publish' : 'unpublish' }}</td>
                                <td>
                                    {{-- @dd($row->category_id) --}}
                                    @if ($row->trashed != 1)
                                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                            <a href="{{ route('category.edit', $row->category_id) }}"
                                                class="btn btn-primary btn-pill w-120">
                                                Edit
                                            </a>
                                            <a href="{{ route('softdel.category', ['status' => 'active', 'id' => $row->category_id]) }}"
                                                class="btn btn-danger btn-pill w-120">
                                                Hapus
                                            </a>
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
