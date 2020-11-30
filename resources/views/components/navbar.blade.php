<header id="top" class="position-fixed w-100" style="z-index: 100">
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand font-weight-bold text-muted" href="{{ route('home') }}">
                <img width="32" src="{{ asset('images/logo.svg') }}" alt="{{ config('app.name') }}">
            </a>
            <div class="dropdown nav-item ml-auto">
                <a class="nav-link dropdown-toggle text-dark d-flex align-items-center" href="#" 
                    role="button"
                    id="adminOptions"
                    data-toggle="dropdown">
                    <img 
                   class="rounded-pill mr-2" 
                   src="{{ asset('images/nurofsun.jpg') }}" 
                   width="32" alt="{{ Auth::user()->name }}">
                   <span class="font-weight-bold text-muted">
                       {{ Auth::user()->name }}
                   </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="adminOptions">
                    <form action="{{ route('logout') }}" class="m-0 p-0" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item">
                            <span>Logout</span>
                            <span><i class="fas fa-sign-out-alt"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
