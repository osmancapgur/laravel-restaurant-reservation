@extends('admin.master');
@section('content');
  <div class="content-wrapper bg-transparent">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-xxl">
        <div class="row mb-2">
          <!-- /.col -->
        <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
  <!-- Main content -->
  <section class="content">
    <div class="container row mx-auto">
      @foreach ($turler as $user)
        <div class="col-lg-6">
    <div class="card card-light">
      <div class="card-header">
      <h3 class="card-title">{{$user->title}}</h3>
      <div class="card-tools">
      <div class="input-group input-group-sm" style="width: 150px;">
      <input type="text" name="table_search" class="form-control float-right" placeholder="Ara" onkeyup="myFunction()" id="myInput">
      <div class="input-group-append">
      <button type="submit" class="btn btn-default">
      <i class="fas fa-search"></i>
      </button>
      </div>
      </div>
      </div>
      </div>

      <div class="card-body table-responsive p-0">
       <table class="table table-hover text-nowrap" id="myTable">
     <tr>
       <th>Yemek Adı</th>
       <th>İçeriği:</th>
       <th>Fiyatı:</th>
       <th></th>
     </tr>

     @foreach ($hepsi as $user1)

  @if ($user->title == $user1->turu )
       <tr>
         <td>{{$user1->adi}}</td>
         <td>{{$user1->icerik}}</td>
         <td>{{$user1->fiyati}}</td>
         <td class="text-right py-0 align-middle">
          <div class="btn-group btn-group-sm">
          <a href="{{route('admin_yemek_delete', $user->id)}}" onclick="return confirm('Emin Misiniz?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
          </div>
          </td>
       </tr>



              @endif

                @endforeach

      </table>
      </div>
      </div>
      </div>
    @endforeach
      </div>

    </div>
    </div>

        </div>
  </section>
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
