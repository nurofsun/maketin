<header class="mt-3">
    <nav class="navbar navbar-expand-lg bg-white navbar-light rounded-lg">
        <div class="container px-3">
            <a class="navbar-brand font-weight-bold text-muted" href="#">{{ $title }}</a>
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
