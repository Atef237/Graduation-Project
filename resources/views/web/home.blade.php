@extends('web.layout.master')


@section('title')
    وَتَعَاوَنُوا
@endsection

@section('content')


    <section class="hero">
        <div class="layout"></div>
        <div class="text-center">
            <img src="{{asset('webAssets/images/peace.png')}}" alt="" class="mb-3">
            <h1 >  وَتَعَاوَنُوا عَلَى الْبِرِّ وَالتَّقْوَى</h1>
            <p>جمعية غير ربحية لمساعدة الغير قادرين</p>

        </div>
    </section>

    <section class="services_online py-4">

        <div class="container-fluid">
            <h3 id="sr1" class="mb-3">الخدمات الالكترونية</h3>

            <div class="row justify-content-center">
                <div class="col-md-4 d-flex justify-content-center text-center">
                    <a href="{{auth()->check() ? route('askingForDonation') : route('beneficiaryAuth')}}">
                        <img src="{{asset('webAssets/images/benefit.6f8580e.svg')}}" alt="Handbag Icon" />


                        <p style="margin-top: 20px; font-size: 20px; font-weight: bold ;color: #F1B24A;">
                            المستفيد
                        </p>
                    </a>
                </div>
                <div class="col-md-4 d-flex justify-content-center text-center">
                    <a href="{{route('allProjects')}}">
                        <img src="{{asset('webAssets/images/doner.6f73474.svg')}}" alt="Handbag Icon" />

                        <p style="margin-top: 20px; font-size: 20px; font-weight: bold ;color: #2fbac5;">المتبرع</p>
                    </a>

                </div>
            </div>


        </div>
    </section>



@endsection
