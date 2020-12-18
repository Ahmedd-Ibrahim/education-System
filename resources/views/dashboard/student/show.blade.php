@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Student Profile</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">University</a></li>
                <li class="active">Student Profile</li>
            </ol>
        </div>
    </div>
    <!-- .row -->
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="white-box">
                <div class="user-bg" style="display: contents"> <img  width="100%" alt="user" src="{{$student->getAvatarPath()}}"> </div>
                <div class="user-btm-box">
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-6 b-r"><strong>Name</strong>
                            <p>{{$student->name}}</p>
                        </div>
                        <div class="col-md-6"><strong>Class</strong>
                            <p>{{$student->Class->name}}</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-6 b-r"><strong>Study Phase</strong>
                            <p>{{$student->Class->PhaseYear->Phase->name}}</p>
                        </div>
                        <div class="col-md-6"><strong>Phone</strong>
                            <p>{{$student->phone}}</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-12"><strong>Address</strong>
                            <p>{{$student->address}}</p>
                        </div>
                    </div>
                    <hr>
                    <!-- /.row -->
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-purple"><i class="ti-facebook"></i></p>
                        <h1>258</h1> </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-blue"><i class="ti-twitter"></i></p>
                        <h1>125</h1> </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-danger"><i class="ti-google"></i></p>
                        <h1>140</h1> </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                        <br>
                        <p class="text-muted">{{$student->name}}</p>
                    </div>
                    <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                        <br>
                        <p class="text-muted">{{$student->phone}}</p>
                    </div>
                    <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                        <br>
                        <p class="text-muted">jane@gmail.com</p>
                    </div>
                    <div class="col-md-3 col-xs-6"> <strong>class</strong>
                        <br>
                        <p class="text-muted">{{$student->Class->name}}</p>
                    </div>
                </div>
                <hr>
                <p class="m-t-30">
                    @if($student->desc != null)
                        {{$student->desc}}
                    @else
                        No Description For this Student
                    @endif
                </p>
                <h4 class="m-t-30">Food Cycle Course </h4>
                <p class="small">  <a class="btn btn-primary" style="padding: 5px;font-size: 12px" href="{{url('/dashboard/food-cycle/create?student='.$student->id)}}">Add new Cycle Course</a></p>
                <hr>
                <ul>
                    @if(isset($student->FoodCycles))
                        @foreach($student->FoodCycles as $food)
                            <li style="padding-bottom: 20px; font-size: 17px">
                                <a href="{{route('admin.food-cycle.show',$food->id)}}">
                                    {{$food->title}}
                                </a></li>

                        @endforeach
                    @else
                        <li>
                            No food Course
                        </li>
                    @endif
                </ul>
                <h4 class="m-t-30">Health Report</h4>
                <p class="small">
                    <a class="btn btn-primary" style="padding: 5px;font-size: 12px"
                       href="{{url('/dashboard/health-report/create?student='.$student->id)}}">
                        Add new Health Report
                    </a></p>

                <hr>
                <ul>
                    @if(isset($student->HealthReports) && count($student->HealthReports) > 0)
                        @foreach($student->HealthReports as $HealthReport)
                            <li style="padding-bottom: 20px"><a href="{{route('admin.health-report.show',$HealthReport->id)}}">
                                    {{$HealthReport->title}}

                                </a>
                                <span>date :{{$HealthReport->report_date}}</span></li>

                        @endforeach
                    @else
                        <li>
                            No Reports
                        </li>
                    @endif


                </ul>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
@endsection
