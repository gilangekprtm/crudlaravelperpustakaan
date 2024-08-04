@extends('main') 
@section('title','Data Penerbit')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./jenis">Master Data</a></li>
            <li class="breadcrumb-item active">Data Jenis Penerbit</li>
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
                                  <td><h5 class="card-title">Tambah Data Penerbit</span></h5></td>
                                  <td> 
                                    <div align="right"><a href="{{ url('./penerbit')}}" class="btn btn-success btn-sm" >
                                      <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                    </div> 
                                  </td> 
                                   </tr>
                                 </table>

                                 <div class="col-12">
                                    <div class="card recent-sales overflow-auto">
                                    <div class="card-body">  
                                      
                                        <form action="{{ url('penerbit')}}" method="post" enctype="multipart/form-data">
                                          {{ csrf_field() }} 
                                          <p>
                                              <div class="row mb-3">
                                                <label for="name" class="col-sm-2 col-form-label">Id Penerbit</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control @error('id_penerbit') is-invalid @enderror"   value="{{ old('id_penerbit') }}"  name="id_penerbit"  required autofocus>
                                                </div>
                                              </div> 
                                              <div class="row mb-3">
                                                <label for="name" class="col-sm-2 col-form-label">Nama Penerbit</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control @error('nama_penerbit') is-invalid @enderror"   value="{{ old('nama_penerbit') }}"  name="nama_penerbit"  required autofocus>
                                                </div>
                                              </div> 
                                              <div class="row mb-3">
                                                <label for="name" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control @error('alamat') is-invalid @enderror"   value="{{ old('alamat') }}"  name="alamat"  required autofocus>
                                                </div>
                                              </div>
                                              <div class="row mb-3">
                                                <label for="name" class="col-sm-2 col-form-label">No Telpon</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control @error('no_telepon') is-invalid @enderror"   value="{{ old('no_telepon') }}"  name="no_telepon"  required autofocus>
                                                </div>
                                              </div>
                
                                             
                                            
                                            
                                            <button type="submit" class="btn btn-success" style="font-size:16px"><span class="bi bi-save2 green-color"> Save </span></button>
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