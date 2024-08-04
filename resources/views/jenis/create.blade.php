@extends('main')
@section('title', 'Data Jenis Buku')
@section('breadcrumbs')
    <main class="main" id="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./jenis">Master Data</a></li>
                    <li class="breadcrumb-item active">Data Jenis Buku</li>
                </ol>
            </nav>
        </div>
        <section class="section dashboard">
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
                                    <table aria-hidden="true" border="0" cellpadding="0" cellspacing="0"
                                        class="fa fa-text-height" class="fa fa-align-center" width="100%">
                                        <tr>
                                            <td>
                                                <h5 class="card-title">Tambah Data Jenis Buku</span></h5>
                                            </td>
                                            <td>
                                                <div align="right"><a class="btn btn-success btn-sm"
                                                        href="{{ url('./jenis') }}">
                                                        <span class="bi bi-arrow-left-circle-fill" style="font-size:16px">
                                                            Back</span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="col-12">
                                        <div class="card recent-sales overflow-auto">
                                            <div class="card-body">

                                                <form action="{{ url('jenis') }}" enctype="multipart/form-data"
                                                    method="post">
                                                    {{ csrf_field() }}
                                                    <p>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Id
                                                            jenis</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('id_jenis') is-invalid @enderror"
                                                                name="id_jenis" required type="text"
                                                                value="{{ old('id_jenis') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name">Nama
                                                            Jenis</label>
                                                        <div class="col-sm-10">
                                                            <input autofocus
                                                                class="form-control @error('nama_jenis') is-invalid @enderror"
                                                                name="nama_jenis" required type="text"
                                                                value="{{ old('nama_jenis') }}">
                                                        </div>
                                                    </div>






                                                    <button class="btn btn-success" style="font-size:16px"
                                                        type="submit"><span class="bi bi-save2 green-color"> Save
                                                        </span></button>
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
