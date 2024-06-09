<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Member</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid mt-4">
                <p>
                <h2 class="subjudul ms-2 mb-3">Data Penjualan</h2>
                </p>

                <div class="container mb-3">
                    <div class="card bg-white shadow p-4 mb-4">


                        <form action="/cari" method="get">
                            @csrf
                                
                        <div class="d-flex justify-content-around">
                            <div class="div">
                                <label for="tgl_awal" class="form-label">Tanggal Awal</label>
                                <input type="date" id="tgl_awal" class="form-control" name="tgl_awal">
                            </div>
                            <div class="div">
                                <label for="tgl_akhir" class="form-label">Tanggal Akhir</label>
                                <input type="date" id="tgl_akhir" class="form-control" name="tgl_akhir">
                            </div><div class="d-flex justify-content-center align-items-center">
                                
                                <button class="btn btn-primary  " type="submit">Cari</button>
                            </div>
                        </div>
                        </form>





                    </div>
                </div>
            </div>
        </div>

    </div>




    </div>

    </div>
    </div>
    </div>
    </div>


    </div>
    <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
    <!-- Bootstrap core JavaScript-->
    <script src=" {{ asset('vendor/jquery/jquery.min.js') }} "></script>
    <script src=" {{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

    <!-- Core plugin JavaScript-->
    <script src=" {{ asset('vendor/jquery-easing/jquery.easing.min.js') }} "></script>

    <!-- Custom scripts for all pages-->
    <script src=" {{ asset('js/sb-admin-2.min.js') }} "></script>

    <!-- Page level plugins -->
    <script src=" {{ asset('vendor/chart.js/Chart.min.js') }} "></script>

    <!-- Page level custom scripts -->
    <script src=" {{ asset('js/demo/chart-area-demo.js') }} "></script>
    <script src=" {{ asset('js/demo/chart-pie-demo.js') }} "></script>

    <script src="https://kit.fontawesome.com/866812587f.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




</body>

</html>
