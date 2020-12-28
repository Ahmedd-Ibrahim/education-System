@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Health Report</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">System</a></li>
                <li class="active">Academic Phases</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-12 m-b-20">
                        <img class="img-responsive" src="{{asset('style/backend/images/' .$healthReport->image)}}" alt="course-image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-xs-6 b-r"> <strong>Report title</strong>
                        <br>
                        <p class="text-muted">{{$healthReport->title}}</p>
                    </div>
                    <div class="col-md-3 col-xs-6 b-r"> <strong>Report Date</strong>
                        <br>
                        <p class="text-muted">{{$healthReport->report_date}}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h4>Report Description</h4>
                        <p>
                           {{$healthReport->content}}
                        </p>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
