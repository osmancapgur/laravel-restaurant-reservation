@extends('admin.master');
@section('content');

  <div class="content-wrapper bg-transparent">
  <!-- Main content -->
  <section class="content">
    <div class="container">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
      <div class="row">

        <div class="col-lg-6">
          <div class="card card-primary">
          <div class="card-header">
          <h3 class="card-title">Yemek Ekle</h3>
          </div>
          <form action="{{route("yemek.ekle")}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
          <div class="form-group">
          <label for="exampleInputEmail1">Yemek Adı:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="adi" required class="course form-control">
          </div>
          <div class="form-group">
          <label for="exampleInputPassword1">İçerik:</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Bel Eti" name="icerik" required class="course form-control" >
          </div>
          <div class="form-group">
          <label for="exampleInputPassword1">Yemek Türü:</label>
          <select class="form-control" name="turu" id="exampleInputPassword1">
                        @foreach ($turler as $tur)
                           <option value="{{$tur->title}}">{{$tur->title}}</option>
                            @endforeach
                </select>
          </div>
          <div class="form-group">
          <label>Fiyatı:</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="70" name="fiyati">
          </div>
          <div class="mb-3">
              <label for="">Resim Ekle</label>
              <input type="file" name="yemek_image" required class="course form-control">
          </div>
          <div class="container pt-2">
                <button type="submit" class="btn btn-primary">Gönder</button>
          </div>

          </div>


          </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card card-success">
          <div class="card-header">
          <h3 class="card-title">Yemek Türü Ekle</h3>
          </div>
          <form action="{{route("yemekturu.ekle")}}" method="post">
          @csrf
          <div class="card-body">
          <div class="form-group">
          <label for="exampleInputEmail1">Tür Giriniz:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="İçerik" name="title" required class="course form-control">
          </div>
          <button type="submit" class="btn btn-success">Gönder</button>

          </div>


          </form>
          </div>
          <div class="card card-danger">
            <div class="card-header">
            <h3 class="card-title">Yemek Türleri</h3>
            </div>

            <div class="card-body table-responsive p-0">
             <table class="table table-hover text-nowrap">
           <tr>
             <th>Tür Adı:</th>
             <th></th>
           </tr>
           @foreach ($turler as $user)
             <tr>
               <td>{{$user->title}}</td>
               <td class="text-right py-0 align-middle">
                <div class="btn-group btn-group-sm">
                <a href="{{route('admin_yemekturu_delete', $user->title)}}" onclick="return confirm('Emin Misiniz?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                <a class="btn btn-info btn-sm"  href={{route('yemekturu.edit', $user->id)}}><i class="fas fa-pencil-alt scrollto"></i></a>
                </div>
                </td>
             </tr>
           @endforeach

            </table>
            </div>
            </div>

        </div>






        </div>

      </section>

  </section>

@endsection
