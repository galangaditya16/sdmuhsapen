@extends('backend.layout.main');

@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('permission.update',$role->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h3 class="card-title">Add New Role</h3>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">Role Name</label>
                    <div class="col">
                        <input type="text" class="form-control" name="name" id="name"
                            aria-describedby="emailHelp" placeholder="Role Name" value="{{ $role->name ?? '-' }}">
                        <small class="form-hint"></small>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">Permission</label>
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead style="text-align: center">
                                    <tr>
                                        <th>Menu</th>
                                        <th>Allow Read</th>
                                        <th>Allow Create</th>
                                        <th>Allow Update</th>
                                        <th>Allow Delete</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center">
                                    @foreach ($typePermissions as $type)
                                        <tr>
                                            <td style="text-align: left">
                                                {{ $type['first_word'] }}
                                            </td>
                                
                                            {{-- View --}}
                                            <td class="text-muted">
                                                @php
                                                    $viewPermission = $lists->firstWhere('name', strtolower($type['first_word']) . '-view');
                                                @endphp
                                                @if ($viewPermission)
                                                    <input 
                                                        class="form-check-input chekbox" 
                                                        name="permission[]" 
                                                        value="{{ $viewPermission->id }}" 
                                                        type="checkbox"
                                                        {{ $role->permissions->contains('id', $viewPermission->id) ? 'checked' : '' }}
                                                    >
                                                @endif
                                            </td>
                                
                                            {{-- Create --}}
                                            <td class="text-muted">
                                                @php
                                                    $createPermission = $creates->firstWhere('name', strtolower($type['first_word']) . '-create');
                                                @endphp
                                                @if ($createPermission)
                                                    <input 
                                                        class="form-check-input chekbox" 
                                                        name="permission[]" 
                                                        value="{{ $createPermission->id }}" 
                                                        type="checkbox"
                                                        {{ $role->permissions->contains('id', $createPermission->id) ? 'checked' : '' }}
                                                    >
                                                @endif
                                            </td>
                                
                                            {{-- Edit --}}
                                            <td class="text-muted">
                                                @php
                                                    $editPermission = $updates->firstWhere('name', strtolower($type['first_word']) . '-edit');
                                                @endphp
                                                @if ($editPermission)
                                                    <input 
                                                        class="form-check-input chekbox" 
                                                        name="permission[]" 
                                                        value="{{ $editPermission->id }}" 
                                                        type="checkbox"
                                                        {{ $role->permissions->contains('id', $editPermission->id) ? 'checked' : '' }}
                                                    >
                                                @endif
                                            </td>
                                
                                            {{-- Delete --}}
                                            <td class="text-muted">
                                                @php
                                                    $deletePermission = $deletes->firstWhere('name', strtolower($type['first_word']) . '-delete');
                                                @endphp
                                                @if ($deletePermission)
                                                    <input 
                                                        class="form-check-input chekbox" 
                                                        name="permission[]" 
                                                        value="{{ $deletePermission->id }}" 
                                                        type="checkbox"
                                                        {{ $role->permissions->contains('id', $deletePermission->id) ? 'checked' : '' }}
                                                    >
                                                @endif
                                            </td>
                                
                                        </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                            <br>
                            <a href="#" class="btn" onclick="chekboxAll()">All privileges
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
