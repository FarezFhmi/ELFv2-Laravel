@extends('layouts.admin.main')
@section('title', 'Create New Found Item')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Add Found Item</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Lost Found Item</li>
            <li class="breadcrumb-item active">Add Found Item</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
@if ($errors->any())
<script>
    Swal.fire({
        title: "Error",
        text: "@foreach($errors->all() as $error) {{ $error }} @endforeach",
        icon: "error"
    });
</script>
@endif
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New Found Item</h3>
    </div>
    <!-- form start -->
    <form action="/foundItem/store" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Name" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="Name" placeholder="Enter name of the item">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <input name="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Description of the item">
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="location_found" class="form-label">Location Found</label>
                        <input name="location_found" type="text" class="form-control @error('location_found') is-invalid @enderror" id="location_found" placeholder="Location found the item">
                        @error('location_found')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="time_found" class="form-label">Time Found</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                            </div>
                            <input type="time" name="time_found" class="form-control float-right @error('time_found') is-invalid @enderror" id="time_found" onclick="this.showPicker()">
                             @error('time_found')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="date_found" class="form-label">Date Found</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="date" name="date_found" class="form-control float-right @error('date_found') is-invalid @enderror" id="date_found" onclick="this.showPicker()">
                            @error('date_found')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="form-label">Category</label>
                        <select name="category_id" id="category_id" class="custom-select @error('category_id') is-invalid @enderror">
                            <option disabled selected>--Please choose an option--</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="photo_item" class="form-label">Photo of the item</label>
                        <div class="custom-file">
                            <input name="image" class="custom-file-input @error('image') is-invalid @enderror" type="file" id="photo_item">
                            <label class="custom-file-label" for="photo_item">Choose Image</label>
                        </div>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <a href="/foundItem" class="btn btn-outline-secondary mr-2">Cancel</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection