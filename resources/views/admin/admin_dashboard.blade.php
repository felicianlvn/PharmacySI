<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
<link rel="stylesheet" href="{{asset('css/sb-admin-2.min.css')}}" >
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mt-1">
                    <p style="font-size: 24px">Sistem Informasi Apotek <p>
                <div class="row tile_count" style="text-align: center;">
                    
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top"><i class="fa fa-medkit"></i> Total Obat</span>
                      <div class="count"> {{$countob->total_obat}} </div>
                      
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top"><i class="fa fa-hospital-o"></i> Total Kategori</span>
                      <div class="count"> {{$countkat->total_kat}} </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top"><i class="fa fa-user"></i> Total Pemasok</span>
                      <div class="count"> {{$countsup->total_sup}} </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top"><i class="fa fa-edit"></i> Total Jenis </span>
                      <div class="count"> {{$countjen->total_jen}} </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top"><i class="fa fa-edit"></i> Total Penjualan</span>
                      <div class="count">6</div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top"><i class="fa fa-edit"></i> Total User</span>
                      <div class="count">{{ $count->total }}</div>
                    </div>
                </div>
                  </div>
        
                  <!-- /top tiles -->
        
                  <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">
                        
                  <div class="row top_tiles ml-3 mr-3">
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <a href="">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-medkit green"></i>
                            </div>
                            <div class="count">...</div>
                            <h3>Obat</h3>
                            <p>Menambahkan obat baru</p>
                          </div>
                          </a>
                        </div>
        
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <a href="">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-hospital-o green"></i>
                            </div>
                            <div class="count">...</div>
                            <h3>Kategori</h3>
                            <p>Menambahkan kategori obat baru</p>
                          </div>
                          </a>
                        </div>
        
        
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <a href="">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-user green"></i>
                            </div>
                            <div class="count">...</div>
                            <h3>Pemasok</h3>
                            <p>Menambahkan pemasok baru</p>
                          </div>
                          </a>
                        </div>
        
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-edit green"></i>
                            </div>
                            <div class="count">...</div>
                            <h3>Penjualan</h3>
                            <p>Menambahkan penjualan baru</p>
                          </div>
                        </a>
                        </div>
        
        
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-warning green"></i>
                            </div>
                            <div class="count">...</div>
                            <h3>Kedaluwarsa</h3>
                            <p>Banyak obat yang kedaluwarsa</p>
                          </div>
                        </a>
                        </div>
        
        
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <a href="">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-file-text-o green"></i>
                            </div>
                            <div class="count">...</div>
                            <h3>Habis</h3>
                            <p>Melihat stok obat yang habis</p>
                          </div>
                          </a>
                        </div>
        
        
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                           <a href="">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-bar-chart green"></i>
                            </div>
                            <div class="count">...</div>
                            <h3>Laporan</h3>
                            <p>Transaksi penjualan obat</p>
                          </div>
                        </a>
                        </div>
        
        
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                           <a href="">
                          <div class="tile-stats">
                            <div class="icon"><i class="fa fa-shopping-cart green"></i>
                            </div>
                            <div class="count">...</div>
                            <h3>Pembelian</h3>
                            <p>Menambahkan pembelian baru</p>
                          </div>
                        </div>
                      </a>
                    </div>
                </div>
            </div>
        
          <div>
            
          </div>
        





    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=" {{asset('vendor/jquery/jquery.min.js')}} "></script>
    <script src=" {{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>

    <!-- Core plugin JavaScript-->
    <script src=" {{asset('vendor/jquery-easing/jquery.easing.min.js')}} "></script>

    <!-- Custom scripts for all pages-->
    <script src=" {{asset('js/sb-admin-2.min.js')}} "></script>

    <!-- Page level plugins -->
    <script src=" {{asset('vendor/chart.js/Chart.min.js')}} "></script>

    <!-- Page level custom scripts -->
    <script src=" {{asset('js/demo/chart-area-demo.js')}} "></script>
    <script src=" {{asset('js/demo/chart-pie-demo.js')}} "></script>

    <script src="https://kit.fontawesome.com/866812587f.js" crossorigin="anonymous"></script>

</body>

</html>

<style>

html , body{
	
    height:100%;
    
   }
    
   .full-width {
       
    width:100%;
    
    }
    
   .full-height{
    height:100%;
    }
   
   .daterangepicker .ranges li {
       color: #73879C
   }
   .daterangepicker .ranges li.active,
   .daterangepicker .ranges li:hover {
       background: #536A7F;
       border: 1px solid #536A7F;
       color: #fff
   }
   .daterangepicker .input-mini {
       background-color: #eee;
       border: 1px solid #ccc;
       box-shadow: none !important
   }
   .daterangepicker .input-mini.active {
       border: 1px solid #ccc
   }
   .daterangepicker select.monthselect,
   .daterangepicker select.yearselect,
   .daterangepicker select.hourselect,
   .daterangepicker select.minuteselect,
   .daterangepicker select.secondselect,
   .daterangepicker select.ampmselect {
       font-size: 12px;
       padding: 1px;
       height: auto;
       margin: 0;
       cursor: default;
       height: 30px;
       border: 1px solid #ADB2B5;
       line-height: 30px;
       border-radius: 0px !important
   }
   .daterangepicker select.monthselect {
       margin-right: 2%
   }
   .daterangepicker td.in-range {
       background: #E4E7EA;
       color: #73879C
   }
   .daterangepicker td.active,
   .daterangepicker td.active:hover {
       background-color: #536A7F;
       color: #fff
   }
   .daterangepicker th.available:hover {
       background: #eee;
       color: #34495E
   }
   .daterangepicker:before,
   .daterangepicker:after {
       content: none
   }
   .daterangepicker .calendar.single {
       margin: 0 0 4px 0
   }
   .daterangepicker .calendar.single .calendar-table {
       width: 224px;
       padding: 0 0 4px 0 !important
   }
   .daterangepicker .calendar.single .calendar-table thead tr:first-child th {
       padding: 8px 5px
   }
   .daterangepicker .calendar.single .calendar-table thead th {
       border-radius: 0
   }
   .daterangepicker.picker_1 {
       color: #fff;
       background: #34495E
   }
   .daterangepicker.picker_1 .calendar-table {
       background: #34495E
   }
   .daterangepicker.picker_1 .calendar-table thead tr {
       background: #213345
   }
   .daterangepicker.picker_1 .calendar-table thead tr:first-child {
       background: #1ABB9C
   }
   .daterangepicker.picker_1 .calendar-table td.off {
       background: #34495E;
       color: #999
   }
   .daterangepicker.picker_1 .calendar-table td.available:hover {
       color: #34495E
   }
   .daterangepicker.picker_2 .calendar-table thead tr {
       color: #1ABB9C
   }
   .daterangepicker.picker_2 .calendar-table thead tr:first-child {
       color: #73879C
   }
   .daterangepicker.picker_3 .calendar-table thead tr:first-child {
       color: #fff;
       background: #1ABB9C
   }
   .daterangepicker.picker_4 .calendar-table thead tr:first-child {
       color: #fff;
       background: #34495E
   }
   .daterangepicker.picker_4 .calendar-table td,
   .daterangepicker.picker_4 .calendar-table td.off {
       background: #ECF0F1;
       border: 1px solid #fff;
       border-radius: 0
   }
   .daterangepicker.picker_4 .calendar-table td.active {
       background: #34495E
   }
   .calendar-exibit .show-calendar {
       float: none;
       display: block;
       position: relative;
       background-color: #fff;
       border: 1px solid #ccc;
       margin-bottom: 20px;
       border: 1px solid rgba(0, 0, 0, 0.15);
       overflow: hidden
   }
   .calendar-exibit .show-calendar .calendar {
       margin: 0 0 4px 0
   }
   .calendar-exibit .show-calendar.picker_1 {
       background: #34495E
   }
   .calendar-exibit .calendar-table {
       padding: 0 0 4px 0
   }
   .left_col {
       background: #2A3F54
   }
   .nav-sm .container.body .col-md-3.left_col {
       min-height: 100%;
       width: 70px;
       padding: 0;
       z-index: 9999;
       position: absolute
   }
   .nav-sm .container.body .col-md-3.left_col.menu_fixed {
       position: fixed;
       height: 100%
   }
   .nav-sm .container.body .col-md-3.left_col .mCSB_container,
   .nav-sm .container.body .col-md-3.left_col .mCustomScrollBox {
       overflow: visible
   }
   .nav-sm .hidden-small {
       visibility: hidden
   }
   .nav-sm .container.body .right_col {
       padding: 10px 20px;
       margin-left: 70px;
       z-index: 2
   }
   .nav-sm .navbar.nav_title {
       width: 70px
   }
   .nav-sm .navbar.nav_title a span {
       display: none
   }
   .nav-sm .navbar.nav_title a i {
       font-size: 27px;
       margin: 13px 0 0 3px
   }
   .site_title i {
       border: 1px solid #EAEAEA;
       padding: 5px 6px;
       border-radius: 50%
   }
   .nav-sm .main_container .top_nav {
       display: block;
       margin-left: 70px;
       z-index: 2
   }
   .nav-sm .nav.side-menu li a {
       text-align: center !important;
       font-weight: 400;
       font-size: 10px;
       padding: 10px 5px
   }
   .nav-sm .nav.child_menu li.active,
   .nav-sm .nav.side-menu li.active-sm {
       border-right: 5px solid #1ABB9C
   }
   .nav-sm ul.nav.child_menu ul,
   .nav-sm .nav.side-menu li.active-sm ul ul {
       position: static;
       width: 200px;
       background: none
   }
   .nav-sm>.nav.side-menu>li.active-sm>a {
       color: #1ABB9C !important
   }
   .nav-sm .nav.side-menu li a i.toggle-up {
       display: none !important
   }
   .nav-sm .nav.side-menu li a i {
       font-size: 25px !important;
       text-align: center;
       width: 100% !important;
       margin-bottom: 5px
   }
   .nav-sm ul.nav.child_menu {
       left: 100%;
       position: absolute;
       top: 0;
       width: 210px;
       z-index: 4000;
       background: #3E5367;
       display: none
   }
   .nav-sm ul.nav.child_menu li {
       padding: 0 10px
   }
   .nav-sm ul.nav.child_menu li a {
       text-align: left !important
   }
   .nav-sm .profile {
       display: none
   }
   .menu_section {
       margin-bottom: 35px
   }
   .menu_section h3 {
       padding-left: 15px;
       color: #fff;
       text-transform: uppercase;
       letter-spacing: .5px;
       font-weight: bold;
       font-size: 11px;
       margin-bottom: 0;
       margin-top: 0;
       text-shadow: 1px 1px #000
   }
   .menu_section>ul {
       margin-top: 10px
   }
   .profile_pic {
       width: 35%;
       float: left
   }
   
   .logo_pic{
       margin-top: 20px;
       }
   
   .img-circle.profile_img {
       width: 70%;
       background:#fff;
       margin-left: 15%;
       z-index: 1000;
       position: inherit;
       margin-top: 20px;
       border: 1px solid rgba(52, 73, 94, 0.44);
       padding: 4px
   }
   
   .img-circle.logo_img{
       width:60%;
       display: block;
       margin: 0 auto;
       }
       
   .profile_info {
       padding: 25px 10px 10px;
       width: 65%;
       float: left
   }
   .profile_info span {
       font-size: 13px;
       line-height: 30px;
       color: #BAB8B8
   }
   .profile_info h2 {
       font-size: 14px;
       color: #ECF0F1;
       margin: 0;
       font-weight: 300
   }
   .profile.img_2 {
       text-align: center
   }
   .profile.img_2 .profile_pic {
       width: 100%
   }
   .profile.img_2 .profile_pic .img-circle.profile_img {
       width: 50%;
       margin: 10px 0 0
   }
   .profile.img_2 .profile_info {
       padding: 15px 10px 0;
       width: 100%;
       margin-bottom: 10px;
       float: left
   }
   .main_menu span.fa {
       float: right;
       text-align: center;
       margin-top: 5px;
       font-size: 10px;
       min-width: inherit;
       color: #C4CFDA
   }
   .active a span.fa {
       text-align: right !important;
       margin-right: 4px
   }
   .nav-sm .menu_section {
       margin: 0
   }
   .nav-sm span.fa,
   .nav-sm .menu_section h3 {
       display: none
   }
   .nav-sm li li span.fa {
       display: inline-block
   }
   .nav_menu {
       float: left;
       background: #EDEDED;
       border-bottom: 1px solid #D9DEE4;
       margin-bottom: 10px;
       width: 100%;
       position: relative
   }
   @media (min-width: 480px) {
       .nav_menu {
           position: static
       }
   }
   .nav-md .container.body .col-md-3.left_col {
       min-height: 100%;
       width: 230px;
       padding: 0;
       position: absolute;
       display: -ms-flexbox;
       display: flex;
       z-index: 1
   }
   .nav-md .container.body .col-md-3.left_col.menu_fixed {
       height: 100%;
       position: fixed
   }
   body .container.body .right_col {
       background: #F7F7F7
   }
   .nav-md .container.body .right_col {
       padding: 10px 20px 0;
       margin-left: 230px
   }
   .nav_title {
       width: 230px;
       float: left;
       background: #2A3F54;
       border-radius: 0;
       height: 57px
   }
   @media (max-width: 991px) {
       .nav-md .container.body .right_col,
       .nav-md .container.body .top_nav {
           width: 100%;
           margin: 0
       }
       .nav-md .container.body .col-md-3.left_col {
           display: none
       }
       .nav-md .container.body .right_col {
           width: 100%;
           padding-right: 0
       }
       .right_col {
           padding: 10px !important
       }
   }
   @media (max-width: 1200px) {
       .x_title h2 {
           width: 62%;
           font-size: 17px
       }
       .tile,
       .graph {
           zoom: 85%;
           height: inherit
       }
   }
   @media (max-width: 1270px) and (min-width: 192px) {
       .x_title h2 small {
           display: none
       }
   }
   .left_col .mCSB_scrollTools {
       width: 6px
   }
   .left_col .mCSB_dragger {
       max-height: 400px !important
   }
   .blue {
       color: #3498DB
   }
   .purple {
       color: #9B59B6
   }
   .green {
       color: #1ABB9C
   }
   .aero {
       color: #9CC2CB
   }
   .red {
       color: #E74C3C
   }
   .dark {
       color: #34495E
   }
   .border-blue {
       border-color: #3498DB !important
   }
   .border-purple {
       border-color: #9B59B6 !important
   }
   .border-green {
       border-color: #1ABB9C !important
   }
   .border-aero {
       border-color: #9CC2CB !important
   }
   .border-red {
       border-color: #E74C3C !important
   }
   .border-dark {
       border-color: #34495E !important
   }
   .bg-white {
       background: #fff !important;
       border: 1px solid #fff !important;
       color: #73879C
   }
   .bg-green {
       background: #1ABB9C !important;
       border: 1px solid #1ABB9C !important;
       color: #fff
   }
   .bg-red {
       background: #E74C3C !important;
       border: 1px solid #E74C3C !important;
       color: #fff
   }
   .bg-blue {
       background: #3498DB !important;
       border: 1px solid #3498DB !important;
       color: #fff
   }
   .bg-orange {
       background: #F39C12 !important;
       border: 1px solid #F39C12 !important;
       color: #fff
   }
   .bg-purple {
       background: #9B59B6 !important;
       border: 1px solid #9B59B6 !important;
       color: #fff
   }
   .bg-blue-sky {
       background: #50C1CF !important;
       border: 1px solid #50C1CF !important;
       color: #fff
   }
   .container {
       width: 100%;
       padding: 0
   }
   .navbar-nav>li>a,
   .navbar-brand,
   .navbar-nav>li>a {
       color: #fff !important
   }
   .top_nav .nav>li>a:focus,
   .top_nav .nav>li>a:hover,
   .top_nav .nav .open>a,
   .top_nav .nav .open>a:focus,
   .top_nav .nav .open>a:hover {
       background: #D9DEE4
   }
   body {
       color: #73879C;
       background: #2A3F54;
       font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
       font-size: 13px;
       font-weight: 400;
       line-height: 1.471
   }
   .main_container .top_nav {
       display: block;
       margin-left: 230px
   }
   .no-padding {
       padding: 0 !important
   }
   .page-title {
       width: 100%;
       height: 65px;
       padding: 10px 0
   }
   .page-title .title_left {
       width: 45%;
       float: left;
       display: block
   }
   .page-title .title_left h3 {
       margin: 9px 0
   }
   .page-title .title_right {
       width: 55%;
       float: left;
       display: block
   }
   .page-title .title_right .pull-right {
       margin: 10px 0
   }
   .fixed_height_320 {
       height: 320px
   }
   .fixed_height_390 {
       height: 390px
   }
   .fixed_height_200 {
       height: 200px
   }
   .overflow_hidden {
       overflow: hidden
   }
   .progress-bar-dark {
       background-color: #34495E !important
   }
   .progress-bar-gray {
       background-color: #BDC3C7 !important
   }
   table.no-margin .progress {
       margin-bottom: 0
   }
   .main_content {
       padding: 10px 20px
   }
   .col-md-55 {
       width: 50%;
       margin-bottom: 10px
   }
   @media (min-width: 768px) {
       .col-md-55 {
           width: 20%
       }
   }
   @media (min-width: 992px) {
       .col-md-55 {
           width: 20%
       }
   }
   @media (min-width: 1200px) {
       .col-md-55 {
           width: 20%
       }
   }
   @media (min-width: 192px) and (max-width: 1270px) {
       table.tile_info span.right {
           margin-right: 7px;
           float: left
       }
   }
   .center-margin {
       margin: 0 auto;
       float: none !important
   }
   .col-md-55,
   .col-xs-1,
   .col-sm-1,
   .col-md-1,
   .col-lg-1,
   .col-xs-2,
   .col-sm-2,
   .col-md-2,
   .col-lg-2,
   .col-xs-3,
   .col-sm-3,
   .col-md-3,
   .col-lg-3,
   .col-xs-4,
   .col-sm-4,
   .col-md-4,
   .col-lg-4,
   .col-xs-5,
   .col-sm-5,
   .col-md-5,
   .col-lg-5,
   .col-xs-6,
   .col-sm-6,
   .col-md-6,
   .col-lg-6,
   .col-xs-7,
   .col-sm-7,
   .col-md-7,
   .col-lg-7,
   .col-xs-8,
   .col-sm-8,
   .col-md-8,
   .col-lg-8,
   .col-xs-9,
   .col-sm-9,
   .col-md-9,
   .col-lg-9,
   .col-xs-10,
   .col-sm-10,
   .col-md-10,
   .col-lg-10,
   .col-xs-11,
   .col-sm-11,
   .col-md-11,
   .col-lg-11,
   .col-xs-12,
   .col-sm-12,
   .col-md-12,
   .col-lg-12 {
       position: relative;
       min-height: 1px;
       float: left;
       padding-right: 10px;
       padding-left: 10px
   }
   .row {
       margin-right: -10px;
       margin-left: -10px
   }
   .grid_slider .col-md-6 {
       padding: 0 40px
   }
   h1,
   .h1,
   h2,
   .h2,
   h3,
   .h3 {
       margin-top: 10px;
       margin-bottom: 10px
   }
   a {
       color: #5A738E;
       text-decoration: none
   }
   a,
   a:visited,
   a:focus,
   a:active,
   :visited,
   :focus,
   :active,
   .btn:focus,
   .btn:active:focus,
   .btn.active:focus,
   .btn.focus,
   .btn:active.focus,
   .btn.active.focus {
       outline: 0
   }
   a:hover,
   a:focus {
       text-decoration: none
   }
   .navbar {
       margin-bottom: 0
   }
   .navbar-header {
       background: #34495E
   }
   .navbar-right {
       margin-right: 0
   }
   .top_nav .navbar-right {
       margin: 0;
       width: 70%;
       float: right
   }
   .top_nav .navbar-right li {
       display: inline-block;
       float: right;
       position: static
   }
   @media (min-width: 480px) {
       .top_nav .navbar-right li {
           position: relative
       }
   }
   .top_nav .dropdown-menu li {
       width: 100%
   }
   .top_nav .dropdown-menu li a {
       width: 100%;
       padding: 12px 20px
   }
   .top_nav li a i {
       font-size: 15px
   }
   .navbar-static-top {
       position: fixed;
       top: 0;
       width: 100%
   }
   .sidebar-header {
       border-bottom: 0;
       margin-top: 46px
   }
   .sidebar-header:first-of-type {
       margin-top: 0
   }
   .nav.side-menu>li {
       position: relative;
       display: block;
       cursor: pointer
   }
   .nav.side-menu>li>a {
       margin-bottom: 6px
   }
   .nav.side-menu>li>a:hover {
       color: #F2F5F7 !important
   }
   .nav.side-menu>li>a:hover,
   .nav>li>a:focus {
       text-decoration: none;
       background: transparent
   }
   .nav.child_menu {
       display: none
   }
   .nav.child_menu li:hover,
   .nav.child_menu li.active {
       background-color: rgba(255, 255, 255, 0.06)
   }
   .nav.child_menu li {
       padding-left: 36px
   }
   .nav-md ul.nav.child_menu li:before {
       background: #425668;
       bottom: auto;
       content: "";
       height: 8px;
       left: 23px;
       margin-top: 15px;
       position: absolute;
       right: auto;
       width: 8px;
       z-index: 1;
       border-radius: 50%
   }
   .nav-md ul.nav.child_menu li:after {
       border-left: 1px solid #425668;
       bottom: 0;
       content: "";
       left: 27px;
       position: absolute;
       top: 0
   }
   .nav-md ul.nav.child_menu li:last-child::after {
     bottom: 50%;
   }
   .nav.side-menu>li>a,
   .nav.child_menu>li>a {
       color: #E7E7E7;
       font-weight: 500
   }
   .nav.child_menu li li:hover,
   .nav.child_menu li li.active {
       background: none
   }
   .nav.child_menu li li a:hover,
   .nav.child_menu li li a.active {
       color: #fff
   }
   .nav>li>a {
       position: relative;
       display: block;
       padding: 13px 15px 12px
   }
   .nav.side-menu>li.current-page,
   .nav.side-menu>li.active {
       border-right: 5px solid #1ABB9C
   }
   .nav li.current-page {
       background: rgba(255, 255, 255, 0.05)
   }
   .nav li li li.current-page {
       background: none
   }
   .nav li li.current-page a {
       color: #fff
   }
   .nav.side-menu>li.active>a {
       text-shadow: rgba(0, 0, 0, 0.25) 0 -1px 0;
       background: linear-gradient(#334556, #2C4257), #2A3F54;
       box-shadow: rgba(0, 0, 0, 0.25) 0 1px 0, inset rgba(255, 255, 255, 0.16) 0 1px 0
   }
   .navbar-brand,
   .navbar-nav>li>a {
       font-weight: 500;
       color: #ECF0F1 !important;
       margin-left: 0 !important;
       line-height: 32px
   }
   .site_title {
       text-overflow: ellipsis;
       overflow: hidden;
       font-weight: 400;
       font-size: 22px;
       width: 100%;
       color: #ECF0F1 !important;
       margin-left: 0 !important;
       line-height: 30px;
       display: block;
       height: 56px;
       margin: 0;
       padding-left: 10px;
       word-wrap: break-word;
   }
   .site_title:hover,
   .site_title:focus {
       text-decoration: none
   }
   .nav.navbar-nav>li>a {
       color: #515356 !important
   }
   .nav.top_menu>li>a {
       position: relative;
       display: block;
       padding: 10px 15px;
       color: #34495E !important
   }
   .nav>li>a:hover,
   .nav>li>a:focus {
       background-color: transparent
   }
   .top_search {
       padding: 0
   }
   .top_search .form-control {
       border-right: 0;
       box-shadow: inset 0 1px 0px rgba(0, 0, 0, 0.075);
       border-radius: 25px 0px 0px 25px;
       padding-left: 20px;
       border: 1px solid rgba(221, 226, 232, 0.49)
   }
   .top_search .form-control:focus {
       border: 1px solid rgba(221, 226, 232, 0.49);
       border-right: 0
   }
   .top_search .input-group-btn button {
       border-radius: 0px 25px 25px 0px;
       border: 1px solid rgba(221, 226, 232, 0.49);
       border-left: 0;
       box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
       color: #93A2B2;
       margin-bottom: 0 !important
   }
   .toggle {
       float: left;
       margin: 0;
       padding-top: 16px;
       width: 70px
   }
   .toggle a {
       padding: 15px 15px 0;
       margin: 0;
       cursor: pointer
   }
   .toggle a i {
       font-size: 26px
   }
   .nav.child_menu>li>a {
       color: rgba(255, 255, 255, 0.75);
       font-size: 12px;
       padding: 9px
   }
   .panel_toolbox {
       float: right;
       min-width: 70px
   }
   .panel_toolbox>li {
       float: left;
       cursor: pointer
   }
   .panel_toolbox>li>a {
       padding: 5px;
       color: #C5C7CB;
       font-size: 14px
   }
   .panel_toolbox>li>a:hover {
       background: #F5F7FA
   }
   .line_30 {
       line-height: 30px
   }
   .main_menu_side {
       padding: 0
   }
   .bs-docs-sidebar .nav>li>a {
       display: block;
       padding: 4px 6px
   }
   footer {
       background: #fff;
       padding: 15px 20px;
       display: block
   }
   .nav-sm footer {
       margin-left: 70px
   }
   .footer_fixed footer {
       position: fixed;
       left: 0px;
       bottom: 0px;
       width: 100%
   }
   @media (min-width: 768px) {
       .footer_fixed footer {
           margin-left: 0
       }
   }
   @media (min-width: 768px) {
       .footer_fixed .nav-sm footer {
           margin-left: 0
       }
   }
   .tile-stats.sparkline {
       padding: 10px;
       text-align: center
   }
   .jqstooltip {
       background: #34495E !important;
       width: 30px !important;
       height: 22px !important;
       text-decoration: none
   }
   .tooltip {
       display: block !important
   }
   .tiles {
       border-top: 1px solid #ccc;
       margin-top: 15px;
       padding-top: 5px;
       margin-bottom: 0
   }
   .tile {
       overflow: hidden
   }
   .top_tiles {
       margin-bottom: 0
   }
   .top_tiles .tile h2 {
       font-size: 30px;
       line-height: 30px;
       margin: 3px 0 2px;
       
       font-weight: bold
   }
   article.media {
       width: 100%
   }
   *,
   *:before,
   *:after {
       box-sizing: border-box
   }
   #integration-list {
       width: 100%;
       margin: 0 auto;
       display: table
   }
   #integration-list ul {
       padding: 0;
       margin: 20px 0;
       color: #555
   }
   #integration-list ul>li {
       list-style: none;
       border-top: 1px solid #ddd;
       display: block;
       padding: 15px;
       overflow: hidden
   }
   #integration-list ul:last-child {
       border-bottom: 1px solid #ddd
   }
   #integration-list ul>li:hover {
       background: #efefef
   }
   .expand {
       display: block;
       text-decoration: none;
       color: #555;
       cursor: pointer
   }
   .expand h2 {
       width: 85%;
       float: left
   }
   h2 {
       font-size: 18px;
       font-weight: 400
   }
   #left,
   #right {
       display: table
   }
   #sup {
       display: table-cell;
       vertical-align: middle;
       width: 80%
   }
   .detail a {
       text-decoration: none;
       color: #C0392B;
       border: 1px solid #C0392B;
       padding: 6px 10px 5px;
       font-size: 13px;
       margin-right: 7px
   }
   .detail {
       margin: 10px 0 10px 0px;
       display: none;
       line-height: 22px;
       height: 150px
   }
   .detail span {
       margin: 0
   }
   .right-arrow {
       width: 10px;
       float: right;
       font-weight: bold;
       font-size: 20px
   }
   .accordion .panel {
       margin-bottom: 5px;
       border-radius: 0;
       border-bottom: 1px solid #efefef
   }
   .accordion .panel-heading {
       background: #F2F5F7;
       padding: 13px;
       width: 100%;
       display: block
   }
   .accordion .panel:hover {
       background: #F2F5F7
   }
   .x_panel {
       position: relative;
       width: 100%;
       margin-bottom: 10px;
       padding: 10px 17px;
       display: inline-block;
       background: #fff;
       border: 1px solid #E6E9ED;
       -webkit-column-break-inside: avoid;
       -moz-column-break-inside: avoid;
       column-break-inside: avoid;
       opacity: 1;
       transition: all .2s ease
   }
   .x_title {
       border-bottom: 2px solid #E6E9ED;
       padding: 1px 5px 6px;
       margin-bottom: 10px
   }
   .x_title .filter {
       width: 40%;
       float: right
   }
   .x_title h2 {
       margin: 5px 0 6px;
       float: left;
       display: block;
       text-overflow: ellipsis;
       overflow: hidden;
       white-space: nowrap
   }
   .x_title h2 small {
       margin-left: 10px
   }
   .x_title span {
       color: #BDBDBD
   }
   .x_content {
       padding: 0 5px 6px;
       position: relative;
       width: 100%;
       float: left;
       clear: both;
       margin-top: 5px
   }
   .x_content h4 {
       font-size: 16px;
       font-weight: 500
   }
   legend {
       padding-bottom: 7px
   }
   .demo-placeholder {
       height: 280px
   }
   .profile_details:nth-child(3n) {
       clear: both
   }
   .profile_details .profile_view {
       display: inline-block;
       padding: 10px 0 0;
       background: #fff
   }
   .profile_details .profile_view .divider {
       border-top: 1px solid #e5e5e5;
       padding-top: 5px;
       margin-top: 5px
   }
   .profile_details .profile_view .ratings {
       margin-bottom: 0
   }
   .profile_details .profile_view .bottom {
       background: #F2F5F7;
       padding: 9px 0;
       border-top: 1px solid #E6E9ED
   }
   .profile_details .profile_view .left {
       margin-top: 20px
   }
   .profile_details .profile_view .left p {
       margin-bottom: 3px
   }
   .profile_details .profile_view .right {
       margin-top: 0px;
       padding: 10px
   }
   .profile_details .profile_view .img-circle {
       border: 1px solid #E6E9ED;
       padding: 2px
   }
   .profile_details .profile_view h2 {
       margin: 5px 0
   }
   .profile_details .profile_view .ratings {
       text-align: left;
       font-size: 16px
   }
   .profile_details .profile_view .brief {
       margin: 0;
       font-weight: 300
   }
   .profile_details .profile_left {
       background: white
   }
   .pagination.pagination-split li {
       display: inline-block;
       margin-right: 3px
   }
   .pagination.pagination-split li a {
       border-radius: 4px;
       color: #768399;
       -moz-border-radius: 4px;
       -webkit-border-radius: 4px
   }
   table.tile h3,
   table.tile h4,
   table.tile span {
       font-weight: bold;
       vertical-align: middle !important
   }
   table.tile th,
   table.tile td {
       text-align: center
   }
   table.tile th {
       border-bottom: 1px solid #E6ECEE
   }
   table.tile td {
       padding: 5px 0
   }
   table.tile td ul {
       text-align: left;
       padding-left: 0
   }
   table.tile td ul li {
       list-style: none;
       width: 100%
   }
   table.tile td ul li a {
       width: 100%
   }
   table.tile td ul li a big {
       right: 0;
       float: right;
       margin-right: 13px
   }
   table.tile_info {
       width: 100%
   }
   table.tile_info td {
       text-align: left;
       padding: 1px;
       font-size: 15px
   }
   table.tile_info td p {
       white-space: nowrap;
       overflow: hidden;
       text-overflow: ellipsis;
       margin: 0;
       line-height: 28px
   }
   table.tile_info td i {
       margin-right: 8px;
       font-size: 17px;
       float: left;
       width: 18px;
       line-height: 28px
   }
   table.tile_info td:first-child {
       width: 83%
   }
   td span {
       line-height: 28px
   }
   .sidebar-widget {
       overflow: hidden
   }
   .error-number {
       font-size: 90px;
       line-height: 90px;
       margin: 20px 0
   }
   .col-middle {
       margin-top: 5%
   }
   .mid_center {
       width: 370px;
       margin: 0 auto;
       text-align: center;
       padding: 10px 20px
   }
   h3.degrees {
       font-size: 22px;
       font-weight: 400;
       text-align: center
   }
   .degrees:after {
       content: "o";
       position: relative;
       top: -12px;
       font-size: 13px;
       font-weight: 300
   }
   .daily-weather .day {
       font-size: 14px;
       border-top: 2px solid rgba(115, 135, 156, 0.36);
       text-align: center;
       border-bottom: 2px solid rgba(115, 135, 156, 0.36);
       padding: 5px 0
   }
   .weather-days .col-sm-2 {
       overflow: hidden;
       width: 16.66666667%
   }
   .weather .row {
       margin-bottom: 0
   }
   .bulk-actions {
       display: none
   }
   table.countries_list {
       width: 100%
   }
   table.countries_list td {
       padding: 0 10px;
       line-height: 30px;
       border-top: 1px solid #eeeeee
   }
   .dataTables_paginate a {
       padding: 6px 9px !important;
       background: #ddd !important;
       border-color: #ddd !important
   }
   .paging_full_numbers a.paginate_active {
       background-color: rgba(38, 185, 154, 0.59) !important;
       border-color: rgba(38, 185, 154, 0.59) !important
   }
   button.DTTT_button,
   div.DTTT_button,
   a.DTTT_button {
       border: 1px solid #E7E7E7 !important;
       background: #E7E7E7 !important;
       box-shadow: none !important
   }
   table.jambo_table {
       border: 1px solid rgba(221, 221, 221, 0.78)
   }
   table.jambo_table thead {
       background: rgba(52, 73, 94, 0.94);
       color: #ECF0F1
   }
   table.jambo_table tbody tr:hover td {
       background: rgba(38, 185, 154, 0.07);
       border-top: 1px solid rgba(38, 185, 154, 0.11);
       border-bottom: 1px solid rgba(38, 185, 154, 0.11)
   }
   table.jambo_table tbody tr.selected {
       background: rgba(38, 185, 154, 0.16)
   }
   table.jambo_table tbody tr.selected td {
       border-top: 1px solid rgba(38, 185, 154, 0.4);
       border-bottom: 1px solid rgba(38, 185, 154, 0.4)
   }
   .dataTables_paginate a {
       background: #ff0000
   }
   .dataTables_wrapper {
       position: relative;
       clear: both;
       zoom: 1
   }
   .dataTables_processing {
       position: absolute;
       top: 50%;
       left: 50%;
       width: 250px;
       height: 30px;
       margin-left: -125px;
       margin-top: -15px;
       padding: 14px 0 2px 0;
       border: 1px solid #ddd;
       text-align: center;
       color: #999;
       font-size: 14px;
       background-color: white
   }
   .dataTables_length {
       width: 40%;
       float: left
   }
   .dataTables_filter {
       width: 50%;
       float: right;
       text-align: right
   }
   .dataTables_info {
       width: 60%;
       float: left
   }
   .dataTables_paginate {
       float: right;
       text-align: right
   }
   table.dataTable th.focus,
   table.dataTable td.focus {
       outline: 2px solid #1ABB9C !important;
       outline-offset: -1px
   }
   table.display {
       margin: 0 auto;
       clear: both;
       width: 100%
   }
   table.display thead th {
       padding: 8px 18px 8px 10px;
       border-bottom: 1px solid black;
       font-weight: bold;
       cursor: pointer
   }
   table.display tfoot th {
       padding: 3px 18px 3px 10px;
       border-top: 1px solid black;
       font-weight: bold
   }
   table.display tr.heading2 td {
       border-bottom: 1px solid #aaa
   }
   table.display td {
       padding: 3px 10px
   }
   table.display td.center {
       text-align: center
   }
   table.display thead th:active,
   table.display thead td:active {
       outline: none
   }
   .dataTables_scroll {
       clear: both
   }
   .dataTables_scrollBody {
       *margin-top: -1px;
       -webkit-overflow-scrolling: touch
   }
   .top .dataTables_info {
       float: none
   }
   .clear {
       clear: both
   }
   .dataTables_empty {
       text-align: center
   }
   tfoot input {
       margin: 0.5em 0;
       width: 100%;
       color: #444
   }
   tfoot input.search_init {
       color: #999
   }
   td.group {
       background-color: #d1cfd0;
       border-bottom: 2px solid #A19B9E;
       border-top: 2px solid #A19B9E
   }
   td.details {
       background-color: #d1cfd0;
       border: 2px solid #A19B9E
   }
   .example_alt_pagination div.dataTables_info {
       width: 40%
   }
   .paging_full_numbers {
       width: 400px;
       height: 22px;
       line-height: 22px
   }
   .paging_full_numbers a:active {
       outline: none
   }
   .paging_full_numbers a:hover {
       text-decoration: none
   }
   .paging_full_numbers a.paginate_button,
   .paging_full_numbers a.paginate_active {
       border: 1px solid #aaa;
       -webkit-border-radius: 5px;
       -moz-border-radius: 5px;
       padding: 2px 5px;
       margin: 0 3px;
       cursor: pointer
   }
   .paging_full_numbers a.paginate_button {
       background-color: #ddd
   }
   .paging_full_numbers a.paginate_button:hover {
       background-color: #ccc;
       text-decoration: none !important
   }
   .paging_full_numbers a.paginate_active {
       background-color: #99B3FF
   }
   table.display tr.even.row_selected td {
       background-color: #B0BED9
   }
   table.display tr.odd.row_selected td {
       background-color: #9FAFD1
   }
   div.box {
       height: 100px;
       padding: 10px;
       overflow: auto;
       border: 1px solid #8080FF;
       background-color: #E5E5FF
   }
   ul.msg_list li {
       background: #f7f7f7;
       padding: 5px;
       display: -ms-flexbox;
       display: flex;
       margin: 6px 6px 0;
       width: 96% !important
   }
   ul.msg_list li:last-child {
       margin-bottom: 6px;
       padding: 10px
   }
   ul.msg_list li a {
       padding: 3px 5px !important
   }
   ul.msg_list li a .image img {
       border-radius: 2px 2px 2px 2px;
       -webkit-border-radius: 2px 2px 2px 2px;
       float: left;
       margin-right: 10px;
       width: 11%
   }
   ul.msg_list li a .time {
       font-size: 11px;
       font-style: italic;
       font-weight: bold;
       position: absolute;
       right: 35px
   }
   ul.msg_list li a .message {
       display: block !important;
       font-size: 11px
   }
   .dropdown-menu.msg_list span {
       white-space: normal
   }
   .dropdown-menu {
       border: medium none;
       box-shadow: none;
       display: none;
       float: left;
       font-size: 12px;
       left: 0;
       list-style: none outside none;
       padding: 0;
       position: absolute;
       text-shadow: none;
       top: 100%;
       z-index: 9998;
       border: 1px solid #D9DEE4;
       border-top-left-radius: 0;
       border-top-right-radius: 0
   }
   .dropdown-menu>li>a {
       color: #5A738E
   }
   .navbar-nav .open .dropdown-menu {
       position: absolute;
       background: #fff;
       margin-top: 0;
       border: 1px solid #D9DEE4;
       -webkit-box-shadow: none;
       right: 0;
       left: auto;
       width: 220px
   }
   .navbar-nav .open .dropdown-menu.msg_list {
       width: 300px
   }
   .info-number .badge {
       font-size: 10px;
       font-weight: normal;
       line-height: 13px;
       padding: 2px 6px;
       position: absolute;
       right: 2px;
       top: 8px
   }
   ul.to_do {
       padding: 0
   }
   ul.to_do li {
       background: #f3f3f3;
       border-radius: 3px;
       position: relative;
       padding: 7px;
       margin-bottom: 5px;
       list-style: none
   }
   ul.to_do p {
       margin: 0
   }
   .dashboard-widget {
       background: #f6f6f6;
       border-top: 5px solid #79C3DF;
       border-radius: 3px;
       padding: 5px 10px 10px
   }
   .dashboard-widget .dashboard-widget-title {
       font-weight: normal;
       border-bottom: 1px solid #c1cdcd;
       margin: 0 0 10px 0;
       padding-bottom: 5px;
       padding-left: 40px;
       line-height: 30px
   }
   .dashboard-widget .dashboard-widget-title i {
       font-size: 100%;
       margin-left: -35px;
       margin-right: 10px;
       color: #33a1c9;
       padding: 3px 6px;
       border: 1px solid #abd9ea;
       border-radius: 5px;
       background: #fff
   }
   ul.quick-list {
       width: 45%;
       padding-left: 0;
       display: inline-block
   }
   ul.quick-list li {
       padding-left: 10px;
       list-style: none;
       margin: 0;
       padding-bottom: 6px;
       padding-top: 4px;
       white-space: nowrap;
       text-overflow: ellipsis;
       overflow: hidden
   }
   ul.quick-list li i {
       padding-right: 10px;
       color: #757679
   }
   .dashboard-widget-content {
       padding-top: 9px
   }
   .dashboard-widget-content .sidebar-widget {
       width: 50%;
       display: inline-block;
       vertical-align: top;
       background: #fff;
       border: 1px solid #abd9ea;
       border-radius: 5px;
       text-align: center;
       float: right;
       padding: 2px;
       margin-top: 10px
   }
   .widget_summary {
       width: 100%;
       display: -ms-inline-flexbox;
       display: inline-flex
   }
   .widget_summary .w_left {
       float: left;
       text-align: left
   }
   .widget_summary .w_center {
       float: left
   }
   .widget_summary .w_right {
       float: left;
       text-align: right
   }
   .widget_summary .w_right span {
       font-size: 20px
   }
   .w_20 {
       width: 20%
   }
   .w_25 {
       width: 25%
   }
   .w_55 {
       width: 55%
   }
   h5.graph_title {
       text-align: left;
       margin-left: 10px
   }
   h5.graph_title i {
       margin-right: 10px;
       font-size: 17px
   }
   span.right {
       float: right;
       font-size: 14px !important
   }
   .tile_info a {
       text-overflow: ellipsis
   }
   .sidebar-footer {
       bottom: 0px;
       clear: both;
       display: block;
       padding: 5px 0 0 0;
       position: fixed;
       width: 230px;
       background: #2A3F54;
       z-index:999;
   }
   .sidebar-footer a {
       padding: 7px 0 3px;
       text-align: center;
       width: 25%;
       font-size: 17px;
       display: block;
       float: left;
       background: #172D44;
       cursor: pointer;
   }
   .sidebar-footer a:hover {
       background: #425567
   }
   .tile_count {
       margin-bottom: 20px;
       margin-top: 20px
   }
   .tile_count .tile_stats_count {
       border-bottom: 1px solid #D9DEE4;
       padding: 0 10px 0 20px;
       text-overflow: ellipsis;
       overflow: hidden;
       white-space: nowrap;
       position: relative
   }
   @media (min-width: 992px) {
       footer {
           margin-left: 230px
       }
   }
   @media (min-width: 992px) {
       .tile_count .tile_stats_count {
           margin-bottom: 10px;
           border-bottom: 0;
           padding-bottom: 10px
       }
   }
   .tile_count .tile_stats_count:before {
       content: "";
       position: absolute;
       left: 0;
       height: 65px;
       border-left: 2px solid #ADB2B5;
       margin-top: 10px
   }
   @media (min-width: 992px) {
       .tile_count .tile_stats_count:first-child:before {
           border-left: 0
       }
   }
   .tile_count .tile_stats_count .count {
       font-size: 30px;
       line-height: 47px;
       font-weight: 600
   }
   @media (min-width: 768px) {
       .tile_count .tile_stats_count .count {
           font-size: 40px
       }
   }
   @media (min-width: 992px) and (max-width: 1100px) {
       .tile_count .tile_stats_count .count {
           font-size: 30px
       }
   }
   .tile_count .tile_stats_count span {
       font-size: 12px
   }
   @media (min-width: 768px) {
       .tile_count .tile_stats_count span {
           font-size: 13px
       }
   }
   .tile_count .tile_stats_count .count_bottom i {
       width: 12px
   }
   .dashboard_graph {
       background: #fff;
       padding: 7px 10px
   }
   .dashboard_graph .col-md-9,
   .dashboard_graph .col-md-3 {
       padding: 0
   }
   a.user-profile {
       color: #5E6974 !important
   }
   .user-profile img {
       width: 29px;
       height: 29px;
       border-radius: 50%;
       margin-right: 10px
   }
   ul.top_profiles {
       height: 330px;
       width: 100%
   }
   ul.top_profiles li {
       margin: 0;
       padding: 3px 5px
   }
   ul.top_profiles li:nth-child(odd) {
       background-color: #eee
   }
   .media .profile_thumb {
       border: 1px solid;
       width: 50px;
       height: 50px;
       margin: 5px 10px 5px 0;
       border-radius: 50%;
       padding: 9px 12px
   }
   .media .profile_thumb i {
       font-size: 30px
   }
   .media .date {
       background: #ccc;
       width: 52px;
       margin-right: 10px;
       border-radius: 10px;
       padding: 5px
   }
   .media .date .month {
       margin: 0;
       text-align: center;
       color: #fff
   }
   .media .date .day {
       text-align: center;
       color: #fff;
       font-size: 27px;
       margin: 0;
       line-height: 27px;
       font-weight: bold
   }
   .event .media-body a.title {
       font-weight: bold
   }
   .event .media-body p {
       margin-bottom: 0
   }
   h4.graph_title {
       margin: 7px;
       text-align: center
   }
   .fontawesome-icon-list .fa-hover a:hover {
       background-color: #ddd;
       color: #fff;
       text-decoration: none
   }
   .fontawesome-icon-list .fa-hover a {
       display: block;
       line-height: 32px;
       height: 32px;
       padding-left: 10px;
       border-radius: 4px
   }
   .fontawesome-icon-list .fa-hover a:hover .fa {
       font-size: 28px;
       vertical-align: -6px
   }
   .fontawesome-icon-list .fa-hover a .fa {
       width: 32px;
       font-size: 16px;
       display: inline-block;
       text-align: right;
       margin-right: 10px
   }
   .main_menu .fa {
       width: 26px;
       opacity: .99;
       display: inline-block;
       font-family: FontAwesome;
       font-style: normal;
       font-weight: normal;
       font-size: 18px;
       -webkit-font-smoothing: antialiased;
       -moz-osx-font-smoothing: grayscale
   }
   .tile-stats {
       position: relative;
       display: block;
       margin-bottom: 12px;
       border: 1px solid #E4E4E4;
       -webkit-border-radius: 5px;
       overflow: hidden;
       padding-bottom: 5px;
       -webkit-background-clip: padding-box;
       -moz-border-radius: 5px;
       -moz-background-clip: padding;
       border-radius: 5px;
       background-clip: padding-box;
       background: #FFF;
       transition: all 300ms ease-in-out
   }
   .tile-stats:hover .icon i {
       animation-name: transformAnimation;
       animation-duration: .5s;
       animation-iteration-count: 1;
       color: rgba(58, 58, 58, 0.41);
       animation-timing-function: ease;
       animation-fill-mode: forwards;
       -webkit-animation-name: transformAnimation;
       -webkit-animation-duration: .5s;
       -webkit-animation-iteration-count: 1;
       -webkit-animation-timing-function: ease;
       -webkit-animation-fill-mode: forwards;
       -moz-animation-name: transformAnimation;
       -moz-animation-duration: .5s;
       -moz-animation-iteration-count: 1;
       -moz-animation-timing-function: ease;
       -moz-animation-fill-mode: forwards
   }
   .tile-stats .icon {
       width: 20px;
       height: 20px;
       color: #BAB8B8;
       position: absolute;
       right: 53px;
       top: 22px;
       z-index: 1
   }
   .tile-stats .icon i {
       margin: 0;
       font-size: 60px;
       line-height: 0;
       vertical-align: bottom;
       padding: 0
   }
   .tile-stats .count {
       font-size: 38px;
       font-weight: bold;
       line-height: 1.65857
   }
   .tile-stats .count,
   .tile-stats h3,
   .tile-stats p {
       position: relative;
       margin: 0;
       margin-left: 10px;
       z-index: 5;
       padding: 0
   }
   .tile-stats h3 {
       color: #BAB8B8
   }
   .tile-stats p {
       margin-top: 5px;
       font-size: 12px
   }
   .tile-stats>.dash-box-footer {
       position: relative;
       text-align: center;
       margin-top: 5px;
       padding: 3px 0;
       color: #fff;
       color: rgba(255, 255, 255, 0.8);
       display: block;
       z-index: 10;
       background: rgba(0, 0, 0, 0.1);
       text-decoration: none
   }
   .tile-stats>.dash-box-footer:hover {
       color: #fff;
       background: rgba(0, 0, 0, 0.15)
   }
   .tile-stats>.dash-box-footer:hover {
       color: #fff;
       background: rgba(0, 0, 0, 0.15)
   }
   table.tile_info {
       padding: 10px 15px
   }
   table.tile_info span.right {
       margin-right: 0;
       float: right;
       position: absolute;
       right: 4%
   }
   .tile:hover {
       text-decoration: none
   }
   .tile_header {
       border-bottom: transparent;
       padding: 7px 15px;
       margin-bottom: 15px;
       background: #E7E7E7
   }
   .tile_head h4 {
       margin-top: 0;
       margin-bottom: 5px
   }
   .tiles-bottom {
       padding: 5px 10px;
       margin-top: 10px;
       background: rgba(194, 194, 194, 0.3);
       text-align: left
   }
   a.star {
       color: #428bca !important
   }
   .mail_content {
       background: none repeat scroll 0 0 #FFFFFF;
       border-radius: 4px;
       margin-top: 20px;
       min-height: 500px;
       padding: 10px 11px;
       width: 100%
   }
   .list-btn-mail {
       margin-bottom: 15px
   }
   .list-btn-mail.active {
       border-bottom: 1px solid #39B3D7;
       padding: 0 0 14px
   }
   .list-btn-mail>i {
       float: left;
       font-size: 18px;
       font-style: normal;
       width: 33px
   }
   .list-btn-mail>.cn {
       background: none repeat scroll 0 0 #39B3D7;
       border-radius: 12px;
       color: #FFFFFF;
       float: right;
       font-style: normal;
       padding: 0 5px
   }
   .button-mail {
       margin: 0 0 15px !important;
       text-align: left;
       width: 100%
   }
   button,
   .buttons,
   .btn,
   .modal-footer .btn+.btn {
       margin-bottom: 5px;
       margin-right: 5px
   }
   .btn-group-vertical .btn,
   .btn-group .btn {
       margin-bottom: 0;
       margin-right: 0
   }
   .mail_list_column {
       border-left: 1px solid #DBDBDB
   }
   .mail_view {
       border-left: 1px solid #DBDBDB
   }
   .mail_list {
       width: 100%;
       border-bottom: 1px solid #DBDBDB;
       margin-bottom: 2px;
       display: inline-block
   }
   .mail_list .left {
       width: 5%;
       float: left;
       margin-right: 3%
   }
   .mail_list .right {
       width: 90%;
       float: left
   }
   .mail_list h3 {
       font-size: 15px;
       font-weight: bold;
       margin: 0px 0 6px
   }
   .mail_list h3 small {
       float: right;
       color: #ADABAB;
       font-size: 11px;
       line-height: 20px
   }
   .mail_list .badge {
       padding: 3px 6px;
       font-size: 8px;
       background: #BAB7B7
   }
   @media (max-width: 767px) {
       .mail_list {
           margin-bottom: 5px;
           display: inline-block
       }
   }
   .mail_heading h4 {
       font-size: 18px;
       border-bottom: 1px solid #ddd;
       padding-bottom: 10px;
       margin-top: 20px
   }
   .attachment {
       margin-top: 30px
   }
   .attachment ul {
       width: 100%;
       list-style: none;
       padding-left: 0;
       display: inline-block;
       margin-bottom: 30px
   }
   .attachment ul li {
       float: left;
       width: 150px;
       margin-right: 10px;
       margin-bottom: 10px
   }
   .attachment ul li img {
       height: 150px;
       border: 1px solid #ddd;
       padding: 5px;
       margin-bottom: 10px
   }
   .attachment ul li span {
       float: right
   }
   .attachment .file-name {
       float: left
   }
   .attachment .links {
       width: 100%;
       display: inline-block
   }
   .compose {
       padding: 0;
       position: fixed;
       bottom: 0;
       right: 0;
       background: #fff;
       border: 1px solid #D9DEE4;
       border-right: 0;
       border-bottom: 0;
       border-top-left-radius: 5px;
       z-index: 9999;
       display: none
   }
   .compose .compose-header {
       padding: 5px;
       background: #169F85;
       color: #fff;
       border-top-left-radius: 5px
   }
   .compose .compose-header .close {
       text-shadow: 0 1px 0 #ffffff;
       line-height: .8
   }
   .compose .compose-body .editor.btn-toolbar {
       margin: 0
   }
   .compose .compose-body .editor-wrapper {
       height: 100%;
       min-height: 50px;
       max-height: 180px;
       border-radius: 0;
       border-left: none;
       border-right: none;
       overflow: auto
   }
   .compose .compose-footer {
       padding: 10px
   }
   .editor.btn-toolbar {
       zoom: 1;
       background: #F7F7F7;
       margin: 5px 2px;
       padding: 3px 0;
       border: 1px solid #EFEFEF
   }
   .input-group {
       margin-bottom: 10px
   }
   .ln_solid {
       border-top: 1px solid #e5e5e5;
       color: #ffffff;
       background-color: #ffffff;
       height: 1px;
       margin: 20px 0
   }
   span.section {
       display: block;
       width: 100%;
       padding: 0;
       margin-bottom: 20px;
       font-size: 21px;
       line-height: inherit;
       color: #333;
       border: 0;
       border-bottom: 1px solid #e5e5e5
   }
   .form-control {
       border-radius: 0;
       width: 100%
   }
   .form-horizontal .control-label {
       padding-top: 8px
   }
   .form-control:focus {
       border-color: #CCD0D7;
       box-shadow: none !important
   }
   legend {
       font-size: 18px;
       color: inherit
   }
   .form-horizontal .form-group {
       margin-right: 0;
       margin-left: 0
   }
   .form-control-feedback {
       margin-top: 8px;
       height: 23px;
       color: #bbb;
       line-height: 24px;
       font-size: 15px
   }
   .form-control-feedback.left {
       border-right: 1px solid #ccc;
       left: 13px
   }
   .form-control-feedback.right {
       border-left: 1px solid #ccc;
       right: 13px
   }
   .form-control.has-feedback-left {
       padding-left: 45px
   }
   .form-control.has-feedback-right {
       padding-right: 45px
   }
   .form-group {
       margin-bottom: 10px
   }
   .validate {
       margin-top: 10px
   }
   .invalid-form-error-message {
       margin-top: 10px;
       padding: 5px
   }
   .invalid-form-error-message.filled {
       border-left: 2px solid #E74C3C
   }
   p.parsley-success {
       color: #468847;
       background-color: #DFF0D8;
       border: 1px solid #D6E9C6
   }
   p.parsley-error {
       color: #B94A48;
       background-color: #F2DEDE;
       border: 1px solid #EED3D7
   }
   ul.parsley-errors-list {
       list-style: none;
       color: #E74C3C;
       padding-left: 0
   }
   input.parsley-error,
   textarea.parsley-error,
   select.parsley-error {
       background: #FAEDEC;
       border: 1px solid #E85445
   }
   .btn-group .parsley-errors-list {
       display: none
   }
   .bad input,
   .bad select,
   .bad textarea {
       border: 1px solid #CE5454;
       box-shadow: 0 0 4px -2px #CE5454;
       position: relative;
       left: 0;
       -moz-animation: .7s 1 shake linear;
       -webkit-animation: 0.7s 1 shake linear
   }
   .item input,
   .item textarea {
       transition: 0.42s
   }
   .item .alert {
       float: left;
       margin: 0 0 0 20px;
       padding: 3px 10px;
       color: #FFF;
       border-radius: 3px 4px 4px 3px;
       background-color: #CE5454;
       max-width: 170px;
       white-space: pre;
       position: relative;
       left: -15px;
       opacity: 0;
       z-index: 1;
       transition: 0.15s ease-out
   }
   .item .alert::after {
       content: '';
       display: block;
       height: 0;
       width: 0;
       border-color: transparent #CE5454 transparent transparent;
       border-style: solid;
       border-width: 11px 7px;
       position: absolute;
       left: -13px;
       top: 1px
   }
   .item.bad .alert {
       left: 0;
       opacity: 1
   }
   .inl-bl {
       display: inline-block
   }
   .well .markup {
       background: #fff;
       color: #777;
       position: relative;
       padding: 45px 15px 15px;
       margin: 15px 0 0 0;
       background-color: #fff;
       border-radius: 0 0 4px 4px;
       box-shadow: none
   }
   .well .markup::after {
       content: "Example";
       position: absolute;
       top: 15px;
       left: 15px;
       font-size: 12px;
       font-weight: bold;
       color: #bbb;
       text-transform: uppercase;
       letter-spacing: 1px
   }
   .autocomplete-suggestions {
       border: 1px solid #e4e4e4;
       background: #F4F4F4;
       cursor: default;
       overflow: auto
   }
   .autocomplete-suggestion {
       padding: 2px 5px;
       font-size: 1.2em;
       white-space: nowrap;
       overflow: hidden
   }
   .autocomplete-selected {
       background: #f0f0f0
   }
   .autocomplete-suggestions strong {
       font-weight: normal;
       color: #3399ff;
       font-weight: bolder
   }
   .btn {
       border-radius: 3px
   }
   a.btn-success,
   a.btn-primary,
   a.btn-warning,
   a.btn-danger {
       color: #fff
   }
   .btn-success {
       background: #26B99A;
       border: 1px solid #169F85
   }
   .btn-success:hover,
   .btn-success:focus,
   .btn-success:active,
   .btn-success.active,
   .open .dropdown-toggle.btn-success {
       background: #169F85
   }
   .btn-dark {
       color: #E9EDEF;
       background-color: #4B5F71;
       border-color: #364B5F
   }
   .btn-dark:hover,
   .btn-dark:focus,
   .btn-dark:active,
   .btn-dark.active,
   .open .dropdown-toggle.btn-dark {
       color: #FFFFFF;
       background-color: #394D5F;
       border-color: #394D5F
   }
   .btn-round {
       border-radius: 30px
   }
   .btn.btn-app {
       position: relative;
       padding: 15px 5px;
       margin: 0 0 10px 10px;
       min-width: 80px;
       height: 60px;
       box-shadow: none;
       border-radius: 0;
       text-align: center;
       color: #666;
       border: 1px solid #ddd;
       background-color: #fafafa;
       font-size: 12px
   }
   .btn.btn-app>.fa,
   .btn.btn-app>.glyphicon,
   .btn.btn-app>.ion {
       font-size: 20px;
       display: block
   }
   .btn.btn-app:hover {
       background: #f4f4f4;
       color: #444;
       border-color: #aaa
   }
   .btn.btn-app:active,
   .btn.btn-app:focus {
       box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125)
   }
   .btn.btn-app>.badge {
       position: absolute;
       top: -3px;
       right: -10px;
       font-size: 10px;
       font-weight: 400
   }
   textarea {
       padding: 10px;
       vertical-align: top;
       width: 200px
   }
   textarea:focus {
       outline-style: solid;
       outline-width: 2px
   }
   .btn_ {
       display: inline-block;
       padding: 3px 9px;
       margin-bottom: 0;
       font-size: 14px;
       line-height: 20px;
       text-align: center;
       vertical-align: middle;
       cursor: pointer;
       color: #333333;
       text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
       background-color: #f5f5f5;
       background-image: linear-gradient(to bottom, #fff, #e6e6e6);
       background-repeat: repeat-x;
       filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
       border-color: #e6e6e6 #e6e6e6 #bfbfbf;
       border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
       filter: progid: DXImageTransform.Microsoft.gradient(enabled=false);
       border: 1px solid #cccccc;
       border-bottom-color: #b3b3b3;
       border-radius: 4px;
       box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05)
   }
   .bs-glyphicons {
       margin: 0 -10px 20px;
       overflow: hidden
   }
   .bs-glyphicons-list {
       padding-left: 0;
       list-style: none
   }
   .bs-glyphicons li {
       float: left;
       width: 25%;
       height: 115px;
       padding: 10px;
       font-size: 10px;
       line-height: 1.4;
       text-align: center;
       background-color: #f9f9f9;
       border: 1px solid #fff
   }
   .bs-glyphicons .glyphicon {
       margin-top: 5px;
       margin-bottom: 10px;
       font-size: 24px
   }
   .bs-glyphicons .glyphicon-class {
       display: block;
       text-align: center;
       word-wrap: break-word
   }
   .bs-glyphicons li:hover {
       color: #fff;
       background-color: #1ABB9C
   }
   @media (min-width: 768px) {
       .bs-glyphicons {
           margin-right: 0;
           margin-left: 0
       }
       .bs-glyphicons li {
           width: 12.5%;
           font-size: 12px
       }
   }
   .tagsinput {
       border: 1px solid #CCC;
       background: #FFF;
       padding: 6px 6px 0;
       width: 300px;
       overflow-y: auto
   }
   span.tag {
       -moz-border-radius: 2px;
       -webkit-border-radius: 2px;
       display: block;
       float: left;
       padding: 5px 9px;
       text-decoration: none;
       background: #1ABB9C;
       color: #F1F6F7;
       margin-right: 5px;
       font-weight: 500;
       margin-bottom: 5px;
       font-family: helvetica
   }
   span.tag a {
       color: #F1F6F7 !important
   }
   .tagsinput span.tag a {
       font-weight: bold;
       color: #82ad2b;
       text-decoration: none;
       font-size: 11px
   }
   .tagsinput input {
       width: 80px;
       margin: 0px;
       font-family: helvetica;
       font-size: 13px;
       border: 1px solid transparent;
       padding: 3px;
       background: transparent;
       color: #000;
       outline: 0px
   }
   .tagsinput div {
       display: block;
       float: left
   }
   .tags_clear {
       clear: both;
       width: 100%;
       height: 0px
   }
   .not_valid {
       background: #FBD8DB !important;
       color: #90111A !important
   }
   ul.bar_tabs {
       overflow: visible;
       background: #F5F7FA;
       height: 25px;
       margin: 21px 0 14px;
       padding-left: 14px;
       position: relative;
       z-index: 1;
       width: 100%;
       border-bottom: 1px solid #E6E9ED
   }
   ul.bar_tabs>li {
       border: 1px solid #E6E9ED;
       color: #333 !important;
       margin-top: -17px;
       margin-left: 8px;
       background: #fff;
       border-bottom: none;
       border-radius: 4px 4px 0 0
   }
   ul.bar_tabs>li.active {
       border-right: 6px solid #D3D6DA;
       border-top: 0;
       margin-top: -15px
   }
   ul.bar_tabs>li a {
       padding: 10px 17px;
       background: #F5F7FA;
       margin: 0;
       border-top-right-radius: 0
   }
   ul.bar_tabs>li a:hover {
       border: 1px solid transparent
   }
   ul.bar_tabs>li.active a {
       border-bottom: none
   }
   ul.bar_tabs.right {
       padding-right: 14px
   }
   ul.bar_tabs.right li {
       float: right
   }
   a:focus {
       outline: none
   }
   ul.timeline li {
       position: relative;
       border-bottom: 1px solid #e8e8e8;
       clear: both
   }
   .timeline .block {
       margin: 0;
       border-left: 3px solid #e8e8e8;
       overflow: visible;
       padding: 10px 15px;
       margin-left: 105px
   }
   .timeline.widget {
       min-width: 0;
       max-width: inherit
   }
   .timeline.widget .block {
       margin-left: 5px
   }
   .timeline .tags {
       position: absolute;
       top: 15px;
       left: 0;
       width: 84px
   }
   .timeline .tag {
       display: block;
       height: 30px;
       font-size: 13px;
       padding: 8px
   }
   .timeline .tag span {
       display: block;
       overflow: hidden;
       width: 100%;
       white-space: nowrap;
       text-overflow: ellipsis
   }
   .tag {
       line-height: 1;
       background: #1ABB9C;
       color: #fff !important
   }
   .tag:after {
       content: " ";
       height: 30px;
       width: 0;
       position: absolute;
       left: 100%;
       top: 0;
       margin: 0;
       pointer-events: none;
       border-top: 14px solid transparent;
       border-bottom: 14px solid transparent;
       border-left: 11px solid #1ABB9C
   }
   .timeline h2.title {
       position: relative;
       font-size: 16px;
       margin: 0
   }
   .timeline h2.title:before {
       content: "";
       position: absolute;
       left: -23px;
       top: 3px;
       display: block;
       width: 14px;
       height: 14px;
       border: 3px solid #d2d3d2;
       border-radius: 14px;
       background: #f9f9f9
   }
   .timeline .byline {
       padding: .25em 0
   }
   .byline {
       -webkit-font-smoothing: antialiased;
       font-style: italic;
       font-size: .9375em;
       line-height: 1.3;
       color: #aab6aa
   }
   ul.social li {
       border: 0
   }
   .social-sidebar,
   .social-body {
       float: right
   }
   .social-sidebar {
       background: #EDEDED;
       width: 22%
   }
   .social-body {
       border: 1px solid #ccc;
       width: 78%
   }
   .thumb img {
       width: 50px;
       height: 50px;
       border-radius: 50%
   }
   .chat .thumb img {
       width: 27px;
       height: 27px;
       border-radius: 50%
   }
   .chat .status {
       float: left;
       margin: 16px 0 0 -16px;
       font-size: 14px;
       font-weight: bold;
       width: 12px;
       height: 12px;
       display: block;
       border: 2px solid #FFF;
       z-index: 12312;
       border-radius: 50%
   }
   .chat .status.online {
       background: #1ABB9C
   }
   .chat .status.away {
       background: #F39C12
   }
   .chat .status.offline {
       background: #ccc
   }
   .chat .media-body {
       padding-top: 5px
   }
   .dashboard_graph .x_title {
       padding: 5px 5px 7px
   }
   .dashboard_graph .x_title h3 {
       margin: 0;
       font-weight: normal
   }
   .chart {
       position: relative;
       display: inline-block;
       width: 110px;
       height: 110px;
       margin-top: 5px;
       margin-bottom: 5px;
       text-align: center
   }
   .chart canvas {
       position: absolute;
       top: 0;
       left: 0
   }
   .percent {
       display: inline-block;
       line-height: 110px;
       z-index: 2;
       font-size: 18px
   }
   .percent:after {
       content: '%';
       margin-left: 0.1em;
       font-size: .8em
   }
   .angular {
       margin-top: 100px
   }
   .angular .chart {
       margin-top: 0
   }
   .widget {
       min-width: 250px;
       max-width: 310px
   }
   .widget_tally_box .btn-group button {
       text-align: center
   }
   .widget_tally_box .btn-group button {
       color: inherit;
       font-weight: 500;
       background-color: #f5f5f5;
       border: 1px solid #e7e7e7
   }
   ul.widget_tally,
   ul.widget_tally li {
       width: 100%
   }
   ul.widget_tally li {
       padding: 2px 10px;
       border-bottom: 1px solid #ECECEC;
       padding-bottom: 4px
   }
   ul.widget_tally .month {
       width: 70%;
       float: left
   }
   ul.widget_tally .count {
       width: 30%;
       float: left;
       text-align: right
   }
   .pie_bg {
       border-bottom: 1px solid rgba(101, 204, 182, 0.16);
       padding-bottom: 15px;
       border-radius: 4px;
       filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
       filter: progid: DXImageTransform.Microsoft.gradient(enabled=false);
       padding-bottom: 10px;
       box-shadow: 0 4px 6px -6px #222
   }
   .widget_tally_box .flex {
       display: -ms-flexbox;
       display: flex
   }
   ul.widget_profile_box {
       width: 100%;
       height: 42px;
       padding: 3px;
       background: #ececec;
       margin-top: 40px;
       margin-left: 1px
   }
   ul.widget_profile_box li:first-child {
       width: 25%;
       float: left
   }
   ul.widget_profile_box li:first-child a {
       float: left
   }
   ul.widget_profile_box li:last-child {
       width: 25%;
       float: right
   }
   ul.widget_profile_box li:last-child a {
       float: right
   }
   ul.widget_profile_box li a {
       font-size: 22px;
       text-align: center;
       width: 35px;
       height: 35px;
       border: 1px solid rgba(52, 73, 94, 0.44);
       display: block;
       border-radius: 50%;
       padding: 0px
   }
   ul.widget_profile_box li a:hover {
       color: #1ABB9C !important;
       border: 1px solid #26b99a
   }
   ul.widget_profile_box li .profile_img {
       width: 85px;
       height: 85px;
       margin: 0;
       margin-top: -28px
   }
   .widget_tally_box p,
   .widget_tally_box span {
       text-align: center
   }
   .widget_tally_box .name {
       text-align: center;
       margin: 25px
   }
   .widget_tally_box .name_title {
       text-align: center;
       margin: 5px
   }
   .widget_tally_box ul.legend {
       margin: 0
   }
   .widget_tally_box ul.legend p,
   .widget_tally_box ul.legend span {
       text-align: left
   }
   .widget_tally_box ul.legend li .icon {
       font-size: 20px;
       float: left;
       width: 14px
   }
   .widget_tally_box ul.legend li .name {
       font-size: 14px;
       margin: 5px 0 0 14px;
       text-overflow: ellipsis;
       float: left
   }
   .widget_tally_box ul.legend p {
       display: inline-block;
       margin: 0
   }
   .widget_tally_box ul.verticle_bars li {
       height: 140px;
       width: 23%
   }
   .widget .verticle_bars li .progress.vertical.progress_wide {
       width: 65%
   }
   ul.count2 {
       width: 100%;
       margin-left: 1px;
       border: 1px solid #ddd;
       border-left: 0;
       border-right: 0;
       padding: 10px 0
   }
   ul.count2 li {
       width: 30%;
       text-align: center
   }
   ul.count2 li h3 {
       font-weight: 400;
       margin: 0
   }
   ul.count2 li span {
       font-weight: 300
   }
   .divider {
       border-bottom: 1px solid #ddd;
       margin: 10px
   }
   .divider-dashed {
       border-top: 1px dashed #e7eaec;
       background-color: #ffffff;
       height: 1px;
       margin: 10px 0
   }
   ul.messages {
       padding: 0;
       list-style: none
   }
   ul.messages li,
   .tasks li {
       border-bottom: 1px dotted #e6e6e6;
       padding: 8px 0
   }
   ul.messages li img.avatar,
   img.avatar {
       height: 32px;
       width: 32px;
       float: left;
       display: inline-block;
       border-radius: 2px;
       padding: 2px;
       background: #f7f7f7;
       border: 1px solid #e6e6e6
   }
   ul.messages li .message_date {
       float: right;
       text-align: right
   }
   ul.messages li .message_wrapper {
       margin-left: 50px;
       margin-right: 40px
   }
   ul.messages li .message_wrapper h4.heading {
       font-weight: 600;
       margin: 0;
       cursor: pointer;
       margin-bottom: 10px;
       line-height: 100%
   }
   ul.messages li .message_wrapper blockquote {
       padding: 0px 10px;
       margin: 0;
       border-left: 5px solid #eee
   }
   ul.user_data li {
       margin-bottom: 6px
   }
   ul.user_data li p {
       margin-bottom: 0
   }
   ul.user_data li .progress {
       width: 90%
   }
   .project_progress .progress {
       margin-bottom: 3px !important;
       margin-top: 5px
   }
   .projects .list-inline {
       margin: 0
   }
   .profile_title {
       background: #F5F7FA;
       border: 0;
       padding: 7px 0;
       display: -ms-flexbox;
       display: flex
   }
   ul.stats-overview {
       border-bottom: 1px solid #e8e8e8;
       padding-bottom: 10px;
       margin-bottom: 10px
   }
   ul.stats-overview li {
       display: inline-block;
       text-align: center;
       padding: 0 15px;
       width: 30%;
       font-size: 14px;
       border-right: 1px solid #e8e8e8
   }
   ul.stats-overview li:last-child {
       border-right: 0
   }
   ul.stats-overview li .name {
       font-size: 12px
   }
   ul.stats-overview li .value {
       font-size: 14px;
       font-weight: bold;
       display: block
   }
   ul.stats-overview li:first-child {
       padding-left: 0
   }
   ul.project_files li {
       margin-bottom: 5px
   }
   ul.project_files li a i {
       width: 20px
   }
   .project_detail p {
       margin-bottom: 10px
   }
   .project_detail p.title {
       font-weight: bold;
       margin-bottom: 0
   }
   .avatar img {
       border-radius: 50%;
       max-width: 45px
   }
   .pricing {
       background: #fff
   }
   .pricing .title {
       background: #1ABB9C;
       height: 110px;
       color: #fff;
       padding: 15px 0 0;
       text-align: center
   }
   .pricing .title h2 {
       text-transform: capitalize;
       font-size: 18px;
       border-radius: 5px 5px 0 0;
       margin: 0;
       font-weight: 400
   }
   .pricing .title h1 {
       font-size: 30px;
       margin: 12px
   }
   .pricing .title span {
       background: rgba(51, 51, 51, 0.28);
       padding: 2px 5px
   }
   .pricing_features {
       background: #FAFAFA;
       padding: 20px 15px;
       min-height: 230px;
       font-size: 13.5px
   }
   .pricing_features ul li {
       margin-top: 10px
   }
   .pricing_footer {
       padding: 10px 15px;
       background-color: #f5f5f5;
       border-top: 1px solid #ddd;
       text-align: center;
       border-bottom-right-radius: 3px;
       border-bottom-left-radius: 3px
   }
   .pricing_footer p {
       font-size: 13px;
       padding: 10px 0 2px;
       display: block
   }
   .ui-ribbon-container {
       position: relative
   }
   .ui-ribbon-container .ui-ribbon-wrapper {
       position: absolute;
       overflow: hidden;
       width: 85px;
       height: 88px;
       top: -3px;
       right: -3px
   }
   .ui-ribbon-container.ui-ribbon-primary .ui-ribbon {
       background-color: #5b90bf
   }
   .ui-ribbon-container .ui-ribbon {
       position: relative;
       display: block;
       text-align: center;
       font-size: 15px;
       font-weight: 700;
       color: #fff;
       transform: rotate(45deg);
       padding: 7px 0;
       left: -5px;
       top: 15px;
       width: 120px;
       line-height: 20px;
       background-color: #555;
       box-shadow: 0 0 3px rgba(0, 0, 0, 0.3)
   }
   .ui-ribbon-container.ui-ribbon-primary .ui-ribbon:after,
   .ui-ribbon-container.ui-ribbon-primary .ui-ribbon:before {
       border-top: 2px solid #5b90bf
   }
   .ui-ribbon-container .ui-ribbon:before {
       left: 0;
       bottom: -1px
   }
   .ui-ribbon-container .ui-ribbon:before {
       right: 0
   }
   .ui-ribbon-container .ui-ribbon:after,
   .ui-ribbon-container .ui-ribbon:before {
       position: absolute;
       content: " ";
       line-height: 0;
       border-top: 2px solid #555;
       border-left: 2px solid transparent;
       border-right: 2px solid transparent
   }
   .thumbnail .image {
       height: 120px;
       overflow: hidden
   }
   .caption {
       padding: 9px 5px;
       background: #F7F7F7
   }
   .caption p {
       margin-bottom: 5px
   }
   .thumbnail {
       height: 190px;
       overflow: hidden
   }
   .view {
       overflow: hidden;
       position: relative;
       text-align: center;
       box-shadow: 1px 1px 2px #e6e6e6;
       cursor: default
   }
   .view .mask,
   .view .content {
       position: absolute;
       width: 100%;
       overflow: hidden;
       top: 0;
       left: 0
   }
   .view img {
       display: block;
       position: relative
   }
   .view .tools {
       text-transform: uppercase;
       color: #fff;
       text-align: center;
       position: relative;
       font-size: 17px;
       padding: 3px;
       background: rgba(0, 0, 0, 0.35);
       margin: 43px 0 0 0
   }
   .mask.no-caption .tools {
       margin: 90px 0 0 0
   }
   .view .tools a {
       display: inline-block;
       color: #FFF;
       font-size: 18px;
       font-weight: 400;
       padding: 0 4px
   }
   .view p {
       font-family: Georgia, serif;
       font-style: italic;
       font-size: 12px;
       position: relative;
       color: #fff;
       padding: 10px 20px 20px;
       text-align: center
   }
   .view a.info {
       display: inline-block;
       text-decoration: none;
       padding: 7px 14px;
       background: #000;
       color: #fff;
       text-transform: uppercase;
       box-shadow: 0 0 1px #000
   }
   .view-first img {
       transition: all 0.2s linear
   }
   .view-first .mask {
       opacity: 0;
       background-color: rgba(0, 0, 0, 0.5);
       transition: all 0.4s ease-in-out
   }
   .view-first .tools {
       transform: translateY(-100px);
       opacity: 0;
       transition: all 0.2s ease-in-out
   }
   .view-first p {
       transform: translateY(100px);
       opacity: 0;
       transition: all 0.2s linear
   }
   .view-first:hover img {
       transform: scale(1.1)
   }
   .view-first:hover .mask {
       opacity: 1
   }
   .view-first:hover .tools,
   .view-first:hover p {
       opacity: 1;
       transform: translateY(0px)
   }
   .view-first:hover p {
       transition-delay: 0.1s
   }
   .form-group.has-feedback span {
       display: block !important;
   }
   .form-group .btn {
       margin-bottom: -6px;
   }
   
   .input-group-btn .btn { margin-bottom:0; }
   
   /*!
    * bootstrap-vertical-tabs - v1.2.1
    * https://dbtek.github.io/bootstrap-vertical-tabs
    * 2014-11-07
    * Copyright (c) 2014 İsmail Demirbilek
    * License: MIT
    */
   
   .tabs-left,
   .tabs-right {
       border-bottom: none;
       padding-top: 2px
   }
   .tabs-left {
       border-right: 1px solid #F7F7F7
   }
   .tabs-right {
       border-left: 1px solid #F7F7F7
   }
   .tabs-left>li,
   .tabs-right>li {
       float: none;
       margin-bottom: 2px
   }
   .tabs-left>li {
       margin-right: -1px
   }
   .tabs-right>li {
       margin-left: -1px
   }
   .tabs-left>li.active>a,
   .tabs-left>li.active>a:hover,
   .tabs-left>li.active>a:focus {
       border-bottom-color: #F7F7F7;
       border-right-color: transparent
   }
   .tabs-right>li.active>a,
   .tabs-right>li.active>a:hover,
   .tabs-right>li.active>a:focus {
       border-bottom: 1px solid #F7F7F7;
       border-left-color: transparent
   }
   .tabs-left>li>a {
       border-radius: 4px 0 0 4px;
       margin-right: 0;
       display: block;
       background: #F7F7F7;
       text-overflow: ellipsis;
       overflow: hidden
   }
   .tabs-right>li>a {
       border-radius: 0 4px 4px 0;
       margin-right: 0;
       background: #F7F7F7;
       text-overflow: ellipsis;
       overflow: hidden
   }
   .sideways {
       margin-top: 50px;
       border: none;
       position: relative
   }
   .sideways>li {
       height: 20px;
       width: 120px;
       margin-bottom: 100px
   }
   .sideways>li>a {
       border-bottom: 1px solid #ddd;
       border-right-color: transparent;
       text-align: center;
       border-radius: 4px 4px 0px 0px
   }
   .sideways>li.active>a,
   .sideways>li.active>a:hover,
   .sideways>li.active>a:focus {
       border-bottom-color: transparent;
       border-right-color: #ddd;
       border-left-color: #ddd
   }
   .sideways.tabs-left {
       left: -50px
   }
   .sideways.tabs-right {
       right: -50px
   }
   .sideways.tabs-right>li {
       transform: rotate(90deg)
   }
   .sideways.tabs-left>li {
       transform: rotate(-90deg)
   }
   .morris-hover {
       position: absolute;
       z-index: 1000
   }
   .morris-hover.morris-default-style {
       padding: 6px;
       color: #666;
       background: rgba(243, 242, 243, 0.8);
       border: solid 2px rgba(195, 194, 196, 0.8);
       font-family: sans-serif;
       font-size: 12px;
       text-align: center
   }
   .morris-hover.morris-default-style .morris-hover-row-label {
       font-weight: bold;
       margin: 0.25em 0
   }
   .morris-hover.morris-default-style .morris-hover-point {
       white-space: nowrap;
       margin: 0.1em 0
   }
   .price {
       font-size: 40px;
       font-weight: 400;
       color: #26B99A;
       margin: 0
   }
   .prod_title {
       border-bottom: 1px solid #DFDFDF;
       padding-bottom: 5px;
       margin: 30px 0;
       font-size: 20px;
       font-weight: 400
   }
   .product-image img {
       width: 90%
   }
   .prod_color li {
       margin: 0 10px
   }
   .prod_color li p {
       margin-bottom: 0
   }
   .prod_size li {
       padding: 0
   }
   .prod_color .color {
       width: 25px;
       height: 25px;
       border: 2px solid rgba(51, 51, 51, 0.28) !important;
       padding: 2px;
       border-radius: 50px
   }
   .product_gallery a {
       width: 100px;
       height: 100px;
       float: left;
       margin: 10px;
       border: 1px solid #e5e5e5
   }
   .product_gallery a img {
       width: 100%;
       margin-top: 15px
   }
   .product_price {
       margin: 20px 0;
       padding: 5px 10px;
       background-color: #FFFFFF;
       text-align: left;
       border: 2px dashed #E0E0E0
   }
   .price-tax {
       font-size: 18px
   }
   .product_social {
       margin: 20px 0
   }
   .product_social ul li a i {
       font-size: 35px
   }
   .login {
       background: #F7F7F7
   }
   .login .fa-paw {
       font-size: 26px
   }
   a.hiddenanchor {
       display: none
   }
   .login_wrapper {
       right: 0px;
       margin: 0px auto;
       margin-top: 5%;
       max-width: 350px;
       position: relative
   }
   .registration_form,
   .login_form {
       position: absolute;
       top: 0px;
       width: 100%
   }
   .registration_form {
       z-index: 21;
       opacity: 0;
       width: 100%
   }
   .login_form {
       z-index: 22
   }
   #signup:target ~ .login_wrapper .registration_form,
   #signin:target ~ .login_wrapper .login_form {
       z-index: 22;
       animation-name: fadeInLeft;
       animation-delay: .1s
   }
   #signup:target ~ .login_wrapper .login_form,
   #signin:target ~ .login_wrapper .registration_form {
       animation-name: fadeOutLeft
   }
   .animate {
       -webkit-animation-duration: 0.5s;
       -webkit-animation-timing-function: ease;
       -webkit-animation-fill-mode: both;
       -moz-animation-duration: 0.5s;
       -moz-animation-timing-function: ease;
       -moz-animation-fill-mode: both;
       -o-animation-duration: 0.5s;
       -o-animation-timing-function: ease;
       -o-animation-fill-mode: both;
       -ms-animation-duration: 0.5s;
       -ms-animation-timing-function: ease;
       -ms-animation-fill-mode: both;
       animation-duration: 0.5s;
       animation-timing-function: ease;
       animation-fill-mode: both
   }
   .login_box {
       padding: 20px;
       margin: auto
   }
   .left {
       float: left
   }
   .alignleft {
       float: left;
       margin-right: 15px
   }
   .alignright {
       float: right;
       margin-left: 15px
   }
   .clearfix:after,
   form:after {
       content: ".";
       display: block;
       height: 0;
       clear: both;
       visibility: hidden
   }
   .login_content {
       margin: 0 auto;
       padding: 25px 0 0;
       position: relative;
       text-align: center;
       text-shadow: 0 1px 0 #fff;
       min-width: 280px
   }
   .login_content a,
   .login_content .btn-default:hover {
       text-decoration: none
   }
   .login_content a:hover {
       text-decoration: underline
   }
   .login_content h1 {
       font: normal 25px Helvetica, Arial, sans-serif;
       letter-spacing: -0.05em;
       line-height: 20px;
       margin: 10px 0 30px
   }
   .login_content h1:before,
   .login_content h1:after {
       content: "";
       height: 1px;
       position: absolute;
       top: 10px;
       width: 27%
   }
   .login_content h1:after {
       background: #7e7e7e;
       background: linear-gradient(left, #7e7e7e 0%, #fff 100%);
       right: 0
   }
   .login_content h1:before {
       background: #7e7e7e;
       background: linear-gradient(right, #7e7e7e 0%, #fff 100%);
       left: 0
   }
   .login_content h1:before,
   .login_content h1:after {
       content: "";
       height: 1px;
       position: absolute;
       top: 10px;
       width: 20%
   }
   .login_content h1:after {
       background: #7e7e7e;
       background: linear-gradient(left, #7e7e7e 0%, #fff 100%);
       right: 0
   }
   .login_content h1:before {
       background: #7e7e7e;
       background: linear-gradient(right, #7e7e7e 0%, #fff 100%);
       left: 0
   }
   .login_content form {
       margin: 20px 0;
       position: relative
   }
   .login_content form input[type="text"],
   .login_content form input[type="email"],
   .login_content form input[type="password"] {
       border-radius: 3px;
       -ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
       -o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
       box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0, 0, 0, 0.08) inset;
       border: 1px solid #c8c8c8;
       color: #777;
       margin: 0 0 20px;
       width: 100%
   }
   .login_content form input[type="text"]:focus,
   .login_content form input[type="email"]:focus,
   .login_content form input[type="password"]:focus {
       -ms-box-shadow: 0 0 2px #ed1c24 inset;
       -o-box-shadow: 0 0 2px #ed1c24 inset;
       box-shadow: 0 0 2px #A97AAD inset;
       background-color: #fff;
       border: 1px solid #A878AF;
       outline: none
   }
   #username {
       background-position: 10px 10px !important
   }
   #password {
       background-position: 10px -53px !important
   }
   .login_content form div a {
       font-size: 12px;
       margin: 10px 15px 0 0
   }
   .reset_pass {
       margin-top: 10px !important
   }
   .login_content div .reset_pass {
       margin-top: 13px !important;
       margin-right: 39px;
       float: right
   }
   .separator {
       border-top: 1px solid #D8D8D8;
       margin-top: 10px;
       padding-top: 10px
   }
   .button {
       background: #f7f9fa;
       background: linear-gradient(top, #f7f9fa 0%, #f0f0f0 100%);
       filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#f7f9fa', endColorstr='#f0f0f0', GradientType=0);
       -ms-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
       -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
       box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
       border-radius: 0 0 5px 5px;
       border-top: 1px solid #CFD5D9;
       padding: 15px 0
   }
   .login_content form input[type="submit"],
   #content form .submit {
       float: left;
       margin-left: 38px
   }
   .button a {
       background: url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) 0 -112px no-repeat;
       color: #7E7E7E;
       font-size: 17px;
       padding: 2px 0 2px 40px;
       text-decoration: none;
       transition: all 0.3s ease
   }
   .button a:hover {
       background-position: 0 -135px;
       color: #00aeef
   }
   header {
       width: 100%
   }
   #nprogress .bar {
       background: #1ABB9C
   }
   #nprogress .peg {
       box-shadow: 0 0 10px #1ABB9C, 0 0 5px #1ABB9C
   }
   #nprogress .spinner-icon {
       border-top-color: #1ABB9C;
       border-left-color: #1ABB9C
   }
   .editor-wrapper {
       min-height: 250px;
       background-color: white;
       border-collapse: separate;
       border: 1px solid #ccc;
       padding: 4px;
       box-sizing: content-box;
       box-shadow: rgba(0, 0, 0, 0.07451) 0px 1px 1px 0px inset;
       border-top-right-radius: 3px;
       border-bottom-right-radius: 3px;
       border-bottom-left-radius: 3px;
       border-top-left-radius: 3px;
       overflow: scroll;
       outline: none
   }
   .voiceBtn {
       width: 20px;
       color: transparent;
       background-color: transparent;
       transform: scale(2, 2);
       -webkit-transform: scale(2, 2);
       -moz-transform: scale(2, 2);
       border: transparent;
       cursor: pointer;
       box-shadow: none;
       -webkit-box-shadow: none
   }
   div[data-role="editor-toolbar"] {
       -webkit-user-select: none;
       -moz-user-select: none;
       -ms-user-select: none;
       user-select: none
   }
   .dropdown-menu a {
       cursor: pointer
   }
   .select2-container--default .select2-selection--single,
   .select2-container--default .select2-selection--multiple {
       background-color: #fff;
       border: 1px solid #ccc;
       border-radius: 0;
       min-height: 38px
   }
   .select2-container--default .select2-selection--single .select2-selection__rendered {
       color: #73879C;
       padding-top: 5px
   }
   .select2-container--default .select2-selection--multiple .select2-selection__rendered {
       padding-top: 3px
   }
   .select2-container--default .select2-selection--single .select2-selection__arrow {
       height: 36px
   }
   .select2-container--default .select2-selection--multiple .select2-selection__choice,
   .select2-container--default .select2-selection--multiple .select2-selection__clear {
       margin-top: 2px;
       border: none;
       border-radius: 0;
       padding: 3px 5px
   }
   .select2-container--default.select2-container--focus .select2-selection--multiple {
       border: 1px solid #ccc
   }
   .switchery {
       width: 32px;
       height: 20px
   }
   .switchery>small {
       width: 20px;
       height: 20px
   }
   fieldset {
       border: none;
       margin: 0;
       padding: 0
   }
   .cropper .img-container,
   .cropper .img-preview {
       background-color: #f7f7f7;
       width: 100%;
       text-align: center
   }
   .cropper .img-container {
       min-height: 200px;
       max-height: 516px;
       margin-bottom: 20px
   }
   @media (min-width: 768px) {
       .cropper .img-container {
           min-height: 516px
       }
   }
   .cropper .img-container>img {
       max-width: 100%
   }
   .cropper .docs-preview {
       margin-right: -15px
   }
   .cropper .img-preview {
       float: left;
       margin-right: 10px;
       margin-bottom: 10px;
       overflow: hidden
   }
   .cropper .img-preview>img {
       max-width: 100%
   }
   .cropper .preview-lg {
       width: 263px;
       height: 148px
   }
   .cropper .preview-md {
       width: 139px;
       height: 78px
   }
   .cropper .preview-sm {
       width: 69px;
       height: 39px
   }
   .cropper .preview-xs {
       width: 35px;
       height: 20px;
       margin-right: 0
   }
   .cropper .docs-data>.input-group {
       margin-bottom: 10px
   }
   .cropper .docs-data>.input-group>label {
       min-width: 80px
   }
   .cropper .docs-data>.input-group>span {
       min-width: 50px
   }
   .cropper .docs-buttons>.btn,
   .cropper .docs-buttons>.btn-group,
   .cropper .docs-buttons>.form-control {
       margin-right: 5px;
       margin-bottom: 10px
   }
   .cropper .docs-toggles>.btn,
   .cropper .docs-toggles>.btn-group,
   .cropper .docs-toggles>.dropdown {
       margin-bottom: 10px
   }
   .cropper .docs-tooltip {
       display: block;
       margin: -6px -12px;
       padding: 6px 12px
   }
   .cropper .docs-tooltip>.icon {
       margin: 0 -3px;
       vertical-align: top
   }
   .cropper .tooltip-inner {
       white-space: normal
   }
   .cropper .btn-upload .tooltip-inner,
   .cropper .btn-toggle .tooltip-inner {
       white-space: nowrap
   }
   .cropper .btn-toggle {
       padding: 6px
   }
   .cropper .btn-toggle>.docs-tooltip {
       margin: -6px;
       padding: 6px
   }
   @media (max-width: 400px) {
       .cropper .btn-group-crop {
           margin-right: -15px !important
       }
       .cropper .btn-group-crop>.btn {
           padding-left: 5px;
           padding-right: 5px
       }
       .cropper .btn-group-crop .docs-tooltip {
           margin-left: -5px;
           margin-right: -5px;
           padding-left: 5px;
           padding-right: 5px
       }
   }
   .cropper .docs-options .dropdown-menu {
       width: 100%
   }
   .cropper .docs-options .dropdown-menu>li {
       padding: 3px 20px
   }
   .cropper .docs-options .dropdown-menu>li:hover {
       background-color: #f7f7f7
   }
   .cropper .docs-options .dropdown-menu>li>label {
       display: block
   }
   .cropper .docs-cropped .modal-body {
       text-align: center
   }
   .cropper .docs-cropped .modal-body>img,
   .cropper .docs-cropped .modal-body>canvas {
       max-width: 100%
   }
   .cropper .docs-diagram .modal-dialog {
       max-width: 352px
   }
   .cropper .docs-cropped canvas {
       max-width: 100%
   }
   .form_wizard .stepContainer {
       display: block;
       position: relative;
       margin: 0;
       padding: 0;
       border: 0 solid #CCC;
       overflow-x: hidden
   }
   .wizard_horizontal ul.wizard_steps {
       display: table;
       list-style: none;
       position: relative;
       width: 100%;
       margin: 0 0 20px
   }
   .wizard_horizontal ul.wizard_steps li {
       display: table-cell;
       text-align: center
   }
   .wizard_horizontal ul.wizard_steps li a,
   .wizard_horizontal ul.wizard_steps li:hover {
       display: block;
       position: relative;
       -moz-opacity: 1;
       filter: alpha(opacity=100);
       opacity: 1;
       color: #666
   }
   .wizard_horizontal ul.wizard_steps li a:before {
       content: "";
       position: absolute;
       height: 4px;
       background: #ccc;
       top: 20px;
       width: 100%;
       z-index: 4;
       left: 0
   }
   .wizard_horizontal ul.wizard_steps li a.disabled .step_no {
       background: #ccc
   }
   .wizard_horizontal ul.wizard_steps li a .step_no {
       width: 40px;
       height: 40px;
       line-height: 40px;
       border-radius: 100px;
       display: block;
       margin: 0 auto 5px;
       font-size: 16px;
       text-align: center;
       position: relative;
       z-index: 5
   }
   .wizard_horizontal ul.wizard_steps li a.selected:before,
   .step_no {
       background: #34495E;
       color: #fff
   }
   .wizard_horizontal ul.wizard_steps li a.done:before,
   .wizard_horizontal ul.wizard_steps li a.done .step_no {
       background: #1ABB9C;
       color: #fff
   }
   .wizard_horizontal ul.wizard_steps li:first-child a:before {
       left: 50%
   }
   .wizard_horizontal ul.wizard_steps li:last-child a:before {
       right: 50%;
       width: 50%;
       left: auto
   }
   .wizard_verticle .stepContainer {
       width: 80%;
       float: left;
       padding: 0 10px
   }
   .actionBar {
       width: 100%;
       border-top: 1px solid #ddd;
       padding: 10px 5px;
       text-align: right;
       margin-top: 10px
   }
   .actionBar .buttonDisabled {
       cursor: not-allowed;
       pointer-events: none;
       opacity: .65;
       filter: alpha(opacity=65);
       box-shadow: none
   }
   .actionBar a {
       margin: 0 3px
   }
   .wizard_verticle .wizard_content {
       width: 80%;
       float: left;
       padding-left: 20px
   }
   .wizard_verticle ul.wizard_steps {
       display: table;
       list-style: none;
       position: relative;
       width: 20%;
       float: left;
       margin: 0 0 20px
   }
   .wizard_verticle ul.wizard_steps li {
       display: list-item;
       text-align: center
   }
   .wizard_verticle ul.wizard_steps li a {
       height: 80px
   }
   .wizard_verticle ul.wizard_steps li a:first-child {
       margin-top: 20px
   }
   .wizard_verticle ul.wizard_steps li a,
   .wizard_verticle ul.wizard_steps li:hover {
       display: block;
       position: relative;
       -moz-opacity: 1;
       filter: alpha(opacity=100);
       opacity: 1;
       color: #666
   }
   .wizard_verticle ul.wizard_steps li a:before {
       content: "";
       position: absolute;
       height: 100%;
       background: #ccc;
       top: 20px;
       width: 4px;
       z-index: 4;
       left: 49%
   }
   .wizard_verticle ul.wizard_steps li a.disabled .step_no {
       background: #ccc
   }
   .wizard_verticle ul.wizard_steps li a .step_no {
       width: 40px;
       height: 40px;
       line-height: 40px;
       border-radius: 100px;
       display: block;
       margin: 0 auto 5px;
       font-size: 16px;
       text-align: center;
       position: relative;
       z-index: 5
   }
   .wizard_verticle ul.wizard_steps li a.selected:before,
   .step_no {
       background: #34495E;
       color: #fff
   }
   .wizard_verticle ul.wizard_steps li a.done:before,
   .wizard_verticle ul.wizard_steps li a.done .step_no {
       background: #1ABB9C;
       color: #fff
   }
   .wizard_verticle ul.wizard_steps li:first-child a:before {
       left: 49%
   }
   .wizard_verticle ul.wizard_steps li:last-child a:before {
       left: 49%;
       left: auto;
       width: 0
   }
   .form_wizard .loader {
       display: none
   }
   .form_wizard .msgBox {
       display: none
   }
   .progress {
       border-radius: 0
   }
   .progress-bar-info {
       background-color: #3498DB
   }
   .progress-bar-success {
       background-color: #26B99A
   }
   .progress_summary .progress {
       margin: 5px 0 12px !important
   }
   .progress_summary .row {
       margin-bottom: 5px
   }
   .progress_summary .row .col-xs-2 {
       padding: 0
   }
   .progress_summary .more_info span {
       text-align: right;
       float: right
   }
   .progress_summary .data span {
       text-align: right;
       float: right
   }
   .progress_summary p {
       margin-bottom: 3px;
       width: 100%
   }
   .progress_title .left {
       float: left;
       text-align: left
   }
   .progress_title .right {
       float: right;
       text-align: right;
       font-weight: 300
   }
   .progress.progress_sm {
       border-radius: 0;
       margin-bottom: 18px;
       height: 10px !important
   }
   .progress.progress_sm .progress-bar {
       height: 10px !important
   }
   .dashboard_graph p {
       margin: 0 0 4px
   }
   ul.verticle_bars {
       width: 100%
   }
   ul.verticle_bars li {
       width: 23%;
       height: 200px;
       margin: 0
   }
   .progress.vertical.progress_wide {
       width: 35px
   }
   .alert-success {
       color: #ffffff;
       background-color: rgba(38, 185, 154, 0.88);
       border-color: rgba(38, 185, 154, 0.88)
   }
   .alert-info {
       color: #E9EDEF;
       background-color: rgba(52, 152, 219, 0.88);
       border-color: rgba(52, 152, 219, 0.88)
   }
   .alert-warning {
       color: #E9EDEF;
       background-color: rgba(243, 156, 18, 0.88);
       border-color: rgba(243, 156, 18, 0.88)
   }
   .alert-danger,
   .alert-error {
       color: #E9EDEF;
       background-color: rgba(231, 76, 60, 0.88);
       border-color: rgba(231, 76, 60, 0.88)
   }
   .ui-pnotify.dark .ui-pnotify-container {
       color: #E9EDEF;
       background-color: rgba(52, 73, 94, 0.88);
       border-color: rgba(52, 73, 94, 0.88)
   }
   .custom-notifications {
       position: fixed;
       margin: 15px;
       right: 0;
       float: right;
       width: 400px;
       z-index: 4000;
       bottom: 0
   }
   ul.notifications {
       float: right;
       display: block;
       margin-bottom: 7px;
       padding: 0;
       width: 100%
   }
   .notifications li {
       float: right;
       margin: 3px;
       width: 36px;
       box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.3)
   }
   .notifications li:last-child {
       margin-left: 0
   }
   .notifications a {
       display: block;
       text-align: center;
       text-decoration: none;
       text-transform: uppercase;
       padding: 9px 8px
   }
   .tabbed_notifications .text {
       padding: 5px 15px;
       height: 140px;
       border-radius: 7px;
       box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.3)
   }
   .tabbed_notifications div p {
       display: inline-block
   }
   .tabbed_notifications h2 {
       font-weight: bold;
       text-transform: uppercase;
       width: 80%;
       float: left;
       height: 20px;
       text-overflow: ellipsis;
       overflow: hidden;
       display: block
   }
   .tabbed_notifications .close {
       padding: 5px;
       color: #E9EDEF;
       float: right;
       opacity: 1
   }
   .fc-state-default {
       background: #f5f5f5;
       color: #73879C
   }
   .fc-state-down,
   .fc-state-active {
       color: #333;
       background: #ccc
   }
   .dropzone {
       min-height: 300px;
       border: 1px solid #e5e5e5
   }
   
   /*
   .x_content {
       direction: rtl;
   }
   */
   
   .main_menu .label {
       line-height: 11px;
       margin-top: 4px;
   }
   @media (max-width: 460px) {
       .dataTables_wrapper .col-sm-6 {
           width: 100%;
           margin-bottom: 5px;
       }
       .dataTables_wrapper .col-sm-6 .dataTables_filter {
           float: none;
       }
   }
   
   
   @media (max-width: 767px) {
      .dataTables_length { float:none; }
   }
   
   
   
   
   /* CSS3 Checkbox */
   /*
   .checkbox-input { display:block;position:relative; }
   .checkbox-input:before { display:block;content:"";position:absolute;top:2px;left:0;height:20px;width:20px;background:red;border-radius:3px; }
   
   
    #input + label:after {
       content: 'click my input';
       color: blue;
     }
   
     #input:focus + label:after {
       content: 'not valid yet';
       color: blue;
     }
   
     #input:valid + label:after {
       content: 'looks good';
       color: red;
     }
   
   /* CSS3 Checkbox - end */
   /*
   
   /*
   .checkbox 																										{ display: block;position:relative;cursor:pointer; }
   .checkbox input 																								{ position:absolute;z-index:-1;opacity:0;left:0;top:0; }
   .checkbox div 																									{ position:absolute;top:2px;left:0;height:20px;width:20px;background:#e6e6e6;border-radius:3px; }
   .checkbox input:checked ~ div 																			{ background: #1ABC9C; }
   .checkbox:hover input:not([disabled]):checked ~ div,
   .checkbox input:checked:focus ~ div 																	{ background: #1ABC9C; }
   .checkbox input:disabled ~ div 																			{ background: #1ABC9C;opacity: 0.6;pointer-events: none; }
   .checkbox div:after 																							{ content: '';position: absolute;display: none; }
   .checkbox input:checked ~ div:after 																	{ display: block; }
   .checkbox-wp div:after 																					{ left: 7px;top: 3px;width: 7px;height: 11px;border: solid #fff;border-width: 0 2px 2px 0;transform: rotate(40deg); }
   .checkbox-wp input:disabled ~ div:after 																{ border-color: #F2F2F2; }
   
   
   .checkbox-radio div 																							{ border-radius: 50%; }
   .checkbox-radio div:after 																					{ left: 7px;top: 7px;height: 6px;width: 6px;border-radius: 50%;background: #fff; }
   .checkbox-radio input:disabled ~ div:after 															{ background: #F2F2F2; }
   
   
   .checkbox, .radio { margin-top:-3px; }
   
   table thead .checkbox { margin-top:-7px;margin-top:-21px; }
   table thead .checkbox.radio { margin-top:-7px;margin-top:-21px; }
   */
               
   .daterangepicker.xdisplay { width:228px; }
   
   .dataTables_wrapper > .row{
     overflow:auto !important; /*prevent datatables overflowing its container*/
   }
   
</style>
