@extends('web.layout.master')


@section('title')
    وَتَعَاوَنُوا
@endsection


@section('content')



    <div class="about">
        <h3>تسجيل الدخول</h3>
    </div>

    <section class="my-4">
        <div
            class="cont"

        >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <form style="
                      margin: 80px;
                      border: 1px solid rgba(0, 0, 0, 0.1);
                      padding: 20px;
                      background-color: #fff;
                      border-radius: 6px;
                    " action="{{route('postLogin')}}" method="post">
                                @csrf
                                <div class="border rounded d-flex g-3 p-2 mb-3">
                                    <i
                                        class="fas fa-user"
                                        style="color: #2fbac5;  font-size: 27px"
                                    ></i>
                                    <input
                                        type="number"
                                        name="phone"
                                        placeholder="ادخل رقم الهاتف "
                                        required
                                        class="form-control border-0"
                                    />
                                </div>
                                <div
                                    class="border rounded d-flex g-3 p-2 mb-3"
                                >
                                    <i
                                        class="fas fa-lock"
                                        style="color: #2fbac5; font-size: 27px"
                                    ></i>
                                    <input
                                        type="password"
                                        name="password"
                                        placeholder="ادخل الرقم السرى"
                                        required
                                        class="form-control border-0"
                                    />
                                </div>


                                <div class="button input-box">
                                    <input
                                        type="submit"
                                        value="دخول"
                                        style="
                          background-color: #2fbac5;
                          outline: none;
                          border: none;
                          margin-bottom: 35px;
                          margin-top: 35px;
                          width: 100%;
                          height: 50px;
                          color: #fff;
                          font-size: 20px;
                          padding: 0;
                          cursor: pointer;
                          border-radius: 6px;
                        "
                                    />
                                </div>

                                <div
                                    class="text sign-up-text"
                                    style="text-align: center; margin-bottom: 35px"
                                >
                                    ليس لديك اى حساب ؟

                                    <label>
                                        <a
                                            href="{{route('showRegisterForm')}}"
                                            style="text-decoration: none; color: #2fbac5"
                                        >
                                            تسجيل حساب جديد</a
                                        >
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img
                            class="img-fluid"
                            src="{{asset('webAssets/images/login.png')}}"

                        />
                    </div>
                </div>
            </div>



        </div>
    </section>


@endsection
