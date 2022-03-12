<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Ourebi Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
          </ul>
          @if (url()->current() != url('add-article'))
            <a href="{{url('add-article')}}" class="btn btn-outline-success" type="submit">Ajouter un article</a>
          @endif
          {{-- @if (Auth::user())
            <a href="{{url('logout')}}" class="btn btn-outline-success" type="submit">Se deconnecter</a>
          @endif --}}
          @auth
            <p class="m-2 text-white" name="user">{{Auth::user()->name}}</p>
            <a href="{{url('logout')}}" class="btn btn-outline-success" type="submit">Se deconnecter</a>
          @endauth
        </div>
      </div>
    </nav>
  </header>