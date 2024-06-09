<!doctype html>
<html lang="en">

<head>
    <title>Dependant Dropdown</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-md-6 m-auto">
            <div class="card p-4 mt-4">
                <form>
                    <div class="form-grup">
                        <label for="exampleFormControlSelect1">Provinsi</label>
                        <select class="form-control" id="provinsi">
                            <option value="">Pilih Provinsi...</option>
                            @foreach ($provinces as $provinsi)
                            <option value="{{ $provinsi->id }}">{{$provinsi->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-grup">
                        <label for="exampleFormControlSelect1">Kabupaten</label>
                        <select class="form-control" id="kabupaten">
                            <option value="">Pilih Kabupaten...</option>

                        </select>
                    </div>

                    <div class="form-grup">
                        <label for="exampleFormControlSelect1">Kecamatan</label>
                        <select class="form-control" id="kecamatan">
                            <option value="">Pilih Kecamatan...</option>

                        </select>
                    </div>

                    <div class="form-grup">
                        <label for="exampleFormControlSelect1">Kelurahan/Desa</label>
                        <select class="form-control" id="desa">
                            <option value="">Pilih Desa...</option>

                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

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