@if(isset($pages) && is_object($pages))
  @foreach($pages as $k=>$page)
    @if($k%2 == 0)
      <div id="headerwrap">
        <div class="row centered">
          <div class="col-lg">
            <h1>{!! $page->name !!}</h1>
          </div>
          <a href="{{ route('page', array('alias'=>$page->alias)) }}" class="btn btn-info">Узнать больше</a>
        </div>
      </div>
    @else
      <div class="container" id="about"><br>
        <div class="row centered">
          <div class="col-lg-8 col-lg-offset-2">
            <h2>{{ $page->name }}</h2>
            {!! $page->text !!}
          </div>
          <div class="col-lg-6 col-lg-offset-3">
            <img src="{{ asset('assets/img/au.jpg') }}" alt="img" class="img-responsive">
            <a href="{{ route('page', array('alias'=>$page->alias)) }}" class="btn btn-info">Узнать больше</a>
          </div>
        </div>
      </div>
    @endif
  @endforeach
@endif
@if(isset($services) && is_object($services))
  <div class="container" id="service"><br>
      <div class="centered"><h2>Сервисы</h2></div>
      @foreach($services as $k=>$service)
        @if($k == 0 || $k%3 == 0)
          <div class="row centered">
        @endif
          <div class="col-lg-4">
            <i class="fa {{ $service->icon }}"></i>
            <h4>{{ $service->name }}</h4>
            <p>{{ $service->text }}</p>
          </div>
        @if(($k + 1)%3 == 0)
          </div>
        @endif
      @endforeach
      <br>
    </div>
@endif
@if(isset($portfolios) && is_object($portfolios))
  <div class="container" id="Portfolio">
      <div class="centered">
          <h2>Портфолио</h2><br>
      </div>
        @foreach($portfolios as $k=>$portfolio)
          @if($k == 0 || $k%3 == 0)
            <div class="row centered">
          @endif
            <div class="col-lg-4">
              <h3>{{ $portfolio->name}}</h3>
              <h5>{{ $portfolio->filter }}</h5>
              <div>
                {{ Html::image('assets/img/'.$portfolio->images) }}
              </div>
            </div>
          @if(($k + 1)%3 == 0)
            </div>
          @endif
        @endforeach
    </div>
@endif
<div class="lg">
  <div class="container" id="c">
    <div class="row centered">
      <h2>Клиенты</h2>
      <div class="cli">
        <div class="col-lg-2 col-lg-offset-1">
          <img src="{{ asset('assets/img/par.jpg') }}" alt="img">
        </div>
      </div>
      <div class="cli">
        <div class="col-lg-2">
          <img src="{{ asset('assets/img/par2.jpg') }}" alt="img">
        </div>
      </div>
      <div class="cli">
        <div class="col-lg-2">
          <img src="{{ asset('assets/img/par3.jpg') }}" alt="img">
        </div>
      </div>
      <div class="cli">
        <div class="col-lg-2">
          <img src="{{ asset('assets/img/par4.jpg') }}" alt="img">
        </div>
      </div>
      <div class="cli">
        <div class="col-lg-2">
          <img src="{{ asset('assets/img/par5.jpg') }}" alt="img">
        </div>
      </div>
    </div>
  </div>
</div>
@if(isset($peoples))
<div class="lg">
  <div class="container" id="team">
    <div class="row centered">
      <h2>Наша команда</h2>
      @foreach($peoples as $peop)
      <div class="col-lg-4">
        <div>
          {{ Html::image('assets/img/'.$peop->images) }}
        </div>
        <h3>{{ $peop->name }}</h3>
        <h4>{{ $peop->position }}</h4>
        <p>{{ $peop->text }}</p>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endif
<div class="container" id="n">
    <h2>Написать нам</h2>
    <div class="row col-sm-offset-2">
      <form class="form-horizontal" role="form" action="{{ url('/') }}" method="post">
         <div class="form-group">
             <label class="control-label col-sm-2" for="name">Ваше имя:</label>
             <div class="col-sm-6">
               <input name="name" type="text"  class="form-control" placeholder="Имя"/>
             </div>
         </div>
         <div class="form-group">
            <label class="control-label col-sm-2" for="email">E-mail:</label>
            <div class="col-sm-6">
              <input name="email" type="email" class="form-control" placeholder="E-mail"/>
            </div>
         </div>
         <div class="form-group">
           <label class="control-label col-sm-2" for="email">Ваше сообщение:</label>
           <div class="col-sm-6">
             <textarea name="text" class="form-control" placeholder="Сообщение"></textarea>
           </div>
         </div>
         <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
              <input type="submit" class="btn btn-info" value="Отправить" />
            </div>
         </div>
         {{ csrf_field() }}
       </form>
    </div>
</div>
<div id="dg">
  <div class="container">
    <div class="row centered">
      <h4>Адаптивный дизайн</h4>
      <br>
      <div class="col-lg-4">
        <div class="tilt">
          <a href="#"><img  src="{{ asset('assets/img/1.png') }}" alt="img"></a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="tilt">
          <a href="#"><img src="{{ asset('assets/img/2.jpg') }}" alt="img"></a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="tilt">
          <a href="#"><img src="{{ asset('assets/img/3.png') }}" alt="img"></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="wd">
  <div class="container">
    <div class="row centered"><br>
      <div class="col-lg-8 col-lg-offset-2">
        <h3>Аренда серверов</h3>
        <p>Выбирая хостинг для сайта, следует учитывать скорость доступа и наработку на отказ. Старайтесь использовать тот хостинг, который обеспечит наилучшую скорость доступа к сайту и наименьшее время, в течение которого сайт может быть недоступен из-за технических неполадок.</p>
      </div>
      <div class="col-lg-10 col-lg-offset-1">
        <img  src="{{ asset('assets/img/serv.jpg') }}" alt="img" class="img-responsive">
      </div>
    </div>
  </div>
</div>
<div id="r">
  <div class="container">
    <div class="row centered">
      <div class="col-lg-8 col-lg-offset-2">
        <h4>Разработка сайтов</h4>
        <p>Мы умеем создавать работающие сайты, интернет-магазины и web-сервисы. Вам понравится и захочется еще!</p>
      </div>
    </div>
  </div>
</div>
<a href="#" id="top"><img src="{{ asset('assets/img/up.png') }}"></a>
<div id="f">
  <div class="container">
    <div class="row centered">
      <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
      {{ date('Y') }}
    </div>
  </div>
</div>
