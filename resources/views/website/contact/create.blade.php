@extends('dashboard.layout.main')
@section('content')

    <!--.row-->
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Create New message</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="{{route('admin.front.contact.store')}}" class="form-horizontal form-bordered" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">user name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Ahmed Ibrahim" class="form-control" name="username">

                                    </div>
                                </div>
                                @error('username')
                                <div class="alert alert-danger">    {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">email</label>
                                    <div class="col-md-9">
                                        <input type="email" placeholder="Description" class="form-control" name="email">

                                    </div>

                                </div>
                                @error('phone')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                 @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">phone</label>
                                    <div class="col-md-9">
                                        <input type="number" placeholder="phone" class="form-control" name="phone">

                                    </div>

                                </div>
                                @error('email')
                                        <div class="alert alert-danger">  {{$message}} </div>
                                 @enderror

                                <div class="form-group">
                                    <label class="control-label col-md-3">message</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="write your message " class="form-control" name="message">

                                    </div>

                                </div>
                                @error('message')
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
