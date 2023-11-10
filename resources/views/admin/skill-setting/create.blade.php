@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('admin.skill-section-setting.update', 1)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Skill Section Setting')}}</h3>
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
                                <label for="title">{{__('Title')}}</label>
                                <input class="form-control" id="title" name="title" type="text" placeholder="{{__('Title')}}" value="{{old('title', $data->title)}}" />
                            </div>
                            <div class="form-group">
                                <label>{{__('Sub Title')}}</label>
                                <textarea class="form-control summernote" rows="5" id="sub_title" name="sub_title" placeholder="{{__('Sub Title')}}">{{old('sub_title', $data->sub_title)}}</textarea>
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
                                <img src="{{asset($data->image)}}" class="img-fluid img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" height="220" width="220" alt="Image">
                            </div>
                            @endif
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