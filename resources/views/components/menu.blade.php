<nav class="menu-container vh-100 position-fixed">
    <ul id="menu" 
        role="navigation" 
        aria-label="Main Navigation" 
        class="nav flex-column bg-white py-3 pr-3 vh-100 shadow-sm nav-piils" style="width: 200px;">
        <li class="nav-item brand text-primary">
            <a class="nav-link text-primary d-flex align-items-center" href="{{ route('home') }}">
                <img 
                   class="mr-2"
                   width="32"
                   src="{{ asset('images/logo.svg') }}" 
                   alt="{{ config('app.name') }}">
                <h1 class="h4 mb-0 text-uppercase">{{ config('app.name') }}</h1>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <span class="icon mr-2">
                    <i class="fas fa-home"></i>
                </span>
                <span class="label">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('student.list') }}">
                <span class="icon mr-2">
                    <i class="fas fa-users"></i>
                </span>
                <span class="label">Santri</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span class="icon mr-2 text-center d-inline-block">
                    <i class="fas fa-dollar-sign"></i>
                </span>
                <span class="label">Pembayaran</span>
            </a>
        </li>
    </ul>
</nav>
