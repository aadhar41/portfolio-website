@extends('admin.layout')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Footer Info')}}</h3>
                            <div class="card-tools">
                                <a href="{{route('admin.contact-section-setting.create')}}" class="mr-3"><i class="fa fa-plus-circle" aria-hidden="true"></i> {{__('Add New')}}</a>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            {{ $dataTable->table() }}
                        </div>
 
                    </div>
                    <!-- /.card -->
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush