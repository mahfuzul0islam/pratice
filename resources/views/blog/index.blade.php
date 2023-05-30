<x-dashbord>
    <table class="table">
        <tr>
            <th>
                id
            </th>
            <th>
                image
            </th>
            <th>
                title
            </th>
            <th>
                delete
            </th>
            <th>
                edit
            </th>


        </tr>
        @foreach ($blogs as $blog)
            <tr>
                <td>
                    {{ $blog->id }}
                </td>
                <td>
                    <img src="{{ Storage::url($blog->image) }}" height="90px" alt="">
                </td>
                <td>
                    {{ $blog->title }}
                </td>
                <td>
                    <form action="{{ route('blog.delete', $blog) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning">edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</x-dashbord>
