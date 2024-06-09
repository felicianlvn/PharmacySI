<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

        <div class="sidebar-brand-text mx-3"><i class="fas fa-medkit fa-lg"></i> Apotek Jihan Farma </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    
    
    <li class="nav-item">
        <a class="nav-link" href="/member">
            <i class="fa-solid fa-house"></i>
            <span>Beranda</span></a>
    </li>

    <li class="nav-item">
        <a  class="nav-link collapsed" data-toggle="collapse" data-target="#profile" aria-expanded="true" aria-controls="profile">
            <i class="bi bi-person-circle"></i>
            <span>Profile</span></a>
        <div id="profile" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="/profile">Profile
                </a>
                <a class="collapse-item" href="/editprofile">Edit Profile
                </a>
               
            </div>
        </div>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-medkit"></i>
            <span>Kategori Obat</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="obat-bebas">Obat Bebas
                </a>
                <a class="collapse-item" href="">Obat Bebas Terbatas</a>
                <a class="collapse-item" href="">Obat Keras</a>

            </div>
        </div>
    </li> --}}






    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#Keranjang" aria-expanded="true" aria-controls="Keranjang">
            <i class="fas fa-shopping-cart"></i>
            <span>Keranjang saya</span></a>
        <div id="Keranjang" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="/keranjang">Belanjaan Saya</a>
                <a class="collapse-item" href="">Beli Obat</a>

            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#histori" aria-expanded="true" aria-controls="histori">
            <i class="bi bi-clock-history"></i>
            <span>Histori</span></a>
        <div id="histori" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="/histori">Obat Yang Dibeli</a>

            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#resep" aria-expanded="true" aria-controls="resep">
            <i class="bi bi-file-text"></i>
            <span>Resep</span></a>
        <div id="resep" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="/resep">Unggah Resep
                </a>
                <a class="collapse-item" href="/resepsaya">Resep Saya</a>

            </div>
        </div>
    </li>

    





    <!-- Divider -->
    <hr class="sidebar-divider">





</ul>