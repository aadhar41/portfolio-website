@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12">
                        <a href="{{route('admin.general-setting.index')}}">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">General Settings</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <a href="{{route('admin.seo-setting.index')}}">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="fa fa-search" aria-hidden="true"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Seo Settings</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>

@endsection