@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('admin.seo-setting.update', 1)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Seo Setting')}}</h3>
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
                                <label for="title">{{__('Seo Title')}}</label>
                                <input class="form-control" id="title" name="title" type="text" placeholder="{{__('Title')}}" value="{{old('title', $data->title)}}" />
                            </div>
                            <div class="form-group">
                                <label>{{__('Seo Description')}}</label>
                                <textarea class="form-control" rows="3" id="description" name="description" placeholder="{{__('Description')}}">{{old('description', $data->description)}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="keywords">{{__('Seo Keywords')}}</label>
                                <input class="form-control" id="keywords" name="keywords" type="text" placeholder="{{__('Keywords')}}" value="{{old('keywords', $data->keywords)}}" />
                                <code>Keywords will be comma seperated.</code>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                {{__('Submit')}}
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