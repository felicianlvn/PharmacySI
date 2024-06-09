@extends('member.layouts.main')
@push('css')
<link rel="stylesheet" href="style.css">
@endpush
@section('content')
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
                                                <td><b>Alamat</b></td>
                                                <td>{{$user->alamat}}</td>
                                            </tr>

                                            <tr>
                                                <td><b>No HP</b></td>
                                                <td>{{$user->telp}}</td>
                                            </tr>

                                            <tr>
                                                <td><b>Pekerjaan</b></td>
                                                <td>{{$user->pekerjaan}}</td>
                                            </tr>
                                            
                                          
                                           
                                        </tbody>
                                    </table>
                                </div>
                    </div>

    </div>

    </div>


    
            
        </div> 
     
</div> 
@endsection