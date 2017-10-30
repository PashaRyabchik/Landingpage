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
  {!!  Form::open(['url'=>route('serviceEdit',array('service'=>$data['id'])), 'class'=>'form-horizontal', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

        <div class="form-group">
          {!! Form::hidden('id',$data['id']) !!}
          {!! Form::label('name', 'Название', ['class'=>'col-xs-2 control-label']) !!}
          <div class="col-xs-8">
            {!! Form::text('name', $data['name'], ['class'=>'form-control','placeholder'=>'Введите название service']) !!}
          </div>
        </div>

        <div class="form-group">

          {!! Form::label('text', 'Text', ['class'=>'col-xs-2 control-label']) !!}
          <div class="col-xs-8">
            {!! Form::textarea('text', $data['text'], ['class'=>'form-control']) !!}
          </div>
        </div>

        <div class="form-group">
          {!! Form::label('icon', 'Icon', ['class'=>'col-xs-2 control-label']) !!}
          <div class="col-xs-8">
            {!! Form::text('icon', $data['icon'], ['class'=>'form-control']) !!}
          </div>
        </div>


        <div class="form-group">

          <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Сохранить', ['class'=>'btn btn-primary','type'=>'submit']) !!}
          </div>
        </div>


    {!! Form::close() !!}

    <script>
      CKEDITOR.replace( 'editor' );
    </script>
</div>
