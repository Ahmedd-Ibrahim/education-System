@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Edit Professor</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
                <li><a href="index.html">University</a></li>
                <li class="active">Edit Professor</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Basic Information</h3>
                <form class="form-material form-horizontal" action="{{route('admin.test.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Name
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="name" class="form-control" placeholder="enter your name" >
                        </div>
                    </div>
                    @error('name')
                    <div class="alert alert-danger">    {{$message}} </div>
                    @enderror
                    <div class="form-group">
                        <label class="col-md-12" for="bdate">Date of Birth
                        </label>
                        <div class="col-md-12">
                            <input type="date" id="bdate" name="bdate" class="form-control mydatepicker" placeholder="enter student birth date">
                        </div>
                    </div>
                    @error('bdate')
                    <div class="alert alert-danger">    {{$message}} </div>
                    @enderror
                    <div class="form-group">
                        <label class="col-md-12" for="phone">Phone Number
                        </label>
                        <div class="col-md-12">
                            <input type="number" id="phone" name="phone" class="form-control " placeholder="enter Your phone Number">
                        </div>
                    </div>
                    @error('phone')
                    <div class="alert alert-danger">  {{$message}} </div>
                    @enderror
                    <div class="form-group">
                        <label class="col-sm-12">Gender</label>
                        <div class="col-sm-12">
                            <select name="gender" class="form-control">
                                <option>Select Gender</option>
                                <option selected="selected" value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    @error('name')
                    <div class="alert alert-danger">    {{$message}} </div>
                    @enderror

                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
