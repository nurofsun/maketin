<nav class="menu-container vh-100 position-fixed" style="top: 50px;">
    <ul id="sidenav-menu" 
        role="navigation" 
        aria-label="Main Navigation" 
        class="nav nav-pills flex-column bg-white py-4 px-3 vh-100 shadow-sm nav-piils" style="width: 225px;">
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
            <a class="nav-link" href="#typePayment" data-toggle="collapse">
                <span class="icon mr-2 text-center d-inline-block">
                    <i class="fas fa-dollar-sign"></i>
                </span>
                <span class="label">Pembayaran</span>
                <i class="fas fa-chevron-down ml-2"></i>
            </a>
            <div class="collapse ml-4" id="typePayment">
                <form action="{{ route('payment.show') }}" method="GET" class="nav-item">
                    @csrf
                    <input type="hidden" name="type" value="monthly">
                    <button class="nav-link btn btn-link btn-sm d-block w-100 text-left outline-none shadow-none">Bulanan</button>
                </form>
                <form action="{{ route('payment.show') }}" method="GET">
                    @csrf
                    <input type="hidden" name="type" value="daily">
                    <button class="nav-link btn btn-link btn-sm d-block w-100 text-left outline-none shadow-none">Harian</button>
                </form>
                <form action="{{ route('payment.show') }}" method="GET">
                    @csrf
                    <input type="hidden" name="type" value="weekly">
                    <button class="nav-link btn btn-link btn-sm d-block w-100 text-left outline-none shadow-none">Mingguan</button>
                </form>
            </div>
        </li>
    </ul>
</nav>
