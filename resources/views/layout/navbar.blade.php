{{-- <nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars" style=""></i></a>
            </li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">

        @if (Auth::guard('web')->check())
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> --}}
                {{-- <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> --}}
                {{-- <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::guard('web')->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right"> --}}
                {{-- <div class="dropdown-title">Logged in 5 min ago</div> --}}
                {{-- <a href="#" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="{{ route('auth.logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @elseif (Auth::guard('teacher')->check())
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> --}}
                {{-- <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> --}}
                {{-- <span class="badge badge-info pb-1 pt-1" style="font-size: 12px">Teacher</span>
                &nbsp;&nbsp;
                <div class="d-sm-none d-lg-inline-block">
                    Hi, {{ Auth::guard('teacher')->user()->fullname }}
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right"> --}}
                {{-- <div class="dropdown-title">Logged in 5 min ago</div> --}}
                {{-- <a href="#" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="{{ route('auth.logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @elseif (Auth::guard('student')->check())
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> --}}
                {{-- <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> --}}
                {{-- <span class="badge badge-info pb-1 pt-1" style="font-size: 12px">Student</span>
                &nbsp;&nbsp;
                <div class="d-sm-none d-lg-inline-block">
                    Hi, {{ Auth::guard('student')->user()->fullname }}
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right"> --}}
                {{-- <div class="dropdown-title">Logged in 5 min ago</div> --}}
                {{-- <a href="#" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="{{ route('auth.logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>

        @endif
    </ul>
</nav> --}}

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        {{-- Admin --}}
      @if (Auth::guard('web')->check())
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <span class="badge badge-info pb-1 pt-1" style="font-size: 12px">Admin</span>
                &nbsp;&nbsp;
                <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::guard('web')->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('admin.user') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="{{ route('auth.logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @elseif (Auth::guard('teacher')->check())
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <span class="badge badge-info pb-1 pt-1" style="font-size: 12px">Teacher</span>
                &nbsp;&nbsp;
                <div class="d-sm-none d-lg-inline-block">
                    Hi, {{ Auth::guard('teacher')->user()->fullname }}
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="{{ route('auth.logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @elseif (Auth::guard('student')->check())
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <span class="badge badge-info pb-1 pt-1" style="font-size: 12px">Student</span>
                &nbsp;&nbsp;
                <div class="d-sm-none d-lg-inline-block">
                    Hi, {{ Auth::guard('student')->user()->fullname }}
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('student.profile') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="{{ route('auth.logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @endif
    </ul>
</nav>
<!-- /.navbar -->