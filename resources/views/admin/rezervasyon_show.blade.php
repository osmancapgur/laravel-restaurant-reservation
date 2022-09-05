@extends('admin.master');
@section('content');
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->

  <!-- Main content -->
    <div class="col-md-12">
    <div class="card card-primary card-outline">
    <div class="card-header">
    <h3 class="card-title">Rezervasyonlar</h3>
    <div class="card-tools">
    <div class="input-group input-group-sm">
    <input type="text" class="form-control" placeholder="İsme Göre Ara" id="myInput" onkeyup="myFunction()">
    <div class="input-group-append">
    <div class="btn btn-primary">
    <i class="fas fa-search"></i>
    </div>
    </div>
    </div>
    </div>

    </div>


    <div class="card-body p-0">
    <div class="mailbox-controls">
      @if (session('status'))
          <div class="alert alert-danger" role="alert">
              {{ session('status') }}
          </div>
      @endif
      <table class="table table-bordered" id="myTable">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Adı</th>
      <th scope="col">Rezerve Tarihi</th>
      <th scope="col">Rezerve Saati</th>
      <th scope="col">Tel No</th>
      <th scope="col">Kişi Sayısı</th>
      <th scope="col">Mesajı</th>
      <th scope="col">Gönderilen Tarih</th>
      <th scope="col">Kaydı Sil</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($rezervasyon as $user)
    <tr>

      <th scope="row">{{$user->id}}</th>

      <td >{{$user->name}}</td>
      <td >{{$user->date}}</td>
      <td>{{$user->time}}</td>
      <td>{{$user->phone}}</td>
      <td class="text-justify">{{$user->visitors}} Kişi</td>
      <td><div class="btn-group btn-group-sm">
        <a data-toggle="collapse" href="#collapseExample" class="btn btn-info"><i class="fas fa-eye"></i>
        </a></div>
        <p class="collapse text-justify" id="collapseExample" >{{$user->message}}</p>
</td>
      <td>{{$user->created_at}}</td>
      <th scope="row"><a href="{{route('rezervasyon.edit', $user->id)}}" onclick="return confirm('Emin Misiniz?')" class="edit btn btn-primary btn-sm"><i class="fas fa-pencil-alt scrollto"></i></a><span class="pl-1">

      </span>
      <a href="{{route('admin_rezervasyon_delete', $user->id)}}" onclick="return confirm('Emin Misiniz?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
      </th>


      </tr>
    @endforeach
  </tbody>
</table>



    </div>

    <div class="card-footer p-0">
    <div class="mailbox-controls">


    </div>
    </div>
    </div>

    </div>
    <script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
  </script>




@endsection
