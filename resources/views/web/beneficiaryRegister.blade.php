@extends('web.layout.master')


@section('content')


    <div class="about">
        <h3>تسجيل حساب جديد </h3>

    </div>


    <div class="my-4">
        <h2>تسجيل حساب جديد</h2>

        <p>هل لديك حساب بالفعل؟ <a href="{{route('showLoginForm')}}"    style="color: #2fbac5; text-decoration: none">دخول</a></p>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form class="container-form" action="{{route('postRegister')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="mb-3">الاسم كامل</label>
                            <input type="text" id="name" name="name" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="national-id" class="mb-3">الرقم القومى</label>
                            <input type="number" id="national-id" name="nationality_id" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="mb-3">رقم الهاتف</label>
                            <input type="tel" id="phone" name="phone" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="mb-3">كلمة المرور</label>
                            <input type="password" id="password" name="password" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="confirm-password" class="mb-3">تاكيد كلمة المرور</label>
                            <input type="password" id="confirm-password" name="confirm_password" required class="form-control">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info">تسجيل</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>



@endsection
