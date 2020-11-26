@extends('template.backend.template')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Blank Page</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javaScript:void();">BangoDash</a></li>
                    <li class="breadcrumb-item"><a href="javaScript:void();">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                </ol>
            </div>
            <div class="col-sm-3">
                <div class="btn-group float-sm-right">
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i
                            class="fa fa-cog mr-1"></i> Setting</button>
                    <button type="button"
                        class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                        data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a href="javaScript:void();" class="dropdown-item">Action</a>
                        <a href="javaScript:void();" class="dropdown-item">Another action</a>
                        <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
                <div style="height:600px">
                    <!--Please remove the height before using this page-->
                    <h1>Blank</h1>
                    <p>This is an example of a blank page that you can use as a starting point for creating new
                        ones.</p>
                </div>
            </div>
        </div>

    </div>

@endsection
