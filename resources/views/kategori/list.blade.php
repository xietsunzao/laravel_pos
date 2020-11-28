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
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
            </div>

        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-table"></i> List {{ $title }}
                        <div class="float-right">
                            <a class="btn btn-success shadow-success waves-effect waves-light m-1"
                                href="{{ url('kategori/create') }}">
                                <i class="fa fa-plus"></i> Tambah Data Kategori
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="default-datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($kategori as $r)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $r->nama_kategori }}</td>
                                            <td>
                                                <a href="{{ route('kategori.edit', $r->id_kategori) }}"
                                                    class="btn btn-primary btn-round btn-sm shadow-primary waves-effect waves-light m-1">
                                                    <i class="fa fa-eye"></i> Detail
                                                </a>
                                                <a href="{{ route('kategori.edit', $r->id_kategori) }}"
                                                    class="btn btn-warning btn-round btn-sm shadow-warning waves-effect waves-light m-1">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a href="{{ route('kategori.delete', $r->id_kategori) }}"
                                                    class="btn btn-danger btn-round btn-sm shadow-danger waves-effect waves-light m-1 remove-data">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Row-->
    </div>
@endsection
