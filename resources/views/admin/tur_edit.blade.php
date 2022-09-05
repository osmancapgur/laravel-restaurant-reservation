@extends('admin.master');
@section('content');
  <!-- Main content -->
    <div class="content-wrapper">

  <div class="row px-5">

<div class="col-lg-6">


  <div class="card card-danger text-justify">
  <div class="card-header">
  <h3 class="card-title">Yemek Türü Düzenle</h3>
  </div>
  @foreach ($sectur as $turks)
  <form action="{{route("yemekturu.guncelle",$turks->title)}}" method="post">
    @csrf
    @endforeach
  @csrf
  <div class="card-body">
  <div class="form-group">
      @foreach ($sectur as $turks)
  <label for="exampleInputEmail1" ><span class="text-dark">{{$turks->title}}</span><span class="text-muted"> Türüne Yeni Ad Giriniz:</span> </label>
  @endforeach
  @foreach ($sectur as $turks)

  <input type="text" class="form-control text-primary" id="exampleInputEmail1"  name="title" required class="course form-control" value="{{$turks->title}}" >

  @endforeach
  </div>
  <button type="submit" class="btn btn-danger">Değiştir</button>

  </div>


  </form>
  </div>
    </div>

  <div class="col-lg-6">
  <div class="card card-secondary">
    <div class="card-header">
    <h3 class="card-title">Mevcut Türler</h3>
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
        </td>
     </tr>
   @endforeach

    </table>
    </div>
    </div>
      </div>
  </div>
    </div>
    </div>
    

@endsection
