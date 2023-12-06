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
        <a class="nav-link" href="{{ url('su_home') }}">
          <span class="menu-icon">
            <i class="mdi mdi-view-dashboard"></i>
          </span>
          <span class="menu-title">DashBoard</span>
        </a>
      </li>
      <li class="nav-item dropdown border-left">
          <a class="nav-link count-indicator" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Manage Users</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <h6 class="p-3 mb-0">Manage users</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="">
                <span class="menu-icon">
                    <i class="mdi mdi-doctor"></i>
                </span>
                <span class="menu-title">Add A Doctor</span>
            </a>
            <a href="" class="dropdown-item preview-item">
                <span class="menu-icon">
                  <i class="mdi mdi-eye-outline"></i>
                </span>
                <span class="menu-title">View All Doctors</span>
            </a>
            <a href="" class="dropdown-item preview-item">
                <span class="menu-icon">
                    <i class="mdi mdi-human-greeting"></i>
                </span>
                <span class="menu-title">Appointments</span>
            </a>
            <a href="" class="dropdown-item preview-item">
                <span class="menu-icon">
                    <i class="mdi mdi-mother-nurse"></i>
                </span>
                <span class="menu-title">Nurses</span>
            </a>
          </div>
        </li>
    </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Manage Users</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapsed" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item menu-items">
                    <a class="nav-link" href="">
                    </a>
                  </li>
                  <li class="nav-item menu-items">
                    <a class="nav-link" href="">
                    </a>
                  </li>
                  <li class="nav-item menu-items">
                    <a class="nav-link" href="">
                      
                    </a>
                  </li>
                  <li class="nav-item menu-items">
                    <a class="nav-link" href="">
                      
                    </a>
                  </li>
                  <li class="nav-item menu-items">
                    <a class="nav-link" href="">
                      <span class="menu-icon">
                        <i class="mdi mdi-mother-nurse"></i>
                      </span>
                      <span class="menu-title">doc</span>
                    </a>
                  </li>
            </ul>
        </div>
    </li>
    
    </ul>
  </nav>