@extends('dashboard.v1.index')
@section('title', 'الصلاحيات')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">الصلاحيات</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <h4 class="header-title mb-4">تعديل البيانات</h4>

                <div class="row">
                    <div class="col-xl-12">
                        <form method="post" action="{{route('permissions.update',$row->id)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">الوظيفة</label>

                                    <select name="role_id" required class="form-control" multiple>
                                        @foreach(\App\Models\old\Role::all() as $role)
                                            <option value="{{$role->id}}"
                                                    @if($role->id == $row->roles->first()->id) selected @endif>{{$role->title}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('role_id'))
                                        <small class="text-danger">{{ $errors->first('role_id') }}</small>
                                    @endif
                                </div>

                                {{--                            <div class="form-group col-md-6">--}}
                                {{--                                <label for="exampleInputEmail1">الاسم</label>--}}
                                {{--                                <input type="text" class="form-control" value="{{$row->name}}" name="name"--}}
                                {{--                                       id="exampleInputEmail1"--}}
                                {{--                                       placeholder="الاسم">--}}
                                {{--                                @if ($errors->has('name'))--}}
                                {{--                                    <small class="text-danger">{{ $errors->first('name') }}</small>--}}
                                {{--                                @endif--}}
                                {{--                            </div>--}}
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">العنوان بالعربية</label>
                                    <input type="text" class="form-control" value="{{$row->translate('ar')->title}}"
                                           name="title_ar"
                                           id="title_ar"
                                           placeholder="العنوان بالعربية">
                                    @if ($errors->has('title_ar'))
                                        <small class="text-danger">{{ $errors->first('title_ar') }}</small>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">العنوان بالانجليزية</label>
                                    <input type="text" class="form-control" value="{{$row->translate('en')->title}}"
                                           name="title_en"
                                           id="exampleInputEmail1"
                                           placeholder="العنوان بالانجليزية">
                                    @if ($errors->has('title_en'))
                                        <small class="text-danger">{{ $errors->first('title_en') }}</small>
                                    @endif
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">الوصف بالعربية</label>
                                    <input type="text" class="form-control"
                                           value="{{$row->translate('ar')->description}}" name="description_ar"
                                           id="title_ar"
                                           placeholder="الوصف بالعربية">
                                    @if ($errors->has('description_ar'))
                                        <small class="text-danger">{{ $errors->first('description_ar') }}</small>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">الوصف بالانجليزية</label>
                                    <input type="text" class="form-control"
                                           value="{{$row->translate('en')->description}}" name="description_en"
                                           id="exampleInputEmail1"
                                           placeholder="الوصف بالانجليزية">
                                    @if ($errors->has('description_en'))
                                        <small class="text-danger">{{ $errors->first('description_en') }}</small>
                                    @endif
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">تعديل</button>
                        </form>
                    </div><!-- end col -->


                </div><!-- end row -->
            </div>
        </div><!-- end col -->
    </div>

@stop
