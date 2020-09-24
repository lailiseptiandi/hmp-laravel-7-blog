@extends('layouts.default')

@section('content')

<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Gallery</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Gallery</li>
    </ol>
  </div>
</div>

<div class="row">
  <!-- column -->
  <div class="col-sm-12">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title">Galleri</h4>
        <h6 class="card-subtitle">HMP <code>Informatika</code></h6>
        <a href="{{ route('gallery.create') }}" class="btn btn-primary ">Tambah Data</a>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($galeri as $photo)
              <tr>
                <td>{{ $loop->iteration }}</td>
                @if($photo->gambar==null)
                <td>Gambar Tidak Ada</td>
                @else
                <td><img src="{{ asset('image/galleri/' .$photo->gambar) }}" width="50px" height="50px"></td>
                @endif
                <td>
                  <form action="{{ route('gallery.destroy', $photo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    {{-- <a href="{{ route('pengurus.edit', $photo->id) }}" class="btn btn-info"><i
                      class="fa fa-pencil"></i>Edit</a> --}}
                    <button class="btn btn-danger" type="submit"
                      onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i>Delete</button>
                  </form>

                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          {{-- {{ $galeri->links() }} --}}
        </div>
      </div>
    </div>
  </div>
</div>


@endsection