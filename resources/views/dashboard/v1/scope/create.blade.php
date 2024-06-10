@extends('dashboard.v1.index')
@section('title', __('all.cars'))
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('all.donation_scopes')}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('all.home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admins.index')}}">{{__('all.donation_scopes_index')}}</a></li>
                        <li class="breadcrumb-item active">{{__('all.donation_scopes_create')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">



        <!-- form start -->
        <form method="post" action="{{route('donation_scopes.store')}}" >
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">{{__('all.name')}}</label>
                        <input type="text" class="form-control" value="{{old('name')}}" name="name"
                               id="name"
                               placeholder="{{__('all.name')}}">
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>

                    <div class="form-group col-md-6">
                        <label for="permissions">{{__('all.status')}}</label>
                        <select name="status" id="status" >
                            <option >{{__('all.status')}}</option>
                                <option value="active">{{__('all.active')}}</option>
                                <option value="inactive">{{__('all.inactive')}}</option>
                        </select>
                        @if ($errors->has('status'))
                            <small class="text-danger">{{ $errors->first('status') }}</small>
                        @endif
                    </div>



                </div>

                <button type="submit" class="btn btn-primary">{{__('all.save')}}</button>
        </form>

    </div>
    </div>



@stop
@section('scripts')
{{--    @include('dashboard.v1.car.scripts')--}}
@endsection
