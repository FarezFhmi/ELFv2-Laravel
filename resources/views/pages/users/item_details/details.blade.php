@extends('pages.users.item_details.main')
@section('title', 'Lost Item Details')
@section('content')
<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">{{ $lost_items->name }}</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">{{ $lost_items->name }}</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- More Features Section -->
  <section id="more-features" class="more-features section">
      <div class="container">
        <div class="row justify-content-around gy-4">
            <div class="features-image col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ asset('storage/' . $lost_items->path) }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
              <h3>{{ $lost_items->name }}</h3>
              <p>{{ $lost_items->description }}</p>
              <div class="row">
                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Location</h4>
                    <p>{{ $lost_items->location_found }}</p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-clock flex-shrink-0"></i>
                  <div>
                    <h4>Time</h4>
                    <p>{{ \Carbon\Carbon::parse($lost_items->time)->format('h:i A') }}</p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-calendar flex-shrink-0"></i>
                  <div>
                    <h4>Date</h4>
                    <p>{{ \Carbon\Carbon::parse($lost_items->date_found)->format('j F Y') }}</p>
                  </div>
                </div><!-- End Icon Box -->
                
                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-archive flex-shrink-0"></i>
                  <div>
                    <h4>Status</h4>
                    <p>{{ $lost_items->status->name }}</p>
                  </div>
                </div><!-- End Icon Box -->
                
                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-tag flex-shrink-0"></i>
                  <div>
                    <h4>Category</h4>
                    <p>{{ $lost_items->category->name }}</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>
        </div>
      </div>
    </section><!-- /More Features Section -->
@endsection