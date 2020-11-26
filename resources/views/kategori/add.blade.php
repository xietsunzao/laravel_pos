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
                
            </div>
        </div><!-- End Row-->
    </div>
@endsection
