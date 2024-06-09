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

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">اسم مقدم الطلب</label>
                        <input type="text" class="form-control" value="{{old('name',$row->user->name ?? '')}}" name="name"
                               id="name"
                               disabled
                               placeholder="{{__('all.name')}}">
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">اسم المشروع</label>
                        <input type="text" class="form-control" value="{{old('name',$row->project->name ?? '')}}" name="name"
                               id="name"
                               disabled
                               placeholder="{{__('all.name')}}">
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>


                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">صافي الدخل</label>
                        <input type="text" class="form-control" value="{{old('name',$row->net_income??'')}}" name="name"
                               id="name"
                               disabled
                               placeholder="{{__('all.name')}}">
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>


                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">عدد افراد الاسرة</label>
                        <input type="text" class="form-control" value="{{old('name',$row->number_of_family_members??'')}}" name="name"
                               id="name"
                               disabled
                               placeholder="{{__('all.name')}}">
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>


                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">الحالة الاجتماعية</label>
                        <input type="text" class="form-control" value="{{old('name',$row->marital_status??'')}}" name="name"
                               id="name"
                               disabled
                               placeholder="{{__('all.name')}}">
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>


                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">الحالة الصحية</label>
                        <input type="text" class="form-control" value="{{old('name',$row->health_status??'')}}" name="name"
                               id="name"
                               disabled
                               placeholder="{{__('all.name')}}">
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>


                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">العنوان</label>
                        <input type="text" class="form-control" value="{{old('name',$row->address??'')}}" name="name"
                               id="name"
                               disabled
                               placeholder="{{__('all.name')}}">
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>


                </div>
         <form method="post" action="{{route('donor_request.accept')}}" enctype="multipart/form-data">
                    @csrf
{{--                    <input type="hidden" name="id" value="{{$row->id}}">--}}
                <button type="submit" class="btn btn-primary">{{__('all.accept')}}</button>
        </form>

                <br>
                <br>
            <form method="post" action="{{route('donor_request.reject')}}" enctype="multipart/form-data">
                @csrf
{{--                <input type="hidden" name="id" value="{{$row->id}}">--}}
                <button type="submit" class="btn btn-primary">{{__('all.reject')}}</button>
            </form>

    </div>
    </div>



@stop
@section('scripts')
{{--    @include('dashboard.v1.car.scripts')--}}
@endsection
