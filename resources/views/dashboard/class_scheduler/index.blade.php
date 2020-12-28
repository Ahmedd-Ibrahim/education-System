@extends('dashboard.layout.main')
@section('content')

            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Food Course table</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">schedulers</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Schedulers</h3>

                        <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                            <thead>
                            <tr>
                                <th data-toggle="true">Title</th>
                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($schedulers) && count($schedulers) > 0)
                                @foreach($schedulers as $scheduler)
                                    <tr>
                                        <td>{{$scheduler->name}}</td>

                                        <td>
                                            {{$scheduler->created_at}}
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-custom d-inline-block" href="{{route('admin.class-schedule.edit',$scheduler->id)}}">Edit <i class="fa fa-edit"></i></a>
                                            <a class="btn btn-primary btn-custom d-inline-block" href="{{route('admin.class-schedule.active',$scheduler->id)}}"> {{$scheduler->active}}<i class="fa fa-edit"></i></a>
                                            <a class="btn btn-primary btn-custom d-inline-block" href="{{route('admin.class-schedule.show',$scheduler->id)}}"> show Table <i class="fa fa-edit"></i></a>
                                            <form class="d-inline-block" action="{{route('admin.class-schedule.destroy',$scheduler)}}" METHOD="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger d-inline-block" >Delete <i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                            <thead>
                            <tr>
                                <th data-toggle="true">title</th>
                                <th daxta-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

    <!-- /#page-wrapper -->
@endsection
