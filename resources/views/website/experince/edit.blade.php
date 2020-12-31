@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Create New experince</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.front.site-experince.update',$siteExperince)}}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tilte</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Subject Name" class="form-control" name="title" value="{{$siteExperince->title}}">
                                        <span class="help-block"> Title  Caption for experince </span> </div>
                                </div>
                                @error('title')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Description" class="form-control" name="description" value="{{$siteExperince->description}}">
                                        <span class="help-block"> Description</span>
                                    </div>

                                </div>
                                @error('description')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                 @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">reowrd</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="reowrd name" class="form-control" name="reowrd" value="{{$siteExperince->reowrd}}">

                                    </div>

                                </div>
                                @error('reowrd')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                 @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">reowrd number</label>
                                    <div class="col-md-9">
                                        <input type="number" placeholder="reowrd name" class="form-control" name="reowrd_number" value="{{$siteExperince->reowrd_number}}">

                                    </div>

                                </div>
                                @error('reowrd_number')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                 @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">parent</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="parent" class="form-control" name="parent" value="{{$siteExperince->parent}}">

                                    </div>

                                </div>

                                @error('parent')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                 @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">parent number</label>
                                    <div class="col-md-9">
                                        <input type="number" placeholder="parent number" class="form-control" name="parent_number" value="{{$siteExperince->parent_number}}">

                                    </div>

                                </div>
                                @error('reowrd_number')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                 @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">child</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="child name" class="form-control" name="child" value="{{$siteExperince->child}}">

                                    </div>

                                </div>
                                @error('child')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                 @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">child number</label>
                                    <div class="col-md-9">
                                        <input type="number" placeholder="child name" class="form-control" name="child_number" value="{{$siteExperince->child_number}}">

                                    </div>

                                </div>
                                @error('child_number')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                 @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">teacher</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="teacher name" class="form-control" name="teacher" value="{{$siteExperince->teacher}}">

                                    </div>

                                </div>
                                @error('teacher')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                 @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">teacher number</label>
                                    <div class="col-md-9">
                                        <input type="number" placeholder="teacher name" class="form-control" name="teacher_number" value="{{$siteExperince->teacher_number}}">

                                    </div>

                                </div>
                                @error('reowrd_number')
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
