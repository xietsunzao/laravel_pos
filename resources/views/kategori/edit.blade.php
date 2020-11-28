@extends('template.backend.template')
@section('title', 'Admin || Kategori');
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">{{ $title }}</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javaScript:void();">Master Data</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('kategori') }}">Data Kategori</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('kategori.update', $row->id_kategori) }}" method="POST">@csrf @method('PUT')
                            @method('PUT')
                            <h4 class="form-header text-uppercase">
                                <i class="fa fa-edit"></i>
                                {{ $title }}
                            </h4>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Nama Kategori</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" class="form-control" name="kategori"
                                            placeholder="Masukkan Nama Kategori" value="{{ $row->nama_kategori }}">
                                        <div class="form-control-position">
                                            <i class="fa fa-search text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-footer">
                                <a href="{{ route($main) }}" class="btn btn-info shadow-success m-1"><i
                                        class="fa fa-sign-out"></i> Kembali</a>
                                <button type="submit" name="submit" class="btn btn-success shadow-success m-1"><i
                                        class="fa fa-save"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
    </div>
@endsection
