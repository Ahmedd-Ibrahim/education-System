@extends('dashboard.layout.main')
@section('content')


        <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">{{$scheduler->name}}  table</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li class="active">{{$scheduler->name}}</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

                <form action="{{route('admin.study-schedule.store')}}" method="post" id="study-form">
                    @csrf
                    <input type="text" name="scheduler_id" value="{{$scheduler->id}}" hidden>
                    <div>
                        <label class="my-1 mr-2" for="day">Choose Day for this subjects <strong class="text-danger">*</strong></label>
                        <select  name="name" class="custom-select my-1 mr-sm-2" id="day" style="width: 100%">
                            <option value="">Choose</option>
                            @isset($days)
                                @foreach($days as $day)
                                    <option
                                        value="{{$day}}"
                                        @if(isset($scheduler->days))
                                        @foreach($scheduler->days as $schedulerDay)
                                        @if($schedulerDay->name == $day)
                                        disabled
                                        @endif
                                        @endforeach
                                        @endif
                                    >{{$day}}</option>
                                @endforeach
                            @endisset
                        </select>
                        @error('name')
                        <div class="alert alert-danger">  {{$message}} </div>
                        @enderror
                        <br>
                    </div>
                    <div class="form-content">
                    <div class="new-subject">
                        <div class="panel panel-info">
                            <div class="panel-heading"> new Course
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                <label class="my-1 mr-2" for="subject">Choose Subject <strong class="text-danger">*</strong></label>
                                <select  name="saturday[0][subject_id]" class="custom-select my-1 mr-sm-2 subject test" id="subject" style="width: 100%">
                                    <option value="">Choose</option>
                                    @if(isset($subjects) && count($subjects) > 0)
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('saturday.0.subject_id')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                                <br>
                        <div>
                                <label class="my-1 mr-2" for="subjectGroup">Choose Subject Group <strong class="text-danger">*</strong></label>
                                <select  name="saturday[0][subject_mini_group_id]" class="custom-select my-1 mr-sm-2 subjectGroup" id="subjectGroup" style="width: 100%">
                                    <option value="">Choose</option>
                                </select>
                                @error('saturday.0.subject_mini_group_id')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror
                                <br>
                            </div>
                        <div>
                            <label class="my-1 mr-2" for="year">Which Year? <strong class="text-danger">*</strong></label>
                            <select  name="saturday[0][year_id]" class="custom-select my-1 mr-sm-2 year" id="year" style="width: 100%">
                                <option value="">Choose</option>
                                @if(isset($years) && count($years) > 0)
                                    @foreach($years as $year)
                                        <option value="{{$year->id}}">{{$year->yearsCount}}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('saturday.0.year_id')
                            <div class="alert alert-danger">    {{$message}} </div>
                            @enderror
                            <br>
                        </div>
                        <div>
                            <label class="my-1 mr-2" for="group">Which Group in the Year? <strong class="text-danger">*</strong></label>
                            <select  name="saturday[0][group_id]" class="custom-select my-1 mr-sm-2 test" id="group" style="width: 100%">
                                <option value="">Choose</option>
                            </select>
                            @error('saturday.0.group_id')
                            <div class="alert alert-danger">    {{$message}} </div>
                            @enderror
                            <br>
                        </div>

                            <div>
                                <label class="my-1 mr-2" for="phase">Choose Teacher <strong class="text-danger">*</strong></label>
                                <select  name="saturday[0][teacher_id]" class="custom-select my-1 mr-sm-2" id="teacher" style="width: 100%">
                                    <option value="">Choose</option>
                                    @if(isset($teachers) && count($teachers) > 0)
                                        @foreach($teachers as $teacher)
                                            <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('saturday.0.teacher_id')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror
                            </div>

                            <div>
                                <label class="my-1 mr-2" for="class">Choose Class <strong class="text-danger">*</strong></label>
                                <select  name="saturday[0][class_id]" class="custom-select my-1 mr-sm-2" id="class" style="width: 100%">
                                    <option value="">Choose</option>
                                    @if(isset($classes) && count($classes) > 0)
                                        @foreach($classes as $class)
                                            <option value="{{$class->id}}">{{$class->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('saturday.0.class_id')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="example-time-input" class="col-2 col-form-label">Starting Time <strong class="text-danger">*</strong></label>

                                <input class="form-control" type="time" name="saturday[0][start_at]" value="13:45:00" id="example-time-input">
                            </div>
                            <div class="form-group row">
                                <label for="example-time-input" class="col-2 col-form-label">Ending Time <strong class="text-danger">*</strong></label>

                                <input class="form-control" type="time" name="saturday[0][end_at]" value="13:45:00" id="example-time-input">
                            </div>

                            <div class="form-group row">
                                <label for="example-time-input" class="col-2 col-form-label">Description <small class="text-info">optional</small></label>
                                <input class="form-control" type="text" name="saturday[0][desc]" placeholder="description for this subject!" id="example-time-input">
                            </div>

                            <div>
                                <hr>
                            </div>
                            </div></div></div></div>
                        </div>
                    </div>
                    <div class="btn btn-success add-more-courses">Add more Courses in this day</div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">save</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>

                </form>

{{--                End of Form --}}
        </div>

        <script>
{{--  Begin ajax for subject Group--}}
            $(`#subject`).on("change",function() {
                $("#subjectGroup").empty();
                $.ajax({
                    url:`{{route('admin.study-schedule.create',$scheduler)}}`,
                    method:"GET",
                    dataType: 'json',
                    data:{
                        name: $(this).val(),
                    },
                    success: function (data){
                        console.log(data);
                        $.each(data, function (key, value)
                        {
                            $("#subjectGroup").append(`<option value="${value.id}">${value.name}</option>`)
                        });

                    }
                }); // End of Ajax

            });

{{--  End  ajax for subject Group--}}

{{--  Begin ajax for main year Group--}}

$(`#year`).on("change",function() {
    $("#group").empty();
    $.ajax({
        url:`{{route('admin.study-schedule.create',$scheduler)}}`,
        method:"GET",
        dataType: 'json',
        data:{
            year: $(this).val(),
        },
        success: function (data){
            console.log(data);
            $.each(data, function (key, value)
            {
                $("#group").append(`<option value="${value.id}">${value.name}</option>`)
            });

        }
    }); // End of Ajax

});
{{--  End  ajax for main year Group--}}

/* Append mini Groups to Subject*/

         function calc()
         {
             window.z = 0;

             $('.add-more-courses').on('click',function (e){
                 e.preventDefault();
                 z++;
                 console.log(z);
                 let html =
                     `
                    <div class="new-subject">
                  <div>
                                <label class="my-1 mr-2" for="phase">Choose Subject <strong class="text-danger">*</strong></label>
                                <select  name="saturday[${z}][subject_id]" class="custom-select my-1 mr-sm-2 subject test" id="subject" style="width: 100%">
                                    <option value="">Choose</option>
                                    @if(isset($subjects) && count($subjects) > 0)
                     @foreach($subjects as $subject)
                     <option value="{{$subject->id}}">{{$subject->name}}</option>
                                        @endforeach
                                  @endif
                     </select>

                       @error('saturday.0.subject_id')
                     <div class="alert alert-danger">    {{$message}} </div>
                      @enderror
                     <br>
                 </div>
             <div>
                     <label class="my-1 mr-2" for="subjectGroup">Choose Subject Group <strong class="text-danger">*</strong></label>
                     <select  name="saturday[${z}][subject_mini_group_id]" class="custom-select my-1 mr-sm-2" id="subjectGroup" style="width: 100%">
                                    <option value="">Choose</option>
                                </select>
                    <br>
                </div>



                           <div>
                            <label class="my-1 mr-2" for="year">Which Year? <strong class="text-danger">*</strong></label>
                            <select  name="saturday[${z}][year_id]" class="custom-select my-1 mr-sm-2 test" id="year" style="width: 100%">
                                <option value="">Choose</option>
                                @if(isset($years) && count($years) > 0)
                     @foreach($years as $year)
                     <option value="{{$year->id}}">{{$year->yearsCount}}</option>
                                    @endforeach
                     @endif
                     </select>
                       @error('year')
                     <div class="alert alert-danger">    {{$message}} </div>
                      @enderror
                     <br>
                 </div>


                 <div>
                     <label class="my-1 mr-2" for="group">Which Group in the Year? <strong class="text-danger">*</strong></label>
                     <select  name="saturday[${z}][group_id]" class="custom-select my-1 mr-sm-2 test" id="group" style="width: 100%">
                         <option value="">Choose</option>
                     </select>

<div>
<label class="my-1 mr-2" for="phase">Choose Teacher <strong class="text-danger">*</strong></label>
<select  name="saturday[${z}][teacher_id]" class="custom-select my-1 mr-sm-2" id="teacher" style="width: 100%">
                       <option value="">Choose</option>
@if(isset($teachers) && count($teachers) > 0)
                     @foreach($teachers as $teacher)
                     <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                          @endforeach
                     @endif
                     </select>
                     </div>
                            <div>
                                <label class="my-1 mr-2" for="class">Choose Class <strong class="text-danger">*</strong></label>
                                <select  name="saturday[${z}][class_id]" class="custom-select my-1 mr-sm-2" id="class" style="width: 100%">
                                    <option value="">Choose</option>
                                    @if(isset($classes) && count($classes) > 0)
                     @foreach($classes as $class)
                     <option value="{{$class->id}}">{{$class->name}}</option>
                                        @endforeach
                     @endif
                     </select>
@error('class')
                     <div class="alert alert-danger">    {{$message}} </div>
                                @enderror
                     </div>
                    <div class="form-group row">
                        <label for="example-time-input" class="col-2 col-form-label">Starting Time <strong class="text-danger">*</strong></label>

                            <input class="form-control" type="time" name="saturday[${z}][start_at]" value="13:45:00" id="example-time-input">
                          </div>
                           <div class="form-group row">
                              <label for="example-time-input" class="col-2 col-form-label">Ending Time <strong class="text-danger">*</strong></label>

                                  <input class="form-control" type="time" name="saturday[${z}][end_at]" value="13:45:00" id="example-time-input">
                          </div>

                          <div class="form-group row">
                              <label for="example-time-input" class="col-2 col-form-label">Description <small class="text-info">optional</small></label>
                                  <input class="form-control" type="text" name="saturday[${z}][desc]" placeholder="description for this subject!" id="example-time-input">
                          </div>

                          <div>
                          </div>
                          <hr>
`;

                 $('.form-content').append(html);
                 console.log('success' + z);
/* Begin Subject Groups */
                 $(`.subject`).change(function() {
                     $(`select[name="saturday[${z}][subject_mini_group_id]"]`).empty();
                     $.ajax({
                         url:`{{route('admin.study-schedule.create',$scheduler)}}`,
                         method:"GET",
                         dataType: 'json',
                         data:{
                             name: $(this).val(),
                         },
                         success: function (data){
                             console.log(data);
                             $.each(data, function (key, value)
                             {
                                 $(`select[name="saturday[${z}][subject_mini_group_id]"]`).append(`<option value="${value.id}">${value.name}</option>`)
                             });

                         }
                     }); // End of ajax

                 });
                 /* End Subject Group */


                 /* Begin Main Groups*/
                 $(`select[name="saturday[${z}][year_id]"]`).on("change",function() {
                     $(`select[name="saturday[${z}][group_id]"]`).empty();
                     $.ajax({
                         url:`{{route('admin.study-schedule.create',$scheduler)}}`,
                         method:"GET",
                         dataType: 'json',
                         data:{
                             year: $(this).val(),
                         },
                         success: function (data){
                             console.log(data);
                             $.each(data, function (key, value)
                             {
                                 $(`select[name="saturday[${z}][group_id]"]`).append(`<option value="${value.id}">${value.name}</option>`)
                             });

                         }
                     }); // End of Ajax

                 });
                 /* End  Main Groups*/

             }); // end of append
         } // End of calc

calc();
        </script>

@endsection
