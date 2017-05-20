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
                {!! Form::open(
            array(
                'route' => 'app.ingredients.create',
                'class' => 'form',
                'novalidate' => 'novalidate',
                'files' => true)) !!}
                {!! Form::model(['url' => route($route)]) !!}
                <table class="table table-bordered">
                    @foreach($item as $key => $value)
                        @if($value != 'created_at' && $value != 'updated_at' && $value != 'deleted_at' && $value != 'id' && $value != 'count' && $value != 'recourse_id')
                            <tr>
                                <td>{{$value}}</td>
                                <td>
                                    {{ Form::label('', null, ['class' => 'control-label']) }}
                                    {{ Form::text($value) }}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </table>
                {!! Form::file('image') !!}
                {{Form::submit('Submit!')}}

                @if(isset($data))
                    <p>testas</p>
                @endif
            </div>
        </div>
    </div>

@endsection