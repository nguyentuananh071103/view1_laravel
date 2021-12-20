{{--<h1>{{ $note->category }}</h1>--}}
{{--<p>{{ $note->title }}</p>--}}
{{--<p>{{ $note->content}}</p>--}}
{{--<a href="{{ route('notes.index') }}">Back</a>--}}


@extends("backend.layout.master")
@section("title-content");
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DETAIL NOTE</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$note->category}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$note->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$note->content}}">
                </div>
                <a href="{{route('notes.index')}}" type="button" class="btn btn-primary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
