@extends('backend.layout.main')
@section('breadcrumbs')
    <h2 class="page-title">
        Management Galeri
    </h2>
@endsection
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Management Galeri</h3>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                        <a href="{{ route('gallery.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                            Add Images
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>thumnail</th>
                            <th>Created</th>
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
                                <td>{{ $row->title_id }}</td>
                                <td>{{ $row->thumbnail }}</td>
                                <td>{{ Carbon\Carbon::parse($row->created_at)->format('l, d F Y') }}</td>
                                <td>
                                    <div class="btn-group gap-2">
                                        @can('gallery-edit')                                            
                                        <a href="{{ route('gallery.edit', $row->id) }}" class="btn btn-primary">
                                            Edit
                                        </a>
                                        @endcan
                                        @can('gallery-delete')                                            
                                        <form action="{{ route('gallery.destroy', $row->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                        @endcan
                                        @can('gallery-edit')                                            
                                        <a href="{{ route('gallery.show', $row->id) }}" class="btn btn-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-photo-plus">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M15 8h.01" />
                                                <path
                                                    d="M12.5 21h-6.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6.5" />
                                                <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4" />
                                                <path d="M14 14l1 -1c.67 -.644 1.45 -.824 2.182 -.54" />
                                                <path d="M16 19h6" />
                                                <path d="M19 16v6" />
                                            </svg>
                                        </a>
                                        @endcan
                                        @if($row->headline != NULL)
                                        <a href="{{ route('gallery.headline',$row->id) }}" class="btn btn-danger" title="Headline">
                                          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-big-down-lines"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 12h3.586a1 1 0 0 1 .707 1.707l-6.586 6.586a1 1 0 0 1 -1.414 0l-6.586 -6.586a1 1 0 0 1 .707 -1.707h3.586v-3h6v3z" /><path d="M15 3h-6" /><path d="M15 6h-6" /></svg>
                                        </a>
                                        @else
                                        <a href="{{ route('gallery.headline',$row->id) }}" class="btn btn-primary" title="Remove Headline">
                                          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-arrow-big-up-lines"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.586 3l-6.586 6.586a2 2 0 0 0 -.434 2.18l.068 .145a2 2 0 0 0 1.78 1.089h2.586v2a1 1 0 0 0 1 1h6l.117 -.007a1 1 0 0 0 .883 -.993l-.001 -2h2.587a2 2 0 0 0 1.414 -3.414l-6.586 -6.586a2 2 0 0 0 -2.828 0z" /><path d="M15 20a1 1 0 0 1 .117 1.993l-.117 .007h-6a1 1 0 0 1 -.117 -1.993l.117 -.007h6z" /><path d="M15 17a1 1 0 0 1 .117 1.993l-.117 .007h-6a1 1 0 0 1 -.117 -1.993l.117 -.007h6z" /></svg>
                                        </a>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" style="text-align: center">Tidak Ada Data</td>
                            </tr>
                        @endforelse
                </table>
            </div>
            {{--  {!! $data->links('backend.layout.pagination') !!}  --}}
        </div>
    </div>
@endsection
