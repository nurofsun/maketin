<nav class="menu-container vh-100 position-fixed" style="top: 50px;">
    <ul id="" 
        role="navigation" 
        aria-label="Main Navigation" 
        class="nav flex-column bg-white py-3 pr-3 vh-100 shadow-sm nav-piils" style="width: 225px;">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <span class="icon mr-2">
                    <i class="fas fa-home"></i>
                </span>
                <span class="label">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('student.index') }}">
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
