<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="#"><span class="text-white"><b>Admin Panel</b></span></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('admin') }}/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>

    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{ asset('admin') }}/assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('appointments-admin-nav')}}" >
          <span class="menu-icon">
            <i class="fas fa-calendar-check"></i>
          </span>
          <span class="menu-title">Appointments</span>
        </a>
      </li> 

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/')}}" target="_blank">
          <span class="menu-icon">
            <i class="fas fa-eye"></i>
          </span>
          <span class="menu-title">Visit Site </span>
        </a>
      </li> 

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#doctor" aria-expanded="false" aria-controls="doctor">
          <span class="menu-icon">
            <i class="fas fa-user-md"></i>
          </span>
          <span class="menu-title">Doctors</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="doctor">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('show_doctor')}}">All Doctors</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('add_doctor_view')}}">Add Doctors</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#news" aria-expanded="false" aria-controls="news">
          <span class="menu-icon">
            <i class="fas fa-book-open"></i>
          </span>
          <span class="menu-title">News</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="news">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('show_news')}}">Show News</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('add_news')}}">Add News</a></li>
          </ul>
        </div>
      </li>

    </ul>
  </nav>