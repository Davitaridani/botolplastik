<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/style-custom.css') }}">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  @stack('style')
</head>

<body class="p-0">

  @yield('content')

  <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
  @stack('script')
</body>

</html>