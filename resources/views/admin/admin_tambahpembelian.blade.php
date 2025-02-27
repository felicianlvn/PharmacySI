<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Penjualan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
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
                <div id="page-content-wrapper">
                    <div class="container-fluid mt-4">
                       <p> <h2 class="subjudul ms-2 mb-3" >Tambah Penjualan</h2></p>
        
                            <div class="container mb-3"> 
                                <div class="card bg-white shadow p-4 mb-4">




                    
                   

                   
                        
                    

                                    <div class="x_content">
        

                                        <form action="" method="post" class="form-horizontal form-label-left" novalidate>

                                            <div class="item form-group">
                                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_pemasok">Nama Pemasok</label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="nama_pemasok" id="nama_pemasok" class="select2_single form-control nama_pemasok" tabindex="-1" required="required">
                                                      <option value= "oke"</option>
                                                  
                                                </select>
                                              </div>
                                            </div>
                                  
                                            <div class="item form-group">
                                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_beli">Tanggal Transaksi</label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class='input-group date' id='myDatepicker2'>
                                                    <input type="date" name="tgl_beli" id="tgl_beli" class="form-control" required="required">
                                                    <span class="input-group-addon">
                                                       <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                              </div>
                                            </div>
                                  
                                  
                                  
                                            <table id="purchase" class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th style="text-align: center">Obat yang dibeli</th>
                                                <th style="text-align: center">Stok</th>
                                                <th style="text-align: center">Unit</th>
                                                <th style="text-align: center">Harga</th>
                                                <th style="text-align: center">Banyak</th>
                                                
                                                <th style="text-align: center">Subtotal</th>
                                                <th style="text-align: center">Aksi</th>
                                                
                                              </tr>
                                            </thead>
                                            
                                          <tfoot>
                                            <tr>
                                            <td style="text-align:right; vertical-align: middle" colspan="5"><b>Grandtotal</b></td>
                                            <td>
                                              <input id="grandtotal" name="grandtotal" type="text" class="form-control grandtotal" readonly>
                                            </td>
                                          </tr>
                                          </tfoot>
                                          </table>
                                            
                                  
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                              <div class="col-md-6 col-md-offset-3">
                                                <button id='addpurchase' class="btn btn-info" type="button"><span class="fa fa-plus"></span> Tambah Produk</button>
                                                <button id="send" type="submit" class="btn btn-success">Simpan</button>
                                                
                                              </div>
                                            </div>
                                          </form>
                                       </div>
                                      
                                  
                                      <br>
           


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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




</body>

</html>

