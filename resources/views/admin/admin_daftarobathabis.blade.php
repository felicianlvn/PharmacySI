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
                       <p> <h2 class="subjudul ms-2 mb-3" >Daftar Obat Habis</h2> 
                         </p>
        
                            <div class="container mb-3"> 
                                <div class="card bg-white shadow p-4 mb-4">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            
                                              
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Obat</th>
                                            <th  scope="col">Penyimpanan</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Kedaluwarsa</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Unit</th>
                                            <th scope="col">Nama Supplier</th>           
                                          </tr>

                                        </thead>
                                        <tbody>
                                            
                                            @if($obat->isEmpty())
                                            <td align="center" colspan="9">No data available in table</td>

                                            

                                                @else

                                            @foreach ($obat as $ob)     
                                            
                                          <tr>
                                            <th scope="row"> {{$loop->iteration}} </th>
                                            <td> {{$ob->nama_obat}} </td>
                                            <td> {{$ob->penyimpanan}} </td>
                                            <td> {{$ob->nama_kategori}} </td>
                                            <td> {{$ob->stok}} </td>
                                            <td> {{$ob->tgl_expired}} </td>
                                            <td> {{$ob->harga_jual}} </td>
                                            <td> {{$ob->jenis}} </td>
                                            <td> {{$ob->nama_sup}} </td>
                                          </tr>
                                          @endforeach
                                          @endif
                                        </tbody>
                                      </table>
                                      
                                      <br>
                                      <br>
                                      <h4 class="text-center" >Daftar Obat Hampir Habis Stok Dibawah 6</h4>
                                      <table class="table">
                                        <thead>
                                          <tr>
                                            
                                              
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Obat</th>
                                            <th  scope="col">Penyimpanan</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Kedaluwarsa</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Unit</th>
                                            <th scope="col">Nama Supplier</th>           
                                          </tr>

                                        </thead>
                                        <tbody>
                                            
                                            @if($obathampirhabis->isEmpty())
                                            <td align="center" colspan="9">No data available in table</td>

                                            

                                                @else

                                            @foreach ($obathampirhabis as $o)     
                                            
                                          <tr>
                                            <th scope="row"> {{$loop->iteration}} </th>
                                            <td> {{$o->nama_obat}} </td>
                                            <td> {{$o->penyimpanan}} </td>
                                            <td> {{$o->nama_kategori}} </td>
                                            <td> {{$o->stok}} </td>
                                            <td> {{$o->tgl_expired}} </td>
                                            <td> {{$o->harga_jual}} </td>
                                            <td> {{$o->jenis}} </td>
                                            <td> {{$o->nama_sup}} </td>
                                          </tr>
                                          @endforeach
                                          @endif
                                        </tbody>
                                      </table>
           


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