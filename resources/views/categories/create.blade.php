<x-dashbord >
    <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title">
        <button type="submit" class="btn btn-info mt-3">Submit</button>
    </form>

    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Delete</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
                
            <td>
                {{$category->id}}
            </td>
            <td>
                {{$category->title}}
            </td>
            <td>
                <form action="{{route('categories.delete',$category)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" >delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</x-dashbord>