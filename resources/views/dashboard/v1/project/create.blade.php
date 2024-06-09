@extends('dashboard.v1.index')
@section('title', __('all.projects'))
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('all.projects')}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('all.home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('donation_projects.index')}}">{{__('all.projects')}}</a></li>
                        <li class="breadcrumb-item active">{{__('all.projects_create')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">



        <!-- form start -->
        <form method="post" action="{{route('donation_projects.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">{{__('all.financial_balance')}}</label>
                        <input type="number" class="form-control" value="{{old('financial_balance')}}" name="financial_balance"
                               id="financial_balance"
                               placeholder="{{__('all.financial_balance')}}">
                        @if ($errors->has('financial_balance'))
                            <small class="text-danger">{{ $errors->first('financial_balance') }}</small>
                        @endif
                    </div>

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
                        <label for="permissions">{{__('all.donation_scope')}}</label>
                        <select name="donation_scope_id" id="status" >
                            @foreach($donation_scopes as $donation_scope)
                                <option value="{{$donation_scope->id}}">{{$donation_scope->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('donation_scope_id'))
                            <small class="text-danger">{{ $errors->first('donation_scope_id') }}</small>
                        @endif
                    </div>

{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="exampleInputEmail1">{{__('all.image')}}</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="custom-file">--}}
{{--                                <input type="file" class="custom-file-input" name="image" id="exampleInputFile">--}}
{{--                                <label class="custom-file-label" for="exampleInputFile">{{__('all.choose_file')}}</label>--}}
{{--                            </div>--}}
{{--                            <div class="input-group-append">--}}
{{--                                <span class="input-group-text" id="">{{__('all.upload')}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}




                </div>

                <button type="submit" class="btn btn-primary">{{__('all.save')}}</button>
        </form>

    </div>
    </div>



@stop
@section('scripts')
{{--    @include('dashboard.v1.car.scripts')--}}
@endsection
