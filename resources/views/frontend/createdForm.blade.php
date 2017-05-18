{!! Form::open(['route' => 'app.pizzas.create']) !!}


@foreach($ingredients as $key => $ingredient)

     @if($key == $specIngrdint)
         <div><h2>{{ Form::checkbox('ingredients[]', $key)}}
                 {{$ingredient}}</h2></div>

    @else
        <div>{{ Form::checkbox('ingredients[]', $key)}}
        {{$ingredient}}</div>
    @endif
@endforeach

{!! Form::close() !!}