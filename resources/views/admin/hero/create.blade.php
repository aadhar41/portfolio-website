@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('admin.hero.update', 1)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Hero Section</h3>
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
                                <label for="title">Title</label>
                                <input class="form-control" id="title" name="title" type="text" placeholder="Title" value="{{old('title', $hero->title)}}" />
                            </div>
                            <div class="form-group">
                                <label>Sub Title</label>
                                <textarea class="form-control" rows="3" id="sub_title" name="sub_title" placeholder="Sub Title">{{old('sub_title', $hero->sub_title)}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="btn_txt">Button Text</label>
                                <input class="form-control" id="btn_txt" name="btn_txt" value="{{old('btn_txt', $hero->btn_txt)}}" type="text" placeholder="Button Text">
                            </div>
                            <div class="form-group">
                                <label for="btn_url">Button URL</label>
                                <input class="form-control" id="btn_url" name="btn_url" value="{{old('btn_url', $hero->btn_url)}}" type="text" placeholder="Button URL">
                            </div>
                            
                            <div class="form-group">
                                <label for="image">Background Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Choose Background Image...</label>
                                    </div>
                                </div>
                            </div>
                            @if ($hero->image)
                            <div class="form-group">
                                <img src="{{asset($hero->image)}}" class="img-fluid img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" height="250" width="430" alt="Image">
                            </div>
                            @endif
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-hand-point-up mr-2"></i>
                                Submit
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