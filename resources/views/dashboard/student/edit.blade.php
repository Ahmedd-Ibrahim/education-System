@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add Student</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">University</a></li>
                <li class="active">Add Student</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Basic Information</h3>

                <form class="form-material form-horizontal" method="POST" action="{{route('admin.student.update',$student->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Name
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="name" class="form-control" placeholder="enter student name" value="{{$student->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="bdate">Date of Birth
                        </label>
                        <div class="col-md-12">
                            <input type="date" id="bdate" name="bdate" class="form-control mydatepicker" placeholder="enter student birth date" value="{{$student->bdate}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Phone Number
                        </label>
                        <div class="col-md-12">
                            <input type="number" id="example-text" name="phone" class="form-control" placeholder="enter student name" value="{{$student->phone}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Address
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="address" class="form-control" placeholder="enter student name" value="{{$student->address}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12">Gender</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="gender">
                                <option>Select Gender</option>
                                <option @if($student->gender == 'male') Selected  @endif value="male" selected>Male</option>
                                <option @if($student->gender == 'female') Selected  @endif value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Profile Image</label>
                        <div class="col-sm-12">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <input type="file" name="avatar" value="aa">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Description</label>
                        <div class="col-md-12">
                            <textarea name="desc" class="form-control" rows="3"> {{$student->desc}} </textarea>
                        </div>
                    </div>
                    <label class="my-1 mr-2" for="phase">Which Education Phase this Student Belongs! </label>
                    <select  name="phase" class="custom-select my-1 mr-sm-2" id="phase" style="width: 100%">
                        <option value="">Choose</option>
                        @if(isset($phases) && count($phases) > 0)
                            @foreach($phases as $phase)
                                <option  @if($ownPhase->id == $phase->id) selected @endif value="{{$phase->id}}">{{$phase->name}}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('phase')
                    <div class="alert alert-danger">    {{$message}} </div>
                    @enderror
                    <label class="my-1 mr-2" for="phaseYear">Which Year this Student Belongs! </label>
                    <select name="phaseYear" class="custom-select my-1 mr-sm-2" id="phaseYear" style="width: 100%">
                        <option value="">Choose</option>
                        <option  selected value="{{$year->id}}">{{$year->yearsCount}}</option>
                    </select>
                    @error('phaseYear')
                    <div class="alert alert-danger">    {{$message}} </div>
                    @enderror
                    <label class="my-1 mr-2" for="class">Which  class This Student  Belongs! </label>
                    <select name="class_id" class="custom-select my-1 mr-sm-2" id="class" style="width: 100%">
                        <option value="">Choose</option>
                        <option SELECTED value="{{$class->id}}">{{$class->name}}</option>
                    </select>
                    @error('class')
                    <div class="alert alert-danger">    {{$message}} </div>
                    @enderror


                    <h3>Courses </h3>
                    <p class="text-danger">
                        If You didn't Choose Group This Student will not Join to the subject until you append it later
                    </p>
                    <div class="row">
                        @if(isset($subjects) && count($subjects) > 0)
                            @foreach($subjects as $index => $subject)
                                <div class="col-md-4">
                                    <label class="my-1 mr-2" for="phaseYear">{{$subject->name}} </label>
                                    <select name="subject_mini_group_id[]" class="custom-select my-1 mr-sm-2" id="phaseYear" style="width: 100%">
                                        <option value selected  >choose</option>
                                        @if(isset($subject->SubjectMiniGroup))
                                            @foreach($subject->SubjectMiniGroup as  $group)
                                                <option @if(in_array($group->id,$ownSubjectsIds) ) selected @endif value="@if($group->id) {{$group->id}}@else 0 @endif">{{$group->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            @endforeach
                        @endif
                    </div>



                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Update</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="white-box">
                <h3 class="box-title">Account Information</h3>
                <form class="form-material form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12" for="example-email">Email
                        </label>
                        <div class="col-md-12">
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="enter your email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-phone">Phone
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-phone" name="example-phone" class="form-control" placeholder="enter your phone" data-mask="(999) 999-9999">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="pwd">Password
                        </label>
                        <div class="col-md-12">
                            <input type="password" id="pwd" name="pwd" class="form-control" placeholder="enter your password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="cpwd">Confirm Password
                        </label>
                        <div class="col-md-12">
                            <input type="password" id="cpwd" name="cpwd" class="form-control" placeholder="confirm your password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="white-box">
                <h3 class="box-title">Social Information</h3>
                <form class="form-material form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12" for="furl">Facebook URL
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="furl" name="furl" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="turl">Twitter URL
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="turl" name="turl" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="gurl">Google Plus URL
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="gurl" name="gurl" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="inurl">LinkedIN URL
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="inurl" name="inurl" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <!-- .right-sidebar -->
    <script>
        $('#phase').change(function() {
            $('#phaseYear').empty()
            $.ajax({
                url:`{{route('admin.student.create')}}`,
                method:"GET",
                dataType: 'json',
                data:{
                    name: $('#phase').val(),
                },
                success: function (data){
                    $.each(data, function (key, value){
                        $('#phaseYear').append(`<option value="${value.id}">${value.yearsCount}</option>`)
                    });
                    console.log(data);
                }
            })
        })
        $('#phaseYear').change(function (){
            $('#class').empty();
            $.ajax({
                url: `{{route('admin.student.create')}}`,
                method:"GET",
                dataType:'json',
                data:{
                    className: $('#phaseYear').val(),
                },
                success: function (data){
                    $.each(data, function (key,value){
                        $('#class').append(`<option value="${value.id}">${value.name}</option>`)
                    });
                }
            });
        });
    </script>
@endsection
