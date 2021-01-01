<li class="nav-small-cap m-t-10">--- Main Menu ---</li>
<li> <a href="{{route('home')}}" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a></li>
@canany(['show settings','store settings','edit settings','update settings'])
<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-group"></i> <span class="hide-menu"> Users <span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.users.index')}}">All Users</a> </li>
        <li> <a href="{{route('admin.users.create')}}">Add New User </a></li>
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
@endcanany

{{-- Begin settings --}}
@canany(['show website','store website','edit website','update website'])
<li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i>  <span class="hide-menu">website dashboard<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">

        <li> <a href="{{route('admin.front.siteSettings.index')}}">site basics Info </a> </li>

        <li> <a href="{{route('admin.front.static-title.index')}}">site static titles </a> </li>

        <li> <a href="{{route('admin.front.slide.index')}}">slide </a> </li>

        <li> <a href="{{route('admin.front.service.index')}}">Service </a> </li>

        <li> <a href="{{route('admin.front.provide.index')}}">Provide </a> </li>

        <li> <a href="{{route('admin.front.professional.index')}}">professional </a> </li>

        <li> <a href="{{route('admin.front.site-subject.index')}}">subjects </a> </li>

        <li> <a href="{{route('admin.front.site-experince.index')}}">Experince </a> </li>

        <li> <a href="{{route('admin.front.proof.index')}}">Proof </a> </li>

        <li> <a href="{{route('admin.front.contact.index')}}">Contact </a> </li>

        <li> <a href="{{route('admin.front.blog.index')}}">blog </a> </li>

        <li> <a href="{{route('admin.front.comment.index')}}">comments </a> </li>

    </ul>
</li>
@endcanany
{{--End settings--}}
@canany(['show config','store config','edit config','update config'])
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
@endcanany
{{-- Begin Classes --}}

@canany(['show class','store class','edit class','update class'])
<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-group"></i> <span class="hide-menu"> Calasses <span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.class.index')}}">Show All Classes</a> </li>
        <li> <a href="{{route('admin.class.create')}}">Add New Class </a></li>
    </ul>
</li>
@endcan

@canany(['show prof','store prof','edit prof','update prof'])
{{--        End Classes --}}
<li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Professors <span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.teacher.index')}}">All Professors</a> </li>
        <li> <a href="{{route('admin.teacher.create')}}">Add Professor</a> </li>
    </ul>
</li>
@endcanany
@canany(['show student','store student','edit student','update student'])
<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-graduation-cap p-r-10"></i> <span class="hide-menu"> Students <span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.student.index')}}">All Students</a> </li>
        <li> <a href="{{route('admin.student.create')}}">Add Student</a> </li>
        <li> <a href="{{route('admin.student-register.create')}}">Register exits Student</a> </li>
        <li> <a href="{{route('admin.student-table.index')}}">Student control table</a> </li>
    </ul>
</li>
@endcanany
@canany(['show subject','store subject','edit subject','update subject'])
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
@endcanany
@canany(['show health','store health','edit health','update health'])
<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-folder"></i> <span class="hide-menu"> Health Report<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.health-report.index')}}">All Health Report</a> </li>
        <li> <a href="{{route('admin.health-report.create')}}">Add Report</a> </li>
    </ul>
</li>
@endcanany
@canany(['show food','store food','edit food','update food'])
<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-apple "></i> <span class="hide-menu"> Food Cycle Course<span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.food-cycle.index')}}">All Courses</a> </li>
        <li> <a href="{{route('admin.food-cycle.create')}}">Add New Course</a> </li>
    </ul>
</li>
@endcanany
@canany(['show scheduler','store scheduler','edit scheduler','update scheduler'])
<li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-table"></i> <span class="hide-menu">Scheduler <span class="fa arrow"></span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{route('admin.class-schedule.index')}}">Show all Scheduler</a> </li>
        <li> <a href="{{route('admin.class-schedule.create')}}">Create Scheduler</a> </li>
    </ul>
</li>
@endcanany
<li><a href="{{route('logout')}}"
       onclick="event.preventDefault();
  document.getElementById('logout-form').submit();"
    ><i class="fa fa-power-off"></i> Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
