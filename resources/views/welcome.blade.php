
@extends('layouts.app')
@section('main')
<!-- Hero Section Start -->
<section class="hero-section text-white d-flex align-items-center" style="background: linear-gradient(90deg, #004080, #0066cc); min-height: 85vh; padding: 60px 0;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <h1 class="display-5 fw-bold mb-3">Your Trusted <span style="color:#FFA500;">Tax & Financial</span> Partner in Hazaribagh</h1>
        <p class="lead mb-4">
          📍 Hazaribagh, Jharkhand <br>
          📞 Call Us: <a href="tel:9504470815" class="text-warning fw-semibold">9504470815</a>
        </p>
        <a href="https://wa.me/916206475169" target="_blank" class="btn btn-lg btn-warning text-white fw-semibold px-4 py-2 rounded">
          Get Started Today
        </a>
      </div>
      <div class="col-lg-5 d-none d-lg-block">
        <img src="https://cdn-icons-png.flaticon.com/512/3855/3855485.png" alt="Finance Illustration" class="img-fluid" style="max-height: 350px;">
      </div>
    </div>
  </div>
</section>
<!-- Hero Section End -->

@include('inner.about')
@include('inner.service')
@include('inner.test')
@include('inner.fqa')
@include('inner.contact')
@endsection
