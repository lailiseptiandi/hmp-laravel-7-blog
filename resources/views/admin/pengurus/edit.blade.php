@extends('layouts.default')

@section('content')

<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Pengurus</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Pengurus</li>
      <li class="breadcrumb-item active">Edit</li>
    </ol>
  </div>
</div>

<div class="row">
  <!-- column -->
  <div class="col-sm-12">
    <div class="card">
      <div class="card-block">

        <form action="{{ route('pengurus.update', $pengurus->id) }}" enctype="multipart/form-data" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $pengurus->nama }}" required>
          </div>
          <div class="form-group">
            <label>Gambar</label>
            <input type="file" class="form-control" name="gambar" value="{{ $pengurus->gambar }}" required>
          </div>
          <div class="form-group">
            <label>Slug (Staf)</label>
            <input type="text" class="form-control" name="slug" value="{{ $pengurus->slug }}" required>
          </div>

          <div class="form-group">
            <label>Jabatan</label>
            <select name="jabatans_id" class="form-control">
              @foreach ($jabatan as $item)
              @if($item->id==$pengurus->id)
              <option value={{$item->id}} selected>{{$item->nama_jabatan}}</option>
              @else
              <option value={{$item->id}}>{{$item->nama_jabatan}}</option>
              @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea required name="alamat" value="{{ $pengurus->alamat }}" class="form-control"
              style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div>
          <div class=" form-group">
            <label>Angkatan</label>
            <input type="number" class="form-control" name="angkatan" value="{{ $pengurus->angkatan }}" required>
          </div>

          <div class="form-group" style="float: right;">
            <button type="submit" class="btn btn-primary">Update Pengurus</button>
            <a href="{{ route('pengurus.index') }}" class="btn btn-danger">Kembali</a>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection