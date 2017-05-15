@extends('admin.admin')

@section('content-list')


    <div class="container">
        <h2>{{ucfirst($tableName)}}s table</h2>
        <a href="{{ route($create) }}">Create new {{$tableName}}</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                @foreach($list[0] as $key => $value)
                    <th>{{$key}}</th>
                @endforeach
                <th>edit</th>
                <th>show</th>
                <th>delete</th>

            </tr>
            </thead>
            <tbody>
            @foreach($list as $key => $record)
                <tr id="{{$record['id']}}">
                    @foreach($record as $key => $value)
                        <td>
                            {{$value}}
                        </td>
                    @endforeach
                    <td>
                        <button onclick="deleteItem('{{ route($deleteRoute, $record['id']) }}')" class="btn btn-danger">
                            Delete
                        </button>
                    </td>

                    <td>
                        <a href="{{ route($editRoute, $record['id']) }}">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                    </td>


                    <td>
                        <a href="{{ route($showRoute, $record['id']) }}">
                            <button type="button" class="btn btn-success">View</button>
                        </a>
                    </td>
                </tr>

            @endforeach


            </thead>


        </table>
    </div>


@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function deleteItem(route) {
            $.ajax({
                url: route,
                type: 'DELETE',
                //data : {},
                dataType: 'json',
                success: function () {
                    alert('DELETED');
                },
                error: function () {
                    alert('ERROR');
                dataType: 'json',
                success: function (response) {
                    $('#' + response.id).remove();
                },
                error: function () {
                    alert('ERROR')
                }
            });
        }

    </script>
@endsection