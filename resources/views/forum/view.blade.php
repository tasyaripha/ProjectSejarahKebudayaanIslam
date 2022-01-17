@extends('layouts.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="panel panel-headline">
			<div class="panel-heading">
				<h3 class="panel-title">{{$forum->judul}}</h3>
				<p class="panel-subtitle">{{$forum->created_at->diffForHumans()}}</p>
			</div>
			<div class="panel-body">
				
             {{$forum->konten}}
                <hr>
                <div class="btn-group">
                    <button class="btn btn-default"><i class="lnr lnr-thumbs-up"></i> Suka</button>
                    <button class="btn btn-default" id="btn-komentar-utama"><i class="lnr lnr-bubble"></i> Komentar</button>
                </div>
                <form action="" style="margin-top:10px;display:none;" id="komentar-utama" method="POST">
                    @csrf
                    <input type="hidden" name="forum_id" value="{{$forum->id}}">
                    <input type="hidden" name="parent" value="0">
                    <textarea  name="konten" class="form-control" id="komentar-utama"  rows="4"></textarea>
                    <input style="margin-top:10px;" type="submit" class="btn btn-primary" value="Kirim">
                </form>
                <h3>Komentar</h3>
             <ul class="list-unstyled activity-list">
                 @foreach($forum->komentar()->orderBy('created_at','desc')->get() as $komentar)
				<li>
					<img src="{{asset('images/user1.png')}}" alt="Avatar" class="img-circle pull-left avatar">
					<p><a href="#">{{$komentar->user->name}}</a> <br> {{$komentar->konten}} <span class="timestamp">{{$komentar->created_at->diffForHumans()}}</span></p>
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
@endsection

@section('footer')
    <script>
        $(document).ready(function(){
            $('#btn-komentar-utama').click(function(){
                $('#komentar-utama').toggle('slide');
            });
        });
    </script>
@endsection