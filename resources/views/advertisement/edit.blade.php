<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Create Page</h5>
            <a href="{{route('advertisement.index')}}" class="btn btn-primary btn-sm">Back</a>
        </div>
        <div class="card-body">
            <form action="{{route('advertisement.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" class="form-control" type="text" name="title" value="{{$advertisement->title}}">
                </div>
                <div class="form-group">
                    <label for="redirect_to">Redirect To</label>
                    <input id="redirect_to" class="form-control" type="text" name="redirect_to" value="{{$advertisement->redirect_to}}">
                </div>
                <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                </div>
                <div>
                    <img src="{{asset($advertisement->image)}}" width="200" alt="">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </form>
        </div>
    </div>
</x-app-layout>
