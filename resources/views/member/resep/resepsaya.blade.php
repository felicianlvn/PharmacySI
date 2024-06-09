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
{{-- <div class="container bg-white shadow my-5">
    <div class="row mx-5 my-5"> --}}

        <div class="container mt-3 mb-3"> 
            <div class="card bg-white shadow p-4 mb-4">
                <div class="row"> <div class="col">
                    <h3>Resep Ongoing</h3> 
                    <br>
                </div> 
            </div>                 

                <table class="table">
                    <thead>
                      <tr>
                        
                          
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th  scope="col">Status</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tanggal Upload</th>
                                   
                      </tr>

                    </thead>
                    <tbody>
                        
                        @if($resep->isEmpty())
                        <td align="center" colspan="5">No data available in table</td>

                            @else

                        @foreach ($resep as $r)     
                        
                      <tr>
                        <th scope="row"> {{$loop->iteration}} </th>

                        <td>  
                        <img src="{{ url('storage/resep/' . $r->image) }}" class="rounded" style="width: 300px">
                        </td>

                        <td> 
                            <button type="button" class="btn btn-warning" disabled>{{$r->status}} </button> 
                        </td>
                        <td> 
                            @if($r->keterangan == NULL )
                            No data available
                            @else 
                            {{$r->keterangan}}
                            @endif
                        </td>
                        <td> {{$r->created_at}} </td>

                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                  </table>   

                 

    </div>


    <div class="card bg-white shadow p-4 mb-4">    
        <div class="row"> <div class="col">
            <h3>Resep Acc</h3> 
            <br>
        </div> 
    </div>             

        <table class="table">
            <thead>
              <tr>
                
                  
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th  scope="col">Status</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Catatan Admin</th>
                <th scope="col">Action</th>

                           
              </tr>

            </thead>
            <tbody>
                
                @if($resep2->isEmpty())
                <td align="center" colspan="4">No data available in table</td>

                    @else

                @foreach ($resep2 as $r)     
                
              <tr>
                <th scope="row"> {{$loop->iteration}} </th>

                <td>  
                <img src="{{ url('storage/resep/' . $r->image) }}" class="rounded" style="width: 300px">
                </td>

                <td>
                     
                     @if( $r->status == "harga masuk" )
                     <button type="button" class="btn btn-success" disabled> Disetujui Admin</button>
                   
                    @else 
                    {{$r->status}}
                    @endif
                </td>
                <td> 
                    @if($r->keterangan == NULL )
                    No data available
                    @else 
                    {{$r->keterangan}}
                    @endif
                </td>
                <td> {{$r->catatan_admin}} </td>

              </tr>
              @endforeach
              @endif
            </tbody>
          </table>   
        </div>

          <div class="card bg-white shadow p-4 mb-4">    
            <div class="row"> <div class="col">
                <h3>Resep Ditolak</h3> 
                <br>
            </div> 
        </div>             
    
            <table class="table">
                <thead>
                  <tr>
                    
                      
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th  scope="col">Status</th>
                  
    
                               
                  </tr>
    
                </thead>
                <tbody>
                    
                    @if($resep3->isEmpty())
                    <td align="center" colspan="4">No data available in table</td>
    
                        @else
    
                    @foreach ($resep3 as $r)     
                    
                  <tr>
                    <th scope="row"> {{$loop->iteration}} </th>
    
                    <td>  
                    <img src="{{ url('storage/resep/' . $r->image) }}" class="rounded" style="width: 300px">
                    </td>
    
                    <td>
                         
                         @if( $r->status == "harga masuk" )
                         <button type="button" class="btn btn-danger" disabled> DiTolak</button>
                       
                        @else 
                        {{$r->status}}
                        @endif
                    </td>
    
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>   
    
         

</div>

    

    @endsection