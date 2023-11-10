@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('admin.skill-item.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Create Skill Item')}}</h3>
                            <div class="card-tools">
                                <a href="{{route('admin.skill-item.index')}}" class="mr-3"><i class="fa fa-list" aria-hidden="true"></i> {{__('Lists')}}</a>
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
                                <label for="name">{{__('Name')}}</label>
                                <input class="form-control" id="name" name="name" type="text" placeholder="{{__('Name')}}" value="{{old('name', $data->name)}}" />
                            </div>

                            <div class="form-group">
                                <label for="percent">{{__('Percent')}}</label>
                                <input class="form-control" id="percent" name="percent" type="number" placeholder="{{__('Percent')}}" value="{{old('percent', $data->percent)}}" />
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