<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
        <div class="sidebar-brand-text mx-3">
            <i class="fas fa-medkit fa-lg"></i> Apotek Jihan Farma 
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  {{ Request::is('admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('admin') }}">
            <i class="fa-solid fa-house"></i>
            <span>Beranda</span></a>
    </li>

    <li class="nav-item  {{ Request::is('admin/member') ? 'active':'' }}">
        <a class="nav-link" href="{{ url('admin/member')}}">
            <i class="fas fa-user-tag"></i>
            <span>Member</span></a>
    </li>

    <li class="nav-item {{ Request::is('admin/semuaobat') || Request::is('admin/obatexp') || Request::is('admin/tambahobat') || Request::is('admin/editobat') || Request::is('admin/obathabis') ? 'active':'' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-medkit"></i>
            <span>Obat</span>
        </a>
        <div id="collapseTwo" class="collapse {{ Request::is('admin/semuaobat') || Request::is('admin/obatexp') || Request::is('admin/tambahobat') || Request::is('admin/editobat') || Request::is('admin/obathabis') ? 'show':'' }}" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                
                <a class="collapse-item {{ Request::is('admin/semuaobat') || Request::is('admin/tambahobat') || Request::is('admin/editobat') ? 'active':'' }}" href=" {{url('admin/semuaobat')}} ">Daftar Semua Obat</a>
                <a class="collapse-item {{ Request::is('admin/obathabis') ? 'active':'' }}" href=" {{url('admin/obathabis')}} ">Daftar Obat Habis</a>
                <a class="collapse-item {{ Request::is('admin/obatexp') ? 'active':'' }}" href=" {{ url('admin/obatexp') }} ">Daftar Obat Kadaluarsa</a>
                
            </div>
        </div>
    </li>

    <li class="nav-item {{ Request::is('admin/kategori') || Request::is('admin/tambahkategori') || Request::is('admin/jenis') || Request::is('admin/tambahjenis')  ? 'active':'' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
            aria-expanded="true" aria-controls="collapse3">
            <i class="fa fa-hospital-o"></i>
            <span>Kategori dan Jenis Obat</span>
        </a>
        <div id="collapse3" class="collapse {{ Request::is('admin/kategori') || Request::is('admin/tambahkategori') || Request::is('admin/jenis') || Request::is('admin/tambahjenis')  ? 'show':'' }} " aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                
                <a class="collapse-item {{ Request::is('admin/kategori') || Request::is('admin/tambahkategori') ? 'active':'' }} " href=" {{url('admin/kategori')}} ">Daftar Kategori</a>
                <a class="collapse-item {{ Request::is('admin/jenis') || Request::is('admin/tambahjenis') ? 'active':'' }} " href=" {{url('admin/jenis')}} ">Daftar Jenis Obat</a>
                
                
            </div>
        </div>
    </li>

    <li class="nav-item {{ Request::is('admin/supplier') || Request::is('admin/tambahsupplier') || Request::is('admin/editsupplier/{id}') ? 'active':'' }} ">
        <a class="nav-link" href=" {{url('admin/supplier')}} ">
            <i class="fa fa-users"></i>
            <span>Supplier</span></a>
    </li>

    <li class="nav-item {{ Request::is('admin/penjualan') || Request::is('admin/tambahpenjualan') || Request::is('admin/editpenjualan') ? 'active':'' }} ">
        <a class="nav-link" href=" {{url('admin/penjualan')}} ">
            <i class="fa-regular fa-money-bill-1"></i>
            <span>Penjualan</span></a>
    </li>

    {{-- <li class="nav-item {{ Request::is('admin/pembelian') || Request::is('admin/tambahpembelian') || Request::is('admin/editpembelian') ? 'active':'' }} ">
        <a class="nav-link" href=" {{url('admin/pembelian')}} ">
            <i class="fas fa-shopping-cart"></i>
            <span>Pembelian</span></a>
    </li>             --}}

    <li class="nav-item ">
        <a class="nav-link" href="/adminresep">
            <i class="fa-solid fa-circle-check"></i>
            <span>Kelola Resep</span></a>
    </li>

    <li class="nav-item {{ Request::is('tampil') ? 'active' : '' }} ">
        <a class="nav-link" href="/tampil">
            <i class="fa fa-bar-chart"></i>
            <span>Laporan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



   

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

             

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                @include('layouts.user_information')
                
                @include('sweetalert::alert')

            </ul>

        </nav>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

        <script>
            $(document).ready( function () {
        $('#myTable').DataTable();
    } );
        </script>