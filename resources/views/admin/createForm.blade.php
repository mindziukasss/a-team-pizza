@extends('admin.admin')

@section('content-list')
    <div class ="row">
        <div class="col-md-10">
            <div class="form">
                {!! Form::open(['url' => route($createRoute)]) !!}

                <h1>Create</h1>
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name') }}
                {{ Form::label('calories', 'Calories' ) }}
                {{ Form::text('calories') }}
                {{ Form::submit('Create', ['class'=>'btn btn-primary']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection