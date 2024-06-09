<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Daftar Penjualan</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<style>
    @media print {
  body * {
    visibility: hidden;
  }
  #prod, #prod * {
    visibility: visible;
  }
  #prod {
    justify-content: center;
    align-items: center;
    margin-right: 500rem !important;
    position: absolute;
    left: 0;
    top: 0;
  }
}
</style>

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
                <h2 class="subjudul ms-2 mb-3">Tambah Penjualan</h2>
                </p>

                <div class="container mb-3">
                    <div class="card bg-white shadow p-4 mb-4">
                        <div class=" alert alert-danger d-none   justify-content-between  " role="alert" id="alert">
                            Stok Kelebihan
                            <button class="btn btn-danger btn-sm" onclick="tutup()" type="button"><i class="bi bi-x"></i></button>

                        </div>
                        <div class=" alert alert-danger d-none   justify-content-between  " role="alert" id="uang">
                            Maaf Uang Pembayaran Kurang
                            <button class="btn btn-danger btn-sm" onclick="tutupuang()" type="button"><i class="bi bi-x"></i></button>

                        </div>

                        <div class="x_content">


                            <form action="/coba" method="post" class="form-horizontal form-label-left" novalidate>
                                @csrf
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_pembeli">Nama
                                        Pembeli</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="nama_pembeli" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="nama_pembeli" required="required" type="text">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_beli">Tanggal
                                        Transaksi</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class='input-group date' id='myDatepicker2'>
                                            <input type="date" name="tgl_beli" id="tgl_beli" class="form-control" required="required">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <table id="prod" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">Obat yang dijual</th>
                                            <th style="text-align: center">Stok</th>
                                            <th style="text-align: center">Unit obat</th>
                                            <th style="text-align: center">Harga satuan</th>
                                            <th style="text-align: center">Banyak</th>

                                            <th style="text-align: center">Subtotal</th>
                                            <th style="text-align: center">Aksi</th>

                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <td style="text-align:right; vertical-align: middle" colspan="5">
                                                <b>Grandtotal</b>
                                            </td>
                                            <td>
                                                <input id="grandtotal" name="grandtotal" type="text" class="form-control grandtotal" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:right; vertical-align: middle" colspan="5">
                                                <b>Bayar</b>
                                            </td>
                                            <td>
                                                <input id="bayar" name="bayar" type="text" class="form-control grandtotal" onchange="kembalian()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:right; vertical-align: middle" colspan="5">
                                                <b>Kembali</b>
                                            </td>
                                            <td>
                                                <input id="kembali" name="kembali" type="text" class="form-control grandtotal" readonly>
                                            </td>
                                        </tr>
                                    </tfoot>

                                    <tbody id="tbody">
                                        <tr role="row" class="1" id="trow">
                                            <td>
                                                <select required="required" style="width:100%;" class="form-control nama_obat" id="nama_obat1" name="nama_obat[]" data-stok="#stok1" data-unit="#unit1" data-harga_jual="#harga_jual1" onchange="coba()">

                                                    <option disabled selected value> </option>
                                                    @foreach ($obat as $item)
                                                    <option value="{{ $item->id_obat }}">{{ $item->nama_obat }}
                                                    </option>
                                                    @endforeach

                                                    {{-- @foreach ($obat as $o)
                                                  
                                              
                                              <option value=" {{$o->id_obat}} "> {{$o->nama_obat}} </option>
                                                    @endforeach --}}
                                                </select>
                                            </td>
                                            <td>
                                                <input id="stok1" name="stok[]" class="form-control stok" readonly="">
                                            </td>
                                            <td><input id="unit1" name="unit[]" class="form-control" readonly=""></td>
                                            <td><input id="harga_jual1" name="harga_jual[]" class="form-control harga_jual" readonly="" onchange="hitung()">
                                            </td>
                                            <td><input type="number" id="banyak1" name="banyak[]" class="form-control banyak" required="required" onchange="hitung()">
                                            </td>
                                            <td><input id="subtotal1" name="subtotal[]" class="form-control subtotal" readonly="" onchange="hitungseluruh()"></td>
                                            <td><button id="1" class="btn btn-danger btn-sm hapus" type="button" onclick="hapus(this)">
                                                    <span class="fa fa-trash"></span> Hapus</button>
                                            </td>
                                        </tr>

                                </table>


                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href=""><button type="button" class="btn btn-danger">Batal</button></a>
                                        <button id='addRow' class="btn btn-info" type="button" onclick="tambah()"><span class="fa fa-plus"></span> Tambah Produk</button>
                                        <button id="send" type="submit" class="btn btn-success">Simpan</button>
                                        <button onclick="printDiv('prod')" class="btnprn btn">Print Preview</button>

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

    <!-- Bootstrap core JavaScript-->
    <script src=" {{ asset('vendor/jquery/jquery.min.js') }} "></script>
    <script src=" {{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

    <!-- Core plugin JavaScript-->
    {{-- <script src=" {{asset('vendor/jquery-easing/jquery.easing.min.js')}} "></script> --}}

    <!-- Custom scripts for all pages-->
    <script src=" {{ asset('js/sb-admin-2.min.js') }} "></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" />
    <!-- Page level plugins -->
    {{-- <script src=" {{asset('vendor/chart.js/Chart.min.js')}} "></script> --}}

    <!-- Page level custom scripts -->
    {{-- <script src=" {{asset('js/demo/chart-area-demo.js')}} "></script>
    <script src=" {{asset('js/demo/chart-pie-demo.js')}} "></script> --}}

    {{-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/866812587f.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script type="text/javascript">
        setInterval(function() {
            hitung()
            coba()
            hitungseluruh()
            kembalian()
        }, 1000)


        function kembalian() {
            let a = document.getElementById("bayar").value
            let uang = parseInt(a)
            let total = parseInt(document.getElementById("grandtotal").value)
            let kembali = uang - total
            if (kembali < 0) {
                var element = document.getElementById("uang");
                element.classList.remove("d-none");
                element.classList.add("d-flex");
            } else {

                document.getElementById("kembali").value = kembali
                document.getElementById("kembali").placeholder = kembali
            }


        }


        function printDiv(divName) {
      
            window.print();

        }
        let n = document.querySelectorAll("#trow")
        setInterval(console.log(n[2]), 1000)

        function hitung() {
            let a = document.querySelectorAll("#trow")
            setInterval(a.length, 1000);
            let panjang = a.length
            for (let i = 1; i <= panjang; i++) {
                let id = "banyak" + i
                let jual = "harga_jual" + i
                let total = "subtotal" + i
                let stk = "stok" + i
                let banyak = parseInt(document.getElementById(id).value)
                let satuan = document.getElementById(jual).value
                let stok = parseInt(document.getElementById(stk).value)
                if (banyak > stok) {
                    document.getElementById(id).value = " "
                    document.getElementById(id).placeholder = " "
                    var element = document.getElementById("alert");
                    element.classList.remove("d-none");
                    element.classList.add("d-flex");
                } else {

                    let hasil = document.getElementById(id).value * satuan
                    document.getElementById(total).value = hasil
                }
            }

        }

        function hapus(e) {
            e.parentNode.parentNode.remove();
        }

        function hitungseluruh() {
            let a = document.querySelectorAll("#trow")
            setInterval(a.length, 1000);
            let seluruh = 0;
            let panjang = a.length
            for (let i = 1; i <= panjang; i++) {
                let total = "subtotal" + i

                let banyak = parseInt(document.getElementById(total).value)

                seluruh = seluruh + banyak
                document.getElementById("grandtotal").value = seluruh

            }
        }

        function tutup() {
            var element = document.getElementById("alert");
            element.classList.remove("d-flex");
            element.classList.add("d-none");
        }

        function tutupuang() {
            var element = document.getElementById("uang");
            element.classList.remove("d-flex");
            element.classList.add("d-none");
        }

        function coba() {


            let a = document.querySelectorAll("#trow")

            setInterval(a.length, 1000);
            let panjang = a.length
            console.log(panjang)
            for (let i = 1; i <= panjang; i++) {
                console.log(i)
                let id = "#nama_obat" + i
                let stok = "#stok" + i
                let harga_jual = '#harga_jual' + i
                let unit = '#unit' + i
                $(id).change(function() {
                    var id = $(this).val();
                    console.log(id)
                    $.ajax({
                        type: 'get',
                        dataType: 'json',
                        url: "{{ url('/detail-obat-') }}" + id,
                        success: function(data) {

                            document.querySelector(stok).placeholder = data.data.stok
                            document.querySelector(stok).value = data.data.stok
                            document.querySelector(harga_jual).placeholder = data.data.harga_jual
                            document.querySelector(unit).placeholder = data.data.jenis
                            document.querySelector(harga_jual).value = data.data.harga_jual

                        }
                    });
                });

            }

        }

        function tambah() {

            let a = document.querySelectorAll("#trow")

            setInterval(a.length, 1000);
            let panjang = a.length + 1

            // let panjang = a.lenght
            var b = document.getElementById("trow");
            var baru = b.cloneNode(true)

            baru.querySelector("#harga_jual1").id = 'harga_jual' + panjang

            baru.querySelector("#nama_obat1").id = 'nama_obat' + panjang

            baru.querySelector("#stok1").id = 'stok' + panjang
            baru.querySelector("#subtotal1").id = 'subtotal' + panjang
            baru.querySelector("#unit1").id = 'unit' + panjang
            baru.querySelector("#banyak1").id = 'banyak' + panjang
            baru.querySelector(".hapus").id = panjang
            baru.className = panjang



            let bodya = document.getElementById("tbody");
            bodya.appendChild(baru)


            //   var childNodes = toDom(nama);
            // console.log(nama.length)





        }
    </script>


</body>

</html>