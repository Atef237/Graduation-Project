@extends('web.layout.master')


@section('title')
    الحساب الشخصي
@endsection


@section('content')

    <div class="about">
        <h3> الملف الشخصى</h3>
    </div>
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-md-6">
                <!-- <div class="user-name mb-3">
                    <input type="text" id="name" value="محمد احمد مصطفي" name="name" class="form-control">
                </div> -->

                <div class="label-inputs">
                    <label for="full-name" class="mb-3">الاسم بالكامل:</label>
                    <input type="text" id="full-name" name="full-name" value="{{auth()->user()->name}}" class="form-control mb-3" disabled>

                    <label for="phone-number" class="mb-3">رقم الهاتف:</label>
                    <input type="tel" id="phone-number" name="phone-number" value="{{auth()->user()->phone}}" class="form-control mb-3" disabled>

                    <label for="national-id" class="mb-3">الرقم القومي:</label>
                    <input type="text" id="national-id" name="national-id" value="{{auth()->user()->nationality_id}}" class="form-control mb-3" disabled>
                </div>


{{--                <div class="status-message">--}}
{{--                    <p class="accepted"> طلب التسجيل كمستفيد <span> تم قبوله</span> </p>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

@endsection
