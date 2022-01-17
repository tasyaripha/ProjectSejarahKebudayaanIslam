@extends('layouts.frontend')

@section('content')

<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Artikel</h2>
              <a href="products.html">view all <i class="fa fa-angle-right"></i></a>
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
@stop