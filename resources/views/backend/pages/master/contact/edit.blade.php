@extends('backend.layout.main');

@section('content')
    <div class="col-md-12">
        <form class="card" method="POST" action="{{ $data ? route('contact.update',$data) : route('contact.store') }}" enctype="multipart/form-data">
            @csrf
            @if($data)
                @method('PUT')
            @endif
            <div class="card-header">
                <h3 class="card-title"> Contact Management</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Name Site</label>
                    <div>
                        <input type="text" class="form-control" name="name" aria-describedby="title" placeholder="Enter name" value="{{ $data->name ?? old('name')}}">
                        @error('name')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <div>
                        <input type="text" class="form-control" name="address" aria-describedby="title" placeholder="Enter order" value="{{ $data->address ?? old('address')}}">
                        @error('address')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Whatsapp</label>
                  <div>
                      <input type="number" class="form-control" name="whatsapp" aria-describedby="title" placeholder="Enter number" value="{{ $data->radio ?? old('whatsapp')}}">
                      @error('whatsapp')
                          <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Telp</label>
                <div>
                    <input type="number" class="form-control" name="tlp" aria-describedby="title" placeholder="Enter number" value="{{ $data->tlp ?? old('tlp')}}">
                    @error('tlp')
                        <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Working Days</label>
                <div>
                    <input type="text" class="form-control" name="working_days" aria-describedby="title" placeholder="Enter order" value="{{ $data->working_days ?? old('working_days')}}">
                    @error('working_days')
                        <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                    @enderror
                </div>
              </div>
                <div class="mb-3">
                    <label class="form-label">Working Hours</label>
                    <div>
                        <input type="text" class="form-control" name="working_hours" aria-describedby="title" placeholder="Enter order" value="{{ $data->working_hours ?? old('working_hours')}}">
                        @error('working_hours')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">email</label>
                    <div>
                        <input type="text" class="form-control" name="email" aria-describedby="title" placeholder="Enter email" value="{{ $data->email ?? old('email')}}">
                        @error('email')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">google location</label>
                    <div>
                        <input type="text" class="form-control" name="google_loc" aria-describedby="title" placeholder="Enter Link" value="{{ $data->google_loc ?? old('google_loc')}}">
                        @error('google_loc')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">instagram</label>
                    <div>
                        <input type="text" class="form-control" name="instagram" aria-describedby="title" placeholder="Enter Link" value="{{ $data->instagram ?? old('instagram')}}">
                        @error('instagram')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">facebook</label>
                    <div>
                        <input type="text" class="form-control" name="facebook" aria-describedby="title" placeholder="Enter Link" value="{{ $data->facebook ?? old('facebook')}}">
                        @error('facebook')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">youtube</label>
                    <div>
                        <input type="text" class="form-control" name="youtube" aria-describedby="title" placeholder="Enter Link" value="{{ $data->youtube ?? old('youtube')}}">
                        @error('youtube')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">tiktok</label>
                    <div>
                        <input type="text" class="form-control" name="tiktok" aria-describedby="title" placeholder="Enter order" value="{{ $data->tiktok ?? old('tiktok')}}">
                        @error('tiktok')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">radio</label>
                    <div>
                        <input type="text" class="form-control" name="radio" aria-describedby="title" placeholder="Enter Link" value="{{ $data->radio ?? old('radio')}}">
                        @error('radio')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Logo</label>
                    <div>
                        <input type="file"  name="logo" class="form-control" aria-describedby="title"  accept="image/png, image/gif, image/jpeg">
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <a type="button" class="btn btn-secondary" href="{{ route('teacher-position.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
