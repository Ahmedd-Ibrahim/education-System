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
                                    <form action="{{route('admin.studyPhase.store')}}" class="form-horizontal form-bordered" method="POST">
                                        @csrf
                                        <div class="form-body">
                                            <p class="text-danger">Be Carefull when You add years, if You want Remove exists Data And Add from Scratch this is the correct form, If you wanna Append years to Your Education Chosse Another form</p>
                                            <div class="form-group">
                                                <label class="col-md-12">Phase Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="name" placeholder="Phase Name">
                                                </div>
                                            </div>
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">How many Academic year in This Phase? </label>
                                            <select name="yearsCount" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="width: 100%">
                                                <option value="1">One</option>
                                                <option value="1,2">Two</option>
                                                <option value="1,2,3">Three</option>
                                                <option value="1,2,3,4">Four</option>
                                                <option value="1,2,3,4,5">Five</option>
                                                <option value="1,2,3,4,5,6">Six</option>
                                            </select>
                                            @error('counter')
                                            <div class="alert alert-danger">    {{$message}} </div>
                                            @enderror
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Create</button>
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
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--./row-->
@endsection
