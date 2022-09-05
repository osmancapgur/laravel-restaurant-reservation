@extends('admin.master');
@section('content');
    <div class="content-wrapper">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif

<div class="Container mx-auto">


<div class="card card-primary">

<div class="card-header">
<h3 class="card-title">Restorant Bilgileri</h3>
</div>


<form action="{{route("firma.ekle")}}" method="post" enctype="multipart/form-data">
  @csrf
<div class="card-body">


<div class="form-group">
          <label for="exampleInputEmail1">Restorant Adı:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="adi" required="">
          </div>


  <div class="form-group">
            <label for="exampleInputEmail1">Slogan:</label>
            <textarea rows="2" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="slogani" required=""></textarea>
            </div>



            <div class="row">


            <div class="col-sm-6">

    <div class="form-group">
          <label for="exampleInputEmail1">Konumu:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="konumu" required="">
    </div>
    </div>
      <div class="col-sm-6">
    <div class="form-group">
          <label for="exampleInputEmail1">Çalışma Saatleri:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="saatleri" required="">
        </div>
        </div>
    </div>
    <div class="row">


    <div class="col-sm-6">
  <div class="form-group">
<label for="exampleInputEmail1">Restorant Maili:</label>
<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="maili">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
      <label for="exampleInputEmail1">Telefonunuz:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="telefonu" required="">
    </div>
    </div>
</div>
<div class="form-group">
      <label for="exampleInputEmail1">Harita Keyi:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="key" required="">
</div>
<div class="mb-3">
              <label for="">Restorant Logosu</label>
              <input type="file" name="restorant_image" required="" class="course form-control">
          </div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Güncelle</button>
</div>
</form>
</div>
</div>



    </div>

@endsection
