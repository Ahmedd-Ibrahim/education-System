@extends('dashboard.layout.main')
@section('content')
    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> System Permissions</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.permission.store')}}" class="form-horizontal form-bordered" method="POST">
                            @csrf
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Settings
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">

                                            <div class="row">

                                                @if($settings)
                                                    @foreach($settings as $setting)
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-check form-control" style="border: none">
                                                                <input name="permission[]" class="form-check-input form-check-input" type="checkbox" value="{{$setting->name}}" id="defaultCheck1">
                                                                <label class="form-check-label " for="defaultCheck1" style="margin: 2px;">
                                                                    {{$setting->name}}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif

                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                config
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">

                                            <div class="row">
                                                @if($configs)
                                                    @foreach($configs as $config)
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-check form-control" style="border: none">
                                                                <input name="permission[]" class="form-check-input form-check-input" type="checkbox" value="{{$config->name}}" id="defaultCheck1">
                                                                <label class="form-check-label " for="defaultCheck1" style="margin: 2px;">
                                                                    {{$config->name}}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#teacher" aria-expanded="false" aria-controls="teacher">
                                                Teacher
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="teacher" class="collapse" aria-labelledby="teacher" data-parent="#accordion">
                                        <div class="card-body">


                                            <div class="row">
                                                @if($profs)
                                                    @foreach($profs as $prof)
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-check form-control" style="border: none">
                                                                <input name="permission[]" class="form-check-input form-check-input" type="checkbox" value="{{$prof->name}}" id="defaultCheck1">
                                                                <label class="form-check-label " for="defaultCheck1" style="margin: 2px;">
                                                                    {{$prof->name}}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>


                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Classes
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                @if($class)
                                                    @foreach($class as $class_info)
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-check form-control" style="border: none">
                                                                <input name="permission[]" class="form-check-input form-check-input" type="checkbox" value="{{$class_info->name}}" id="defaultCheck1">
                                                                <label class="form-check-label " for="defaultCheck1" style="margin: 2px;">
                                                                    {{$class_info->name}}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#subject" aria-expanded="false" aria-controls="subject">
                                                subject
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="subject" class="collapse" aria-labelledby="subject" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                @if($subjects)
                                                    @foreach($subjects as $subject)
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-check form-control" style="border: none">
                                                                <input name="permission[]" class="form-check-input form-check-input" type="checkbox" value="{{$subject->name}}" id="defaultCheck1">
                                                                <label class="form-check-label " for="defaultCheck1" style="margin: 2px;">
                                                                    {{$subject->name}}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#health" aria-expanded="false" aria-controls="health">
                                                health
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="health" class="collapse" aria-labelledby="health" data-parent="#accordion">
                                        <div class="card-body">

                                            <div class="row">
                                                @if($healths)
                                                    @foreach($healths as $health)
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-check form-control" style="border: none">
                                                                <input name="permission[]" class="form-check-input form-check-input" type="checkbox" value="{{$health->name}}" id="defaultCheck1">
                                                                <label class="form-check-label " for="defaultCheck1" style="margin: 2px;">
                                                                    {{$health->name}}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#food" aria-expanded="false" aria-controls="food">
                                                food
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="food" class="collapse" aria-labelledby="food" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                @if($foods)
                                                    @foreach($foods as $food)
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-check form-control" style="border: none">
                                                                <input name="permission[]" class="form-check-input form-check-input" type="checkbox" value="{{$food->name}}" id="defaultCheck1">
                                                                <label class="form-check-label " for="defaultCheck1" style="margin: 2px;">
                                                                    {{$food->name}}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#scheduler" aria-expanded="false" aria-controls="scheduler">
                                                scheduler
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="scheduler" class="collapse" aria-labelledby="scheduler" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                @if($schedulers)
                                                    @foreach($schedulers as $scheduler)
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-check form-control" style="border: none">
                                                                <input name="permission[]" class="form-check-input form-check-input" type="checkbox" value="{{$scheduler->name}}" id="defaultCheck1">
                                                                <label class="form-check-label " for="defaultCheck1" style="margin: 2px;">
                                                                    {{$scheduler->name}}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Which Phase Will this group Belong </label>
                            <select name="role" class="custom-select my-1 mr-sm-2" id="phase" style="width: 100%">
                                <option value="">Choose</option>
                                @isset($roles)
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                @endisset
                            </select>
                            @error('role')
                            <div class="alert alert-danger"> {{$message}} </div>
                            @enderror
                            <div class="form-actions" style="padding-top: 10px">
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
    <!--./row-->
@endsection
