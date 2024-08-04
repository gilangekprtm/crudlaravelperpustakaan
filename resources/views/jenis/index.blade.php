@extends('main') 
@section('title',' Jenis Buku')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./anggotas">Master Data</a></li>
            <li class="breadcrumb-item active">Data Jenis Buku</li>
          </ol>
        </nav>
      </div>  
        <section  class="section dashboard" id="dashboard-page">
          <div class="col-12">
            <div class="row">  
                <div class="card top-selling overflow-auto">  
                    <div class="content mt-3">
                        <div class="animated fadeIn">  
                                @if (session('status'))   
                                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Proses...! </strong> {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div> 
                                  @endif 
                              
                                <div class="card-header"> 
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td><h5 class="card-title">Data Jenis Buku</span></h5></td>
                                          <td> 
                                            <div align="right">   
                                              <a href="{{ url('jenis/show')}}"  class="btn btn-success btn-sm"  role="button" aria-disabled="true">
                                                <span class="bi bi-printer" style="font-size:16px"> Print Data</span> 
                                              </a>  
                                              <a href="{{ url('jenis/create')}}" class="btn btn-success btn-sm">
                                                <span class="bi bi-plus-circle" style="font-size:16px"> New</span>
                                              </a> 
                                              </div> 
                                        </tr>
                                     </table>
                                     
                                </div>
                                <div class="card-body table-responsive"> 
                                    <table class="table table-borderless datatable">
                                                <thead>
                                                    <tr>
                                                    <th>No.</th>
                                                    <th>Id Jenis</th> 
                                                    <th>Nama Jenis</th>
                                                    <th>Ubah</th>
                                                    <th>Hapus</th>
                                                </tr>
                                                </thead>
                                                    <tbody>
                                                    @foreach ($jenis as $item)
                                                        <tr>
                                                        <td>{{$loop -> iteration}}</td>
                                                        <td>{{$item -> id_jenis}}</td> 
                                                        <td>{{$item -> nama_jenis}}</td> 
                                                          <td>
                                                                <a href="{{ url('jenis/' .$item->id_jenis.'/edit')}}" class="btn btn-success btn-sm" >
                                                                  <span class="bi bi-pencil-square" style="font-size:12px"></span></a>   
                                                                </td> 
                                                              <td>
                                                                  <form action="{{ url('jenis/' .$item->id_jenis)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data')">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-success btn-sm"><span class="bi bi-trash"></span></button> 
                                                              </td>
                                                            </form>  
                                                            </
                                                        </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                     </table>
                                  </div>
                           
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
      </section> 
</main> 
@endsection