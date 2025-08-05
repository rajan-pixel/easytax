
@extends('layouts.app')
@section('main')

<!-- About Us Page Start -->
<section class="about-hero py-5 text-center bg-primary text-white">
  <div class="container">
    <h1 class="fw-bold mb-3">About EASY TAX</h1>
    <p class="lead">Your Trusted Tax & Financial Partner in Hazaribagh</p>
  </div>
</section>

<!-- Who We Are Section -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-md-6" data-aos="fade-right">
        <img src="https://img.freepik.com/free-vector/tax-concept-illustration_114360-6117.jpg" alt="About EASY TAX" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <h2 class="fw-bold text-primary">Who We Are</h2>
        <p class="text-muted">
          EASY TAX is a professional tax & finance consultancy based in Hazaribagh, Jharkhand. With over 7+ years of experience and 500+ happy clients, we specialize in Income Tax, GST, TDS, Bookkeeping, Company Registration, Digital Signature and more.
        </p>
        <p class="text-muted">
          Whether you're an individual, business owner, or startup – we offer end-to-end support to manage your tax and compliance needs smoothly and affordably.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Mission & Vision -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <div class="row g-4">
      <div class="col-md-6" data-aos="fade-up">
        <div class="p-4 shadow-sm bg-white rounded h-100">
          <h4 class="text-primary fw-bold">🎯 Our Mission</h4>
          <p class="text-muted">
            To provide affordable, reliable, and accurate financial services to individuals and businesses, ensuring compliance and peace of mind.
          </p>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 shadow-sm bg-white rounded h-100">
          <h4 class="text-warning fw-bold">🌟 Our Vision</h4>
          <p class="text-muted">
            A tax-literate and financially empowered India, where every citizen and business has access to quality tax and finance solutions.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

@include('inner.about')
<!-- CTA -->
<section class="py-5 bg-primary text-white text-center">
  <div class="container">
    <h4 class="fw-bold mb-3">Ready to Simplify Your Tax & Finance?</h4>
    <a href="https://wa.me/916206475169" class="btn btn-warning fw-semibold px-4 py-2">
      📲 Get Started on WhatsApp
    </a>
  </div>
</section>
<!-- About Us Page End -->
@endsection
