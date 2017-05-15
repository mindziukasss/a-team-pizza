@extends('admin.admin')

@section('content-list')
    <div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
    @foreach($item as $key => $value)
        <tr>
            <td>{{$key}}</td>
            <td>{{$value}}</td>
        </tr>
    @endforeach
    </table>
    </div>
@endsection