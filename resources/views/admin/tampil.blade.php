<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

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
                <h2 class="subjudul ms-2 mb-3">Daftar Pencarian Transaksi</h2>
                </p>

                <div class="container mb-3">
                    <div class="card bg-white shadow p-4 mb-4">







                    <?php
                                $total = 0;
                                ?>


                        @foreach ($purchase as $item)
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_pembeli">Nama
                                    Pembeli</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="nama_pembeli" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="1" name="nama_pembeli"
                                        required="required" type="text" readonly value="{{ $item->nama_pembeli }}">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_beli">Tanggal
                                    Transaksi</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class='input-group date' id='myDatepicker2'>
                                        <input type="text" name="tgl_beli" id="tgl_beli" class="form-control"
                                            readonly value="{{ $item->tgl_beli }}" placeholder="{{ $item->tgl_beli }}">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <table id="prod" class="table table-bordered my-5">
                                <thead>
                                    <tr>
                                        <th style="text-align: center">Obat yang dijual</th>
                                        <th style="text-align: center">Banyak</th>

                                        <th style="text-align: center">Subtotal</th>


                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <td style="text-align:right; vertical-align: middle" colspan="2">
                                            <b>Grandtotal</b>
                                        </td>
                                        <td>
                                            <input id="grandtotal" name="grandtotal" type="text"
                                                class="form-control grandtotal" readonly
                                                value="{{ $item->grandtotal }}">
                                                <?php
                                                $total += $item->grandtotal;
                                                
                                                ?>
                                        </td>
                                    </tr>
                                </tfoot>
                                <?php
                                $jual = 0;
                                ?>
                                <tbody id="tbody">
                                    @foreach ($item->detail as $i)
                                    <?php
                                    
                                    $jual += $i->harga_jual * $i->banyak;
                                    
                                    ?>
                                        <tr role="row" class="1" id="trow">

                                            <td><input type="text" id="banyak1" name="banyak[]"
                                                    class="form-control banyak" required="required"
                                                    value="{{ $i->nama_obat }}" readonly>
                                            </td>

                                            <td><input type="number" id="banyak1" name="banyak[]"
                                                    class="form-control banyak" required="required"
                                                    value="{{ $i->banyak }}" readonly>
                                            </td>
                                            <td><input id="subtotal1" name="subtotal[]" class="form-control subtotal"
                                                    readonly="" value="{{ $i->subtotal }}" readonly></td>

                                        </tr>
                                    @endforeach

                            </table>
                        @endforeach

                        <br>
                        <div class="d-flex justify-content-between">
                         <p>total penjualan Rp.{{ $total }},00</p>
                         <p>Total Laba : Rp.{{ $total - $jual }}</p>
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
