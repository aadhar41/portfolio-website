@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('admin.about.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Update About Content')}}</h3>
                            <div class="card-tools">
                                <a href="{{route('admin.about.index')}}" class="mr-3"><i class="fa fa-list" aria-hidden="true"></i> {{__('Lists')}}</a>
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
                                <label>{{__('Description')}}</label>
                                <textarea class="form-control summernote" rows="3" id="description" name="description" placeholder="{{__('Description')}}">{!! old('description', $data->description) !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">{{__('Image')}}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">{{__('Choose Image')}}...</label>
                                    </div>
                                </div>
                            </div>
                            @if ($data->image)
                            <div class="form-group">
                                <img src="{{asset($data->image)}}" class="img-fluid img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" height="150" width="230" alt="Image">
                            </div>
                            @endif
                            @if ($data->resume)
                            <a href="javascript:void(0);">
                                <i class="fa fa-file-pdf ml-2 mt-2 mb-3" style="font-size: 100px" aria-hidden="true"></i>
                            </a>
                            @endif
                            <div class="form-group">
                                <label for="resume">{{__('Resume')}}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="resume" class="custom-file-input" id="resume">
                                        <label class="custom-file-label" for="resume">{{__('Choose Resume')}}...</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                {{__('Create')}}
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