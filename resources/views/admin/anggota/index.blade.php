@extends('layouts.default')

@section('content')

<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Anggota</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Anggota</li>
    </ol>
  </div>
</div>


<div class="row">
  <!-- column -->
  <div class="col-sm-12">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title">Anggota</h4>
        <h6 class="card-subtitle">HMP <code>Informatika</code></h6>
        <a href="{{ route('anggota.create') }}" class="btn btn-primary ">Tambah Data</a>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Jabatan</th>
                <th>Slug</th>
                <th>Alamat</th>
                <th>Angkatan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($anggota as $staf)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $staf->nama }}</td>
                @if($staf->gambar==null)
                <td>Gambar Tidak Ada</td>
                @else
                <td><img src="{{ asset('image/anggota/' .$staf->gambar) }}" width="50px" height="50px"></td>
                @endif
                <td>{{ $staf->Jabatan->nama_jabatan }}</td>
                <td>{{ $staf->slug }}</td>
                <td>{{ substr($staf->alamat, 0, 10,) }}..</td>
                <td>{{ $staf->angkatan }}</td>
                <td>
                  <form action="{{ route('anggota.destroy', $staf->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('anggota.edit', $staf->id) }}" class="btn btn-info"><i
                        class="fa fa-pencil"></i>Edit</a>
                    <button class="btn btn-danger" type="submit"
                      onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i>Delete</button>
                  </form>

                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          {{ $anggota->links() }}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection