<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{  route('home') }}">Musbah Flix</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{  route('select') }}">Escolher filme</a>
                </li>
                <li class="nav-item {{ request()->is('profile') ? 'active' : '' }}">
                    <a class="nav-link" href="{{  route('registerFilme') }}">Registar Filme</a>
                </li>
            </ul>
            <a href="{{ route('logout')}}" class="btn btn-outline-danger my-2 my-sm-0">Sair</a>
        </div>
    </nav>
</header>
