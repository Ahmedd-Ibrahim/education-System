@extends('dashboard.layout.main')
@section('content')
    <!-- Page Content -->
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">University Dashboard</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="index.html">University</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Teachers</h3>
                <div class="text-right"> <span class="text-muted">Teacher Count</span>
                    <h1><sup><i class="icon-people p-r-10"></i></sup> {{\App\models\Teacher::count()}}</h1>
                </div>
                <span class="text-success">20%</span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Students</h3>
                <div class="text-right"> <span class="text-muted">Students Count</span>
                    <h1><sup><i class="fa fa-graduation-cap p-r-10"></i></sup> {{\App\models\Student::count()}}</h1>
                </div>
                <span class="text-success">30%</span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Subjects</h3>
                <div class="text-right"> <span class="text-muted">Subjects Count</span>
                    <h1><sup><i class="fa fa-book"></i></sup> {{\App\models\Subject::count()}}</h1>
                </div>
                <span class="text-info">60%</span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Custom Users</h3>
                <div class="text-right"> <span class="text-muted">Custom Users Count</span>
                    <h1><sup><i class="fa fa-users"></i></sup> {{\App\User::count()}}</h1>
                </div>
                <span class="text-inverse">80%</span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">University Earnings</h3>
                <span class="text-muted">All Earnings are in million $</span>
                <ul class="list-inline text-right">
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #021d3a;"></i>Arts</h5> </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #00a5e5;"></i>Commerce</h5> </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #00c292;"></i>Science</h5> </li>
                </ul>
                <div id="morris-bar-chart" style="height:372px;"></div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box m-b-15">
                        <h3 class="box-title">Earning From Medical college</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                <h1 class="text-info">$64057</h1>
                                <p class="text-muted">APRIL 2017</p> <b>(150 Sales)</b>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div id="sparkline2dash" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="white-box bg-info m-b-15">
                        <h3 class="text-white box-title">Earning From Engineering college</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                                <h1 class="text-white">$30447</h1>
                                <p class="light_op_text">APRIL 2017</p> <b class="text-white">(110 Sales)</b>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div id="sales1" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-6">
            <img class="img-responsive" alt="user" src="style/backend/plugins/images/big/c2.jpg">
            <div class="white-box">
                <h4>PHP Development Course</h4>
                <div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
                <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
            </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
            <img class="img-responsive" alt="user" src="style/backend/plugins/images/big/c1.jpg">
            <div class="white-box">
                <h4>ios Development Course</h4>
                <div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
                <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
            </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
            <img class="img-responsive" alt="user" src="style/backend/plugins/images/big/c4.jpg">
            <div class="white-box">
                <h4>Android Development Course</h4>
                <div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
                <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
            </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">
            <img class="img-responsive" alt="user" src="style/backend/plugins/images/big/c3.jpg">
            <div class="white-box">
                <h4>Web Development Course</h4>
                <div class="text-muted m-b-20"><span class="m-r-10"><i class="ti-alarm-clock"></i> 2 Year</span> <a class="text-muted m-l-10 m-r-10" href="#"><i class="fa fa-heart-o"></i> 38</a><span class="m-l-10"><i class="fa fa-usd"></i> 50</span></div>
                <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
                <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
                <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
                <button class="btn btn-success btn-rounded waves-effect waves-light m-t-10">More Details</button>
            </div>
        </div>
    </div>
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul>
                    <li><b>Layout Options</b></li>
                    <li>
                        <div class="checkbox checkbox-info">
                            <input id="checkbox1" type="checkbox" class="fxhdr">
                            <label for="checkbox1"> Fix Header </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox checkbox-warning">
                            <input id="checkbox2" type="checkbox" class="fxsdr">
                            <label for="checkbox2"> Fix Sidebar </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox checkbox-success">
                            <input id="checkbox4" type="checkbox" class="open-close">
                            <label for="checkbox4"> Toggle Sidebar </label>
                        </div>
                    </li>
                </ul>
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                    <li><a href="javascript:void(0)" theme="blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                    <li><b>With Dark sidebar</b></li>
                    <br/>
                    <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="style/backend/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="style/backend/plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="style/backend/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="style/backend/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="style/backend/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="style/backend/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="style/backend/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="style/backend/plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->

    {{--    </div>--}}



@endsection
