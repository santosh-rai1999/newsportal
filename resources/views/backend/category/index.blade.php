<x-app-layout>
   <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>Category Page</h5>
        <a href="{{route('category.create')}}" class="btn btn-primary btn-sm">Create New</a>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>SN</th>
                <th>Eng Title</th>
                <th>Nep Title</th>
                <th>Slug</th>
                <th>Action</th>
            </tr>

            @foreach ($categories as $category)
<tr>
    <td>{{$category->id}}</td>
    <td>{{$category->eng_title}}</td>
    <td>{{$category->nep_title}}</td>
    <td>{{$category->slug}}</td>
    <td>

        <form action="{{route('category.destroy',$category->id)}}" method="post">
            @csrf
            @method('delete')
            <a class="btn btn-primary btn-sm" href="{{route('category.edit',$category->id)}}">Edit</a>
            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
        </form>
    </td>
</tr>
            @endforeach
        </table>
    </div>
   </div>
</x-app-layout>
