@extends('layouts.default')

@section('content')

<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Anggota</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Anggota</li>
      <li class="breadcrumb-item active">Tambah Anggota</li>
    </ol>
  </div>
</div>

<div class="row">
  <!-- column -->
  <div class="col-sm-12">
    <div class="card">
      <div class="card-block">
        <form action="{{ route('anggota.store') }}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
            <label>Gambar</label>
            <input type="file" class="form-control" name="gambar">
          </div>
          <div class="form-group">
            <label>Slug (Staf)</label>
            <input type="text" class="form-control" name="slug">
          </div>
          <div class="form-group">
            <div class="form-group">
              <label>Jabatan</label>
              <select name="jabatan_id" class="form-control">
                @foreach ($jabatan as $item)
                <option value={{$item->id}}>{{$item->nama_jabatan}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea name="alamat" class="form-control"
                style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
            <div class=" form-group">
              <label>Angkatan</label>
              <input type="number" class="form-control" name="angkatan">
            </div>

            <div class="form-group" style="float: right;">
              <button type="submit" class="btn btn-primary mr-2">Tambah Anggota</button>
              <a href="{{ route('anggota.index') }}" class="btn btn-danger">Kembali</a>
            </div>

        </form>
      </div>
    </div>
  </div>
</div>

@endsection