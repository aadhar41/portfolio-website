@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('admin.footer-social.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Update Footer Social Link')}}</h3>
                            <div class="card-tools">
                                <a href="{{route('admin.footer-social.index')}}" class="mr-3"><i class="fa fa-list" aria-hidden="true"></i> {{__('Lists')}}</a>
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
                                <label for="icon">{{__('Icon')}}</label>
                                <button class="btn btn-warning form-control col-lg-1 ml-2" name="icon" data-icon="{{$data->icon}}" data-iconset="fontawesome5" role="iconpicker"></button>
                            </div>

                            <div class="form-group">
                                <label for="url">{{__('URL')}}</label>
                                <input class="form-control" id="url" name="url" type="url" placeholder="{{__('URL')}}" value="{{old('url', $data->url)}}" />
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