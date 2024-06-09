@extends('dashboard.v1.index')
@section('title', __('all.donation_scopes_index'))
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('all.project_index')}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{__('all.home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('all.project_index')}}</li>
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
                            <th>{{__('all.name')}}</th>
                            <th>{{__('all.balance')}}</th>
                            <th>{{__('all.admin')}} </th>
                            <th>{{__('all.donation_scope')}} </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @foreach($rows as $row)
                            <tr>

                                <td>{{$i}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->financial_balance}}</td>
                                <td>{{$row->admin->name}}</td>
                                <td>{{$row->donation_scope->name}}</td>
{{--                                <td>--}}
{{--                                    <button type="button" class="btn btn-danger waves-effect waves-light"--}}
{{--                                            data-toggle="modal" data-target="#myModal{{$row->id}}">{{__('all.delete')}}--}}
{{--                                    </button>--}}

{{--                                    <a href="{{route('donation_scopes.edit',$row->id)}}">--}}
{{--                                        <button type="button"--}}
{{--                                                class="btn btn-info waves-effect waves-light">{{__('all.edit')}}--}}
{{--                                        </button>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
                            </tr>
                                <?php
                                $i++;
                                ?>
                            <div id="myModal{{$row->id}}" class="modal fade" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="myModalLabel">{{__('all.delete_element')}}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="font-16">{{__('all.are_you_sure_to_delete')}}</h5>

                                        </div>
{{--                                        <div class="modal-footer">--}}

{{--                                            <form method="post" enctype="multipart/form-data"--}}
{{--                                                  action="{{route('donation_projects.destroy',$row->id)}}">--}}
{{--                                                @csrf--}}
{{--                                                @method('DELETE')--}}
{{--                                                <button type="button" class="btn btn-light waves-effect"--}}
{{--                                                        data-dismiss="modal">{{__('all.cancel')}}--}}
{{--                                                </button>--}}
{{--                                                <button type="submit"--}}
{{--                                                        class="btn btn-danger waves-effect waves-light">{{__('all.delete')}}--}}
{{--                                                </button>--}}
{{--                                            </form>--}}


{{--                                        </div>--}}
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

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
