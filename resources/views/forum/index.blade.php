@extends('layouts.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Forum</h3>
              <div class="right">  
                
                <a href="{{route('post.add')}}" class="btn btn-sm btn-primary">Add Forum</a>             
                            
              </div>

            </div>
            <div class="panel-body">
            <ul class="list-unstyled activity-list">
                @foreach($forum as $frm)
				<li>
					<img src="{{asset('images/user1.png')}}" alt="Avatar" class="img-circle pull-left avatar">
					<p>{{$frm->user->name}} <a href="/forum/{{$frm->id}}/view">{{$frm->judul}}</a> <span class="timestamp">{{$frm->created_at->diffForHumans()}}</span></p>
				</li>
                @endforeach
			</ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/jamaah/create" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="mb-3{{$errors->has('nama_depan') ? ' has-error' : ''}}">
            <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
            <input name="nama_depan" type="text" class="form-control" placeholder="Nama Depan" value="{{old('nama_depan')}}">
            @if($errors->has('nama_depan'))
                <span class="help-block">{{$errors->first('nama_depan')}}</span>
            @endif
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
            <input name="nama_belakang" type="text" class="form-control" placeholder="Nama Belakang" value="{{old('nama_belakang')}}">
          </div>
          <div class="mb-3{{$errors->has('email') ? ' has-error' : ''}}">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" placeholder="Email" value="{{old('email')}}">
            @if($errors->has('email'))
                <span class="help-block">{{$errors->first('email')}}</span>
            @endif
          </div>
          <div class="mb-3{{$errors->has('jenis_kelamin') ? ' has-error' : ''}}">
            <label for="exampleFormControlSelect1" >Pilih Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">            
              <option value="L"{{(old('jenis_kelamin') == 'L' ) ? 'selected' : '' }}>laki-laki</option>
              <option value="P"{{(old('jenis_kelamin') == 'P' ) ? 'selected' : '' }}>Perempuan</option>
            </select>
            @if($errors->has('jenis_kelamin'))
                <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
            @endif
          </div>
          <div class="mb-3{{$errors->has('alamat') ? ' has-error' : ''}}">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{old('alamat')}}</textarea>
            @if($errors->has('alamat'))
                <span class="help-block">{{$errors->first('alamat')}}</span>
            @endif
          </div>
          <div class="mb-3{{$errors->has('avatar') ? ' has-error' : ''}}">
                  <label for="exampleFormControlTextarea1" class="form-label">Avatar</label>
                  <input type="file" name="avatar" class="form-control" placeholder="Avatar" >
                  @if($errors->has('avatar'))
                <span class="help-block">{{$errors->first('avatar')}}</span>
                  @endif                  
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
      $('.delete').click(function()
      {
        var post_id = $(this).attr('post-id');
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
                  window.location = "/post/"+post_id+"/delete";
                } 
              });
      });
  </script>
@stop
