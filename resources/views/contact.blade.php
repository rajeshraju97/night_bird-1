@extends('layouts.app')
@section('title', 'Contact')

@section('content')

 <style>
    .breadcrumb-item a {
    color: #fff;
    }
  </style>
  <!-- Hero Start -->
  <div class="container-fluid bg-light py-6 my-6 mt-0" style="
    background: url('img/bg-cover1.png');
    color: white;height: 340px;">
    <div class="container text-center animated bounceInDown">
    <h1 class="display-1 mb-4" style="color: white">Contact</h1>
    <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
      <li class="breadcrumb-item text-light" aria-current="page">Contact</li>
    </ol>
    </div>
  </div>
  <!-- Hero End -->

  <!-- Contact Start -->
  <div class="container-fluid contact py-6">
    <div class="container">
    <div class="p-5 bg-light rounded contact-form">
      <div class="row g-4">
      <div class="col-12">
        <small
        class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get
        in touch</small>
        <h1 class="display-5 mb-0">Contact Us For Any Queries!</h1>
      </div>
      <div class="col-md-6 col-lg-7">
        <form>
        <input type="text" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Your Name" />
        <input type="email" class="w-100 form-control p-3 mb-4 border-primary bg-light"
          placeholder="Enter Your Email" />
        <textarea class="w-100 form-control mb-4 p-3 border-primary bg-light" rows="4" cols="10"
          placeholder="Your Message"></textarea>
        <button class="w-100 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill" type="submit">
          Submit Now
        </button>
        </form>
      </div>
      <div class="col-md-6 col-lg-5">
        <div>
        <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
          <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
          <div class="">
          <h4>Address</h4>
          <p>123 Street, Visakhapatnam, AP</p>
          </div>
        </div>
        <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
          <i class="fas fa-envelope fa-2x text-primary me-4"></i>
          <div class="">
          <h4>Mail Us</h4>
          <p class="mb-2">info@example.com</p>
          <p class="mb-0">support@example.com</p>
          </div>
        </div>
        <div class="d-inline-flex w-100 border border-primary p-4 rounded">
          <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
          <div class="">
          <h4>Mobile Numbers</h4>
          <p class="mb-2">(+091) 8899776655</p>
          <p class="mb-0">(+091) 9966885544</p>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- Contact End -->

@endsection