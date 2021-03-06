@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Health Report</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.class-schedule.update',$scheduler)}}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-body">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Title</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="decamber table" class="form-control" name="name" value="{{$scheduler->name}}">
                                        </div>
                                    </div>
                                    @error('title')
                                    <div class="alert alert-danger">    {{$message}} </div>
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--./row-->
@endsection
