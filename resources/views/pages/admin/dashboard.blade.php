@extends('layouts.admin.main')
@section('title', 'Dashboard')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Dashboard</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-4 col-6">
    <!-- small card -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ $pendingCount }}</h3>

        <p>Pending</p>
      </div>
      <div class="icon">
        <i class="fas fa-shopping-cart"></i>
      </div>
      <a href="/foundItem" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
    <!-- small card -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ $readyCount }}</h3>

        <p>Ready To Collect</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-plus"></i>
      </div>
      <a href="/foundItem" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
    <!-- small card -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ $completedCount }}</h3>

        <p>Complete</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="/foundItem" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
</div>
<!-- /.row -->

<!-- DONUT CHART -->
<div class="row">
  <div class="col-lg-4 col-6">
    <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title">Donut Chart</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
@endsection