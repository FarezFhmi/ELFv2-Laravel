@extends('layouts.admin.main')
@section('title', 'Found Item')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Lost Found Item</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Lost Found Item</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
@if (session('success'))
    <script>
        Swal.fire({
                title: "Successful",
                text: "{{ session('success') }}",
                icon: "success"
            });
    </script>
@endif
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="/foundItem/create" class="btn btn-primary float-right">
                    Add Found Items
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive-md">
                <table id="example" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="width:1px; white-space:nowrap;">No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lost_items as $found)
                            <tr>
                                <td>{{ ($lost_items->currentPage() - 1) * $lost_items->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $found->name }}</td>
                                <td>{{ $found->description }}</td>
                                <td><img src="{{ asset('storage/' . $found->path) }}" class="figure-img img-fluid rounded" alt="Image" width="50"></img></td>
                                <td>{{ $found->status->name }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/foundItem/edit/{{ $found->id }}" class="btn btn-warning mr-2">Change Status</a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $found->id }}">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @include('pages.admin.lost_item.delete-confirmation')
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                {{ $lost_items->links('pagination::bootstrap-5') }}
            </div>
        </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection