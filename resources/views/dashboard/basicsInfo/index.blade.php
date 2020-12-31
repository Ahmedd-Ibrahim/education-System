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
                        @if(isset($baseInfo))

                            @foreach($baseInfo as $info)
                        <form class="form-material form-horizontal"  action="{{route('admin.front.siteSettings.update',$info->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="col-md-12">Site Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control form-control-line"   value="{{$info->name}}"  placeholder="Your website Name">
                                </div>
                            </div>
                            @error('name')
                        <div class="alert alert-danger">    {{$message}} </div>
                            @enderror
                            <div class="form-group">
                                <label class="col-md-12" for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                                <div class="col-md-12">
                                    <input type="email" id="example-email2" name="email" class="form-control"  value="{{$info->email}}"  placeholder="Site Email Address">
                                </div>
                            </div>
                            @error('email')
                            <div class="alert alert-danger">    {{$message}} </div>
                            @enderror
                            <div class="form-group">
                                <label class="col-md-12">The Real Address</label>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control form-control-line"   value="{{$info->address}}"  placeholder="Your website Name">
                                </div>
                            </div>
                            @error('address')
                            <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">Phone Number</label>
                                <div class="col-md-12">
                                    <input type="text" name="phone" class="form-control form-control-line"   value="{{$info->phone}}"  placeholder="Your website Name">
                                </div>
                            </div>
                            @error('phone')
                            <div class="alert alert-danger">    {{$message}} </div>
                            @enderror


                            <div class="form-group">
                                <label class="col-md-12">facebook link</label>
                                <div class="col-md-12">
                                    <input type="text" name="fb_link" class="form-control form-control-line"   value="{{$info->fb_link}}"  placeholder="Your facebook link">
                                </div>
                            </div>
                            @error('fb_link')
                            <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">twitter link</label>
                                <div class="col-md-12">
                                    <input type="text" name="twitter_link" class="form-control form-control-line"   value="{{$info->twitter_link}}"  placeholder="Your website twitter link">
                                </div>
                            </div>
                            @error('fb_link')
                            <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">Insta link</label>
                                <div class="col-md-12">
                                    <input type="text" name="insta_link" class="form-control form-control-line"   value="{{$info->insta_link}}"  placeholder="Your website insta link">
                                </div>
                            </div>
                            @error('insta_link')
                            <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">google link</label>
                                <div class="col-md-12">
                                    <input type="text" name="google_link" class="form-control form-control-line"   value="{{$info->google_link}}"  placeholder="Your website google link">
                                </div>
                            </div>
                            @error('gogole_link')
                            <div class="alert alert-danger">    {{$message}} </div>
                            @enderror


                            @isset($info->logo)
                            <div class="img-thumbnail" >
                                <img style="width: 150px" src="{{asset('style/backend/images/'.$info->logo)}}" alt="Logo">
                            </div>
                            @endisset
                            <div class="form-group">
                                <label class="col-sm-12">Site Logo</label>
                                <div class="col-sm-12">
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                    <input type="file" name="logo">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button class="btn btn-block btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
