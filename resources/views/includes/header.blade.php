<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">Dc Comics</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                {{-- home --}}
              <li class="nav-item">
                <a class="nav-link @if(Route::is('home')) active @endif" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              {{-- comics --}}
              <li class="nav-item">
                <a class="nav-link @if(Route::is('comics*')) active @endif" href="comics.index">Comics</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
</header>