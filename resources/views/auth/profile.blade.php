<x-dashbord>
    <form action="{{ route('profile.update') }}" method="post" class="form" enctype="multipart/form-data">
        @csrf
        <div class="form-gorup">
            <label for="image">Profile image</label>
            <input type="file" name='image' class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" name="email" value="{{ $user->email }}" readonly>
        </div>
        <div class="form-group">
            <label for="number">number</label>
            <input type="text" class="form-control" name="number" value="{{ $user->number }}">
        </div>
        <div class="form-group">
            <label for="bio">bio</label>
            <textarea name="bio" id="bio" cols="30" class="form-control" rows="10">{{ $user->bio }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn text-light btn-primary" type="submit">Update</button>
        </div>
    </form>
</x-dashbord>
