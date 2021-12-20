{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h2>Note List</h2>--}}
{{--<a href="{{ route('notes.showFormCreate') }}">Create Note</a>--}}
{{--<table border="1px">--}}
{{--    @foreach($notes as $note)--}}
{{--        <tr>--}}
{{--            <td>{{ $note->id }}</td>--}}
{{--            <td>{{ $note->category }}</td>--}}
{{--            <td>{{ $note->title }}</td>--}}
{{--            <td>{{ $note->content }}</td>--}}
{{--            <td><a href="{{ route('notes.showDetail',$note->id) }}">Detail</a></td>--}}
{{--            <td><a href="{{ route('notes.update',$note->id) }}">Update</a></td>--}}
{{--            <td><a href="{{ route('notes.delete',$note->id) }}">Delete</a></td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--</table>--}}
{{--</body>--}}
{{--</html>--}}

@extends("backend.layout.master")
@section("title","Note Management")
@section("title-content","Note Management")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Note List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($notes as $note)
                        <tr>
                            <td>{{ $note->id }}</td>
                            <td>{{ $note->category }}</td>
                            <td>{{ $note->title }}</td>
                            <td>{{ $note->content }}</td>
                            <td><a href="{{ route('notes.showDetail',$note->id) }}">Detail</a></td>
                            <td><a href="{{ route('notes.update',$note->id) }}">Update</a></td>
                            <td><a onclick="return confirm('Are you sure ???')" href="{{ route('notes.delete',$note->id) }}">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
