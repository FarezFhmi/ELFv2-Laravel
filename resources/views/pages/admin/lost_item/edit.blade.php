@extends('layouts.admin.main')
@section('title', 'Edit Found Item')
@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Update Found Item</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Lost Found Item</li>
            <li class="breadcrumb-item active">Update Found Item</li>
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
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">{{ $lost_items->name }}</h3>
    </div>
    <!-- form start -->
    <form action="/foundItem/{{ $lost_items->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <fieldset disabled>
            <div class="form-group">
                <img src="{{ asset('storage/' . $lost_items->path) }}" class="figure-img img-fluid rounded mx-auto d-block" alt="Image" width="150"></img>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Name" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="Name" placeholder="{{ $lost_items->name }}">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <input name="description" type="text" class="form-control" id="description" placeholder="Small">
                    </div>
                    <div class="form-group">
                        <label for="location_found" class="form-label">Location Found</label>
                        <input name="location_found" type="text" class="form-control" id="location_found" placeholder="{{ $lost_items->location_found }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="time_found" class="form-label">Time Found</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                            </div>
                            <input type="text" name="time_found" class="form-control float-right" id="time_found" placeholder="{{ \Carbon\Carbon::parse($lost_items->time)->format('h:i A') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_found" class="form-label">Date Found</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" name="date_found" class="form-control float-right" id="date_found" placeholder="{{ \Carbon\Carbon::parse($lost_items->date_found)->format('j F Y') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="form-label">Category</label>
                        <input name="category" type="text" class="form-control" id="category" placeholder="{{ $lost_items->category->name }}">
                    </div>
                </div>
            </div>
            </fieldset>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status" class="form-label">Status</label>
                        <select name="status_id" id="status" class="custom-select">
                            <option disabled selected>{{ $status->firstWhere('id', $lost_items->status_id)?->name }}</option>
                            @foreach ($status as $status)
                                @if ($status->id != $lost_items->status_id)
                                    <option value="{{ $status->id }}" {{ old('status_id') == $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <a href="/foundItem" class="btn btn-outline-secondary mr-2">Cancel</a>
                <button type="submit" class="btn btn-warning">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection