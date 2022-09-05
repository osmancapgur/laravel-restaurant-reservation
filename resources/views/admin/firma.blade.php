@extends('admin.master');
@section('content');
    <div class="content-wrapper bg-transparent">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
      <section class="content">

<div class="Container mx-auto">


<div class="card card-primary">

<div class="card-header">
<h3 class="card-title">Restorant Bilgileri</h3>
</div>

  @foreach ($firma as $info)
<form action="{{route("firma.update",$info->id)}}" method="post" enctype="multipart/form-data">
  @csrf
<div class="card-body">





<div class="form-group">
          <label for="exampleInputEmail1">Restorant Adı:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="adi" required="" value="{{$info->adi}}">
          </div>


  <div class="form-group">
            <label for="exampleInputEmail1">Slogan:</label>
            <input type="text" width="48" height="48" class="form-control" id="exampleInputEmail1" name="slogani" required="" value="{{$info->slogani}}">
            </div>



            <div class="row">


            <div class="col-sm-6">

    <div class="form-group">
          <label for="exampleInputEmail1">Konumu:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="konumu" required="" value="{{$info->konumu}}">
    </div>
    </div>
      <div class="col-sm-6">
    <div class="form-group">
          <label for="exampleInputEmail1">Çalışma Saatleri:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="saatleri" required="" value="{{$info->saatleri}}">
        </div>
        </div>
    </div>
    <div class="row">


    <div class="col-sm-6">
  <div class="form-group">
<label for="exampleInputEmail1">Restorant Maili:</label>
<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="maili" value="{{$info->maili}}">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
      <label for="exampleInputEmail1">Telefonunuz:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="telefonu" required="" value="{{$info->telefonu}}">
    </div>
    </div>
</div>
<div class="form-group">
      <label for="exampleInputEmail1">Harita Keyi:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="key" required="" value="{{$info->key}}">
</div>
<div class="row">


<div class="col-sm-6">
<div class="mb-3">
              <label for="">Kapak Resmi:</label>
              <br>
              <img src="{{asset('uploads/cover/'.$info->kapak_image)}}" alt="Restorant Resmi" width="280" height="110" class="border">

              <input type="file" name="kapak_image" class="course form-control" style="width:280;" value="{{asset('uploads/cover/'.$info->kapak_image)}}">
          </div>
          </div>
          <div class="col-sm-6">
          <div class="mb-3">
                        <label for="">Restorant Logosu:</label>
                        <br>
                        <img src="{{asset('uploads/restorant/'.$info->restorant_image)}}" alt="Restorant Logosu" width="280" height="110" class="border">

                        <input type="file" name="restorant_image" class="course form-control" style="width:280;" value="{{asset('uploads/restorant/'.$info->restorant_image)}}">
                    </div>
                    </div>


</div>

</div>
</div>

  @endforeach

<div class="card-footer">
<button type="submit" class="btn btn-primary">Güncelle</button>

</div>
</form>
</div>
</div>
</section>


    </div>

@endsection
