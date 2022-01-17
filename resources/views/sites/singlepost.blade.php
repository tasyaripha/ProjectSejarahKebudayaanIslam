@extends('layouts.frontend')

@section('content')
    <!-- Page Content -->
    <!-- <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>...</h4>
              <h2>Artikel</h2>
            </div>
          </div>
        </div>
      </div>
    </div> -->


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Sejarah Tentang ...</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="{{asset('frontend')}}/images/gambar 1.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>{{$post->title}}</h4>
              <p>{!!$post->content!!}</p>
              <!-- <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </div>
            
@stop