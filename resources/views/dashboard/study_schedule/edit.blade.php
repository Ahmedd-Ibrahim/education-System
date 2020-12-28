@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">{{$day->name}}  table</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li class="active">{{$day->name}}</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <form action="{{route('admin.study-schedule.update',$day->id)}}" method="post" id="study-form">
        @csrf
        @method('PATCH')
        <input type="text" name="scheduler_id" value="{{$day->id}}" hidden>
        <div>
            <label class="my-1 mr-2" for="day">Choose Day for this subjects <strong class="text-danger">*</strong></label>
            <select  name="name" class="custom-select my-1 mr-sm-2" id="day" style="width: 100%">
                <option  value="{{$day->name}}">{{$day->name}}</option>
            </select>
            @error('name')
            <div class="alert alert-danger">  {{$message}} </div>
            @enderror
            <br>
        </div>

        <div class="form-content">
            @if($day->SubjectSchedulers)
                @foreach($day->SubjectSchedulers as $index => $SubjectScheduler)

                    <div class="new-subject">

                        <div class="panel panel-info">
                            <div class="panel-heading"> Number {{$index}}
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a>

{{--data-perform="panel-dismiss"--}}

                                        <a href="{{route('admin.study-schedule.delete',$SubjectScheduler->id)}}" style="background: border-box; border: 0;" ><i class="ti-close"></i></a>

                                </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
{{--                                     id for  SubjectScheduler data--}}
                                    <input type="text" name="saturday[{{$index}}][id]" value="{{$SubjectScheduler->id}}" hidden>
                                    <div>

                                        <label class="my-1 mr-2" for="subject">Choose Subject <strong class="text-danger">*</strong></label>
                                        <select  name="saturday[{{$index}}][subject_id]" class="custom-select my-1 mr-sm-2 subject test" id="subject" style="width: 100%">
                                            <option value="">Choose</option>
                                            @foreach($subjects as $subject)
                                                <option
                                                    @if($subject->id == $SubjectScheduler->Subject->id)
                                                    selected
                                                    @endif
                                                    value="{{$subject->id }}">
                                                    {{$subject->name}}
                                                </option>
                                            @endforeach

                                        </select>
                                        @error('subject')
                                        <div class="alert alert-danger">    {{$message}} </div>
                                        @enderror
                                        <br>
                                    </div>

                                    <div>
                                        <label class="my-1 mr-2" for="subjectGroup">Choose Subject Group <strong class="text-danger">*</strong></label>
                                        <select  name="saturday[{{$index}}][subject_mini_group_id]" class="custom-select my-1 mr-sm-2 subjectGroup" id="subjectGroup" style="width: 100%">
                                            @foreach($SubjectScheduler->Subject->SubjectMiniGroup as $miniGroup)
                                                <option
                                                    @if($miniGroup->id == $SubjectScheduler->SubjectMiniGroup->id)
                                                    selected
                                                    @endif
                                                    value="{{$miniGroup->id}}">
                                                    {{$miniGroup->name}}
                                                </option>

                                            @endforeach
                                        </select>
                                        @error('subject')
                                        <div class="alert alert-danger">    {{$message}} </div>
                                        @enderror
                                        <br>
                                    </div>

                                    <div>
                                        <label class="my-1 mr-2" for="year">Which Year? <strong class="text-danger">*</strong></label>
                                        <select  name="saturday[{{$index}}][year_id]" class="custom-select my-1 mr-sm-2 year" id="year" style="width: 100%">
                                            @foreach($years as $year)
                                                <option  @if( $year->id == $SubjectScheduler->Year->id )
                                                         SELECTED
                                                         @endif
                                                         value="{{$year->id}}">
                                                    {{$year->yearsCount}}
                                                </option>
                                            @endforeach

                                        </select>
                                        @error('year')
                                        <div class="alert alert-danger">{{$message}} </div>
                                        @enderror
                                        <br>
                                    </div>
                                    <div>
                                        <label class="my-1 mr-2" for="group">Which Group in the Year? <strong class="text-danger">*</strong></label>
                                        <select  name="saturday[{{$index}}][group_id]" class="custom-select my-1 mr-sm-2 test" id="group" style="width: 100%">

                                            <option value="{{$SubjectScheduler->Group->id}}">
                                                {{$SubjectScheduler->Group->name}}
                                            </option>
                                        </select>
                                        @error('saturday[0][group_id]')
                                        <div class="alert alert-danger">    {{$message}} </div>
                                        @enderror
                                        <br>
                                    </div>

                                    <div>
                                        <label class="my-1 mr-2" for="phase">Choose Teacher <strong class="text-danger">*</strong></label>
                                        <select  name="saturday[{{$index}}][teacher_id]" class="custom-select my-1 mr-sm-2" id="teacher" style="width: 100%">
                                            <option value="">Choose</option>
                                            @if(isset($teachers) && count($teachers) > 0)
                                                @foreach($teachers as $teacher)
                                                    <option
                                                        @if($teacher->id == $SubjectScheduler->Teacher->id)
                                                        selected
                                                        @endif
                                                        value="{{$teacher->id}}">
                                                        {{$teacher->name}}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('teacher')
                                        <div class="alert alert-danger">    {{$message}} </div>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="my-1 mr-2" for="class">Choose Class <strong class="text-danger">*</strong></label>
                                        <select  name="saturday[{{$index}}][class_id]" class="custom-select my-1 mr-sm-2" id="class" style="width: 100%">
                                            <option value="">Choose</option>
                                            @if(isset($classes) && count($classes) > 0)
                                                @foreach($classes as $class)
                                                    <option
                                                        @if($class->id == $SubjectScheduler->Class->id)
                                                        selected
                                                        @endif
                                                        value="{{$class->id}}">
                                                        {{$class->name}}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('class')
                                        <div class="alert alert-danger">    {{$message}} </div>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-2 col-form-label">Starting Time <strong class="text-danger">*</strong></label>

                                        <input class="form-control" type="time" name="saturday[{{$index}}][start_at]" value="13:45:00" id="example-time-input">
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-2 col-form-label">Ending Time <strong class="text-danger">*</strong></label>

                                        <input class="form-control" type="time" name="saturday[{{$index}}][end_at]" value="13:45:00" id="example-time-input">
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-2 col-form-label">Description <small class="text-info">optional</small></label>
                                        <input class="form-control" type="text" name="saturday[{{$index}}][desc]" placeholder="description for this subject!" id="example-time-input" value="{{$SubjectScheduler->desc}}">
                                    </div>

                                    <div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
                @endforeach
            @endif
        </div>

        <div class="btn btn-success add-more-courses">Add more Courses in this day</div>
        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Update</button>
        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>

    </form>

    {{--                End of Form --}}
    </div>

    <script>
        {{--  Begin ajax for subject Group--}}
        $(`#subject`).on("change",function() {
            $("#subjectGroup").empty();
            $.ajax({
                url:`{{route('admin.study-schedule.edit',$day->id)}}`,
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
                url:`{{route('admin.study-schedule.edit',$day->id)}}`,
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
            window.z = {{isset($index) ? $index : 0}};
            $('.add-more-courses').on('click',function (e){
                e.preventDefault();
                z++;

                console.log(z);
                let html =
                    `
                <div class="new-subject">

                 <div class="panel panel-info">
                            <div class="panel-heading"> Number ${z}
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">


                    <label class="my-1 mr-2" for="phase">Choose Subject <strong class="text-danger">*</strong></label>
                    <select  name="saturday[${z}][subject_id]" class="custom-select my-1 mr-sm-2 subject test" id="subject" style="width: 100%">
                                    <option value="">Choose</option>
                                    @if(isset($subjects) && count($subjects) > 0)
                    @foreach($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                        @endforeach
                    @endif
                    </select>
@error('subject')
                    <div class="alert alert-danger">    {{$message}} </div>
                                @enderror
                    <br>

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

                           </div>
                            </div>
                        </div>

                        `;

                $('.form-content').append(html);
                console.log('success' + z);
                /* Begin Subject Groups */
                $(`.subject`).change(function() {
                    $(`select[name="saturday[${z}][subject_mini_group_id]"]`).empty();
                    $.ajax({
                        url:`{{route('admin.study-schedule.edit',$day->id)}}`,
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
                        url:`{{route('admin.study-schedule.edit',$day->id)}}`,
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
