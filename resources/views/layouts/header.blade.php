<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EASY TAX</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- AOS Animation CSS -->
 <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    /* Navbar Styling */
    .navbar {
      background: linear-gradient(90deg, #003b6f, #005aa7);
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
      padding: 12px 0;
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: #fff;
      letter-spacing: 1px;
    }

    .navbar-brand span {
      color: #FFA500; /* Orange */
    }

    .nav-link {
      color: #ffffff !important;
      font-weight: 500;
      margin: 0 10px;
      position: relative;
    }

    .nav-link::after {
      content: '';
      display: block;
      width: 0;
      height: 2px;
      background: #FFA500;
      transition: 0.3s;
      position: absolute;
      bottom: -5px;
      left: 0;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .nav-link:hover {
      color: #FFA500 !important;
    }

    .btn-cta {
      background-color: #FFA500;
      color: #fff;
      font-weight: 600;
      padding: 8px 20px;
      border-radius: 5px;
      transition: 0.3s ease;
    }

    .btn-cta:hover {
      background-color: #e69500;
      color: #fff;
    }

    @media (max-width: 991px) {
      .navbar-nav {
        background-color: #003b6f;
        padding: 1rem;
        border-radius: 0.5rem;
      }
    }
  </style>
</head>
<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      EASY <span>TAX</span>
    </a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#faq">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
      <a href="https://wa.me/916206475169" target="_blank" class="btn btn-cta ms-lg-4 mt-3 mt-lg-0">Get Started</a>
    </div>
  </div>
</nav>
<!-- Navbar End -->
