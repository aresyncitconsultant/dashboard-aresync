<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="http://admin.pixelstrap.com/cuba/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="http://admin.pixelstrap.com/cuba/assets/images/favicon.png" type="image/x-icon">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/auth/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/auth/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/auth/css/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/auth/css/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/auth/css/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/auth/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/auth/css/style.css') }}">
    <link id="color" rel="stylesheet" href="http://admin.pixelstrap.com/cuba/assets/css/color-1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
  <script src="{{ asset('/auth/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/auth/jquery/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('/auth/jquery/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/auth/jquery/feather.min.js') }}"></script>
  <script src="{{ asset('/auth/jquery/feather-icon.js') }}"></script>
  <script src="{{ asset('/auth/jquery/config.js') }}"></script>
  <script src="{{ asset('/auth/jquery/script.js') }}"></script>
  <script src="{{ asset('js/app.js') }}" async defer></script>
</body>
</html>
