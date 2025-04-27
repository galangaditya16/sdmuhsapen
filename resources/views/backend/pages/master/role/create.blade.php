@extends('backend.layout.main');

@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('permission.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <h3 class="card-title">Add New Role</h3>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-3 col-form-label required">Role Name</label>
                    <div class="col">
                        <input type="text" class="form-control" name="name" id="name"
                            aria-describedby="emailHelp" placeholder="Role Name">
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
                                    @for ($i = 0; $i < count($typePermissions); $i++)
                                        <tr>
                                            <td style="text-align: left">
                                                {{ $typePermissions[$i]['first_word'] }}
                                            </td>
                                            <td class="text-muted">
                                                <input class="form-check-input chekbox" name="permission[]"
                                                    value="{{ $lists[$i]['id'] }}" type="checkbox">
                                                <!--<label for="">{{ $deletes[$i]['name'] }}</label>-->
                                            </td>
                                            <td class="text-muted">
                                                <input class="form-check-input chekbox" name="permission[] "
                                                    value="{{ $creates[$i]['id'] }}" type="checkbox">
                                                <!--<label for="">{{ $deletes[$i]['name'] }}</label>-->
                                            </td>
                                            <td class="text-muted">
                                                <input class="form-check-input chekbox" name="permission[]"
                                                    value="{{ $updates[$i]['id'] }}" type="checkbox">
                                                <!--<label for="">{{ $deletes[$i]['name'] }}</label>-->
                                            </td>
                                            <td>
                                                <input class="form-check-input chekbox" id="chekbox4" name="permission[]"
                                                    value="{{ $deletes[$i]['id'] }}" type="checkbox">
                                                <!--<label for="">{{ $deletes[$i]['name'] }}</label>-->
                                            </td>
                                        </tr>
                                    @endfor
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
