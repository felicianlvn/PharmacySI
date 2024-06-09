<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Member</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
                        <p class="subjudul"> Profile <p>
        
                            <div class="container mb-3">
                                <div class="card bg-white shadow p-4 mb-4">
                                    <div class="row">
                                        <div class="col-3">
                                            {{-- <img src="img/IMG-20200827-WA0001.jpg" class="rounded" style="width: 200px;" alt=""> --}}
                                            <img src="{{ url('storage/user/' . $user->image) }}" class="rounded" style="width: 200px">                               </div>
                                        <div class="col-8">
                                            <h2 style="font-weight: 800">{{$user->name}}</h2>
                                            <table style="border: 1px soli transparent;">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 200px;"><b>Id Pelanggan</b></td>
                                                        <td> {{$user->user_id}} </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Email</b></td>
                                                        <td> {{$user->email}} </td>
                                                    </tr>

                                                    <tr>
                                                        <td><b>Jenis Kelamin</b></td>
                                                        <td>
                                                            @if($user->jenis_kelamin == 'L')
                                                            Laki-laki
                                                            @elseif($user->jenis_kelamin == 'P')
                                                            Perempuan
                                                            @endif
                                                        </td>
                                                    </tr>

                                                     <tr>
                                                        <td><b>Hak Akses</b></td>
                                                        <td>
                                                            @if($user->hak_akses == 1)
                                                            Admin 
                                                            @elseif($user->hak_akses == 2)
                                                           Member
                                                            @endif
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Tempat, Tanggal Lahir</b></td>
                                                        <td>{{$user->tmpt_lahir}}, {{ date('d-m-Y' , strtotime($user->tgl_lahir)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Provinsi</b></td>
                                                        <td>{{$prov->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Kota/Kabupaten</b></td>
                                                        <td>{{$regencies->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Kecamatan</b></td>
                                                        <td>{{$district->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Desa/Kelurahan</b></td>
                                                        <td>{{$village->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>No</b></td>
                                                        <td>{{$user->telp}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Alamat</b></td>
                                                        <td>{{$user->alamat}}</td>
                                                    </tr>
                                                    
                                                   
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
    <link rel="stylesheet" href="{{asset('css/sb-admin-2.min.css')}}" >
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>





</body>

</html>