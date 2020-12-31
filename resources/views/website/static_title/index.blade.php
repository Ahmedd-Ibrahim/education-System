@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">BASICS staticInfoRMATION</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">SETTINGS</a></li>
                <li class="active">BASICS staticInfoRMATION</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box p-l-20 p-r-20">
                <h3 class="box-title m-b-0">Website Settings</h3>
                <p class="text-muted m-b-30 font-13">This settings will appear in The  <code> site titles </code>  </p>
                <div class="row">
                    <div class="col-md-12">
                        @if(isset($staticInfo))
                        <form class="form-material form-horizontal"  action="{{route('admin.front.static-title.update',$staticInfo)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                            <div class="form-group">
                                <label class="col-md-12">welcome title</label>
                                <div class="col-md-12">
                                    <input type="text" name="welcome_title" class="form-control form-control-line"   value="{{$staticInfo->welcome_title}}"  placeholder="Your welcome_title">
                                </div>
                            </div>
                            @error('welcome_title')
                        <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">welcome sub title</label>
                                <div class="col-md-12">
                                    <input type="text" name="welcome_desc" class="form-control form-control-line"   value="{{$staticInfo->welcome_desc}}"  placeholder="Your welcome description">
                                </div>
                            </div>
                            @error('welcome_desc')
                        <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12"> welcome provide title</label>
                                <div class="col-md-12">
                                    <input type="text" name="welcome_provide_title" class="form-control form-control-line"   value="{{$staticInfo->welcome_provide_title}}"  placeholder="Your welcome provide title">
                                </div>
                            </div>
                            @error('welcome_provide_title')
                        <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">welcome sub provide title</label>
                                <div class="col-md-12">
                                    <input type="text" name="welcome_provide_sub_title" class="form-control form-control-line"   value="{{$staticInfo->welcome_provide_sub_title}}"  placeholder="Your welcome sub provide title">
                                </div>
                            </div>
                            @error('welcome_provide_sub_title')
                        <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">smoth title</label>
                                <div class="col-md-12">
                                    <input type="text" name="smoth_title" class="form-control form-control-line"   value="{{$staticInfo->smoth_title}}"  placeholder="Your smoth title">
                                </div>
                            </div>
                            @error('smoth_title')
                        <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">somth description</label>
                                <div class="col-md-12">
                                    <input type="text" name="somth_desc" class="form-control form-control-line"   value="{{$staticInfo->somth_desc}}"  placeholder="Your somth description">
                                </div>
                            </div>
                            @error('somth_desc')
                        <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">professional title</label>
                                <div class="col-md-12">
                                    <input type="text" name="professional_title" class="form-control form-control-line"   value="{{$staticInfo->professional_title}}"  placeholder="Your professional title">
                                </div>
                            </div>
                            @error('professional_title')
                        <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">professional sub title</label>
                                <div class="col-md-12">
                                    <input type="text" name="professional_sub_title" class="form-control form-control-line"   value="{{$staticInfo->professional_sub_title}}"  placeholder="Your professional_sub_title">
                                </div>
                            </div>
                            @error('professional_sub_title')
                        <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">subject title</label>
                                <div class="col-md-12">
                                    <input type="text" name="subject_title" class="form-control form-control-line"   value="{{$staticInfo->subject_title}}"  placeholder="Your subject title">
                                </div>
                            </div>
                            @error('subject_title')
                        <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">subject sub title</label>
                                <div class="col-md-12">
                                    <input type="text" name="subject_sub_title" class="form-control form-control-line"   value="{{$staticInfo->subject_sub_title}}"  placeholder="Your subject sub title">
                                </div>
                            </div>
                            @error('subject_sub_title')
                        <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <label class="col-md-12">experince title</label>
                                <div class="col-md-12">
                                    <input type="text" name="experince_title" class="form-control form-control-line"   value="{{$staticInfo->experince_title}}"  placeholder="Your experince title ">
                                </div>
                            </div>
                            @error('experince_title')
                        <div class="alert alert-danger">    {{$message}} </div>
                            @enderror

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button class="btn btn-block btn-primary">Save</button>
                                </div>
                            </div>
                        </form>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
