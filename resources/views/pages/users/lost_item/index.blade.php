@extends('layouts.users.main')
@section('title', 'Home')

@section('content')
@if(session('success'))
<script>
    Swal.fire({
        title: 'Success!',
        text: '{{ session("success") }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
</script>
@endif
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="hero-bg">
            <img src="{{ asset('templates/mainpage/assets/img/hero-bg-light.webp') }}" alt="">
        </div>
        <div class="container text-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 data-aos="fade-up">Welcome to <span>ELF</span></h1>
            <p data-aos="fade-up" data-aos-delay="100">You found something that doesn't belong to you?<br></p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                <a href="/found" class="btn-get-started">Post here !</a>
            </div>
            <img src="{{ asset('templates/mainpage/assets/img/person_found.png') }}" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
            </div>
        </div>
        </section><!-- /Hero Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Lost Item Found</h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row g-5">
                @forelse ($lost_items as $lost)   
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item item-cyan position-relative d-flex justify-content-center">
                        <div class="text-center">
                            <img src="{{ asset('storage/' . $lost->path) }}" class="figure-img img-fluid rounded" alt="Image" width="250"></img>
                            <div class="text-center">
                                <h3>{{ $lost->name }}</h3>
                                <p>{{ $lost->description }}</p>
                                <a href="/details/{{ $lost->id }}" class="read-more stretched-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">Nothing posted yet.</p>
                    </div>
                @endforelse
            </div>
        </div>
        </section><!-- /Services Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

            <div class="col-lg-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com</p>
                </div>
            </div><!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
                <div class="row gy-4">

                    <div class="col-md-12">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="col-md-12">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                    </div>

                    <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>

                    <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Send Message</button>
                    </div>

                </div>
                </form>
            </div><!-- End Contact Form -->

            </div>

        </div>

        </section><!-- /Contact Section -->
@endsection