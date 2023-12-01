<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <div>
            <a class="navbar-brand " href="#">
                <span class="text-primary"> A<sub>-</sub>Z</span>-Hospital
            </a>
        </div>
    </div>
    <ul class="nav">
      
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
     
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('home') }}">
          <span class="menu-icon">
            <i class="mdi mdi-view-dashboard"></i>
          </span>
          <span class="menu-title">DashBoard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('AddDoctor') }}">
          <span class="menu-icon">
            <i class="mdi mdi-doctor"></i>
          </span>
          <span class="menu-title">Add A Doctor</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('ShowDoctors') }}">
          <span class="menu-icon">
            <i class="mdi mdi-eye-outline"></i>
          </span>
          <span class="menu-title">View All Doctors</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('ShowAppointments') }}">
          <span class="menu-icon">
            <i class="mdi mdi-human-greeting"></i>
          </span>
          <span class="menu-title">Appointments</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('ShowNurses') }}">
          <span class="menu-icon">
            <i class="mdi mdi-mother-nurse"></i>
          </span>
          <span class="menu-title">Nurses</span>
        </a>
      </li>
    </ul>
  </nav>