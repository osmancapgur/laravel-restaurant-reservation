@extends('admin.master');
@section('content');


  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-6">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
              <div class="card">
                  <div class="card-header">
                      <h4>Galeriye Resim Ekle</h4>
                  </div>
                  <div class="card-body">

                      <form action="{{ route('admin_galeri_ekle') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                              <label for="">Resim Ekle</label>
                              <input type="file" name="galeri_image" required class="course form-control">
                          </div>
                          <div class="mb-3">
                              <button type="submit" class="btn btn-primary">Kaydet</button>
                          </div>

                      </form>

                  </div>
              </div>

          </div>
      </div>
  </div>


@endsection
