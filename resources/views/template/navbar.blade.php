<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <a href="{{ route('beranda') }}" class="logo mr-auto"><img src="{{ asset('assets/img/logo.png') }}" alt=""
        class="img-fluid"></a>
    <!-- Uncomment below if you prefer to use text as a logo -->
    <!-- <h1 class="logo mr-auto"><a href="index.html">Butterfly</a></h1> -->

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="{{ route('beranda') }}">Home</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#pengurus">Pengurus</a></li>
        <li><a href="#gallery">Galeri</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#">Blog</a></li>

      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->