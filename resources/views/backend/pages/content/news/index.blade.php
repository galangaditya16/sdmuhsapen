@extends('backend.layout.main')
@section('breadcrumbs')
    <h2 class="page-title">
        Management News
    </h2>
@endsection
@section('title')

@endsection
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Management News</h3>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        <a href="{{ route('news.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            Add News
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                
                

                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = ($data->currentPage() - 1) * $data->perPage() + 1;
                        @endphp
                        @forelse ($data as $row)
                        @php
                             $contentid = $row->content->firstWhere('lang','id');
                        @endphp
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->hasCategory->title }}</td>
                                @if($contentid)
                                    <td>{{ $contentid->title ? Str::limit($contentid->title,50) : '-'}}</td>
                                    <td>{{ $contentid->slug ?? '-' }}</td>
                                @endif
                                <td>{{ $row->author }}</td>
                                <td>{{ Carbon\Carbon::parse($row->created_at)->format('l') }}</td>
                                <td>
                                    @if (!$row->delete_at)
                                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                            <a href="{{ route('news.edit', $row->id) }}"
                                                class="btn btn-primary btn-pill w-120">
                                                Edit
                                            </a>
                                            <form action="{{ route('news.destroy', $row->id) }}" method="POST" style="display: inline;">
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
