@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Create New professional</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.front.professional.update',$professional)}}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="professional Name" class="form-control" name="name" value="{{$professional->name}}">
                                        <span class="help-block"> Name of  professionalr </span> </div>
                                </div>
                                @error('name')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Job Title</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Subject Name" class="form-control" name="job_name" value="{{$professional->job_name}}">
                                        <span class="help-block">job title for professionalr </span> </div>
                                </div>
                                @error('job_title')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">description</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="description" class="form-control" name="description" value="{{$professional->description}}">
                                        <span class="help-block"> Description for professionalr </span> </div>
                                </div>
                                @error('description')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">twitter link</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="twitter_link " class="form-control" name="twitter_link" value="{{$professional->twitter_link}}">
                                        <span class="help-block"> not required </span> </div>
                                </div>
                                @error('twitter_link')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">fb link</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="fb link" class="form-control" name="fb_link" value="{{$professional->fb_link}}">
                                </div>
                                </div>
                                @error('fb_link')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">gmail link</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="gmail link" class="form-control" name="gmail_link" value="{{$professional->gmail_link}}">
                                        <span class="help-block"> Title ot Caption for professionalr </span> </div>
                                </div>
                            </div>
                                @error('gmail_link')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">insta link</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="professional Name" class="form-control" name="insta_link"  value="{{$professional->insta_link}}">

                                    </div>
                                </div>
                                @error('insta_link')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">professional Avatar</label>
                                    <div class="col-md-9">
                                        <input type="file" placeholder="Description" class="form-control" name="image">
                                        <span class="help-block"> professional Image is required</span>
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
