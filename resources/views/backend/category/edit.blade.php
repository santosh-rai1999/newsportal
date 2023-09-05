<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Edit Page</h5>
            <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="eng_title">Eng Title</label>
                    <input id="eng_title" class="form-control" type="text" name="eng_title" value="{{ $category->eng_title }}">
                </div>
                <div class="form-group">
                    <label for="nep_title">Nep Title</label>
                    <input id="nep_title" class="form-control" type="text" name="nep_title" value="{{ $category->nep_title }}">
                </div>
                <div>
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
            </form>
        </div>
    </div>

</x-app-layout>
