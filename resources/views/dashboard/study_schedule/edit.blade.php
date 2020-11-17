@extends('dashboard.layout.main')
@section('content')


    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Academic  Phases System <a href="{{route('admin.studyPhase.index')}}" class="btn btn-success">Show Table</a></div>

                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="col-md-12">
                                    <h4>Add this Record From Scratch</h4>
                                    <form style="margin-bottom: 50px" action="{{route('admin.studyPhase.update',$phase)}}" class="form-horizontal form-bordered" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-body">
                                            <p class="text-danger">Be Carefull when You add years, if You want Remove exists Data And Add from Scratch this is the correct form, If you wanna Append years to Your Education Chosse Another form</p>
                                            <div class="form-group">
                                                <label class="col-md-12">Phase Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="name" placeholder="Phase Name" value="{{$phase->name}}">
                                                </div>
                                            </div>
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">How many Academic year in This Phase? </label>
                                            <select disabled class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="width: 100%">
                                                <option @if(count($phase->PhaseYear) == 1) Selected @endif value="1">One</option>
                                                <option @if(count($phase->PhaseYear) == 2) Selected @endif value="1,2">Two</option>
                                                <option @if(count($phase->PhaseYear) == 3) Selected @endif value="1,2,3">Three</option>
                                                <option @if(count($phase->PhaseYear) == 4) Selected @endif value="1,2,3,4">Four</option>
                                                <option @if(count($phase->PhaseYear) == 5) Selected @endif value="1,2,3,4,5">Five</option>
                                                <option @if(count($phase->PhaseYear) == 6) Selected @endif value="1,2,3,4,5,6">Six</option>
                                            </select>
                                            @error('counter')
                                            <div class="alert alert-danger">    {{$message}} </div>
                                            @enderror
                                        </div>
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">APPEND NEW YEARS TO THIS Phase? </label>
                                        <select  name="yearsCount" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="width: 100%">
                                            <option   selected value="">choose..</option>
                                            <option value="1">One</option>
                                            <option value="1,2">Two</option>
                                            <option value="1,2,3">Three</option>
                                            <option value="1,2,3,4">Four</option>
                                            <option value="1,2,3,4,5">Five</option>
                                            <option value="1,2,3,4,5,6">Six</option>
                                        </select>

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update </button>
                                                            <a href="{{route('home')}}" type="button" class="btn btn-default">Cancel</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix"></div>
                                {{--                                        End of add Form--}}
                                <h3>Delete Year OF this PHASE ?</h3>
                                <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                    <thead>
                                    <tr>
                                        <th data-toggle="true">Academic year</th>
                                        <th> Phase Name </th>

                                        <th data-hide="all"> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($phase->PhaseYear)
                                        @foreach($phase->PhaseYear as $year)
                                            <tr>
                                                <th> {{$year->yearsCount}}  </th>
                                                <th> {{$phase->name}}   </th>
                                                <th>
                                                    <form class="d-inline-block" action="{{route('admin.phase.delete',$year->id)}}" METHOD="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="btn btn-danger d-inline-block" >Delete <i class="fa fa-trash"></i></button>
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th data-toggle="true">Academic year</th>
                                        <th> Phase Name </th>
                                        <th data-hide="all"> Action </th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--./row-->
@endsection
