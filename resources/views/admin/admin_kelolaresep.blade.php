<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kategori Obat</title>

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
                <div id="page-content-wrapper">
                    <div class="container-fluid mt-4">
                        <h2 class="subjudul"> Konfirmasi Admin </h2>

                        <div class="row"> <div class="col">
                            <h3>Resep Masuk</h3> 
                            <br>
                        </div> 
                        </div>
                    
            
                        @if($data->isEmpty())
                        <div class="row"> <div class="col">
                            <h5 class="text-center">Belum ada Resep Yang Masuk</h5>
                            <br>
                            <br>
                        </div> 
                    </div>                                            
                                                @else

                                                @foreach ($data as $kf)                                
                            <div class="container mb-3">
                                <div class="card bg-white shadow p-4 mb-4">
                                    <div class="row">
                                        <div class="col-3">
                                            <h4>Resep Masuk</h4>
                                            <img src="{{ url('storage/resep/' .$kf->image) }}" class="rounded" style="width: 200px">

                                        </div>
                                        
                                        <div class="col-8">
                                            <table class="mt-5" style="border: 1px soli transparent;">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 150px;"><b>Nama</b></td>
                                                        <td>{{$kf->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td style="width: 150px;"><b>Keterangan</b></td>
                                                        <td>{{$kf->keterangan}}</td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 150px;"><b>Alamat</b></td>
                                                        <td>{{$kf->alamat}}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td style="width: 150px;"><b>No Hp</b></td>
                                                            <td>{{$kf->telp}}</td>
                                                        </tr>
                                                        
                                                        {{-- <tr>
                                                            <td style="width: 150px;"><b>Nominal</b></td>
                                                            <td>{{$kf->nominal}}</td>
                                                        </tr>  --}}
                                                        
                                                    </tbody>
                                                    
                                                </table>
                                                <div class="mt-4 me-3">
                                                    <a href=" {{url('resep/allow', $kf->id_resep)}} "> <button type="button" class="btn btn-success"><i class="fa-solid fa-check"></i></button></a>
                                                     <button type="button" class="btn btn-danger delete" data-id=" {{$kf->id_resep}} " ><i class="fa-solid fa-ban"></i> </button> 
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif


                                <div class="row"> <div class="col">
                                    <h3>Resep Diizinkan</h3> 
                                    <br>
                                </div> 
                        </div>
                                @if($data2->isEmpty())
                                 <div class="col">
                                    <h5 class="text-center">Belum ada Resep Yang Diizinkan</h5>
                                    <br>
                                </div> 
                                                                  
                                                        @else
        
                                                        @foreach ($data2 as $kf)    
                                
                            <div class="container mb-3">
                                <div class="card bg-white shadow p-4 mb-4">
                                    <div class="row">
                                        <div class="col-3">
                                            <h4>Resep Yang Diizinkan</h4>
                                            <img src="{{ url('storage/resep/' .$kf->image) }}" class="rounded" style="width: 200px">

                                        </div>
                                        
                                        <div class="col-8">
                                            <table class="mt-5" style="border: 1px soli transparent;">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 150px;"><b>Nama</b></td>
                                                        <td>{{$kf->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td style="width: 150px;"><b>Keterangan</b></td>
                                                        <td>{{$kf->keterangan}}</td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 150px;"><b>Alamat</b></td>
                                                        <td>{{$kf->alamat}}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td style="width: 150px;"><b>No Hp</b></td>
                                                            <td>{{$kf->telp}}</td>
                                                        </tr>
                                                        
                                                        {{-- <tr>
                                                            <td style="width: 150px;"><b>Nominal</b></td>
                                                            <td>{{$kf->nominal}}</td>
                                                        </tr>  --}}
                                                        
                                                    </tbody>
                                                    
                                                </table>
                                                <div class="mt-4 me-3">

                                                     {{-- <button type="button" class="btn btn-danger delete" data-id=" {{$kf->id_resep}} " ><i class="fa-solid fa-ban"></i> </button>  --}}
                                                     <form action=" {{url('admin/harga',$kf->id_resep)}} " method="get">
                
                                                        <div class="mb-3">
                                                          <label for="title" class="form-label">Tuliskan Harga dan Nama Obat</label>
                                                          <textarea type="text" class="form-control" name="catatan_admin" required > </textarea>
                                                        </div>
            
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                      </form>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif


                                <div class="row"> <div class="col">
                                    <h3>Resep Acc</h3> 
                                    <br>
                                </div> 
                            </div>    

                                @if($data3->isEmpty())
                                <div class="row"> <div class="col">
                                    <h5 class="text-center" >Belum ada Resep Yang Masuk</h5>
                                    <br>
                                </div> 
                            </div>                                            
                                                        @else
        
                                                        @foreach ($data3 as $kf)                                
                                    <div class="container mb-3">
                                        <div class="card bg-white shadow p-4 mb-4">
                                            <div class="row">
                                                <div class="col-3">
                                                    <h4>Resep Acc</h4>
                                                    <img src="{{ url('storage/resep/' .$kf->image) }}" class="rounded" style="width: 200px">
        
                                                </div>
                                                
                                                <div class="col-8">
                                                    <table class="mt-5" style="border: 1px soli transparent;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 150px;"><b>Nama</b></td>
                                                                <td>{{$kf->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                
                                                                <td style="width: 150px;"><b>Keterangan</b></td>
                                                                <td>{{$kf->keterangan}}</td>
                                                            </tr>
        
                                                            <tr>
                                                                <td style="width: 150px;"><b>Alamat</b></td>
                                                                <td>{{$kf->alamat}}</td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td style="width: 150px;"><b>No Hp</b></td>
                                                                    <td>{{$kf->telp}}</td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td style="width: 150px;"><b>Catatan Admin</b></td>
                                                                    <td>{{$kf->catatan_admin}}</td>
                                                                </tr> 
                                                                
                                                            </tbody>
                                                            
                                                        </table>
                                                        {{-- <div class="mt-4 me-3">
                                                            <a href=" {{url('resep/allow', $kf->id_resep)}} "> <button type="button" class="btn btn-success"><i class="fa-solid fa-check"></i></button></a>
                                                             <button type="button" class="btn btn-danger delete" data-id=" {{$kf->id_resep}} " ><i class="fa-solid fa-ban"></i> </button> 
                                                        </div> --}}
                                                    </div>                                        
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif

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

<script>
    $('.delete').click( function(){
        var id = $(this).attr('data-id');
        swal({
                title: "Apakah Anda Yakin?",
                text: "Kamu Akan Menghapus Data Ini! ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location = "adminresep/block/"+id+""
                    swal("Data Berhasil Dihapus!", {
                    icon: "success",
                    });
                } 
                // else {
                //     swal("Your imaginary file is safe!");
                // }
                });
    });
                
    </script>