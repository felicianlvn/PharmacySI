<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard Member</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.css">
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    @stack('css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('sweetalert::alert')

        <!-- Sidebar -->
        @include('member.layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('member.layouts.topbar')
             
             


                <div id="content-wrapper" class="d-flex flex-column">
                    @yield('content')
                  
                
                </div>

                <div>

                </div>






                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                @include('sweetalert::alert')

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

                <script src="{{asset('js/bootstrap.js')}}"></script>
                <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

                <script>
                    $(document).ready( function () {
                $('#myTable').DataTable();
            } );
                </script>

<script>
    $(function(){
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        $(function(){
            $('#provinsi').on('change',function(){
                let id_provinsi = $('#provinsi').val(); 

                $.ajax({
                    type : 'POST',
                    url : "{{ route ('getkabupaten')}}",
                    data : {id_provinsi:id_provinsi},       //route
                    cache : false,

                    success: function(msg){
                        $('#kabupaten').html(msg);
                        $('#kecamatan').html('');
                        $('#desa').html('');

                    },
                    error: function(data){
                        console.log('error:',data)
                    },
                })
            })

            $('#kabupaten').on('change',function(){
                let id_kabupaten = $('#kabupaten').val(); 

                $.ajax({
                    type : 'POST',
                    url : "{{ route ('getkecamatan')}}",
                    data : {id_kabupaten:id_kabupaten},       //route
                    cache : false,

                    success: function(msg){
                        $('#kecamatan').html(msg);
                        $('#desa').html('');
                    },
                    error: function(data){
                        console.log('error:',data)
                    },
                })
            })

            $('#kecamatan').on('change',function(){
                let id_kecamatan = $('#kecamatan').val(); 

                $.ajax({
                    type : 'POST',
                    url : "{{ route ('getdesa')}}",
                    data : {id_kecamatan:id_kecamatan},       //route
                    cache : false,

                    success: function(msg){
                        $('#desa').html(msg);
                      
                    },
                    error: function(data){
                        console.log('error:',data)
                    },
                })
            })
        })
    });
    </script>



            
</body>

</html>

