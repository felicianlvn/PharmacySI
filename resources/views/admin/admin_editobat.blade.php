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
                <div id="page-content-wrapper">
                    <div class="container-fluid mt-4">
                        <h2 class="subjudul ms-2 mb-3" > Edit Obat </h2>
        
                            <div class="container mb-3">
                                <div class="card bg-white shadow p-4 mb-4">

                                        {{-- FORM --}}

                                    <form method="post" action=" {{url('admin/simpaneditobat', $editobat->id_obat)}} " enctype="multipart/form-data">
                                            @csrf
                    
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama Obat') }}</label>
                                                
                                                <div class="col-md-6">
                                                    <input id="name"  value="{{$editobat->nama_obat}}" type="text" class="form-control @error('nama_obat') is-invalid @enderror" name="nama_obat" value="{{ old('nama_obat') }}" required autocomplete="nama_obat" autofocus>
                                                    
                                                    @error('nama_obat')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Foto Obat') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="image" type="file" class="form-control mb-3 
                                                    @error('image') is-invalid @enderror" 
                                                    name="image" value="{{$editobat->image}}" >
                                                    <img src=" {{ url('storage/obat/' . $editobat->image) }}" width="300px">

                                                    {{-- @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror --}}
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Penyimpanan') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="name" value="{{$editobat->penyimpanan}}" type="text" class="form-control @error('name') is-invalid @enderror" name="penyimpanan" value="{{ old('penyimpanan') }}" required autocomplete="penyimpanan" autofocus>
                    
                                                    @error('penyimpanan')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Kategori') }}</label>
                                                <div class="col-md-6">
                                                    <select id="unit" class="form-select form-control" name="id_kategori" aria-label="Default select example">
                                                        <option value disabled >Silahkan Pilih Opsi</option>
                                                        <option value = "{{$editobat->id_kategori}}" > {{$editobat->nama_kategori}} </option>

                                                        @foreach ($kat as $k)
                                                            
                                                        <option value=" {{$k->id_kategori}} "> {{$k->nama_kategori}} </option>

                                                        @endforeach
                                                      </select>
                    
                                                    @error('unit')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                    
                                            <div class="row mb-3">
                                                <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Jenis') }}</label>
                                                <div class="col-md-6">
                                                    <select id="unit" class="form-select form-control" name="id_jenis" aria-label="Default select example">
                                                        <option disabled value >Silahkan Pilih Opsi</option>
                                                        <option value = "{{$editobat->id_jenis}}" > {{$editobat->jenis}} </option>

                                                        @foreach ($jns as $j)
                                                            
                                                        <option value=" {{$j->id_jenis}} "> {{$j->jenis}} </option>

                                                        @endforeach
                                                      </select>
                    
                                                    @error('id_jenis')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                    
                                            <div class="row mb-3">
                                                <label for="number" class="col-md-4 col-form-label text-md-end">{{ __('Banyak Stok') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="stok" value="{{$editobat->stok}}" type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok') }}" required >
                    
                                                    @error('stok')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                    
                                            <div class="row mb-3">
                                                <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Kedaluwarsa') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="tanggal_lahir" value="{{$editobat->tgl_expired}}" type="date" class="form-control @error('tgl_expired') is-invalid @enderror" name="tgl_expired" value="{{ old('tgl_expired') }}" required >
                    
                                                    @error('tgl_expired')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                    
                                            <div class="row mb-3">
                                                <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Deskripsi') }}</label>
                    
                                                <div class="col-md-6">
                                                    {{-- <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required > --}}
                                                    <textarea type="text"  class="form-control" name="deskripsi" required> {{$editobat->deskripsi}} </textarea>
                                                    @error('deskripsi')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                    
                                            
                    
                    
                                            <div class="row mb-3">
                                                <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Harga Beli (Rp)') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="kota_asal" value="{{$editobat->harga_beli}}" type="number" class="form-control @error('harga_beli') is-invalid @enderror" name="harga_beli" value="{{ old('harga_beli') }}" required >
                    
                                                    @error('harga_beli')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                    
                                            <div class="row mb-3">
                                                <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Harga Jual (Rp)') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="nama_ayah" value="{{$editobat->harga_jual}}" type="number" class="form-control @error('harga_jual') is-invalid @enderror" name="harga_jual" value="{{ old('harga_jual') }}" required >
                    
                                                    @error('harga_jual')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="text" class="col-md-4 col-form-label text-md-end">{{ __('Supplier') }}</label>
                    
                                                <div class="col-md-6">
                                                    <select id="unit" class="form-select form-control" name="id_suplier" aria-label="Default select example">
                                                        <option disabled value >Silahkan Pilih Opsi</option>
                                                        <option value = "{{$editobat->id_suplier}}" > {{$editobat->nama_sup}} </option>


                                                        @foreach ($sup as $s)
                                                            
                                                        <option value=" {{$s->id_suplier}} "> {{$s->nama_sup}} </option>

                                                        @endforeach
                                                       
                                                      </select>                    
                                                    @error('pekerjaan_ayah')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            
                    
                                            <div class="row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Edit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>


                                    
                        </div>
                    </div>
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