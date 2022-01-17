@extends('layouts.frontend')

@section('content')

 <!-- ***** Preloader Start ***** -->
 
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Sejarah Kebudayaan <em>Islam</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="/artikel">Article</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="">
      <!-- <div class="page-heading about-heading header-text"> -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
            <div class="text-content">
              <h4>about us</h4>
              <h2>Team</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- team     -->
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-18">
            <div class="section-heading">
              <h2>Team Members</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <!-- <img src="assets/images/team_01.jpg" alt=""> -->
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Fadia Rani</h4>
                <span>20180140069</span>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <!-- <img src="assets/images/team_02.jpg" alt=""> -->
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Rayka Agustasya</h4>
                <span>20180140017</span>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p> -->
              </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>



@stop