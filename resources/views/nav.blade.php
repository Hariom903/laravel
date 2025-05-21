<div>
  <nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="{{url('/')}}" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
       <img src="http://localhost:8000/build/assets/images/logo-white.svg" alt="Logo" class="img-fluid logo-lg" />

      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Navigation</label>
        </li>
        <li class="pc-item">
        <a href="{{ url('/') }}" class="pc-link">

            <span class="pc-micon">
              <i data-feather="home"></i>
            </span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>UI Components</label>
          <i data-feather="feather"></i>
        </li>
        <li class="pc-item">
          <a href="{{url('color')}}" class="pc-link">
            <span class="pc-micon"><i data-feather="droplet"></i></span>
            <span class="pc-mtext">Color</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{url('typography')}}" class="pc-link">
            <span class="pc-micon"><i data-feather="type"></i></span>
            <span class="pc-mtext">Typography</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{url('icon')}}" class="pc-link">
            <span class="pc-micon"><i data-feather="feather"></i></span>
            <span class="pc-mtext">Icons</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>Pages</label>
          <i data-feather="monitor"></i>
        </li>
        <li class="pc-item">
          <a href="{{url('login')}}" target="_blank" class="pc-link">
            <span class="pc-micon"><i data-feather="lock"></i></span>
            <span class="pc-mtext">Login</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{url('register')}}" target="_blank" class="pc-link">
            <span class="pc-micon"><i data-feather="user-plus"></i></span>
            <span class="pc-mtext">Register</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>Other</label>
          <i data-feather="sidebar"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i data-feather="align-right"></i>
            </span>
            <span class="pc-mtext">Menu levels</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"
                >Level 2.2<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link"
                    >Level 3.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span
                  ></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"
                >Level 2.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">
                    Level 3.3
                    <span class="pc-arrow"><i class="ti ti-chevron-right"></i></span>
                  </a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- <li class="pc-item">
          <a href="../other/sample-page.html" class="pc-link">
            <span class="pc-micon"><i data-feather="sidebar"></i></span>
            <span class="pc-mtext">Sample page</span>
          </a>
        </li> -->

      </ul>
    
    </div>
  </div>
</nav>
</div>
