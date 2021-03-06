<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LaravelSite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- for mobile-->
    <link rel="stylesheet" href= "{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href= "{{ asset('assets/css/font-awesome.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"  >
    <link rel="shortcut icon" href="{{ asset('assets/img/icon.png') }}" type="image/x-icon">
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
  <header>
    @yield('header')
  </header>
    @yield('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript">
    var top_show = 150;
    var delay = 1000;
    $(document).ready(function() {
      $(window).scroll(function () {
        if ($(this).scrollTop() > top_show) $('#top').fadeIn();
        else $('#top').fadeOut();
      });
      $('#top').click(function () { 
        $('body, html').animate({
          scrollTop: 0
        }, delay);
      });
    });
</script>
  </body>
</html>
