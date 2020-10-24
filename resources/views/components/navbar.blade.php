<header id="top">
    <nav class="navbar navbar-expand-lg bg-white navbar-light rounded-lg">
        <div class="container-fluid">
        <a class="navbar-brand font-weight-bold text-muted" href="#">
            <img width="32" src="{{ asset('images/logo.svg') }}" alt="{{ config('app.name') }}">
        </a>
        <div class="dropdown nav-item ml-auto">
            <button class="dropdown-toggle btn btn-sm btn-light d-flex align-items-center">
                <img 
                    class="rounded-pill mr-2" 
                    src="{{ asset('images/nurofsun.jpg') }}" 
                    width="32" alt="{{ Auth::user()->name }}">
                    <span class="font-weight-bold text-muted">
                        {{ Auth::user()->name }}
                    </span>
            </button>
        </div>
        </div>
    </nav>
</header>
