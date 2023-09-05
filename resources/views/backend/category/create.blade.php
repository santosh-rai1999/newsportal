<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Create Page</h5>
            <a href="{{route('category.index')}}" class="btn btn-primary btn-sm">Back</a>
        </div>
        <div class="card-body">
            <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="eng_title">Eng Title</label>
                    <input id="eng_title" class="form-control" type="text" name="eng_title">
                </div>
                <div class="form-group">
                    <label for="nep_title">Nep Title</label>
                    <input id="nep_title" class="form-control" type="text" name="nep_title">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </form>
        </div>
    </div>
</x-app-layout>
