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
{{--<form action="" method="post">--}}
{{--    @csrf--}}
{{--    <h1>Update Note</h1>--}}
{{--    <select name="category" id="" value="{{$note->category}}">--}}
{{--        <option value="Công việc">Công việc</option>--}}
{{--        <option value="Học tập">Học tập</option>--}}
{{--        <option value="Gia đình">Gia đình</option>--}}
{{--        <option value="Bạn bè">Bạn bè</option>--}}
{{--        <option value="Người yêu">Người yêu</option>--}}
{{--    </select>--}}
{{--    <input type="text" name="title" value="{{$note->title}}">--}}
{{--    <input type="text" name="content" value="{{$note->content}}">--}}
{{--    <input type="submit" name="add" value="Add">--}}
{{--    <a href="{{ route('notes.index') }}">Back</a>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}

@extends("backend.layout.master")
@section("title-content","UPDATE NOTE");
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">UPDATE</h6>
        </div>
        <div class="card-body">
            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <br>
                    <select name="category" id="">
                        <option value="Công việc">Công việc</option>
                        <option value="Học tập">Học tập</option>
                        <option value="Gia đình">Gia đình</option>
                        <option value="Bạn bè">Bạn bè</option>
                        <option value="Người yêu">Người yêu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name= "title" class="form-control" id="exampleInputPassword1" value="{{$note->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <input type="text" name="content" class="form-control" id="exampleInputPassword1" value="{{$note->content}}">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('notes.index')}}" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
