@extends('dashboard.v1.index')
@section('title', __('all.admins_edit'))
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('all.admins_edit')}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('all.home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admins.index')}}">{{__('all.admins_index')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('all.admins_edit')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card card-primary">


        <!-- form start -->

        <form method="post" action="{{route('admins.update',$row->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">{{__('all.name')}}</label>
                    <input type="text" class="form-control" value="{{$row->name}}" name="name"
                           id="exampleInputEmail1"
                           placeholder="{{__('all.name')}}">
                    @if ($errors->has('name'))
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">{{__('all.email')}}</label>
                    <input type="email" class="form-control" required value="{{$row->email}}" name="email"
                           id="exampleInputEmail1"
                           placeholder="{{__('all.email')}}">
                    @if ($errors->has('email'))
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    @endif
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">{{__('all.password')}}</label>
                    <input name="password" type="password" class="form-control"
                           id="exampleInputPassword1" placeholder="{{__('all.password')}}"
                           value="{{old('password')}}" required>
                </div>
                @if ($errors->has('password'))
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                @endif


                <div class="form-group">
                    <label for="exampleSelect1">{{__('all.status')}}</label>
                    <select name="status" class="form-control" id="exampleSelect1">
                        <option value="active"
                                @if($row->status == 'active') selected @endif>{{__('all.active')}}
                        </option>
                        <option value="not_active"
                                @if($row->status == 'not_active') selected @endif>{{__('all.inactive')}}
                        </option>
                    </select>
                </div>

                <hr>
                <label for="exampleSelect1">{{__('all.permissions')}}</label>
                <div class="row">
                    @foreach(\App\Models\old\Role::all() as $role)
                        @if($role->getAllPermissions()->count() > 0)

                            <div class="card col-md-4" style="width: 18rem;">
                                {{$role->title}}
                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item">
                                        @foreach($role->getAllPermissions() as $permission)
                                            <input type="checkbox" id="permission{{$permission->id}}"
                                                   value="{{$permission->name}}" name="permissions[]"
                                                   @if($row->can($permission->name)) checked @endif>
                                            <label
                                                for="permission{{$permission->id}}"> {{\App\Models\old\Permission::find($permission->id)->title}}</label>
                                            <br>
                                        @endforeach
                                    </li>


                                </ul>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">{{__('all.profile_image')}}</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" data-default-file="{{asset('images/admins/'.$row->image)}}"
                                   class="custom-file-input" name="image" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">{{__('all.choose_file')}}</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">{{__('all.upload')}}</span>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">{{__('all.save')}}</button>
        </form>
    </div>
    </div>

@stop
