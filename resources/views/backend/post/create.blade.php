<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Create Page</h5>
            <a href="{{route('post.index')}}" class="btn btn-primary btn-sm">Back</a>
        </div>
        <div class="card-body">
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" class="form-control" type="text" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control summernote" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                </div>
                <div class="form-group">
                    <label for="category_id">Select Category</label>
                    <select id="category_id" class="form-control select2" name="category_id[]" multiple>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->nep_title}}</option>

                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input id="tags" class="form-control" type="text" name="tags">
                </div>
                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <textarea id="meta_description" class="form-control" name="meta_description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <textarea id="meta_keywords" class="form-control" name="meta_keywords" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </form>
        </div>
    </div>
</x-app-layout>
