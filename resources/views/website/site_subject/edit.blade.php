@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Create New subject</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.front.site-subject.update',$siteSubject)}}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                            @csrf

                            @method('PATCH')
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Subject Name" class="form-control" name="name" value="{{$siteSubject->name}}">
                                        <span class="help-block"> Name of subject </span> </div>
                                </div>
                                @error('name')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">description</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Subject Name" class="form-control" name="description" value="{{$siteSubject->description}}">
                                        <span class="help-block">Description for subject </span> </div>
                                </div>
                                @error('description')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">Subject Image</label>
                                    <div class="col-md-9">
                                        <input type="file" placeholder="Description" class="form-control" name="image">
                                        <span class="help-block"> subject Image is required</span>
                                    </div>

                                </div>
                                @error('image')
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
