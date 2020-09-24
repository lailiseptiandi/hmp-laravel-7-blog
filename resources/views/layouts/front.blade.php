<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Official Situs Resmi HMP</title>
  @stack('before-style')
  @include('template.style')
  @stack('after-style')
</head>

<body>

  @include('template.navbar')


  @yield('content')


  @include('template.footer')

  @stack('before-script')
  @include('template.script')
  @stack('after-script')
</body>

</html>