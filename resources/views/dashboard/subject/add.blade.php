@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Create New Subject</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.subject.store')}}" class="form-horizontal form-bordered" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Subject Name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Subject Name" class="form-control" name="name">
                                        <span class="help-block"> Subject name like: MAth | English Language... </span> </div>
                                </div>
                                @error('name')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror
                                <div class="form-group">
                                    <label class="control-label col-md-3">Subject Description</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Description" class="form-control" name="desc">
                                        <span class="help-block"> Description for this Subject: optional </span> </div>
                                </div>
                                @error('desc')
                                <div class="alert alert-danger">  {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3" for="group">Subject Group Name</label>

                                    <div class="col-md-9">


                                        <input type="text" placeholder="Group Name" class="form-control" name="group">
                                        <span class="help-block"> Every Subject Should have 1 group at lest</span>
                                    </div>
                                </div>
                                @error('group')
                                <div class="alert alert-danger">  {{$message}} </div>
                                @enderror
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
    <!--./row-->
@endsection
