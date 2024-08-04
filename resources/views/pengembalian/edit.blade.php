@extends('main') 
@section('title','Data Pengembalian')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./pengembalian">Master Data</a></li>
            <li class="breadcrumb-item active">Data Pengembalian</li>
          </ol>
        </nav>
      </div>  
        <section  class="section dashboard">
          <div class="col-12">
            <div class="row">  
                <div class="card top-selling overflow-auto">  
                    <div class="content mt-3">
                        <div class="animated fadeIn">
                       
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                     
                                <div class="card-header"> 
                                 <table width="100%"  class="fa fa-text-height" aria-hidden="true"   border="0" cellpadding="0" cellspacing="0"   class="fa fa-align-center" > 
                                 <tr>
                                  <td><h5 class="card-title">Ubah Pengembalian<span class="bi bi-arrow-right-circle-fill" style="font-size:16px"></span></h5></td>
                                  <td> 
                                     <div align="right"><a href="{{ url('./pengembalian')}}" class="btn btn-success btn-sm" >
                                      <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                    </div> 
                                  </td> 
                                   </tr>
                                 </table>

                                 <div class="col-12">
                                    <div class="card recent-sales overflow-auto">
                                    <div class="card-body">  
                                        <form action="{{ url('pengembalian/' .$pengembalian->id_pengembalian) }}" method="post"  enctype="multipart/form-data">
                                    
                                            @method('put')
                                            {{ csrf_field() }}
                                            <div class="row mb-3">
                                              <label for="id_buku" class="col-sm-2 col-form-label">Id Pengembalian</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control"  value="{{ old('id_pengembalian',$pengembalian->id_pengembalian) }}"  name="id_pengembalian"  required autofocus>
                                              </div>
                                            </div> 
                                            <div class="row mb-3">
                                              <label for="id_buku" class="col-sm-2 col-form-label">Id Peminjaman</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control"  value="{{ old('id_peminjaman',$pengembalian->id_peminjaman) }}"  name="id_peminjaman"  required autofocus>
                                              </div>
                                            </div> 
                                            <div class="row mb-3">
                                              <label for="nik" class="col-sm-2 col-form-label">Buku</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control" value="{{ old('buku',$pengembalian->buku) }}"  name="buku"  required autofocus>
                                              </div>
                                            </div>
                                            <div class="row mb-3">
                                              <label for="nik" class="col-sm-2 col-form-label">Jenis</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control" value="{{ old('jenis',$pengembalian->jenis) }}"  name="jenis"  required autofocus>
                                              </div>
                                            </div>
                                            <div class="row mb-3">
                                              <label for="nik" class="col-sm-2 col-form-label">Tanggal</label>
                                              <div class="col-sm-10">
                                                  <input type="date" class="form-control" value="{{ old('tanggal_kembali',$pengembalian->tanggal_kembali) }}"  name="tanggal_kembali"  required autofocus>
                                              </div>
                                            </div>
                                            <div class="row mb-3">
                                              <label for="nik" class="col-sm-2 col-form-label">Kondisi</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control" value="{{ old('kondisi_buku',$pengembalian->kondisi_buku) }}"  name="kondisi_buku"  required autofocus>
                                              </div>
                                            </div>
                                            
                   
                             
                                              <button type="submit" class="btn btn-success" style="font-size:16px"><span class="bi bi-pencil-square green-color"> Update </span></button>
                             
                                           </form> 
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
      </section> 
</main> 
@endsection