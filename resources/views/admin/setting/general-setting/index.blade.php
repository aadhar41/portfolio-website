@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('admin.general-setting.update', 1)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('General Setting')}}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (!empty($data->logo))
                            <div class="form-group">
                                <img src="{{asset($data->logo)}}" class="img-fluid img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" height="120" width="120" alt="Image">
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="logo">{{__('Logo')}}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="logo" class="custom-file-input" id="logo">
                                        <label class="custom-file-label" for="logo">{{__('Choose Logo')}}...</label>
                                    </div>
                                </div>
                            </div>
                            @if (!empty($data->footer_logo))
                            <div class="form-group">
                                <img src="{{asset($data->footer_logo)}}" class="img-fluid img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" height="120" width="120" alt="Image">
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="footer_logo">{{__('Footer Logo')}}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="footer_logo" class="custom-file-input" id="footer_logo">
                                        <label class="custom-file-label" for="footer_logo">{{__('Choose Footer Logo')}}...</label>
                                    </div>
                                </div>
                            </div>
                            @if (!empty($data->favicon))
                            <div class="form-group">
                                <img src="{{asset($data->favicon)}}" class="img-fluid img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" height="50" width="50" alt="Image">
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="favicon">{{__('Fav Icon')}}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="favicon" class="custom-file-input" id="favicon">
                                        <label class="custom-file-label" for="favicon">{{__('Choose Fav Icon')}}...</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                {{__('Update')}}
                            </button>
                        </div>
                    </div>
                    <!-- /.card -->

                </form>
            </div>
        </div>
    </div>
</section>

@endsection