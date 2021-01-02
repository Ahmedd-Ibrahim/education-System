@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Teachers</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">University</a></li>
                <li class="active">Students</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->

    <!-- .row -->
    <div class="row">

        @if(isset($teachers) && count($teachers) > 0)
            @foreach($teachers as $teacher)
                <!-- .col -->
                <div class="col-md-4 col-sm-4">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 text-center">
                                <a href="{{route('admin.teacher.edit',$teacher)}}"><img src="{{$teacher->getImagePath()}}" alt="user" class="img-circle img-responsive"></a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <h3 class="box-title m-b-0">{{$teacher->name}}</h3>
                                <p>
                                 <address>
                                    {{$teacher->gender}}
                                    <br/>
                                    <br/>
                                    <abbr title="Phone"></abbr> {{$teacher->phone}}
                                    @if(isset($teacher->Subjects) )
                                        <h5>Subject:

                                         {{$teacher->Subjects()->first()->name}},

                                        </h5>
                                    @endif
                                  </address>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            @endforeach
            @endif


    </div>
    <!-- /.row -->


@endsection
