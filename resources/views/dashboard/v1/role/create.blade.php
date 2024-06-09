@extends('dashboard.v1.index')
@section('title', __('all.roles'))
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('all.roles')}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('all.home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admins.index')}}">{{__('all.roles_index')}}</a></li>
                        <li class="breadcrumb-item active">{{__('all.roles_create')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">



        <!-- form start -->
        <form method="post" action="{{route('roles.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">{{__('all.name')}}</label>
                    <input type="text" class="form-control" value="{{old('name')}}" name="name"
                           id="name"
                           placeholder="{{__('all.name')}}">
                    @if ($errors->has('name'))
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    @endif
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">{{__('all.title').' '.__('all.ar_input_title')}}</label>
                        <input type="text" class="form-control" value="{{old('title_ar')}}" name="title_ar"
                               id="title_ar"
                               placeholder="{{__('all.title').' '.__('all.ar_input_title')}}">
                        @if ($errors->has('title_ar'))
                            <small class="text-danger">{{ $errors->first('title_ar') }}</small>
                        @endif
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">{{__('all.title').' '.__('all.en_input_title')}}</label>
                        <input type="text" class="form-control" value="{{old('title_en')}}" name="title_en"
                               id="exampleInputEmail1"
                               placeholder="{{__('all.title').' '.__('all.en_input_title')}}">
                        @if ($errors->has('title_en'))
                            <small class="text-danger">{{ $errors->first('title_en') }}</small>
                        @endif
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">{{__('all.description').' '.__('all.ar_input_title')}}</label>
                        <input type="text" class="form-control" value="{{old('description_ar')}}" name="description_ar"
                               id="title_ar"
                               placeholder="{{__('all.description').' '.__('all.ar_input_title')}}">
                        @if ($errors->has('description_ar'))
                            <small class="text-danger">{{ $errors->first('description_ar') }}</small>
                        @endif
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">{{__('all.description').' '.__('all.en_input_title')}}</label>
                        <input type="text" class="form-control" value="{{old('description_en')}}" name="description_en"
                               id="exampleInputEmail1"
                               placeholder="{{__('all.description').' '.__('all.en_input_title')}}">
                        @if ($errors->has('description_en'))
                            <small class="text-danger">{{ $errors->first('description_en') }}</small>
                        @endif
                    </div>

                </div>
                <div class="form-group">
                    <label for="permissions">{{__('all.permissions')}}</label>
                    <select name="permissions[]" id="cars" multiple>
                        @foreach($permissions as $permission)
                        <option value="{{$permission->id}}">{{$permission->title}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('permissions'))
                        <small class="text-danger">{{ $errors->first('permissions') }}</small>
                    @endif
                </div>


                <button type="submit" class="btn btn-primary">{{__('all.save')}}</button>
        </form>

    </div>
    </div>



@stop
