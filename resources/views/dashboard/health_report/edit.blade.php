@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Health Report</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.health-report.update',$healthReport->id)}}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Title</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Report Name" class="form-control" name="title" value="{{$healthReport->title}}" >
                                    </div>
                                </div>
                                @error('title')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">Report Date</label>
                                    <div class="col-md-9">
                                        <input type="date" placeholder="Report Date" id="bdate" class="form-control" name="report_date" value="{{$healthReport->report_date}}">
                                    </div>
                                </div>
                                @error('report_date')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">content</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="content" class="form-control" name="content" value="{{$healthReport->content}}">
                                        <span class="help-block"> Description for this Report </span> </div>
                                </div>

                                @error('content')
                                <div class="alert alert-danger">  {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">Report photo</label>
                                    <div class="col-md-9">
                                        <input type="file" placeholder="content" class="form-control" name="image">

                                    </div>
                                    @error('image')
                                    <div class="alert alert-danger">  {{$message}} </div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Which Student has this Report</label>
                                    <div class="col-md-9">

                                        <select  name="student_id" class="custom-select my-1 mr-sm-2" id="phase" style="width: 100%">
                                            <option value="">Choose</option>
                                            @if(isset($students) && count($students) > 0)
                                                @foreach($students as $student)
                                                    <option
                                                        @if($student->id == $healthReport->Student->id)
                                                            SELECTED
                                                        @endif
                                                        value="{{$student->id}}">{{$student->name . " => class name:" .
                                      $student->Class->name . " => Date of Birth: " . $student->bdate }}</option>
                                                @endforeach
                                            @endif


                                        </select>

                                    </div>
                                    @error('student_id')
                                    <div class="alert alert-danger">  {{$message}} </div>
                                    @enderror

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
