@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('admin.feedback.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Update Feedback Content')}}</h3>
                            <div class="card-tools">
                                <a href="{{route('admin.feedback.index')}}" class="mr-3"><i class="fa fa-list" aria-hidden="true"></i> {{__('Lists')}}</a>
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
                                <label for="title">{{__('Title')}}</label>
                                <input class="form-control" id="title" name="title" type="text" placeholder="{{__('Title')}}" value="{{old('title', $data->title)}}" />
                            </div>

                            <div class="form-group">
                                <label for="position">{{__('Position')}}</label>
                                <input class="form-control" id="position" name="position" type="text" placeholder="{{__('Position')}}" value="{{old('position', $data->position)}}" />
                            </div>

                            <div class="form-group">
                                <label>{{__('Description')}}</label>
                                <textarea class="form-control summernote" rows="3" id="description" name="description" placeholder="{{__('Description')}}">{!! old('description', $data->description) !!}</textarea>
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