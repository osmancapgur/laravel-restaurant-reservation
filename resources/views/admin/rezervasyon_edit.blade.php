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


<div class="card card-danger">

<div class="card-header">
<h3 class="card-title">Rezervasyon Bilgilerini Güncelle</h3>
</div>

  @foreach ($secrez as $info)
<form action="{{route("rezervasyon.update",$info->id)}}" method="post">
  @csrf
<div class="card-body">
            <div class="row">


            <div class="col-sm-2">

    <div class="form-group">
          <label for="exampleInputEmail1">Adı:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="name" required="" value="{{$info->name}}">
    </div>
    </div>
      <div class="col-sm-2">
    <div class="form-group">
          <label for="exampleInputEmail1">Maili:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="email" required="" value="{{$info->email}}">
        </div>
        </div>

        <div class="col-sm-2">
        <div class="form-group">
        <label for="exampleInputEmail1">Telefonu:</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="phone" value="{{$info->phone}}">
        </div>
        </div>





<div class="col-sm-2">

<div class="form-group">
<label for="exampleInputEmail1">Tarihi:</label>
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="date" required="" value="{{$info->date}}">
</div>
</div>

<div class="col-sm-2">

<div class="form-group">
<label for="exampleInputEmail1">Saati:</label>
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="time" required="" value="{{$info->time}}">
</div>
</div>


<div class="col-sm-2">

<div class="form-group">
<label for="exampleInputEmail1">Kişi Sayısı:</label>
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="visitors" required="" value="{{$info->visitors}}">
</div>
</div>
<div class="col-sm-6">

<div class="form-group">
<label for="exampleInputEmail1">Mesajı:</label>
<textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Nevşehir Tava" name="message" required="" value="{{$info->message}}">{{$info->message}}</textarea>
</div>
<br>
<button type="submit" class="btn btn-danger">Güncelle</button>

</div>

</div>
</div>
@endforeach








</form>
</div>
</div>
</section>


    </div>

@endsection
