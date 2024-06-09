@extends('member.layouts.main')
@push('css')
<link rel="stylesheet" href="style.css">
@endpush
@section('content')
<div class="cointainer bg-white shadow p-4 mb-4">
<div class="card bg-white shadow p-4 mb-4">
    <div class="row mx-5 my-5">
        <div class="col-5">
            <p class="fs-3">Daftar Obat</p>
            <p>Daftar Semua Obat</p>
        </div>
        <div class="d-flex justify-content-end col-6 mt-4 fs-5"><i class="bi bi-house-door-fill"></i>
            <p>&nbsp;/&nbsp;Daftar Semua Obat</p>
        </div>

    </div>
    <div class="row mx-3 my-3">

    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-1 my-2 my-md-0 mw-100 navbar-search" action="/cariobat" method="get" >
        <div class="input-group mb-3">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Obat"
                aria-label="Search" aria-describedby="basic-addon2" name="search">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
</div>

    <div class="row mx-3 my-3">
        
        
        @foreach ($obat as $o)
        <div class="col mb-5">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('storage/obat/' . $o->image) }}" class="card-img-top" alt="medicine.jpg">
                <div class="card-body">
                    <h5 class="card-title fs-5"> {{$o->nama_obat}} </h5>
                    <p class="card-text fs-6 fw-bold text-dark">Rp. {{$o->harga_jual}} </p>
                    <form action="{{ url('keranjangsimpan') }}" method="post">
                        @csrf
                        <input type="hidden" name="id_obat" value="{{ $o->id_obat }}">
                        {{-- <button type="submit">Tambah ke keranjang</button> --}}
                     
                    <button type="submit" class="btn btn-primary btn-block"><i class="bi bi-basket fs-6">Tambah</i></button>
                </form>

                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    {{-- <nav aria-label="Page navigation example">
        <ul class="pagination d-flex justify-content-end me-5 mb-5">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav> --}}
</div>
</div>

@endsection