@extends('layouts.front')

@section('content')

<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <!-- <h2>Selamat Datang di situs resmi</h2> -->
       <h1 class="animate__animated animate__heartBeat">HMP-INFORMATIKA UPY</h1>
        <h2 class="animate__animated animate__backInLeft">Selamat Datang di Official Website Himpunan Mahasiswa Prodi Informatika
          Universitas PGRI Yogyakarta
        </h2>
        {{-- <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div> --}}
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
       <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animate__animated animate__rubberBand animate__delay-1s animate__repeat-3" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->
<main id="main">

  <section>
    <div class="container">
      <div class="page-wrapper">
        <div class="wrapper">
          <div class="container-fluid">
            <div class="container">
              
              <h1 class="m-lg-4">Nama-Nama Anggota</h1>
                <div class="card">
                  @foreach ($jabatansss as $item)
                    <div class="card-body">
                  <div class="card mb-3 mt-4" style="max-width: 540px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="{{ asset('image/pengurus/'. $item->gambar) }}" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h4 class="card-title ml-1" align-items-center>{{ $item->nama }}</h4>
                          <p class="card-text"><b>Asal :</b> {{ $item->alamat}}</p>
                          <p class="card-text"><b>Jabatan :</b> {{ $item->slug}}</p>
                          <p class="card-text"><b>Angkatan :</b> {{ $item->angkatan }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  @endforeach

                @foreach ($jabatanall as $item)

                <div class="card-body">
                  <div class="card mb-3 mt-4" style="max-width: 540px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="{{ asset('image/anggota/'. $item->gambar) }}" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h4 class="card-title ml-1" align-items-center>{{ $item->nama }}</h4>
                          <p class="card-text"><b>Asal :</b> {{ $item->alamat}}</p>
                          <p class="card-text"><b>Jabatan :</b> {{ $item->slug}}</p>
                          <p class="card-text"><b>Angkatan :</b> {{ $item->angkatan }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection