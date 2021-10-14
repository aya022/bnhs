<style>
  .color-font {
      color: #6666ff;
  }
</style>

<nav class="mt-2">
  {{-- sidebar --}}
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-header">Dashboard</li>
    <li class="nav-item">
      <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/my/dashboard')?'active':'' }}">
        <i class="nav-icon fas fa-house-user"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-bullhorn"></i>
          <p>Announcement</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon far fa-newspaper"></i>
          <p>Blog</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('admin.appointment') }}" class="nav-link {{ request()->is('admin/my/appointment')?'active':'' }}">
        <i class="nav-icon far fa-calendar-check"></i>
        <p>Appointment</p>
      </a>
    </li>
    <li class="nav-header">Enrollee's List</li>
    <li class="nav-item">
      <a href="{{ route('admin.enrollment') }}" class="nav-link {{ request()->is('admin/my/enrollment')?'active':'' }}">
        <i class="nav-icon far fa-address-card"></i>
        <p>Enrollee</p>
      </a>
    </li>
      <li class="nav-header">Management Section</li>
      <li class="nav-item nav-item dropdown">
        <a href="#" class="nav-link {{ request()->is('admin/my/section') || request()->is('admin/my/subject') || request()->is('admin/my/strand') || request()->is('admin/my/assign') || request()->is('admin/my/chairman')?'active':'' }}">
          <i class="nav-icon fas fa-tasks"></i>
          <p>
             Management
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-header">Junior High</li>
          <li class="nav-item">
            <a href="{{ route('admin.section') }}" class="nav-link {{ request()->is('admin/my/section')?'active':'' }}">
            <i class="nav-icon fas fa-server"></i>
            <p>Section</p>
            </a>
          </li>
          <li class="nav-header">Senior High</li>
          <li class="nav-item">
            <a href="{{ route('admin.strand') }}" class="nav-link {{ request()->is('admin/my/strand')?'active':'' }}">
            <i class="nav-icon fas fa-server"></i>
            <p>Strand</p>
            </a>
          </li>
          <li class="nav-header">Others</li>
          <li class="nav-item">
            <a href="{{ route('admin.subject') }}" class="nav-link {{ request()->is('admin/my/subject')?'active':'' }}">
              <i class="nav-icon far fa-file-alt"></i>
              <p>Subject</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.assign') }}" class="nav-link {{ request()->is('admin/my/assign')?'active':'' }}">
            <i class="nav-icon far fa-bookmark"></i>
            <p>Assign Subject</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.chairman') }}" class="nav-link {{ request()->is('admin/my/chairman')?'active':'' }}">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>Chairman</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-header">Masterlist Section</li>
      <li class="nav-item nav-item dropdown">
        <a href="#" class="nav-link {{ request()->is('admin/my/teacher') ||  request()->is('admin/my/student') ||  request()->is('admin/my/archive') ||  request()->is('admin/my/backrecord')?'active':'' }}">
          <i class="nav-icon far fa-file-alt"></i>
          <p>
              Masterlist
          <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.teacher') }}" class="nav-link {{ request()->is('admin/my/teacher')?'active':'' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
            <p>Teacher</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.student') }}" class="nav-link {{ request()->is('admin/my/student')?'active':'' }}">
            <i class="nav-icon far fa-id-badge"></i>
            <p>Student</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.archive') }}" class="nav-link {{ request()->is('admin/my/archive')?'active':'' }}">
            <i class="nav-icon fas fa-folder-open"></i>
            <p>Archive</p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{ route('admin.backrecord') }}" class="nav-link {{ request()->is('admin/my/backrecord')?'active':'' }}">
              <i class="nav-icon fas fa-undo"></i>
              <p>Back Subject</p>
              </a>
          </li>
        </ul>
      </li>

      <li class="nav-header">Settings</li>
      <li class="nav-item nav-item dropdown">
        <a href="#" class="nav-link {{ request()->is('admin/my/profile') || request()->is('admin/my/academic-year') || request()->is('admin/my/user')?'active':''  }}">
          <i class="nav-icon fas fa-cogs"></i>
          <p>
              Settings
          <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.profile') }}" class="nav-link {{ request()->is('admin/my/profile')?'active':'' }}">
            <i class="nav-icon fab fa-black-tie"></i>
            <p>School Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.academicYear') }}" class="nav-link {{ request()->is('admin/my/academic-year')?'active':'' }}">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>Academic Year</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.user') }}" class="nav-link {{ request()->is('admin/my/user')?'active':'' }}">
            <i class="nav-icon fas fa-users-cog"></i>
            <p>Profile</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="{{ route('auth.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt  text-danger"></i>
          <p>
          Logout
          </p>
          <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
                  @csrf
          </form>
        </a>
    </li>
  </ul>
  {{-- end --}}
</nav>