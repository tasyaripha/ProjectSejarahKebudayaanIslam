@extends('layouts.frontend')

@section('content')
     <!-- Banner Starts Here -->
     <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Selamat Datang</h4>
            <h2>Di Sejarah Kebudayaan Islam</h2>
          </div>
        </div>
          <!-- <div class="banner-item-02">
            <div class="text-content">
              <h4>Flash Deals</h4>
              <h2>Get your best products</h2>
            </div>
          </div>
          <div class="banner-item-03">
            <div class="text-content">
              <h4>Last Minute</h4>
              <h2>Grab last minute deals</h2>
            </div>
          </div> -->
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Artikel</h2>
              <a href="/artikel">view all <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="product-item">
                    <a href="#"><img src="{{$post->thumbnail()}}" alt=""></a>
                    <div class="down-content">
                        <a target="_blank" href="{{route('site.single.post', $post->slug)}}"><h4>{{$post->title}}</h4></a>
                                         
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2> Tentang Kebudayaan Islam</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Kebudayaan Islam adalah</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent"></a> Kebudayaan merupakan perwujudan segala aktivitas manusia sebagai upaya memenuhi
                  kebutuhan hidupnya. Kebudayaan akan terus berkembang, tidak akan berhenti slama masih ada kehidupan manusia. Hasil perkembangan kebudayaan yang dilandasi oleh nilai-nilai ketuhanan disebut kebudayaan islam. </p>
              <!-- <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul> -->
              <!-- <a href="about.html" class="filled-button">Read More</a> -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="{{asset('frontend')}}/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
@stop