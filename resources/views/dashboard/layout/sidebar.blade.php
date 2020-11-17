<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                            </span> </div>
                <!-- /input-group -->
            </li>
            <li class="user-pro">
                <a href="#" class="waves-effect"><img src="{{asset('style/backend/plugins/images/users/1.jpg')}}" alt="user-img" class="img-circle"> <span class="hide-menu"> {{ Auth::user()->name }}
                <span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
{{--                    <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>--}}
                    <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                    <li><a href="{{route('admin.mangerSetting.index')}}"><i class="ti-settings"></i> Account Setting</a></li>
                    <li><a href="{{route('logout')}}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"

                        ><i class="fa fa-power-off"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            @include('dashboard.layout.sidebar_menu')
        </ul>
    </div>
</div>
</div>
