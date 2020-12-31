@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Create New proof</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.front.proof.update',$proof)}}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tilte</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="prof Name" class="form-control" name="title" value="{{$proof->title}}">
                                        <span class="help-block"> Title ot Caption for proof </span> </div>
                                </div>
                                @error('title')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="prof description" class="form-control" name="description" value="{{$proof->description}}">
                                        <span class="help-block">proof Description </span> </div>
                                </div>

                                @error('description')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">sub title</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Subject Name" class="form-control" name="sub_title" value="{{$proof->sub_title}}">
                                        <span class="help-block"> Sub Title for Caption for proofr </span> </div>
                                </div>
                                @error('sub_title')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">proof Image</label>
                                    <div class="col-md-9">
                                        <input type="file" placeholder="Description" class="form-control" name="image">
                                        <span class="help-block"> proof Image is required</span>
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
