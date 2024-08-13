<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Advertisement Page</h5>
                <a href="{{ route('advertisement.create') }}" class="btn btn-primary btn-sm">Create New</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Featured Image</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($advertisements as $index => $advertisement)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>
                                <a href="{{ $advertisement->redirect_to }}">
                                    <img src="{{ asset($advertisement->image) }}" width="120" alt="">
                                </a>
                            </td>
                            <td>{{ $advertisement->title }}</td>
                            <td>

                                <form action="{{ route('advertisement.destroy', $advertisement->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('advertisement.edit', $advertisement->id) }}">Edit</a>
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
