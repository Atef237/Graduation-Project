@extends('dashboard.v1.index')
@section('title', __('all.donor_project'))
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('all.donor_project')}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('all.home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('all.donor_project')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr style="font-size: large ; font-family: cairo">
                            <th>#</th>
                            <th>{{__('all.donor_name')}}</th>
                            <th>{{__('all.project_name')}} </th>
                            <th>{{__('all.amount')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @foreach($rows as $row)
                            <tr>

                                <td>{{$i}}</td>
                                <td>{{$row->donor->name}}</td>
                                <td>{{$row->project->name}}</td>
                                <td>{{$row->amount}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- end row -->
@stop
