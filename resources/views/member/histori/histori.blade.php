@extends('member.layouts.main')
@push('css')
<link rel="stylesheet" href="style.css">
@endpush
@section('content')
<div class="container bg-white shadow">
    <div class="row mx-5 my-5">
        <div class="col-5">
            <p class="fs-3">Kategori obat</p>
            <p>Daftar obat Kategori Obat Bebas</p>
        </div>

    </div>
    <div class="container">
        <div class="d-flex justify-content-center col-10 ms-5">

            <div class="input-group mb-3  ">
                <input type="text" class="form-control rounded" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
            </div>

        </div>
    </div>
    <table class="table col-10 ms-5">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Aksi</th>
                <th scope="col">Nomor Referensi</th>
                <th scope="col">Tanggal Pembelian</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <button type="submit" class="btn btn-primary rounded-circle"><i class="bi bi-plus-circle"></i></button>
                    <button type="submit" class="btn btn-warning rounded-circle"><i class="bi bi-printer-fill"></i></button>
                    <button type="submit" class="btn btn-danger rounded-circle"><i class="bi bi-trash"></i></button>
                </td>
                <td>12-oktober</td>
                <td>12-oktober</td>
                <td>Rp.50.000,-</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>
                    <button type="submit" class="btn btn-primary rounded-circle"><i class="bi bi-plus-circle"></i></button>
                    <button type="submit" class="btn btn-warning rounded-circle"><i class="bi bi-printer-fill"></i></button>
                    <button type="submit" class="btn btn-danger rounded-circle"><i class="bi bi-trash"></i></button>
                </td>
                <td>12-oktober</td>
                <td>12-oktober</td>
                <td>Rp.50.000,-</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>
                    <button type="submit" class="btn btn-primary rounded-circle"><i class="bi bi-plus-circle"></i></button>
                    <button type="submit" class="btn btn-warning rounded-circle"><i class="bi bi-printer-fill"></i></button>
                    <button type="submit" class="btn btn-danger rounded-circle"><i class="bi bi-trash"></i></button>
                </td>
                <td>12-oktober</td>
                <td>12-oktober</td>
                <td>Rp.50.000,-</td>
            </tr>
          
        </tbody>
    </table>
</div>

@endsection