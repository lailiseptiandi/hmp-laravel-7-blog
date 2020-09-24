@extends('layouts.front')

@section('content')

<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <!-- <h2>Selamat Datang di situs resmi</h2> -->
        <h1 class="animate__animated animate__bounceInLeft">HMP-INFORMATIKA UPY</h1>
        <h2 class="animate__animated animate__backInLeft">Selamat Datang di Official Website Himpunan Mahasiswa Prodi Informatika
          Universitas PGRI Yogyakarta
        </h2>
        <div><a href="#about" class="btn-get-started scrollto animate__animated animate__heartBeat">Get Started</a></div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animate__animated animate__rubberBand animate__delay-1s animate__repeat-3" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch">
          <!-- <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
        </div>

        <div
          class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h3>Visi</h3>
          <p>Menjadikan Organisasi Himpunan Mahasiswa Informatika UPY Menjadi Wadah Penampung Aspirasi. Dan Tempat
            Untuk Tumbuh dan Belajar Mengembangkan Potensi Diri Bersama Menjadi Mahasiswa Yang Berkarakter, Berilmu,
            Berprestasi, Dan Mampu Bersaing di Era Globalisasi.</p>
          <h3>Misi</h3>
          <div class="icon-box">
            <div class="icon"><i class="bx bx-check"></i> </div>
            <p class="description">Membuat Dan Menjalankan Program Kerja Yang Mampu Menjadi Pondasi Bagi Mahasiswa
              Informatika UPY Dalam Membangun Karakter Dan Mengembangkan Softskil</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-check"></i></div>
            <p class="description">Menjadi Oraganisasi Yang Menjembatani Proses Pengembangan Kualitas Sumber Daya
              Mahasiswa Di Dalam Bidang Akademik Maupun Non Akademik</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-check"></i></div>
            <p class="description">Organisasi Yang Berperan Aktif Dan Menjalin Hubungan Baik Dengan Civitas, , Alumni,
              Serta Organisasi Atau Lembaga Lainnya Khususnya Di Lingkungan Universitas PGRI Yogyakarta, Dan Menjadi
              Tempat Untuk Bertukar Pikiran Secara Kekeluargaan</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="pengurus" class="services section-bg">
    <div class="container">


      <div class="section-title">
        <h2>Kepengurusan</h2>
        <p>Di bawah ini beberapa nama pengurus Himpunan Mahasiswa Informatika Universitas PGRI Yogyakarta.</p>
      </div>

      <div class="row">
        @foreach ($jabatan ?? '' as $jabat)
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            {{-- <div class="icon"></div> --}}
            <h4 class="title text-center"><a
                href="{{ route('anggota.jabatan', $jabat->id) }}">{{ $jabat->nama_jabatan }}</a>
            </h4>
            <p class="description">{{ $jabat->deskripsi }}</p>
          </div>
        </div>
        @endforeach

      </div>


    </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">

      <div class="section-title">
        <h2>Gallery</h2>
        <p>Kumpulan kegiatan HMP-I dalam rangka menyelesaikan proker-proker dan kegiatan lainnya.</p>
      </div>

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gal-1.jpeg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gal-1.jpeg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gal-2.jpeg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gal-2.jpeg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gal-3.jpeg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gal-3.jpeg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gal-4.jpeg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gal-4.jpeg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gal-5.jpeg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gal-5.jpeg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gal-6.jpeg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gal-6.jpeg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gal-7.jpeg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gal-7.jpeg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gal-7.jpeg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/gallery/gal-7.jpeg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Gallery Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Silahkan Hubungi jika ada yang mau ditanyakan. Dengan mengisi formulir di bawah ini atau kirim via Email.
        </p>
      </div>

      <div>
        <!-- <iframe src="" frameborder="0" allowfullscreen></iframe> -->
        <iframe style="border:0; width: 100%; height: 270px;"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.844260104971!2d110.33882435347371!3d-7.806306540834716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57fac27e70db%3A0x6ac4a4807ca11460!2sUniversitas%20PGRI%20Yogyakarta!5e0!3m2!1sid!2sid!4v1597423721964!5m2!1sid!2sid"
          width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
          tabindex="0"></iframe>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Lokasi:</h4>
              <p>Jl. IKIP PGRI I Sonosewu No.117, Sonosewu, Ngestiharjo, Kec. Kasihan, Bantul, Daerah Istimewa
                Yogyakarta 55182</p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>hmpInformatika@gmail.com</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Telepon:</h4>
              <p>+62 8778-2662-1363</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                  data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required"
                data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->




@endsection