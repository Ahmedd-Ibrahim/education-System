@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Create New Service</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.front.service.store')}}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tilte</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Subject Name" class="form-control" name="title">
                                        <span class="help-block"> Title ot Caption for Service </span> </div>
                                </div>
                                @error('title')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">Description</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Description" class="form-control" name="description">
                                        <span class="help-block"> Description</span>
                                    </div>

                                </div>
                                @error('description')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                        @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">Icon class</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="icon class" class="form-control" name="class">
                                        <span class="help-block"> class name for Icon</span>
                                    </div>

                                </div>
                                @error('class')
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
