<section>
  <div class="container" id="about">
    <div class="row">
      <br>
      <div class="col-lg-8 col-lg-offset-2">
        <h2>{{ $page->name }}</h2>
        <p>{!! $page->text !!}</p>
      </div>
      <div class="col-lg-6 col-lg-offset-3">
        <img src="{{ asset('assets/img/'.$page->images) }}" alt="img" class="img-responsive">
      </div>
    </div>
  </div>
  <div id="f">
    <div class="container">
      <div class="row centered">
        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
        {{ date('Y') }}
      </div>
    </div>
  </div>
</section>
