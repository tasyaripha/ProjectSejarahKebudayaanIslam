@extends('layouts.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
          <div class="panel-heading">
              <h3 class="panel-title">Data postingan</h3>
              <div class="right">            
            
                <a href="/postingan/exportpdf" class="btn btn-sm btn-primary">Export PDF</a>
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
        
              </div>

            </div>
            <form action="/postingan">
              <div class="navbar-btn" style="padding-left:25px">
                      <button type="submit" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                  </div> 
              </form>                                               
                <div class="navbar-form navbar-left" >              
                  <form action="/postingan" class="form-inline my-2 my-lg-0" method="GET">
                  <div class="input-group">
										<input name="cari" type="search" class="form-control">
										<span class="input-group-btn"><button class="btn btn-primary" type="submit">Cari</button></span>
									</div>
                  </form>
                </div> 
            <div class="panel-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>NAMA</th>
                    <th>NOMOR TELEPON</th>
                    <th>ALAMAT</th> 
                    <th>ACTION</th>
              
                  </tr>
                </thead>
                <tbody>
                  @foreach($postingan as $postingan)

                  <tr>
                    <td>{{$postingan->title}}</td>
                    <td>{{$postingan->content}}</td>
                               
                    <td>
                    <a href="/postingan/{{$postingan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm delete" postingan-id="{{$postingan->id}}">Delete</a>
                    </td>
               
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data postingan</h5>
        
      </div>
      <div class="modal-body">
      <form action="postingan/create" method="POST">
      {{csrf_field()}}
  <div class="mb-3">
    <label  class="form-label">Nama</label>
    <input name="nama" type="text" class="form-control" placeholder="Nama"  pattern="[A-Za-z ]+"  title="Hanya Boleh Huruf" required >    
  </div>
  <div class="mb-3">
    <label  class="form-label">Nomor Telepon</label>
    <input name="telpon" type="text" class="form-control" placeholder="Masukkan Nomor" pattern="[0-9]+" title="Hanya Boleh Angka" required>    
  </div>
    <div class="mb-3">
        <label  class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@stop
@section('footer')
<script>
  $('.delete').click(function() {
    var postingan_id = $(this).attr('postingan-id');
    swal({
        title: "Yakin ingin menghapus data ini ?",
        text: "Data akan dihapus permanen",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        console.log(willDelete);
        if (willDelete) {
          window.location = "/postingan/" + postingan_id + "/delete";
        }
      });
  });

//   var nameField = document.querySelector("input[name=nama]");

//   nameField.addEventListener("invalid", function(){
//   this.setCustomValidity('');
//   if (!this.validity.valid) {
//       this.setCustomValidity('Kolom nama tidak boleh kosong.');  
//     }
// });
var alamatField = document.querySelector("textarea[name=alamat]");

alamatField.addEventListener("invalid", function(){
this.setCustomValidity('');
if (!this.validity.valid) {
    this.setCustomValidity('Kolom alamat tidak boleh kosong.');  
  }
});

</script>
@stop
@section('content')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="row">
  <div class="col-6">
    <h1>Data kas</h1>
  </div>
  <div class="float-left my-2">
    <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Tambah Data
    </button>
  </div>

</div>




@endsection