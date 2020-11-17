@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> System roles</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.roles.store')}}" class="form-horizontal form-bordered" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Role Name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="teacher" class="form-control" name="name">
                                        <span class="help-block"> Role name like teacher or employee or banker... </span> </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Role Description</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="only update user table" class="form-control" name="description">
                                        <span class="help-block"> Description for this role: teacher have All permission and feature </span> </div>
                                </div>


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
