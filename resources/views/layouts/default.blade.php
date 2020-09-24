<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin HMP</title>
  {{-- arti stak adalah tumpukan --}}
  @stack('before-style')
  @include('includes.style')
  @stack('after-style')
</head>

<body class="fix-header fix-sidebar card-no-border">
  @stack('before-nav')
  @include('includes.navbar')
  @stack('after-nav')


  @stack('before-style')
  @include('includes.sidebar')
  @stack('after-style')
  <div class="page-wrapper">
    <div class="container-fluid">

      @yield('content')


    </div>
  </div>

  @include('includes.footer')

  @stack('before-script')
  @include('includes.script')
  @stack('after-script')
</body>

</html>