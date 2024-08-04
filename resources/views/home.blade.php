@extends('main') 
@section('title','Perpustakaan')

@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Perpustakaan</a></li>
            <li class="breadcrumb-item active">Halaman Utama Admin</li>
          </ol>
        </nav>
      </div>  
        <section  class="section dashboard">
          <div class="col-12">
            <div class="row">  
                <div class="card top-selling overflow-auto" id="home-isi">  
                    <div class="content mt-3">
                        <div class="animated fadeIn"> 
                                <div class="card-body table-responsive"> 
                                 isi halaman
                          </div>
                           
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
      </section> 
</main> 
@endsection