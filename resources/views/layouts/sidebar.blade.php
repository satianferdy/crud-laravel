<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="">Admin</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="">AD</a>
    </div>
    <ul class="sidebar-menu">
        @section('sidebar')
            <li class="nav-item dropdown">
                <a href="{{ route('mahasiswa.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
        @show
    </ul>
    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Add Data
        </a>
    </div>
</aside>
