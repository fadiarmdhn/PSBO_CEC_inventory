<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('AdminCEC/img/logobaznaswhite.png') }}" alt="CEC" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-size:14px"><strong>Cendekia Entrepreneur Club</strong></span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('AdminCEC/img/User-Icon-Grey.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{ route('home') }}" class="{{ Request::segment(1) === 'home' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                @if (auth()->user()->can('manajemen-produk'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-server"></i>
                        <p>
                            Manajemen Produk
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('kategori.index') }}" class="{{ Request::segment(1) === 'kategori' ? 'nav-link active' : 'nav-link' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('produk.index') }}" class="{{ Request::segment(1) === 'produk' ? 'nav-link active' : 'nav-link' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Produk</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if (auth()->user()->can('manajemen-operasional'))
                <li class="nav-item has-treeview">
                    <a href="{{ route('biaya.index') }}" class="{{ Request::segment(1) === 'biaya' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon fa fa-dollar"></i>
                        <p>
                            Biaya Operasional
                        </p>
                    </a>
                </li>
                @endif

                @if (auth()->user()->can('menjalankan-transaksi'))
                <li class="nav-item">
                    <a href="{{ route('order.transaksi') }}" class="{{ Request::segment(1) === 'transaksi' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                            Transaksi
                        </p>
                    </a>
                </li>
                @endif
                
                @if (auth()->user()->can('manajemen-order'))
                <li class="nav-item">
                    <a href="{{ route('order.index') }}" class="{{ Request::segment(1) === 'order' ? 'nav-link active' : 'nav-link' }}">
                        <i class="nav-icon fa fa-shopping-bag"></i>
                        <p>
                            Manajemen Order
                        </p>
                    </a>
                </li>
                @endif

                @if (auth()->user()->can('manajemen-user'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Manajemen Users
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('role.index') }}" class="{{ Request::segment(1) === 'role' ? 'nav-link active' : 'nav-link' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.roles_permission') }}" class="{{ Request::segment(1) === 'users' && Request::segment(2) === 'role-permission' ? 'nav-link active' : 'nav-link' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Role Permission</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="{{ Request::segment(1) === 'users' && Request::segment(2) === null ? 'nav-link active' : 'nav-link' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                
                <li class="nav-item has-treeview">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-sign-out"></i>
                        <p>
                            {{ __('Logout') }}
                        </p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
