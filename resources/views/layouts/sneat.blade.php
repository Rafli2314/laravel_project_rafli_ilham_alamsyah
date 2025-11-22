<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
      data-theme="theme-default" data-assets-path="/assets/" data-template="vertical-menu-template-free">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title') - Admin</title>

  <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="/assets/vendor/css/core.css" />
  <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" />
  <link rel="stylesheet" href="/assets/css/demo.css" />

  <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <script src="/assets/vendor/js/helpers.js"></script>
  <script src="/assets/js/config.js"></script>
</head>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <!-- Sidebar -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="/admin/dashboard" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="/assets/img/logo.png" width="40" />
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Admin</span>
          </a>
        </div>

        <ul class="menu-inner py-1">
          <li class="menu-item @if(request()->is('admin/dashboard')) active @endif">
            <a href="/admin/dashboard" class="menu-link">
              <i class="menu-icon bx bx-home-circle"></i>
              <div>Dashboard</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="/category" class="menu-link">
              <i class="menu-icon bx bx-category"></i>
              <div>Category</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- /Sidebar -->

      <div class="layout-page">
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme">
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="/assets/img/avatars/1.png" class="w-px-40 rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="/assets/img/avatars/1.png" class="w-px-40 rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                          <small class="text-muted">{{ auth()->user()->role }}</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li><div class="dropdown-divider"></div></li>
                  <li>
                    <form method="POST" action="/logout">
                      @csrf
                      <button class="dropdown-item">Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- /Navbar -->

        <!-- Content Wrapper -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            @yield('content')
          </div>
        </div>
        <!-- / Content -->

      </div>
    </div>
  </div>

  <!-- Core JS -->
  <script src="/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="/assets/vendor/libs/popper/popper.js"></script>
  <script src="/assets/vendor/js/bootstrap.js"></script>
  <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="/assets/vendor/js/menu.js"></script>
  <script src="/assets/js/main.js"></script>
  @stack('scripts')
</body>
</html>

