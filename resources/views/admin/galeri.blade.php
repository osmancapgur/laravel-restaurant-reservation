@extends('admin.master');
@section('content');
  <div class="content-wrapper bg-transparent">
    <!-- Content Header (Page header) -->

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="text-center">
      <h4 class="shadow-sm p-3 mb-5 bg-body rounded">RESTORANTIMIZDAN RESİMLER</h4>
    </div>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      @foreach ($galeri as $resim)


          <div class="col-lg-3">

            <div class="card">
                    <img
                      src="{{asset('uploads/galeri/'.$resim->galeri_image)}}"
                      class="card-img-top"
                      alt="restorant resmi"
                    />
                    <div class="card-body">
                      <p class="card-text">
                      <input type="file" name="galeri_image" class="course form-control ">
                      </p>
                      <div class="container">


                      <td class="project-actions d-inline">





                        <div class="text-left d-inline">

                          <a class="btn btn-info btn-sm" href="{{route("resim_update",$resim->id)}}" method="POST">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Değiştir
                          </a>

                          </div>


                          <div class="text-right d-inline">


                          <a class="btn btn-danger btn-sm" href="{{route('admin_galeri_sil', $resim->galeri_image)}}" onclick="return confirm('Emin Misiniz?')">
                          <i class="fas fa-trash">
                          </i>
                          Sil
                          </a>
                          </div>
                          </td>
                      </div>
                    </div>
                  </div>

                </div>
                @endforeach
                <div class="col-lg-3">


                <div class="card">
                    <div class="card-header">
                        <h4>Galeriye Resim Ekle</h4>
                    </div>
                    <div class="card-body">
                      <img src="https://www.lifewire.com/thmb/2KYEaloqH6P4xz3c9Ot2GlPLuds=/1920x1080/smart/filters:no_upscale()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg" class="card-img-top" alt="">


                        <form action="{{ route('admin_galeri_ekle') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="file" name="galeri_image" required class="course form-control">
                            </div>

                                <button type="submit" class="btn btn-primary">Kaydet</button>


                        </form>

                    </div>
                </div>
                  </div>

            </div>



      </div>


      </div>
    </div>
  </section>

@endsection
