<x-dashbord title="update Blog">
    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">image</label>
            <input type="file" value="{{ $blog->image }}" class="form-control" id="image" name="image" required>
        </div>
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" value="{{ $blog->title }}" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">body</label>
            <textarea type="text" class="form-control" name="body" id="body" cols="30" rows="10">{{ $blog->body }}</textarea>
        </div>
        <div class="form-group">
            <label for="categorys">Categories</label>
            <select class="form-control col-md-3" id="categorys" name="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-info" type="submit">Submit</button>

    </form>
</x-dashbord>
