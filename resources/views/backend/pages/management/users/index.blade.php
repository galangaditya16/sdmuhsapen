@extends('backend.layout.main')
@section('breadcrumbs')
    <h2 class="page-title">
        Management Users
    </h2>
@endsection
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Management Users</h3>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        <a href="{{ route('users.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            Add User
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
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
                                <td>{{ $row->roles->first()->name ?? '-' }}</td>
                                <td>    
                                    <div class="col-2 col-sm-0 col-md-2 col-xl py-1">
                                            @can('user management-edit')
                                            <a href="{{ route('users.edit',$row->id) }}" class="btn btn-warning btn-pill w-200">
                                                Edit
                                            </a>
                                            @endcan
                                            @can('user management-delete')
                                            <form action="{{ route('users.destroy', $row->id) }}" method="POST"
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
                                <td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" style="text-align: center">Tidak Ada Data</td>
                            </tr>
                        @endforelse
                </table>
            </div>
            {{-- {!! $sliders->links('backend.layout.pagination') !!} --}}
        </div>
    </div>
@endsection
