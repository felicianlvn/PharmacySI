<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Tambah Member</title>

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
                       <h2 class="subjudul ms-2 mb-3" >Tambah Member</h2> 
        
                            <div class="container mb-3"> 
                                <div class="card bg-white shadow p-4 mb-4">                

                                    <div class="card-body">
                                        <form action=" {{url('admin/simpanmember')}} " method="POST" enctype="multipart/form-data">
                                            @csrf
    
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            @include('sweetalert::alert')
                    
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Foto Pelanggan') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" >
                    
                                                    @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
                                                <div class="col-md-6">
                                                    <select id="jenis_kelamin" class="form-select form-control" name="jenis_kelamin" aria-label="Default select example">
                                                        <option disabled >Silahkan Pilih Opsi</option>
                                                        <option value="L">Laki-Laki</option>
                                                        <option value="P">Perempuan</option>
                                                      </select>
                    
                                                    @error('jenis_kelamin')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="telp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telepon') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="telp" type="number" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp') }}" required autocomplete="telp" autofocus>
                                                    
                                                    @error('telp')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tmpt_lahir" value="{{ old('tmpt_lahir') }}" required >
                    
                                                    @error('tmpt_lahir')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                    
                                            <div class="row mb-3">
                                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required >
                    
                                                    @error('tgl_lahir')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                    
                                            <div class="row mb-3">
                                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ old('pekerjaan') }}" required >
                    
                                                    @error('pekerjaan')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                          
                    
                    
                                            <div class="form-group row">
                                                <label for="exampleFormControlSelect1" class="col-md-4 col-form-label text-md-right">{{ __('Provinsi') }}</label>
                                                <div class="col-md-6">
                                                <select class="form-control" id="provinsi" name="id_province">
                                                    <option value="">Pilih Provinsi...</option>
                                                    @foreach ($provinces as $provinsi)
                                                    <option value="{{ $provinsi->id }}">{{$provinsi->name}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                        
                                            <div class="form-group row">
                                                <label for="exampleFormControlSelect1" class="col-md-4 col-form-label text-md-right" >Kabupaten</label>
                                                <div class="col-md-6">
                                                <select class="form-control" id="kabupaten" name="id_regencies">
                                                    <option value="">Pilih Kabupaten...</option>
                        
                                                </select>
                                                </div>
                                            </div>
                        
                                            <div class="form-group row">
                                                <label for="exampleFormControlSelect1" class="col-md-4 col-form-label text-md-right">Kecamatan</label>
                                                <div class="col-md-6">
                                                <select class="form-control" id="kecamatan" name="id_districts">
                                                    <option value="">Pilih Kecamatan...</option>
                                                </select>
                                                </div>
                                            </div>
                        
                                            <div class="form-group row">
                                                <label for="exampleFormControlSelect1" class="col-md-4 col-form-label text-md-right" >Kelurahan/Desa</label>
                                                <div class="col-md-6">
                                                <select class="form-control" id="desa" name="id_villages">
                                                    <option value="">Pilih Kelurahan...</option>
                                                </select>
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="title" class="col-md-4 col-form-label text-md-right">Alamat</label>
                                                <div class="col-md-6">
                                                <input type="text" class="form-control" name="alamat" required >
                                              </div>
                                            </div>
                    
                                           
                    
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success">Save</button>
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

</body>

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

</html>