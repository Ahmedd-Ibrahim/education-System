@extends('dashboard.layout.main')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Student Profile</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">University</a></li>
                <li class="active">Student Profile</li>
            </ol>
        </div>
    </div>
    <!-- .row -->
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="white-box">
                <div class="user-bg" style="display: contents"> <img  width="100%" alt="user" src="{{$student->getAvatarPath()}}"> </div>
                <div class="user-btm-box">
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-6 b-r"><strong>Name</strong>
                            <p>{{$student->name}}</p>
                        </div>
                        <div class="col-md-6"><strong>Department</strong>
                            <p>{{$student->year}}</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-6 b-r"><strong>Email ID</strong>
                            <p>janedoe@gmail.com</p>
                        </div>
                        <div class="col-md-6"><strong>Phone</strong>
                            <p>+123 456 789</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-12"><strong>Address</strong>
                            <p>E104, Dharti-2, Chandlodia Ahmedabad
                                <br/> Gujarat, India.</p>
                        </div>
                    </div>
                    <hr>
                    <!-- /.row -->
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-purple"><i class="ti-facebook"></i></p>
                        <h1>258</h1> </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-blue"><i class="ti-twitter"></i></p>
                        <h1>125</h1> </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-danger"><i class="ti-google"></i></p>
                        <h1>140</h1> </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                        <br>
                        <p class="text-muted">{{$student->name}}</p>
                    </div>
                    <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                        <br>
                        <p class="text-muted">(123) 456 7890</p>
                    </div>
                    <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                        <br>
                        <p class="text-muted">jane@gmail.com</p>
                    </div>
                    <div class="col-md-3 col-xs-6"> <strong>Year</strong>
                        <br>
                        <p class="text-muted">{{$student->year}}</p>
                    </div>
                </div>
                <hr>
                <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <h4 class="m-t-30">Skill Set</h4>
                <hr>
                <h5>Wordpress <span class="pull-right">80%</span></h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
                </div>
                <h5>HTML 5 <span class="pull-right">90%</span></h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
                </div>
                <h5>jQuery <span class="pull-right">50%</span></h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
                </div>
                <h5>Photoshop <span class="pull-right">70%</span></h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
                </div>
                <h4 class="m-t-30">Education</h4>
                <hr>
                <ul>
                    <li>Primary education from XYZ school</li>
                    <li>SSC from ABC School</li>
                    <li>HSC from ABC School</li>
                </ul>
                <h4 class="m-t-30">Certification</h4>
                <hr>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Excepteur sint occaecat cupidatat non proident.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Excepteur sint occaecat cupidatat non proident.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Excepteur sint occaecat cupidatat non proident.</li>
                </ul>
                <h4 class="m-t-30">Subjects</h4>
                <hr>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Excepteur sint occaecat cupidatat non proident.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Excepteur sint occaecat cupidatat non proident.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Excepteur sint occaecat cupidatat non proident.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
@endsection
