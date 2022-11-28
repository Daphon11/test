            <!-- Page Sidebar Start-->
            <header class="main-nav">
                <div class="sidebar-user text-center">
                    <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/images/dashboard/1.png') }}" alt="" />
                    <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
                    <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6></a>
                    <p class="mb-0 font-roboto">{{ auth()->user()->email }}</p>
                    <ul>
                        <li>
                            <span><span class="counter">19.8</span>k</span>
                            <p>Follow</p>
                        </li>
                        <li>
                            <span>2 year</span>
                            <p>Experince</p>
                        </li>
                        <li>
                            <span><span class="counter">95.2</span>k</span>
                            <p>Follower</p>
                        </li>
                    </ul>
                </div>
                <nav>
                    <div class="main-navbar">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="mainnav">
                            <ul class="nav-menu custom-scrollbar">
                                <li class="back-btn">
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Menu</h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('dashboard') }}"><i data-feather="home"></i><span>Dashboard</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('kategori.index') }}"><i data-feather="grid"></i><span>Kategori</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('kategori.index') }}"><i data-feather="grid"></i><span>Produk</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('kategori.index') }}"><i data-feather="grid"></i><span>Member</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('kategori.index') }}"><i data-feather="grid"></i><span>Suplier</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('kategori.index') }}"><i data-feather="grid"></i><span>Pengeluaran</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('kategori.index') }}"><i data-feather="grid"></i><span>Pembelian</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="box"></i><span>Master</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="{{ route('kategori.index') }}" class="active">Kategori</a></li>
                                        <li><a href="#" class="active">Produk</a></li>
                                        <li><a href="#" class="active">Member</a></li>
                                        <li><a href="#" class="active">Suplier</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Transaksi</h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="sliders"></i><span>Transaksi</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="#" class="active">Pengeluaran</a></li>
                                        <li><a href="#" class="active">Pembelian</a></li>
                                        <li><a href="#" class="active">Penjualan</a></li>
                                        <li><a href="#" class="active">Transaksi Lama</a></li>
                                        <li><a href="#" class="active">Transaksi Baru</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Report</h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="layout"></i><span>Report </span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="#" class="active">Laporan</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>System</h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="aperture"></i><span>Sistem </span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="#" class="active">User</a></li>
                                        <li><a href="#" class="active">Pengaturan </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                </nav>
            </header>
                    <!-- Page Sidebar Ends-->