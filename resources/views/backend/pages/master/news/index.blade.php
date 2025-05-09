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
                        @can('berita-create')
                            <a href="{{ route('news.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                                Add News
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
                                $lang = 'id';
                                $categorys = $row->ContentNews->hasCategory->transLite->firstWhere('lang', $lang);
                            @endphp
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $categorys->title }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>{{ $row->author }}</td>
                                <td>{{ Carbon\Carbon::parse($row->created_at)->format('l, d F Y') }}</td>
                                <td>
                                    @if (!$row->delete_at)
                                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                            @can('berita-edit')
                                                <a href="{{ route('news.edit', $row->ContentNews) }}"
                                                    class="btn btn-primary btn-pill w-120">
                                                    Edit
                                                </a>
                                            @endcan
                                            @can('berita-delete')
                                                <form action="{{ route('news.destroy', $row->ContentNews) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-pill w-120"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                                        Hapus
                                                    </button>
                                                </form>
                                            @endcan
                                            @can('berita-edit')
                                                @if ($row->ContentNews->headline == 0)
                                                    <a href="{{ route('headline', $row->ContentNews->id) }}"
                                                        class="btn btn-warning btn-pill w-120">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-big-up-lines">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M9 12h-3.586a1 1 0 0 1 -.707 -1.707l6.586 -6.586a1 1 0 0 1 1.414 0l6.586 6.586a1 1 0 0 1 -.707 1.707h-3.586v3h-6v-3z" />
                                                            <path d="M9 21h6" />
                                                            <path d="M9 18h6" />
                                                        </svg>
                                                    </a>
                                                @else
                                                    <a href="{{ route('headline', $row->ContentNews->id) }}"
                                                        class="btn btn-dark w-100">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="currentColor"
                                                            class="icon icon-tabler icons-tabler-filled icon-tabler-arrow-big-down-lines">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M9 8l-.117 .007a1 1 0 0 0 -.883 .993v1.999l-2.586 .001a2 2 0 0 0 -1.414 3.414l6.586 6.586a2 2 0 0 0 2.828 0l6.586 -6.586a2 2 0 0 0 .434 -2.18l-.068 -.145a2 2 0 0 0 -1.78 -1.089l-2.586 -.001v-1.999a1 1 0 0 0 -1 -1h-6z" />
                                                            <path
                                                                d="M15 2a1 1 0 0 1 .117 1.993l-.117 .007h-6a1 1 0 0 1 -.117 -1.993l.117 -.007h6z" />
                                                            <path
                                                                d="M15 5a1 1 0 0 1 .117 1.993l-.117 .007h-6a1 1 0 0 1 -.117 -1.993l.117 -.007h6z" />
                                                        </svg>
                                                    </a>
                                                @endif
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
            {!! $data->links('backend.layout.pagination') !!}
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
