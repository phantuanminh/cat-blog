@extends('layouts.index')
@section('header')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/about-bg-1.jpg')">
    <style>
      img {
        border-radius: 50%;
        width:  320px;
        height: 320px;
      }
    </style>
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>about us</h1>
            <span class="subheading">who we are</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection
  @section('content')
  <!-- Main Content -->
  <div class="container">
    <div class="row">
        <h1 class="mx-auto">Contributors</h1>
    </div>
    <br>
    <div class="row">
      <div class="col-ms-6 mx-auto">
        <img src="img/about-person-minh.JPG" style="object-fit: cover">
          <p style="text-align: center; font-weight: bold;">
            Minh Phan
          </p>
      </div>
      <div class="col-ms-6 mx-auto">
        <img src="img/about-person-pnk.JPG" style="object-fit: cover">
          <p style="text-align: center; font-weight: bold;">
            Khanh Pham
          </p>
      </div>
    </div>
  </div>

  <hr>
  @endsection
