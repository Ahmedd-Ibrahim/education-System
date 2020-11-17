@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Students</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">University</a></li>
                <li class="active">Students</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    {{ $students->links() }}
    <div class="row el-element-overlay">
        <!-- .usercard -->
    @if(isset($students) && count($students) > 0)
            @foreach($students as $student)
                <!-- .usercard -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img style="height: 350px; width: 300px; " src="{{$student->getAvatarPath()}}" />
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{$student->getAvatarPath()}}"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="{{route('admin.student.edit',$student->id)}}"><i class="icon-link"></i></a></li>
                                            <li><a class="btn default btn-outline" href="{{route('admin.student.show',$student->id)}}"><i class="icon-user"></i></a></li>
                                            <li>
                                                <form action="{{route('admin.student.destroy',$student->id)}}" method="POST" class="" id="delete">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                              style="" class="btn default btn-outline" ><i class="icon-close"></i></button>
                                                </form>
                                              </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">{{$student->name}}</h3> <small>{{$student->year}}</small>
                                    <br/> <small>Barth date: {{$student->bdate}}</small>
                                    <p>Class Name: {{$student->Class->name}}</p>
                                    <p>Education Phase: {{$student->Class->PhaseYear->Phase->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.usercard-->
            @endforeach
        @endif
        <!-- /.usercard-->
    </div>
    {{ $students->links() }}
    <!-- /.row -->
    <!-- .row -->
@endsection
