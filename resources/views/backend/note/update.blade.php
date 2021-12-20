<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    @csrf
    <h1>Update Note</h1>
    <select name="category" id="" value="{{$note->category}}">
        <option value="Công việc">Công việc</option>
        <option value="Học tập">Học tập</option>
        <option value="Gia đình">Gia đình</option>
        <option value="Bạn bè">Bạn bè</option>
        <option value="Người yêu">Người yêu</option>
    </select>
    <input type="text" name="title" value="{{$note->title}}">
    <input type="text" name="content" value="{{$note->content}}">
    <input type="submit" name="add" value="Add">
    <a href="{{ route('notes.index') }}">Back</a>
</form>
</body>
</html>
