<li class="nav-small-cap m-t-10">--- Main Menu ---</li>
<li> <a href="{{route('home')}}" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a></li>


{{-- Begin settings --}}
<li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i>  <span class="hide-menu">Settings<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">

        <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> Settings <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
                <li> <a href="{{route('admin.siteSettings.index')}}">site basics Info </a> </li>

            </ul>
        </li>
        {{-- Roles & permission--}}
        <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> Roles  <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
                <li> <a href="{{route('admin.roles.create')}}">Add new Role </a> </li>
                <li> <a href="{{route('admin.roles.index')}}">View All Roles </a> </li>

            </ul>
        </li>
        <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> Permissions  <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
                <li> <a href="{{route('admin.permission.create')}}">Assign Permissions to role </a> </li>

            </ul>
        </li>
        {{--End Roles & permission--}}
    </ul>
</li>
{{--End settings--}}
{{-- Begin School System --}}
<li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i>  <span class="hide-menu">System Configuration<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">

        <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> Study Phases <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
                <li> <a href="{{route('admin.studyPhase.index')}}">Show All Phases</a> </li>
                <li> <a href="{{route('admin.studyPhase.create')}}">Add Phase</a></li>
            </ul>
        </li>
        <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> Groups <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
                <li> <a href="{{route('admin.group.index')}}">Show All Groups</a> </li>
                <li> <a href="{{route('admin.group.create')}}">Add Group</a></li>
            </ul>
        </li>
    </ul>
</li>
{{--End settings--}}
{{--        Begin Classes --}}

<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-group"></i> <span class="hide-menu"> Calasses <span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.class.index')}}">Show All Classes</a> </li>
        <li> <a href="{{route('admin.class.create')}}">Add New Class </a></li>
    </ul>
</li>
{{--        End Classes --}}
<li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Professors <span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.teacher.index')}}">All Professors</a> </li>
        <li> <a href="{{route('admin.teacher.create')}}">Add Professor</a> </li>
    </ul>
</li>

<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-graduation-cap p-r-10"></i> <span class="hide-menu"> Students <span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.student.index')}}">All Students</a> </li>
        <li> <a href="{{route('admin.student.create')}}">Add Student</a> </li>
        <li> <a href="{{route('admin.student-register.create')}}">Register exits Student</a> </li>
        <li> <a href="{{route('admin.student-table.index')}}">Student control table</a> </li>
    </ul>
</li>

<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-pencil"></i> <span class="hide-menu"> Subjects <span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.subject.index')}}">All Subjects</a> </li>
        <li> <a href="{{route('admin.subject.create')}}">Add Course</a> </li>
    </ul>
</li>

<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-pencil"></i> <span class="hide-menu"> Subjects Groups <span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.subject-mini-group.index')}}">All Subject Groups</a> </li>
        <li> <a href="{{route('admin.subject-mini-group.create')}}">Add Groups</a> </li>
    </ul>
</li>

<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-folder"></i> <span class="hide-menu"> Health Report<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.health-report.index')}}">All Health Report</a> </li>
        <li> <a href="{{route('admin.health-report.create')}}">Add Report</a> </li>
    </ul>
</li>
<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-apple "></i> <span class="hide-menu"> Food Cycle Course<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.food-cycle.index')}}">All Courses</a> </li>
        <li> <a href="{{route('admin.food-cycle.create')}}">Add New Course</a> </li>
    </ul>
</li>

<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-table"></i> <span class="hide-menu"> Classes Scheduler <span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.class-schedule.index')}}">Show all Classes Scheduler</a> </li>
        <li> <a href="{{route('admin.class-schedule.create')}}">Create Class Scheduler</a> </li>
    </ul>
</li>

<li><a href="{{route('logout')}}"
       onclick="event.preventDefault();
  document.getElementById('logout-form').submit();"
    ><i class="fa fa-power-off"></i> Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

