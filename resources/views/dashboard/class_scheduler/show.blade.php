@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Class Courses <small><a class="btn btn-custom" href="{{route('admin.study-schedule.edit',$course->id)}}">edit <i class="fa fa-edit"></i></a></small></h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">class</a></li>
                <li><a href="#">Courses</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">{{$course->name}} Table</h3>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Day</th>
                            <th>Courses</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($course->Days) && count($course->Days)  > 0)
                            @foreach($course->Days as $day)
                            <tr>
                                <td>{{$day->name}}</td>
                                <td>
                                    <div class="margin-vertical-10 ">
                                        <div class="" >
                                            @if(isset($day->SubjectSchedulers) && count($day->SubjectSchedulers) > 0)
                                                @foreach($day->SubjectSchedulers as $schedulers )
                                                    <div style="border: 1px solid #CCC; padding: 5px; margin-bottom: 5px">
                                                        <div  class="d-inline-block" style="border-right: 1px solid #CCC; padding: 5px">
                                                            <p>Course: {{$schedulers->Subject->name}}</p>
                                                            <p>Teacher: {{$schedulers->Teacher->name}}</p>
                                                        </div>
                                                        <div class="d-inline-block">
                                                            <p>
                                                                Start_at:
                                                                {{\Carbon\Carbon::createFromFormat('H:i:s',$schedulers->start_at)->format('h:i')}}
                                                            </p>
                                                            <p>
                                                                End at:
                                                                {{\Carbon\Carbon::createFromFormat('H:i:s',$schedulers->end_at)->format('h:i')}}


                                                            </p>
                                                        </div>




                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                        <thead>
                        <tr>
                            <th>Day</th>
                            <th>Subject</th>

                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- /.row -->
@endsection
