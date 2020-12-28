@extends('dashboard.layout.main')
@section('content')

            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Health Report table</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Health Report</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Health Report </h3>
                        <p class="text-muted m-b-20">All Health Report </p>
                        <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                            <thead>
                            <tr>
                                <th data-toggle="true">Title</th>
                                <th> Content </th>
                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($health_reports) && count($health_reports) > 0)
                                @foreach($health_reports as $health_report)
                                    <tr>
                                        <td>{{$health_report->title}}</td>
                                        <td>{{$health_report->content}}</td>
                                        <td>
                                            {{$health_report->created_at}}
                                        </td>
                                        <td>

                                            <a class="btn btn-primary btn-custom d-inline-block" href="{{route('admin.health-report.show',$health_report->id)}}">Show <i class="fa fa-eye"></i></a>
                                            <a class="btn btn-primary btn-custom d-inline-block" href="{{route('admin.health-report.edit',$health_report->id)}}">Edit <i class="fa fa-edit"></i></a>
                                            <form class="d-inline-block" action="{{route('admin.health-report.destroy',$health_report)}}" METHOD="POST">
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
                                <th data-toggle="true">Name</th>
                                <th> Description </th>

                                <th data-hide="all"> Created at </th>
                                <th data-hide="all"> Action </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

    <!-- /#page-wrapper -->
@endsection
