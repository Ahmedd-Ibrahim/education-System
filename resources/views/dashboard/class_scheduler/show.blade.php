@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">{{$course->name}} Table </h4>
            <h5>
                <a class="btn btn-custom" href="{{route('admin.study-schedule.create',$course->id)}}">Add new Day to this table <i class="fa fa-edit"></i></a>
            </h5>
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
                            <th>Action</th>
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
                                            <div class="row">
                                            @if(isset($day->SubjectSchedulers) && count($day->SubjectSchedulers) > 0)
                                                @foreach($day->SubjectSchedulers as $schedulers )


                                                        <div class="col-md-6">
                                                            <div  style="border: 1px solid #03a9f3; padding: 5px; margin-bottom: 5px;">
                                                                <div  class="d-inline-block" >
                                                                    <p class="d-inline-block">
                                                                        Year:
                                                                    <div
                                                                        style="font-size: 16px;font-weight: 400;width: 50%;float: right;"
                                                                        class="d-inline-block">
                                                                        {{$schedulers->Group->PhaseYear->yearsCount}}</div></p>
                                                                    <p class="d-inline-block">Year Group: <div
                                                                        style="font-size: 16px;font-weight: 400;width: 50%;float: right;"
                                                                        class="d-inline-block">{{$schedulers->Group->name}}</div></p>
                                                                    <p class="d-inline-block">Course:
                                                                    <div
                                                                        style="font-size: 16px;font-weight: 400;width: 50%;float: right;"
                                                                        class="d-inline-block">
                                                                        {{$schedulers->Subject->name}}</div></p>
                                                                    <p class="d-inline-block">Course Group:
                                                                    <div
                                                                        style="font-size: 16px;font-weight: 400;width: 50%;float: right;"
                                                                        class="d-inline-block">
                                                                        {{$schedulers->SubjectMiniGroup->name}}</div></p>
                                                                    <p class="d-inline-block">Teacher:
                                                                    <div
                                                                        style="font-size: 16px;font-weight: 400;width: 50%;float: right;"
                                                                        class="d-inline-block">
                                                                        {{$schedulers->Teacher->name}}</div></p>
                                                                    <p class="d-inline-block">Class:
                                                                    <div
                                                                        style="font-size: 16px;font-weight: 400;width: 50%;float: right;"
                                                                        class="d-inline-block">
                                                                        {{$schedulers->Class->name}}</div></p>
                                                                    <p class="d-inline-block">
                                                                        Start_at: <div
                                                                        style="font-size: 16px;font-weight: 400;width: 50%;float: right;"
                                                                        class="d-inline-block">
                                                                        {{\Carbon\Carbon::createFromFormat('H:i:s',$schedulers->start_at)->format('h:i')}}
                                                                    </div></p>
                                                                    <p class="d-inline-block">
                                                                        End at:
                                                                    <div
                                                                        style="font-size: 16px;font-weight: 400;width: 50%;float: right;"
                                                                        class="d-inline-block">
                                                                        {{\Carbon\Carbon::createFromFormat('H:i:s',$schedulers->end_at)->format('h:i')}}

                                                                    </div></p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                @endforeach
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><a class="btn btn-primary btn-custom d-inline-block" href="{{route("admin.study-schedule.edit",$day->id)}}">Edit <i class="fa fa-edit"></i></a>

                                    <form class="d-inline-block" action="{{route('admin.study-schedule.destroy',$day)}}" METHOD="POST">
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
                            <th>Day</th>
                            <th>Courses</th>
                            <th>Action</th>
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
