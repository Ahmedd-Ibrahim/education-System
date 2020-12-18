@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Register New student in Subject Groups </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.student-register.store')}}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                            @csrf
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Which Student will append Subject Group to Him</label>
                                        <div class="col-md-9">
                                            <p class="text-danger">Only students which doesn't have any subject group will appear here</p>
                                            <select  name="student_id" class="custom-select my-1 mr-sm-2" id="phase" style="width: 100%">
                                                <option value="">Choose</option>
                                                @if(isset($students) && count($students) > 0)
                                                    @foreach($students as $student)
                                                        <option value="{{$student->id}}">{{$student->name . " => class name:" .
                                                       $student->Class->name . " => Date of Birth: " . $student->bdate }}
                                                        </option>
                                                    @endforeach
                                                @endif
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
                                                            <option value="" selected >choose</option>                                                            @if(isset($subject->SubjectMiniGroup))
                                                                @foreach($subject->SubjectMiniGroup as  $group)
                                                                    <option value="{{$group->id}}">{{$group->name}}</option>
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
@endsection
