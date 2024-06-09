@extends('web.layout.master')

@section('title')
    المتبرع
@endsection


@section('content')

    <div class="about">
        <h3>المتبرع</h3>
    </div>

    <div class="cont my-4">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5">
                    <form class="shadow-sm bg-white rounded p-4">
                        <div>
                            <h4

                            >
                                طلب تسجيل متبرع
                            </h4>

                            <p

                            >
                                يجب عليك تسجيل دخول لانشاء طلب تسجيل متبرع
                            </p>

                            <div>
                                <a
                                    href="{{route('showDonorRegisterForm')}}"
                                    class="btn btn-info shadow-sm m-2"
                                    style="height: 40px"
                                >
                                    تسجيل حساب جديد</a
                                >

                                <a
                                    href="{{route('showLoginForm')}}"
                                    class="btn shadow-sm btn-light m-2"
                                    style="height: 40px"
                                >تسجيل دخول</a
                                >
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-4">
                    <div class="cover">
                        <img class="img-fluid" src="{{asset('webAssets/images/new-login.png')}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
