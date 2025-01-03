@extends('backend.layout.main')
@section('breadcrumbs')
    <h2 class="page-title">
        Management Role
    </h2>
@endsection
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Management Roles</h3>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        <a href="{{ route('permission.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            Add Roles
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap rolestable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name Role</th>
                            <th>Guard</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = ($roles->currentPage() - 1) * $roles->perPage() + 1;
                        @endphp
                        @forelse ($roles as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->guard_name }}</td>
                                <td>
                                    @if (count($permission) == 0)
                                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                            <a href="{{ route('category-news.edit', $roles) }}"
                                                class="btn btn-primary btn-pill w-120">
                                                Edit
                                            </a>
                                            <form action="{{ route('category-news.destroy', $roles) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-pill w-120"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        @foreach ($permission as $permi)
                                            @if (strstr($permi->name, 'edit'))
                                                <a href="{{ route('category-news.edit', $roles) }}"
                                                    class="btn btn-primary btn-pill w-120">
                                                    Edit
                                                </a>
                                            @elseif(strstr($permi->name, 'delete'))
                                            <form action="{{ route('category-news.destroy', $roles) }}"
                                              method="POST" style="display: inline;">
                                              @csrf
                                              @method('DELETE')
                                              @can($permi->name)
                                                <button type="submit" class="btn btn-danger btn-pill w-120"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                                    Hapus
                                                </button>
                                              @endcan
                                          </form>
                                            @endif
                                        @endforeach
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
            {!! $roles->links('backend.layout.pagination') !!}
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/gafdlqc9hh36ubwwjslopo148dipwejra3hau2lsv7k2pzle/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
@endsection
