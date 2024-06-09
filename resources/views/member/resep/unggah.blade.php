@extends('member.layouts.main')
@push('css')
<link rel="stylesheet" href="style.css">
@endpush
@section('content')

<div class="container bg-white shadow">
    <div class="row mx-5 my-5">
        <div class="col-5">
            <p class="fs-3">Unggah Resep Dokter</p>
            <p>Apotek Jihan Farma Menerima resep Dokter</p>
        </div>
        <div class="d-flex justify-content-end col-6 mt-4 fs-5"><i class="bi bi-house-door-fill"></i>
            <p>&nbsp;/&nbsp;Unggah resep Dokter</p>
        </div>

    </div>

</div>
<div class="container bg-white shadow my-5">
    <div class="row mx-5 my-5">
        <div class="col-10">
            <p class="fs-3">Unggah Resep Dokter</p>
            <p>Hai bill, Kamu bisa memesan</p>
        </div>

        <div class="container mb-3"> 
            <div class="card bg-white shadow p-4 mb-4">                

                <div class="card-body">
                    <form action=" {{ url('/resepsimpan') }} " method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="mb-3">
                          <label for="title" class="form-label">Catatan</label>
                          <input type="text" class="form-control" placeholder="Tambahkan Catatan (optional)" name="keterangan" >
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Foto Resep</label>
                            <input type="file" class="form-control" name="image" required >
                        </div>

                        <button type="submit" class="btn btn-success">Save</button>
                      </form>
                </div>   

                 

    </div>
</div>
    </div>

    @endsection