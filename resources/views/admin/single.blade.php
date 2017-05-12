@extends('admin.admin')

@section('content-list')
    <div class="container">
        <table class="table table-bordered">
            <thead>
            @foreach($single as $key => $value)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$value}}</td>
                </tr>
            @endforeach

            </thead>

        </table>
        <button onclick="deleteItem('{{ route($deleteRoute, $single['id']) }}')" class="btn btn-danger">
            Delete
        </button>
        <a href="{{ route($editRoute, $single['id']) }}">
            <button type="button" class="btn btn-primary">Edit</button>
        </a>
        <a href="{{ route($list) }}">
            <button type="button" class="btn btn-default">Back</button>
        </a>
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
                }
            });
        }
    </script>
@endsection