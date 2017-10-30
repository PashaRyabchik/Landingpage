<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LaravelSite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- for mobile-->
    <link rel="stylesheet" href= "{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href= "{{ asset('assets/css/font-awesome.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"  >
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
  <header>
    @yield('header')
  </header>
    @yield('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  </body>
</html>
