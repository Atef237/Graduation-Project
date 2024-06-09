@extends('web.layout.master')

@section('title')
    طلب دعم
@endsection


@section('content')

    <div class="about">
        <h3>أبواب الجمعية</h3>
    </div>

    <section class="d-lg-block d-md-none d-none">
        <div class="cont_custom">

            @foreach($rows as $row)
                <div>
                    <span>{{$row->name}}</span>
                </div>
            @endforeach

        </div>
    </section>
    <section>
        <p class="my-3">المشاريع</p>
        <div class="container-fluid">
            <div class="row justify-content-center">

                @foreach($projects as $project)

                    <div class="col-lg-3 col-md-6">
                        <div class="projectOne projectOne_new border rounded">
                            <img src="{{asset('webAssets/images/one.jpeg')}}" alt="" class="projectimg" />

                            <div class="project-inputs w-100 p-2">
                                <h4>{{$project->name}}</h4>
                                <button class="btn btn-info mt-3 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal{{$project->id}}">طلب أستفادة</button>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

@endsection


@section('modules')
    @foreach( $projects as $project )
        <div class="modal fade" id="exampleModal{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                   <form action="{{route('storeAskingForDonation')}}" method="post">
                       @csrf
                       <div class="modal-header">
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                           <h5 class="modal-title" id="exampleModalLabel">طلب أستفادة </h5>
                       </div>
                       <div class="modal-body">
                           <div class="projectOne">

                               <div class="project-inputs w-100">
                                   <label for="name">الحالة الصحية</label>
                                   <input type="text" id="health_status" name="health_status" class="form-control" />

                                   <label for="phone">الحالة الاجتماعية</label>
                                   <input type="text" id="marital_status" name="marital_status" class="form-control"/>

                                   <label for="amount">عدد افراد الاسرة</label>
                                   <input type="number" name="number_of_family_members" class="form-control" />

                                   <label for="amount">صافي الدخل</label>
                                   <input type="number" name="net_income" class="form-control" />

                                   <label for="amount">العنوان</label>
                                   <input type="text" name="address" class="form-control" />

                                    <input type="hidden" name="project_id" value="{{$project->id}}">

                                   <button class="btn btn-info mt-3 w-100">طلب أستفادة</button>
                               </div>
                           </div>

                       </div>
                   </form>
                </div>
            </div>
            <!-- start our scripts  -->
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"
            ></script>
            </div>

    @endforeach
@endsection
