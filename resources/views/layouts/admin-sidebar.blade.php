<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>Halaman Utama</p>
            </a>
        </li>
        <li class="nav-item {{ (request()->is('admin/*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('admin/*'))&& !in_array(Route::currentRouteName(),['penduduk.index','permintaan-surat.index']) ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Data Master
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link {{ Route::currentRouteName() == 'konfigurasi.index' ? 'active' : '' }}">
                        <i class="fas fa-cogs nav-icon"></i>
                        <p>Konfigurasi Sistem</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('jenis-surat.index') }}" class="nav-link {{ Route::currentRouteName() == 'jenis-surat.index' ? 'active' : '' }}">
                        <i class="far fa-calendar-alt nav-icon"></i>
                        <p>Jenis Surat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link {{ Route::currentRouteName() == 'user.index' ? 'active' : '' }}">
                        <i class="fas fa-user-tie nav-icon"></i>
                        <p>User</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link {{ Route::currentRouteName() == 'level-user.index' ? 'active' : '' }}">
                        <i class="fas fa-key nav-icon"></i>
                        <p>Level User</p>
                    </a>
                </li> --}}
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('penduduk.index') }}" class="nav-link {{ Route::currentRouteName() == 'penduduk.index' ? 'active' : '' }}">
                <i class="nav-icon far fa-calendar-check"></i>
                <p>Penduduk</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('permintaan-surat.index') }}" class="nav-link {{ Route::currentRouteName() == 'permintaan-surat.index' ? 'active' : '' }}">
                <i class="nav-icon fas fa-chart-bar"></i>
                <p>Permintaan Surat<span class="right badge badge-danger">New</span></p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->