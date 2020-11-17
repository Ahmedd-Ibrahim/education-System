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
                                    <option value="saturday">saturday</option>
                                    <option value="sunday">sunday</option>
                                    <option value="monday">monday</option>
                                    <option value="tuesday">tuesday</option>
                                    <option value="wednesday">wednesday</option>
                                    <option value="thursday">thursday</option>
                        </select>
                        @error('day')
                        <div class="alert alert-danger">    {{$message}} </div>
                        @enderror
                        <br>
                    </div>


                    <div class="form-content" >
                    <div class="new-subject">

                            <div>
                                <label class="my-1 mr-2" for="phase">Choose Subject <strong class="text-danger">*</strong></label>
                                <select  name="saturday[0][subject_id]" class="custom-select my-1 mr-sm-2" id="subject" style="width: 100%">
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
                                @error('teacher')
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

                        </div>


                    </div>
                    <div class="btn btn-success add-more-courses">Add more Courses in this day</div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">save</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>

{{--                End of Form --}}



        </div>

        <script>
         var   x = 1;
            $('.add-more-courses').on('click',function (e){
                e.preventDefault();

              z =  x++

                var html =
                    `
                    <div class="new-subject">

               <div>
                   <label class="my-1 mr-2" for="phase">Choose Subject <strong class="text-danger">*</strong></label>
                   <select  name="saturday[${z}][subject_id]" class="custom-select my-1 mr-sm-2" id="subject" style="width: 100%">
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
                </div>
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
@error('teacher')
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
            });

        </script>

@endsection
