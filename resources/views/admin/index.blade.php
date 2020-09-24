@extends('layouts.default')

@section('content')
<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </div>
</div>

<div class="row">
  <!-- Column -->
  <div class="col-sm-6">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title">Total Pengurus Harian</h4>
        <div class="text-leftx">
          <h2 class="font-light"><i class="fa fa-id-card"></i> $120</h2>
          <span class="text-muted">Todays Income</span>
        </div>
        {{-- <span class="text-success">80%</span>
        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div> --}}
      </div>
    </div>
  </div>
  <!-- Column -->
  <!-- Column -->
  <div class="col-sm-6">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title">Anggota</h4>
        <div class="text-left">
          
          <h2 class="font-light"><i class="fa fa-id-card-o"></i></h2>
          

          <span class="text-muted">Todays Income</span>
        </div>
        {{-- <span class="text-info">30%</span>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div> --}}
      </div>
    </div>
  </div>
  <!-- Column -->
</div>

@endsection