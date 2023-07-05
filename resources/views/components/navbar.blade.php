<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
         @auth
             
       
          <li class="nav-item">
            <a class="nav-link" href="{{route('car.create')}}">Inserisci un annuncio</a>
          </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link" href="{{route('car.index')}}">Tutti gli annunci</a>
          </li>
        </ul>



        <ul class="navbar-nav">
            @if (Auth::user() != null)
            <li class="nav-item">
                <span>{{Auth::user()->name}}</span>
            </li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn" type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
            </form>
            @else
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" aria-current="page" href="{{ route('register') }}">Registrati</a>
              </li>
      
              {{-- TASTO DI LOGIN --}}
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" aria-current="page" href="{{ route('login') }}">Login<i class="fa-solid fa-user"></i></a>
              </li>
            </ul>
            @endif
         

        
      
      
      </div>
    </div>
  </nav>