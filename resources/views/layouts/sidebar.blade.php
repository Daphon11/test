            <!-- Page Sidebar Start-->
            <header class="main-nav">
                <div class="sidebar-user text-center">
                    <a class="setting-primary" href="{{ route('user.profil') }}"><i data-feather="settings"></i></a><img src="{{ url(auth()->user()->foto) }}" class="img-90 rounded-circle img-profil" alt="User Image">
                    <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
                    <a href="{{ route('user.profil') }}"> <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6></a>
                    <p class="mb-0 font-roboto">{{ auth()->user()->email }}</p>
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
                                    <a class="nav-link menu-title" href="{{ route('dashboard') }}"><i data-feather="home"></i><span>Dashboard</span></a>
                                </li>

                                @if (auth()->user()->level == 1)
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('kategori.index') }}"><i data-feather="grid"></i><span>Kategori</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('produk.index') }}"><i data-feather="package"></i><span>Produk</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('member.index') }}"><i data-feather="user-check"></i><span>Member</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('supplier.index') }}"><i data-feather="truck"></i><span>Suplier</span></a>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Transaksi</h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('pengeluaran.index') }}"><i data-feather="file-minus"></i><span>Pengeluaran</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('pembelian.index') }}"><i data-feather="shopping-cart"></i><span>Pembelian</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('penjualan.index') }}"><i data-feather="shopping-bag"></i><span>Penjualan</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('transaksi.index') }}"><i data-feather="check-circle"></i><span>Transaksi Aktif</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('transaksi.baru') }}"><i data-feather="file-plus"></i><span>Transaksi Baru</span></a>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Report</h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('laporan.index') }}"><i data-feather="book-open"></i><span>Laporan</span></a>
                                </li>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>System</h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('user.index') }}"><i data-feather="users"></i><span>User</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('setting.index') }}"><i data-feather="settings"></i><span>Pengaturan</span></a>
                                </li>
                                @else
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('transaksi.index') }}"><i data-feather="check-circle"></i><span>Transaksi Aktif</span></a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title active" href="{{ route('transaksi.baru') }}"><i data-feather="file-plus"></i><span>Transaksi Baru</span></a>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                </nav>
            </header>
                    <!-- Page Sidebar Ends-->