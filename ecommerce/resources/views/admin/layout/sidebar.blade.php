<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      Dall
      {{-- <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> --}}
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="/admin/assets/images/faces/thumb-IMG_20231029_102259.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Super Admin</h5>
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
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
        <span class="nav-link">options</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href={{ route('admin-dashboard') }}>
          <span class="menu-icon">
            <img src={{asset('images/dashboard.png')}} style="width: 25px">
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      {{-- dropdown and options in --}}
      {{-- <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Basic UI Elements</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href="/admin/all-categories">
          <span class="menu-icon">
            <img src={{asset('images/menu.png ')}} style="width: 25px">
          </span>
          <span class="menu-title">Categories</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/admin/all-user">
          <span class="menu-icon">
            <img src={{asset('images/team.png')}} style="width: 25px">
          </span>
          <span class="menu-title">User management</span>
        </a>
      </li>
       {{-- <li class="nav-item menu-items">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Charts</span>
        </a>
      </li> --}}
      <li class="nav-item menu-items">
        <a class="nav-link" href={{ route('all-permissions') }}>
          <span class="menu-icon">
            <img src={{asset('images/permission.png')}} style="width: 25px">
          </span>
          <span class="menu-title">Permissions</span>
        </a>
      </li>  
      <li class="nav-item menu-items">
        <a class="nav-link" href="/admin/all-roles">
          <span class="menu-icon">
            <img src={{asset('images/project-manager.png')}} style="width: 25px">
          </span>
          <span class="menu-title">role</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href={{ route('all-products') }}>
          <span class="menu-icon">
            <img src={{asset('images/new-product.png')}} style="width: 25px">
          </span>
          <span class="menu-title">Products</span>
        </a>
      </li>
      {{-- <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          </ul>
        </div>
      </li> --}}
    </ul>
  </nav>