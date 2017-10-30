<div>

  @if($portfolios)

    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>№</th>
          <th>Имя</th>
          <th>Images</th>
          <th>Filter</th>
          <th>Редактировать</th>
          <th>Удалить</th>
        </tr>
      </thead>
      <tbody>

        @foreach($portfolios as $portf)

          <tr>
            <td>{{ $portf->id }}</td>
            <td>{!! Html::link(route('portfolioEdit',['portfolio'=>$portf->id]), $portf->name, ['alt'=>$portf->name]) !!}</td>
            <td>{{ $portf->images }}</td>
            <td>{{ $portf->filter }}</td>
            <td>{!!
                Form::open(['url'=>route('portfolioEdit', ['portfolio'=>$portf->id]),
                'class'=>'form-horizontal',
                'method'=>'POST'
                ])  !!}

                {!!
                  Form::button('Редактировать', ['class'=>'btn btn-info', 'type'=>'submit']) !!}
                {!! Form::close() !!}
              </td>
            <td>
              {!!
                Form::open(['url'=>route('portfolioEdit',
                ['portfolio'=>$portf->id]),
                'class'=>'form-horizontal',
                'method'=>'POST'
                ]) !!}
                {{ method_field('DELETE') }}

                {!!
                  Form::button('Удалить', ['class'=>'btn btn-danger',
                  'type'=>'submit']) !!}

                {!! Form::close() !!}
            </td>
          </tr>


        @endforeach

      </tbody>
    </table>

  @endif

    <div class="row centered">
      {!! Html::link(route('portfolioAdd'), 'Новoe  portfolio', ['class'=>'btn btn-success']) !!}
    </div>

</div>
