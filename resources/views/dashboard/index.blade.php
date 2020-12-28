@extends('dashboard.layout.main')
@section('content')
    <!-- Page Content -->
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">University Dashboard</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">University</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Teachers</h3>
                <div class="text-right"> <span class="text-muted">Teacher Count</span>
                    <h1><sup><i class="icon-people p-r-10"></i></sup> {{\App\models\Teacher::count()}}</h1>
                </div>
                <span class="text-success"></span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">20% Complete</span> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Students</h3>
                <div class="text-right"> <span class="text-muted">Students Count</span>
                    <h1><sup><i class="fa fa-graduation-cap p-r-10"></i></sup> {{\App\models\Student::count()}}</h1>
                </div>
                <span class="text-success"></span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">230% Complete</span> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Subjects</h3>
                <div class="text-right"> <span class="text-muted">Subjects Count</span>
                    <h1><sup><i class="fa fa-book"></i></sup> {{\App\models\Subject::count()}}</h1>
                </div>
                <span class="text-info"></span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">20% Complete</span> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Custom Users</h3>
                <div class="text-right"> <span class="text-muted">Custom Users Count</span>
                    <h1><sup><i class="fa fa-users"></i></sup> {{\App\User::count()}}</h1>
                </div>
                <span class="text-inverse"></span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">230% Complete</span> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">University Earnings</h3>
                <span class="text-muted">calc student every month</span>
                <ul class="list-inline text-right">

                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #00a5e5;"></i>Students</h5> </li>

                </ul>
                <div id="morris-bar-chart" style="height:372px;"></div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Classes</h3>
                        <div class="text-right"> <span class="text-muted">Classes Count</span>
                            <h1><sup><i class="fa fa-graduation-cap p-r-10"></i></sup> {{\App\models\Classes::count()}}</h1>
                        </div>
                        <span class="text-success"></span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">230% Complete</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="white-box  m-b-15">

                        <div class="white-box">
                            <h3 class="box-title">Years</h3>
                            <div class="text-right"> <span class="text-muted">System Years</span>
                                <h1><sup><i class="fa fa-graduation-cap p-r-10"></i></sup> {{\App\models\PhaseYear::count()}}</h1>
                            </div>
                            <span class="text-success"></span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">230% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(isset($courses) & count($courses) >= 4)
        <div class="row">
      @foreach($courses as $course)
          <div class="col-md-3 col-xs-12 col-sm-6">
              <img class="img-responsive" alt="user" src="style/backend/plugins/images/big/c1.jpg">
              <div class="white-box">
                  <h4>{{$course->Subject->name}}</h4>
                  <p><span><i class="ti-user"></i> Professor: {{$course->Teacher->name}}</span></p>
                  <p><span><i class="fa fa-graduation-cap"></i> Class: {{$course->Class->name}}</span></p>
                  <p><span><i class="fa fa-graduation-cap"></i> Group: {{$course->SubjectMiniGroup->name}}</span></p>
                  <p><span><i class="fa fa-database"></i> Day: {{$course->day->name}}</span></p>
                  <p><span><i class="ti-alarm-clock"></i> start_at: {{$course->start_at}}</span></p>
                  <p><span><i class="ti-alarm-clock"></i> End at: {{$course->end_at}}</span></p>

                  <a href="@if(isset($phaseCourses)) {{route('admin.class-schedule.show',$phaseCourses->id)}} @else # @endif" class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</a>
              </div>
          </div>
      @endforeach

        </div>
       <!-- /.row -->
    @else
       <!-- .right-sidebar -->
       <div class="row">
           <div class="col-md-3 col-xs-12 col-sm-6">
               <img class="img-responsive" alt="user" src="style/backend/plugins/images/big/c2.jpg">
               <div class="white-box">
                   <h4>PHP Development Course2</h4>
                   <div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
                   <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                   <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                   <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                   <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
               </div>
           </div>
           <div class="col-md-3 col-xs-12 col-sm-6">
               <img class="img-responsive" alt="user" src="style/backend/plugins/images/big/c1.jpg">
               <div class="white-box">
                   <h4>ios Development Course</h4>
                   <div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
                   <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                   <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                   <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                   <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
               </div>
           </div>
           <div class="col-md-3 col-xs-12 col-sm-6">
               <img class="img-responsive" alt="user" src="style/backend/plugins/images/big/c4.jpg">
               <div class="white-box">
                   <h4>Android Development Course</h4>
                   <div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
                   <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                   <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                   <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                   <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
               </div>
           </div>
           <div class="col-md-3 col-xs-12 col-sm-6">
               <img class="img-responsive" alt="user" src="style/backend/plugins/images/big/c3.jpg">
               <div class="white-box">
                   <h4>Web Development Course</h4>
                   <div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
                   <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                   <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                   <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                   <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
               </div>
           </div>
       </div>
    @endif
    <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

    {{--    </div>--}}



@endsection
@push('scripts')

    <script>
        //line chart
        var line = new Morris.Bar({
            element: 'morris-bar-chart',
            data: [
                    @foreach ($sales_data as $data)
                {
                    month: "{{ $data->month }}", join: "{{ $data->counter }}"
                },
                    @endforeach

              ],
            xkey: 'month',
            ykeys: ['join'],
            labels: [ 'Students joined'],
            barColors:[ '#00a5e5'],
            hideHover: 'auto',
            barSizeRatio:0.10,
            gridLineColor: '#eef0f2',
            resize: true
        });
    </script>

@endpush
