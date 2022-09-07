@extends('admin.master');
@section('content');
  <!-- Main content -->
    <div class="content-wrapper">

  <div class="row px-5">

<div class="col-lg-6">


  <div class="card card-danger text-justify" style="width: 25rem;">
    <div class="card-header">
    <h3 class="card-title">Etkinlik Düzenle</h3>
    </div>
    @foreach ($etkinlik as $et)
    <form action="{{route("etkinlik.update",$et->id)}}" method="Post">
      @csrf
  <img class="card-img-top img-fluid;" src="{{asset('uploads/etkinlik/'.$et->etkinlik_image)}}" alt="Resmi" width="320" height="130">
  <input type="file" name="etkinlik_image" class="custom-file-input" id="images" style="width:400;">

  <div class="card-body">
    <input type="text" class="card-title font-weight-bold" name="title" value="{{$et->title}}">
    <br><br>
    <div class="">


    <textarea name="content" rows="5" cols="48">{{$et->content}}</textarea>
    </div>

  </div>
  <ul>
    <li>Fiyatı: <input type="text" name="price" value="{{$et->price}}"></li>
  </ul>
@endforeach
  <div class="card-body">
    <button type="submit" class="btn btn-danger">Değiştir</button>
  </div>
</div>
</form>

  </div>
    </div>
    </div>

@endsection
