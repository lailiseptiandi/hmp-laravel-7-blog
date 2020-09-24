@extends('layouts.default')

@section('content')

<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Gallery</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Gallery</li>
      <li class="breadcrumb-item active">Tambah Gallery</li>
    </ol>
  </div>
</div>

<div class="row">
  <!-- column -->
  <div class="col-sm-12">
    <div class="card">
      <div class="card-block">
        <form action="{{ route('gallery.store') }}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="form-group">
            <label>Gambar</label>
            <input type="file" class="form-control" name="gambar">
          </div>
          <div class="form-group" style="float: right;">
            <button type="submit" class="btn btn-primary mr-2">Tambah Gallery</button>
            <a href="{{ route('gallery.index') }}" class="btn btn-danger">Kembali</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

@endsection