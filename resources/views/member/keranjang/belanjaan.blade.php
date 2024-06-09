@extends('member.layouts.main')
@push('css')
<link rel="stylesheet" href="style.css">
@endpush
@section('content')

<div class="container bg-white shadow">
    <div class="container mt-3 mb-3"> 
        <div class="card bg-white shadow p-4 mb-4">   
    <div class="row mx-5 my-5">
        <div class="col-5 fs-3">
            <p>Barang di Keranjaan Kamu</p>
        </div>

    </div>
    <table class="table ms-5 col-10">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($keranjang as $k) 
            <tr>
                <th scope="row"> {{$loop->iteration}} </th>
                <td> {{$k->nama_obat}} </td>
                <td> {{$k->quantity}} </td>
                <td> Rp. {{$k->harga_jual}} </td>
                <td>Rp. {{$k->total}} </td>
                <td> <a href="{{ url('member/hapuskeranjang', $k->id_cart) }}"> <button type="button" class="btn btn-danger delete"  > <i class="fa-solid fa-trash-can"></i></button></a>
                </td>
            </tr>
          
            @endforeach
            <tr>
                <td colspan="4" class="text-center">Grand Total</td>
                <td >Rp. {{$total}} </td>
            </tr>
         
        </tbody>
    </table>
    <div class="d-flex justify-content-end mb-5 me-6">
        <form action=" {{   url ('checkout')     }} " method="get" >
        <button type="submit" class="btn btn-primary">Cekout</button>
    </form>
    </div>
</div>

</div>
</div>

@endsection