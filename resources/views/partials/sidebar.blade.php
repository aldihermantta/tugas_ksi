<div class="sidebar-menu">
    <ul class="menu">

        <li class="sidebar-item {{ request()->routeIs('artikel.create') ? 'active' : '' }} ">
            <a href="{{ route('artikel.create') }}" class='sidebar-link border rounded-pill'>
                <i class="bi bi-plus-circle-fill"></i>
                <span>Artikel Baru</span>
            </a>
        </li>

        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }} ">
            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item {{ request()->routeIs('artikel.index') ? 'active' : '' }}">
            <a href="{{ route('artikel.index') }}" class='sidebar-link'>
                <i class="bi bi-newspaper"></i>
                <span>Artikel</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="javascript:void(0)" class="sidebar-link" id="logout">
                <i class="bi bi-arrow-90deg-left"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>