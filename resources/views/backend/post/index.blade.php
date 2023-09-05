<x-app-layout>
    <div class="card">
     <div class="card-header d-flex justify-content-between align-items-center">
         <h5>Post Page</h5>
         <a href="{{route('post.create')}}" class="btn btn-primary btn-sm">Create New</a>
     </div>
     <div class="card-body">
         <table class="table">
             <tr>
                 <th>SN</th>
                 <th>Title</th>
                 <th>Views</th>
                 <th>Categories</th>
                 <th>Posted On</th>
                 <th>Action</th>
             </tr>

             @foreach ($posts as $post)
 <tr>
     <td>{{$post->id}}</td>
     <td>{{$post->title}}</td>
     <td>{{$post->views}}</td>
     {{-- <td>{{$post->description}}</td> --}}
     <td>@foreach ($post->categories as $category)
        <span class="badge bg-primary ms-2 text-white">{{$category->nep_title}}</span>

     @endforeach
    </td>
    <td>{{$post->created_at}}</td>
     <td>

         <form action="{{route('post.destroy',$post->id)}}" method="post">
             @csrf
             @method('delete')
             <a class="btn btn-primary btn-sm" href="{{route('post.edit',$post->id)}}">Edit</a>
             <button class="btn btn-danger btn-sm" type="submit">Delete</button>
         </form>
     </td>
 </tr>
             @endforeach
         </table>
     </div>
    </div>
 </x-app-layout>
