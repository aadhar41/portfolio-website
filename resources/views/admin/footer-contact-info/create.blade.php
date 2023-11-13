@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('admin.footer-contact-info.update', 1)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Footer Contact Info')}}</h3>
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
                                <label for="phone">{{__('Phone')}}</label>
                                <input class="form-control" id="phone" name="phone" type="text" placeholder="{{__('Phone')}}" value="{{old('phone', $data->phone)}}" />
                            </div>
                            
                            <div class="form-group">
                                <label for="email">{{__('E-Mail')}}</label>
                                <input class="form-control" id="email" name="email" type="text" placeholder="{{__('E-Mail')}}" value="{{old('email', $data->email)}}" />
                            </div>

                            <div class="form-group">
                                <label>{{__('Address')}}</label>
                                <textarea class="form-control summernote" rows="3" id="address" name="address" placeholder="{{__('Address')}}">{{old('address', $data->address)}}</textarea>
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