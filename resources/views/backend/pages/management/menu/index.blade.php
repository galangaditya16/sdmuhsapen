@extends('backend.layout.main')
@section('breadcrumbs')
    <h2 class="page-title">
        Management Menu
    </h2>
@endsection
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Management Menu</h3>
                <div class="col-auto ms-auto">
                    <div class="btn-list">
                      <a href="{{ route('management-menu.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                        Tambah Menu
                      </a>
                    </div>
                  </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>ID Menu</th>
                            <th>Nama Menu</th>
                            <th>Route</th>
                            <th>Parent</th>
                            <th>Icon</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($menus as $menu)
                            <tr>
                                <td>{{ $menu->id }}</td>
                                <td>{{ $menu->menu_name }}</td>
                                <td>{{ $menu->route }}</td>
                                <td>{{ $menu->parent ? $menu->parent->menu_name : '-' }}</td>
                                <td>{{ $menu->icon }}</td>
                                <td>
                                    @if ($menu->is_active != 1)
                                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                            <a href="{{ route('management-menu.edit',$menu) }}" class="btn btn-primary btn-pill w-120">
                                                Edit
                                            </a>
                                            <a href="{{ route('softdel.menu',$menu) }}" class="btn btn-danger btn-pill w-120">
                                                Hapus
                                            </a>
                                        </div>
                                    @else
                                        <div class="col-6 col-sm-4 col-md- col-xl py-3">
                                            <a href="#" class="btn btn-warning btn-pill w-200">
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
            {!! $menus->links('backend.layout.pagination') !!}
        </div>
    </div>
@endsection
