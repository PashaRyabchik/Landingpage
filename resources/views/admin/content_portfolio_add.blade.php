@if(session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif

@if(count($errors) > 0)
  <div class="alert alert-danger">
    <ol>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ol>
  </div>
@endif

<div class="row">

  {!!Form::open(['url'=>route('portfolioAdd'),'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
      {!! Form::label('name', 'Название', ['class'=>'col-xs-2 control-label']) !!}
      <div class="col-xs-8">
        {!! Form::text('name', old('name'), ['class'=>'form-control','placeholder'=>'Введите название']) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('filter', 'Filter', ['class'=>'col-xs-2 control-label']) !!}
      <div class="col-xs-8">
        {!! Form::text('filter', old('filter'), ['class'=>'form-control','placeholder'=>'Введите название']) !!}
      </div>
    </div>

    <div class="form-group">
      {!! Form::label('images', 'Image', ['class'=>'col-xs-2 control-label']) !!}
      <div class="col-xs-8">
        {!! Form::file('images', ['class'=>'filestyle', 'data-buttonText'=>'Выберете icon', 'data-buttonName'=>'btn btn-primary', 'data-placeholder'=>'Файла нет']) !!}
      </div>
    </div>

    <div class="form-group">
      <div class="col-xs-offset-2 col-xs-10">
        {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
      </div>
    </div>
  {!! Form::close() !!}


</div>
