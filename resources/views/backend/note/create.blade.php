@extends("backend.layout.master")
@section("title-content","ADD NEW NOTE");
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">CREATE</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('notes.create')}}">
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
                    <input type="text" name= "title" class="form-control" id="exampleInputPassword1" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <input type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Enter Content">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <a href="{{route('notes.index')}}" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
