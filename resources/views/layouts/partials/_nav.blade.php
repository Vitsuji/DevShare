<nav>
    <h1><a href="{{ url('/') }}">Emineto</a></h1>
    <div id="nav__sections">
        <section id="nav__items">
            <a href="{{ url('/projects/') }}"><i class="far fa-compass"></i> <span class="nav__support-text">Explore</span></a>
            @if(auth()->check())
                <a href="{{ url('/projects/') }}"><i class="far fa-file-alt"></i> <span class="nav__support-text">My Projects</span></a>
                <a href="{{ url('/projects/create/') }}"><i class="fas fa-plus"></i> <span class="nav__support-text">Add Project</span></a>
            @endif
        </section>
        @if(auth()->check())
            <section id="nav__user">
                <a href="{{ route('user.index', ['id' => Auth::user()->id]) }}">{{ Auth::user()->name }}</a>
                <a href="{{ url('/logout/') }}">Logout</a>
            </section>
        @else
            <section id="nav__logged-out">
                <a href="{{ url('/login/') }}">Login</a>
                <a href="{{ url('/register/') }}">Register</a>
            </section>
        @endif
    </div>
</nav>
