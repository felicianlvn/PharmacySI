@extends('member.layouts.main')
@push('css')
<link rel="stylesheet" href="style.css">
@endpush
@section('content')
         <div id="page-content-wrapper">
            <div class="container-fluid mt-4">
                <p class="subjudul"> Edit Profile <p>
                    <div class="container mb-3"> 
                        <div class="card bg-white shadow p-4 mb-4">                
                            @if(session()->has('message'))
                            <div class="text-green-600 mb4"> {{ session()->get('message') }} </div>
                            @endif

                            <div class="card-body">
                                <form action=" {{ url('/editprofilesimpan')}} " method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('PUT')

                                    <div class="mb-3">
                                      <label for="title" class="form-label">Nama</label>
                                      <input type="text" class="form-control" name="name" value="{{$user->name}}" required >
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Foto</label>
                                        <input type="file" class="form-control mb-2" name="image" value="{{ url('storage/user/' . $user->image) }}" >
                                        <img src=" {{ url('storage/user/' . $user->image) }}" width="300px">

                                      </div>

                                      <div class="mb-3">
                                        <label for="title" class="form-label">Email</label>
                                        <input id="email" type="email" disabled  value=" {{$user->email}} " class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" disabled required autocomplete="email">
                                    </div>

                                      {{-- <div class="mb-3">
                                        <label for="title" class="form-label">Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan" value="{{$user->pekerjaan}}" required >
                                      </div> --}}

                                      <div class="mb-3">
                                        <label for="title" class="form-label">No Telp</label>
                                        <input type="number" class="form-control" name="telp" value="{{$user->telp}}"  required >
                                      </div>

                                      <div class="mb-3">
                                        <label for="title" class="form-label">Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan" value="{{$user->pekerjaan}}"  required >
                                      </div>

                                      <div class="form-grup">
                                        <label for="exampleFormControlSelect1">Provinsi</label>
                                        <select class="form-control" id="provinsi"  name="id_province" >
                                            <option value=" {{$prov->id}} "> {{$prov->name}} </option>

                                            @foreach ($provinces as $provinsi)
                                            <option value="{{ $provinsi->id }}">{{$provinsi->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                
                                    <div class="form-grup">
                                        <label for="exampleFormControlSelect1">Kabupaten</label>
                                        <select class="form-control" id="kabupaten" name="id_regencies" >
                                            <option value=" {{$regencies->id}} "> {{$regencies->name}} </option>
                
                                        </select>
                                    </div>
                
                                    <div class="form-grup">
                                        <label for="exampleFormControlSelect1">Kecamatan</label>
                                        <select class="form-control" id="kecamatan" name="id_districts" >
                                            <option value=" {{$district->id}} "> {{$district->name}} </option>
                
                                        </select>
                                    </div>
                
                                    <div class="form-grup">
                                        <label for="exampleFormControlSelect1">Kelurahan/Desa</label>
                                        <select class="form-control" id="desa" name="id_villages" >
                                            <option value=" {{$village->id}} "> {{$village->name}} </option>
                
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="title" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" value="{{$user->alamat}}" required >
                                      </div>

                                    <button type="submit" class="btn btn-success">Edit</button>
                                  </form>
                            </div>   
   
                             

                </div>
            </div>


    
            
        </div> 
     
</div>
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
@endsection