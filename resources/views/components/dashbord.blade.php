<x-main title="Dashbord">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                {{-- <img class="card-img-top" src="holder.js/100x180/?text=Image cap" alt="Card image cap"> --}}
                <div class="card-body p-4 shadow">
                    <h4 class="card-title">{{ auth()->user()->name }}</h4>
                    <p class="card-text">{{ auth()->user()->email }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Profil</li>
                    <li class="list-group-item">
                        <a href="{{route('blog.create')}}">Blog Create</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('dashbord.blog')}}">Blogs</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('categories.index')}}">categories create</a>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
        <div class="col-md-8 border p-4 container">
            {{ $slot }}
        </div>
    </div>
</x-main>
