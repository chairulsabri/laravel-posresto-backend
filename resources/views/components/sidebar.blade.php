<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            {{-- <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                </ul>
            </li> --}}
            {{-- <li class="menu-header">Users</li> --}}
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Menu</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="{{ route('user.index') }}">All User</a>
                </ul>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="{{ route('products.index') }}">Products</a>
                </ul>

                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                    </li>

                </ul>


            </li>
    </aside>
</div>
