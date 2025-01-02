@extends('backend.layout.main')
@section('breadcrumbs')
    <h2 class="page-title">
        Management Teacher Position
    </h2>
@endsection
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Management Teacher Position</h3>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        <a href="{{ route('teacher-position.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            Add Category Teacher
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
                            <th>Order</th>
                            <th>Icon</th>
                            <th>Order</th>
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
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->CategoryTeacher->order ?? '-' }}</td>
                                <td>
                                    @if($row->CategoryTeacher->image)
                                        <img src="{{ asset('assets/images/category/teacher/' . $row->CategoryTeacher->image) }}" style="width: 150px; height: auto">
                                    @else
                                        <img src="{{ asset('assets/images/category/teacher/default.jpg') }}" style="width: 150px; height: auto">
                                    @endif
                                </td>
                                <td>
                                    @if (!$row->delete_at)
                                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                            <a href="{{ route('teacher-position.edit', $row->CategoryTeacher) }}"
                                                class="btn btn-primary btn-pill w-120">
                                                Edit
                                            </a>
                                            <form action="{{ route('teacher-position.destroy', $row->CategoryTeacher) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-pill w-120" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                                    Hapus
                                                </button>
                                            </form>

                                        </div>
                                    @else
                                        <div class="col-6 col-sm-4 col-md- col-xl py-3">
                                            <a href=""
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
@section('js')
<script src="https://cdn.tiny.cloud/1/gafdlqc9hh36ubwwjslopo148dipwejra3hau2lsv7k2pzle/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>
@endsection