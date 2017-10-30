<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="/" class="navbar-brand">PR<i class="fa fa-circle"></i>GER</a> <!-- fa fontawesome брать на сайте -->
      </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="/">Главная</a></li>
              <li><a href="#about">О нас</a></li>
              <li><a href="#service">Сервисы</a></li>
              <li><a href="#Portfolio">Портфолио</a></li>
              <li><a href="#c">Клиенты</a></li>
              <li><a href="#team">Команда</a></li>
              <li><a href="#n">Контакты</a></li>
            </ul>
          </div>
    </div>
</div>
@if(session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif
@if(count($errors) > 0)
  <div class="alert alert-danger">
    <ol>
      @foreach($errors->all() as $error)
        <ol>{{ $error }}</li>
      @endforeach
    </ol>
  </div>
@endif
