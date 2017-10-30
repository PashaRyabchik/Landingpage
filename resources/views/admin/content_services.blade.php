<div>

  @if($services)

    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>№</th>
          <th>Имя</th>
          <th>Text</th>
          <th>Icon</th>
          <th>Редактировать</th>
          <th>Удалить</th>
        </tr>
      </thead>
      <tbody>

        @foreach($services as $service)

          <tr>
            <td>{{ $service->id }}</td>
            <td>{!! Html::link(route('serviceEdit',['service'=>$service->id]), $service->name, ['alt'=>$service->name]) !!}</td>
            <td>{{ $service->text }}</td>
            <td>{{ $service->icon }}</td>
            <td>{!!
                Form::open(['url'=>route('serviceEdit', ['service'=>$service->id]),
                'class'=>'form-horizontal',
                'method'=>'POST'
                ])  !!}

                {!!
                  Form::button('Редактировать', ['class'=>'btn btn-info', 'type'=>'submit']) !!}
                {!! Form::close() !!}
              </td>
            <td>
              {!!
                Form::open(['url'=>route('serviceEdit',
                ['service'=>$service->id]),
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
      {!! Html::link(route('serviceAdd'), 'Новый  service', ['class'=>'btn btn-success']) !!}
    </div>

</div>
