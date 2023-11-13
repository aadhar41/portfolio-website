@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('admin.footer-info.update', 1)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Footer Info')}}</h3>
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
                            <div class="form-group">
                                <label for="powered_by">{{__('Powered By')}}</label>
                                <input class="form-control" id="powered_by" name="powered_by" type="text" placeholder="{{__('Powered By')}}" value="{{old('powered_by', $data->powered_by)}}" />
                            </div>
                            
                            <div class="form-group">
                                <label for="copy_right">{{__('Copy Right')}}</label>
                                <input class="form-control" id="copy_right" name="copy_right" type="text" placeholder="{{__('Copy Right')}}" value="{{old('copy_right', $data->copy_right)}}" />
                            </div>

                            <div class="form-group">
                                <label>{{__('Sub Title')}}</label>
                                <textarea class="form-control summernote" rows="3" id="info" name="info" placeholder="{{__('Sub Title')}}">{{old('info', $data->info)}}</textarea>
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