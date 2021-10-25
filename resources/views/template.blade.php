@php
ob_start("minifier");
function minifier($code)
{
    $search = array(

        // Remove whitespaces after tags 
        '/\>[^\S ]+/s',

        // Remove whitespaces before tags 
        '/[^\S ]+\</s',

        // Remove multiple whitespace sequences 
        '/(\s)+/s',

        // Removes comments 
        '/<!--(.|\s)*?-->/'
    );
    $replace = array('>', '<', '\\1');
    $code = preg_replace($search, $replace, $code);
    return $code;
}
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }} - BotolPlastik.id</title>
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/custom.css') }}">
  <link rel="stylesheet" href="{{ url('css/style2.css') }}">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  @stack('style')
</head>

<body class="p-0">

  @yield('content')

  <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
  <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
  @stack('script')
</body>

</html>
@php
ob_end_flush(); 
@endphp