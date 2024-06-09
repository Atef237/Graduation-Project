@extends('dashboard.v1.index')
@section('title', 'الحساب الشخصى')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">الحساب الشخصى</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box">

                <h4 class="header-title mb-4">تعديل البيانات</h4>

                <div class="row">
                    <div class="col-xl-12">
                        <form method="post" action="{{route('update_own_profile')}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="exampleInputEmail1">الاسم</label>
                                <input type="text" class="form-control" value="{{$row->name}}" name="name"
                                       id="exampleInputEmail1"
                                       placeholder="الاسم">
                                @if ($errors->has('name'))
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">البريد الألكترونى</label>
                                <input type="email" class="form-control" value="{{$row->email}}" name="email"
                                       id="exampleInputEmail1"
                                       placeholder="البريد الألكترونى">
                                @if ($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">كلمة المرور</label>
                                <input name="password" type="password" class="form-control"
                                       id="exampleInputPassword1" placeholder="كلمة المرور">
                                @if ($errors->has('password'))
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">الصورة الشخصية</label>
                                <input type="file" name="image"
                                       data-default-file="{{asset('images/admins/'.$row->image)}}" class="dropify"/>

                            </div>
                            <button type="submit" class="btn btn-primary">تعديل</button>
                        </form>
                    </div><!-- end col -->


                </div><!-- end row -->
            </div>
        </div><!-- end col -->
    </div>



@stop