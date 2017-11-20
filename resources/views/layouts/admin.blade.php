<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- for mobile-->
    <link rel="stylesheet" href= "{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href= "{{ asset('assets/css/font-awesome.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" >
    <script src="//cdn.ckeditor.com/4.7.1/basic/ckeditor.js"></script>
    <link rel="shortcut icon" href="{{ asset('assets/img/adminicon.png') }}" type="image/x-icon">
  </head>
  <body>
    <header>
      @yield('header')

      @if(session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif



    </header>
    @yield('content')



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
    </body>
  </html>
