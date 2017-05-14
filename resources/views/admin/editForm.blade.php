@extends('admin.admin')

@section('content-list')
    <div class ="row">
        <div class="col-md-10">
            <div class="form">
                {!! Form::open(['url' => $editRoute]) !!}

                <h1>Edit</h1>
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', $singleEdit['name'] ) }}
                {{ Form::label('calories', 'Calories' ) }}
                {{ Form::text('calories', $singleEdit['calories']) }}
                {{ Form::submit('Create', ['class'=>'btn btn-primary']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
