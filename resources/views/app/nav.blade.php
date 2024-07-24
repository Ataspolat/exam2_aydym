<nav class="navbar navbar-expand-xl navbar-dark bg-dark" aria-label="Navbar">
    <div class="container-xl">
        <a class="navbar-brand" href="{{ route('home') }}">Aydym</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link link-warning" href="{{ route('home.index') }}">
                        <i class="bi-search"></i> Search
                    </a>
                </li>
                @foreach($genres as $genre)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.index', ['genre' => $genre->id]) }}">
                            {{ $genre->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
