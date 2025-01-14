@extends('backend.layout.main')
@section('css')
<link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Upload Images</h3>
                @php
                  $dataImage = json_decode($data->images);
                @endphp
                <form class="dropzone" id="dropzone-multiple" action="{{ route('upload.image-gallery',$data->id) }}" autocomplete="off"  enctype="multipart/form-data" novalidate>
                  @csrf
                    <input type="hidden" name="hidden_value" value="{{ $data->id }}">
                    @if($data->images)
                    <div class="existing-images mb-3">
                        <h5>Existing Images</h5>
                        <div class="row">
                            @foreach($dataImage as $image)
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img src="{{ $data->path.'/'.$image }}" alt="Uploaded Image" class="card-img-top img-thumbnail" style="height: 150px; object-fit: cover;">
                                    <div class="card-body text-center">
                                        <button type="button" class="btn btn-danger btn-sm remove-image" data-image-id="{{ $image }}">Remove</button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
  <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Dropzone("#dropzone-multiple",{

            })

            document.querySelectorAll('.remove-image').forEach(function(button) {
              button.addEventListener('click', function() {
                  var imageId = this.getAttribute('data-image-id');
                  var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                  var url = '{{ route('remove.asset-image') }}'; // Replace 'your_route_name_here' with the actual route name
                  $.ajax({
                    url: url,
                    method: 'POST',
                    data: { imageId: imageId, assetId: @json($data->id), _token: token  },
                    success: function(response) {
                       if(response.status == 'success'){
                        window.location.reload();
                       }
                    },
                    error: function(xhr, status, error) {
                      alert('error',error);
                    }
                  });
              });
          });
        })
    </script>
@endsection
