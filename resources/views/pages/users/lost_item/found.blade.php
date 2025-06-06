@extends('layouts.users.main')
@section('title', 'Found Item')

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
<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Add Found Item</h1>
        <nav class="breadcrumbs">
        <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Add Found Item</li>
        </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Found Item Section -->
<section id="found" class="found section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Found Something ?</h2>
        <p>Fill in the information the of the product</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('templates/mainpage/assets/img/thinking.png') }}" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
            </div><!-- End Google Maps -->

            <div class="col-lg-6">
                @if ($errors->any())
                <script>
                    Swal.fire({
                        title: "Error",
                        text: "@foreach($errors->all() as $error) {{ $error }} @endforeach",
                        icon: "error"
                    });
                </script>
                @endif
                <form action="/submit" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <label for="Name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="Name" placeholder="Iphone 14">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label for="location_found" class="form-label">Location Found</label>
                            <input name="location_found" type="text" class="form-control @error('location_found') is-invalid @enderror" id="location_found" placeholder="Taman">
                            @error('location_found')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-12 d-flex flex-column flex-md-row gap-3">
                            <div class="flex-fill">
                                <label for="time_found" class="form-label">Time Found</label>
                                <input type="time" name="time_found" class="form-control @error('time_found') is-invalid @enderror" id="time_found" onclick="this.showPicker()">
                                @error('time_found')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="flex-fill">
                                <label for="date_found" class="form-label">Date Found</label>
                                <input type="date" name="date_found" class="form-control @error('date_found') is-invalid @enderror" id="date_found" onclick="this.showPicker()">
                                @error('date_found')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <label for="category_id" class="form-label">Category</label>
                            <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                <option disabled selected>--Please choose an option--</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-12">
                            <label for="photo_item" class="form-label">Photo of the item</label>
                            <input name="image" class="form-control @error('image') is-invalid @enderror" type="file" id="photo_item">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <input name="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Small">
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message">
                                @if ($errors->any())
                                <script>
                                    Swal.fire({
                                        title: "Error",
                                        text: "@foreach($errors->all() as $error) {{ $error }} @endforeach",
                                        icon: "error"
                                    });
                                </script>
                                @endif
                            </div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-- Found Item Section -->
@endsection