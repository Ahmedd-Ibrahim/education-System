@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Edit Professor</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
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
                <form class="form-material form-horizontal" action="{{route('admin.teacher.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Name
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="name" class="form-control" placeholder="enter your name" value="Jonathan Doe">
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
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Subjects</label>
                        <select name="subject_id"  class="form-control" id="exampleFormControlSelect2">
                            <option SELECTED value="">Choose</option>

                        @isset($subjects)
                              @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                @endforeach
                            @endisset
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Profile Image</label>
                        <div class="col-sm-12">
                            <img class="img-responsive" src="../plugins/images/users/varun.jpg" alt="" style="max-width:120px;">
                        </div>
                        <div class="col-sm-12">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> </div>
                                            <input type="file" name="avatar">
                                        </div>
                        </div>
                    </div>
                    @error('avatar')
                    <div class="alert alert-danger">    {{$message}} </div>
                    @enderror
                    <div class="form-group">
                        <label class="col-md-12">Description</label>
                        <div class="col-md-12">
                            <textarea name="desc" class="form-control" rows="3"> </textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="white-box">
                <h3 class="box-title">Account Information</h3>
                <form class="form-material form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12" for="example-email">Email
                        </label>
                        <div class="col-md-12">
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="enter your email" value="jondoe@ex.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-phone">Phone
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-phone" name="example-phone" class="form-control" placeholder="enter your phone" data-mask="(999) 999-9999" value="(123) 456-7890">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="pwd">Password
                        </label>
                        <div class="col-md-12">
                            <input type="password" id="pwd" name="pwd" class="form-control" placeholder="enter your password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="cpwd">Confirm Password
                        </label>
                        <div class="col-md-12">
                            <input type="password" id="cpwd" name="cpwd" class="form-control" placeholder="confirm your password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="white-box">
                <h3 class="box-title">Social Information</h3>
                <form class="form-material form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12" for="furl">Facebook URL
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="furl" name="furl" class="form-control" value="http://www.facebook.com/username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="turl">Twitter URL
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="turl" name="turl" class="form-control" value="http://www.twitter.com/username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="gurl">Google Plus URL
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="gurl" name="gurl" class="form-control" value="http://www.plus.google.com/username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="inurl">LinkedIN URL
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="inurl" name="inurl" class="form-control" value="http://www.linkedin.com/username">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
