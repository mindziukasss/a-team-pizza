@extends('admin.admin')
@section('content-list')
    {{--@if(isset($error))--}}
        {{--<h4 style="color:red">{{ $error['message'] }}</h4>--}}
    {{--@endif--}}
    {{--@if(isset($success))--}}
        {{--<h4 style="color:green">{{ $success['message'] }}</h4>--}}
    {{--@endif--}}
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['url' => route($route, $id)]) !!}
            <table class="table table-bordered">
            @foreach($item as $key => $value)
                @if($key != 'created_at' && $key != 'updated_at' && $key != 'deleted_at' && $key != 'id' && $key != 'count')
                <tr>
                    <td>{{$key}}</td>
                    <td>
                        {{ Form::label('', null, ['class' => 'control-label']) }}
                        {{ Form::text($key, $value) }}
                    </td>
                </tr>
                @endif
            @endforeach
            </table>
            {{Form::submit('Submit!')}}
        </div>
    </div>
    </div>


            {{--@if(!isset($id))--}}
                {{--{!! Form::open(['url' => route('app.ingredients.create')]) !!}--}}
            {{--@endif--}}
            {{--@if(isset($id))--}}
                {{--{!! Form::open(['url' => route('app.ingredients.edit', $id)]) !!}--}}
            {{--@endif--}}

            {{--@if(!isset($item['name']))--}}
                {{--{{ Form::label('Insert name of the ingredient', null, ['class' => 'control-label']) }}--}}
                {{--{{ Form::text('name') }}--}}
            {{--@else--}}
                {{--{{ Form::label('Insert name of the ingredient', null, ['class' => 'control-label']) }}--}}
                {{--{{ Form::text('name', $name, $item['name']) }}--}}
            {{--@endif--}}

            {{--@if(!isset($item['calories']))--}}
                {{--{{ Form::label('List calorie value', null, ['class' => 'control-label']) }}--}}
                {{--{{ Form::text('calories') }}--}}
            {{--@else--}}
                {{--{{ Form::label('List calorie value', null, ['class' => 'control-label']) }}--}}
                {{--{{ Form::text('calories', $calories, $item['calories']) }}--}}
            {{--@endif--}}
                {{--{{ Form::submit('Submit') }}--}}

@endsection
