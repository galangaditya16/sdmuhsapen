@extends('backend.layout.main');

@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="card-header">
                <h3 class="card-title">Add User</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label required">Name User</label>
                    <div>
                        <input type="text" class="form-control" name="name" aria-describedby="name"
                            placeholder="Enter Name" value="{{ old('name') ?? $data->name }}">
                        @error('menu_name')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Email</label>
                    <div>
                        <input type="email" class="form-control" name="email" aria-describedby="email"
                            placeholder="Enter Email" value="{{ old('email') ?? $data->email }}">
                        @error('email')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label zrequired">Role</label>
                    <div>
                        <select class="form-select" name="role">
                            <option selected disabled value="0">---- Select Role ----</option>
                            @foreach ($permission as $role)
                                <option value="{{ $role->id }}" {{ $data->roles->first()->id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @error('route')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Password
                        <span class="form-label-description">
                            {{--  <a href="./forgot-password.html">I forgot password</a>  --}}
                        </span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" name="password" class="form-control password" placeholder="Your password"
                            autocomplete="off" value="{{ old('password') ?? '' }}">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary show-password" title="Show password"
                                data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path
                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                </svg>
                            </a>
                        </span>
                    </div>
                    @error('password')
                        <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Password
                        <span class="form-label-description">
                            {{--  <a href="./forgot-password.html">I forgot password</a>  --}}
                        </span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" name="repassword" class="form-control repassword" placeholder="Your password"
                            autocomplete="off" value="{{ old('repassword') ?? '' }}">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary show-repassword" title="Show password"
                                data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path
                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                </svg>
                            </a>
                        </span>
                    </div>
                    @error('repassword')
                        <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="mb-3">
                    <label class="form-label">Image</label>
                    <div>
                        <input type="file" accept="image/jpeg,image/png,image/jpg" name="image" class="form-control" aria-describedby="title" placeholder="Upload Image">
                        @error('image')     
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div> --}}
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        // Handle password validation
        $('.repassword').on('keyup', function(){
            let pass = $('input[name="password"]').val();
            let repass = $('input[name="repassword"]').val();

            if(pass != repass){
                $('.repassword').addClass('is-invalid');
            } else {
                $('.repassword').removeClass('is-invalid');
            }
        });
        
        // Handle show/hide password
        $('.show-password, .show-repassword').on('click', function(e) {
            e.preventDefault();

            let input = $(this).hasClass('show-password') ? $('input[name="password"]') : $('input[name="repassword"]');
            
            if(input.attr('type') === 'password') {
                input.attr('type', 'text');
            } else {
                input.attr('type', 'password'); 
            }
        });
    });
</script>
@endsection
