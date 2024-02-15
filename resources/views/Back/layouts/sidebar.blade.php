<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if (request()->is('dashboard')) active @endif" aria-current="page"
                    href="{{ url('dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->is('article')) active @endif" href="{{ url('article') }}">
                    <span data-feather="file"></span>
                    Artciles
                </a>
            </li>

            @if (auth()->user()->role == 1)
                <li class="nav-item">
                    <a class="nav-link @if (request()->is('categories')) active @endif" href="{{ url('categories') }}">
                        <span data-feather="folder"></span>
                        Category
                    </a>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link @if (request()->is('config')) active @endif" href="{{ url('config') }}">
                    <span data-feather="list"></span>
                    Config
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->is('users')) active @endif" href="{{ url('users') }}">
                    <span data-feather="users"></span>
                    User
                </a>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <a class="nav-link @if (request()->is('logout')) active @endif" href="{{ url('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <span data-feather="bar-chart-2"></span>
                    Logouts
                </a>
            </li>

        </ul>
    </div>
</nav>
