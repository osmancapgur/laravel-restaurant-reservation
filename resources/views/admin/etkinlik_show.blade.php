@extends('admin.master');
@section('content');
  <div class="content-wrapper bg-transparent">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

  <!-- Main content -->

    <div class="card card-solid">
    <div class="card-body pb-0">
    <div class="row">
    @foreach ($etkinlik as $user)
    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
    <div class="card bg-light d-flex flex-fill">

    <div class="card-header text-muted border-bottom-0">

    </div>
    <div class="card-body pt-0">
    <div class="row">
    <div class="col-5 mx-auto">
      <img src="{{asset('uploads/etkinlik/'.$user->etkinlik_image)}}" alt="user-avatar" class="img-fluid max-width: 100%;">
      <br><br>
      <p class="data text-sm text-left text-danger">{{$user->price}} TL</p>
    </div>
    <div class="col-7 text-center">
      <h2 class="data lead"><b>{{$user->title}}</b></h2>
      <p class="data text-muted text-sm">{{$user->content}}</p>
    </div>
    </div>
    </div>
    <div class="card-footer">
    <div class="text-right">
      <a href="{{route('admin_etkinlik_delete', $user->id)}}" onclick="return confirm('Emin Misiniz?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
      <a class="edit btn btn-info btn-sm" ><i class="fas fa-pencil-alt"></i></a>

    </div>
    </div>
    </div>
    </div>
    </a>
      @endforeach
    </div>
    </div>
    </div>

@endsection
