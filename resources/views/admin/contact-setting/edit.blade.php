@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('admin.contact-section-setting.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Create Portfolio Item')}}</h3>
                            <div class="card-tools">
                                <a href="{{route('admin.contact-section-setting.index')}}" class="mr-3"><i class="fa fa-list" aria-hidden="true"></i> {{__('Lists')}}</a>
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
                                <div class="form-group">
                                    <label for="category_id">{{__('Category')}}</label>
                                    <select class="form-control select2" name="category_id" id="category_id" data-placeholder="{{__('Select a Category')}}" style="width: 100%;">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}" @selected($data->category_id == $category->id) > {{$category->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>{{__('Description')}}</label>
                                <textarea class="form-control summernote" rows="3" id="description" name="description" placeholder="{{__('Description')}}">{!! old('description', $data->description) !!}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="client">{{__('Client')}}</label>
                                <input class="form-control" id="client" name="client" type="text" placeholder="{{__('Client')}}" value="{{old('client', $data->client)}}" />
                            </div>

                            <div class="form-group">
                                <label for="website">{{__('Website')}}</label>
                                <input class="form-control" id="website" name="website" type="text" placeholder="{{__('Website')}}" value="{{old('website', $data->website)}}" />
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
                            @if (isset($data->image))
                            <div class="form-group">
                                <img src="{{asset($data->image)}}" class="img-fluid img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" height="150" width="150" alt="Image">
                            </div>
                            @endif
                            
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