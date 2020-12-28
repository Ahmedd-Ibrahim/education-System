@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Register New student </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.student-register.update',$student->id)}}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label class="control-label col-md-3"> Student</label>
                                <div class="col-md-9">
                                    <select  name="student_id" class="custom-select my-1 mr-sm-2" id="phase" style="width: 100%">
                                        <option value="{{$student->id}}" disabled selected >{{$student->name}}</option>
                                    </select>

                                </div>
                                @error('student_id')
                                <div class="alert alert-danger">  {{$message}} </div>
                                @enderror
                                <h3>Courses </h3>
                                <p class="text-danger">If You didn't Choose Group This Student will not Join to the subject until you append it later </p>
                                <div class="row">
                                    @if(isset($subjects) && count($subjects) > 0)
                                        @foreach($subjects as $index => $subject)
                                            <div class="col-md-4">
                                                <label class="my-1 mr-2" for="phaseYear">{{$subject->name}} </label>
                                                <select name="subject_mini_group_id[]" class="custom-select my-1 mr-sm-2" id="phaseYear" style="width: 100%">
                                                    <option value="">choose</option>                                                            @if(isset($subject->SubjectMiniGroup))
                                                        @foreach($subject->SubjectMiniGroup as  $group)
                                                            <option value="{{$group->id}} " @if($student->SubjectMiniGroups()->find($group->id)) selected @endif>{{$group->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--./row-->
    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Courses Table</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Course</th>
                            <th>Group</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($student->SubjectMiniGroups))
                            @foreach($student->SubjectMiniGroups as $group)
                                <tr>
                                    <td>
                                        {{$group->Subject->name}}
                                    </td>
                                    <td>
                                        {{$group->name}}
                                    </td>

                                </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Subjects Scheduler Table</h3>
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
                                                <div class="row">
                                                    @if(isset($day->SubjectSchedulers) && count($day->SubjectSchedulers) > 0)
                                                        @foreach($day->SubjectSchedulers as $schedulers )
                                                            @if(in_array($schedulers->SubjectMiniGroup->id,$miniGroupIds))
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
                                                            @endif


                                                        @endforeach
                                                    @endif
                                                </div>
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
                            <th>Courses</th>

                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
