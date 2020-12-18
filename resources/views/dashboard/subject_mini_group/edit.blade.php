@extends('dashboard.layout.main')
@section('content')


    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Academic  Phases System <a href="{{route('admin.subject-mini-group.index')}}" class="btn btn-success">Show Table</a></div>

                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="col-md-12">

                                    <form style="margin-bottom: 50px" action="{{route('admin.subject-mini-group.update',$miniGroup)}}" class="form-horizontal form-bordered" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-body">
                                            <div class="form-group">

                                                <label class="col-md-12">Group Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="name" placeholder="Group Name" value="{{$miniGroup->name}}">
                                                </div>
                                            </div>

                                        </div>
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
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--./row-->
@endsection
