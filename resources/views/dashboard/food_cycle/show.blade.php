@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Food Cycle Course</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Food Cycle course</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="white-box">

                <div class="row">
                    <div class="col-md-12 "> <strong>Report title</strong>
                        <br>
                        <p class="text-center">
                            <strong>{{$foodCycle->title}}</strong>
                            </p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 m-b-20">
                        <img class="img-responsive" src="{{asset('style/backend/images/' .$foodCycle->image)}}" alt="course-image">
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
