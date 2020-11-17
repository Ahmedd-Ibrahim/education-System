@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">BASICS INFORMATION</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">SETTINGS</a></li>
                <li class="active">BASICS INFORMATION</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box p-l-20 p-r-20">
                <h3 class="box-title m-b-0">Website Settings</h3>
                <p class="text-muted m-b-30 font-13">This settings will appear in The  <code> site </code>  </p>
                <div class="row">
                    <div class="col-md-12">

                                <form class="form-material form-horizontal"  action="{{route('admin.mangerSetting.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Site Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" class="form-control form-control-line"   value="{{$user->name}}"  placeholder="Your website Name">
                                        </div>
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">    {{$message}} </div>
                                    @enderror
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                                        <div class="col-md-12">
                                            <input type="email" id="example-email2" name="email" class="form-control"  value="{{$user->email}}"  placeholder="Site Email Address">
                                        </div>
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger">    {{$message}} </div>
                                    @enderror
                                    <div class="form-group">
                                        <label class="col-md-12">New password</label>
                                        <div class="col-md-12">
                                            <input type="text" name="password" class="form-control form-control-line"    placeholder="Your New password">
                                        </div>
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger">    {{$message}} </div>
                                    @enderror

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button class="btn btn-block btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
