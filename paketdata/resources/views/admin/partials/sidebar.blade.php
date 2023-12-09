        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="./" class="brand-link">
                <span class="navbar-brand fw-bold">OKO STORE</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/kategori">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>Kategori</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/produk">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>Data Produk</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/pembayaran">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>Konfirmasi Pembayaran</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/pembelian">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>Laporan Pembelian</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/user">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>Data User</p>
                                </a>
                            </li>
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <button class="nav-link" type="submit">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>