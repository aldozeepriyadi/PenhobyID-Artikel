<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Dashboard -  Pengajuan Artikel</title>
  <link rel="stylesheet" href="assets/css/oneui.min.css">
</head>

<body>
  <div id="page-container" class="page-header-dark main-content-boxed">
    <!-- Header -->
    <!-- Header -->
    <header id="page-header">
      <!-- Header Content -->
      <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
          <!-- Logo -->
          <a class="fw-semibold fs-5 tracking-wider text-dual me-3" href="index.html"> PENGHOBBY.ID </a>
          <!-- END Logo -->

          <!-- Notifications Dropdown -->
          <div class="dropdown d-inline-block me-2">
            <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications-dropdown"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="text-primary">•</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg p-0 border-0 fs-sm"
              aria-labelledby="page-header-notifications-dropdown">
              <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                <h5 class="dropdown-header text-uppercase">Notifications</h5>
              </div>
              <ul class="nav-items mb-0">
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-2 ms-3">
                      <i class="fa fa-fw fa-check-circle text-success"></i>
                    </div>
                    <div class="flex-grow-1 pe-2">
                      <div class="fw-semibold">You have a new follower</div>
                      <span class="fw-medium text-muted">15 min ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-2 ms-3">
                      <i class="fa fa-fw fa-plus-circle text-primary"></i>
                    </div>
                    <div class="flex-grow-1 pe-2">
                      <div class="fw-semibold">1 new sale, keep it up</div>
                      <span class="fw-medium text-muted">22 min ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-2 ms-3">
                      <i class="fa fa-fw fa-times-circle text-danger"></i>
                    </div>
                    <div class="flex-grow-1 pe-2">
                      <div class="fw-semibold">Update failed, restart server</div>
                      <span class="fw-medium text-muted">26 min ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-2 ms-3">
                      <i class="fa fa-fw fa-plus-circle text-primary"></i>
                    </div>
                    <div class="flex-grow-1 pe-2">
                      <div class="fw-semibold">2 new sales, keep it up</div>
                      <span class="fw-medium text-muted">33 min ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-2 ms-3">
                      <i class="fa fa-fw fa-user-plus text-success"></i>
                    </div>
                    <div class="flex-grow-1 pe-2">
                      <div class="fw-semibold">You have a new subscriber</div>
                      <span class="fw-medium text-muted">41 min ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-2 ms-3">
                      <i class="fa fa-fw fa-check-circle text-success"></i>
                    </div>
                    <div class="flex-grow-1 pe-2">
                      <div class="fw-semibold">You have a new follower</div>
                      <span class="fw-medium text-muted">42 min ago</span>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="p-2 border-top text-center">
                <a class="d-inline-block fw-medium" href="javascript:void(0)">
                  <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
                </a>
              </div>
            </div>
          </div>
          <!-- END Notifications Dropdown -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="d-flex align-items-center">
          <!-- Open Search Section (visible on smaller screens) -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout"
            data-action="header_search_on">
            <i class="fa fa-fw fa-search"></i>
          </button>
          <!-- END Open Search Section -->

          <!-- Search Form (visible on larger screens) -->
          <form class="d-none d-md-inline-block" action="bd_search.html" method="POST">
            <div class="input-group input-group-sm">
              <input type="text" class="form-control form-control-alt" placeholder="Search.."
                id="page-header-search-input2" name="page-header-search-input2" />
              <span class="input-group-text bg-body border-0">
                <i class="fa fa-fw fa-search"></i>
              </span>
            </div>
          </form>
          <!-- END Search Form -->

          <!-- User Dropdown -->
          <div class="dropdown d-inline-block ms-2">
            <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center"
              id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar"
                style="width: 21px;" />
              <span class="d-none d-sm-inline-block ms-2">John</span>
              <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
              aria-labelledby="page-header-user-dropdown">
              <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                <p class="mt-2 mb-0 fw-medium">John Smith</p>
                <p class="mb-0 text-muted fs-sm fw-medium">Web Developer</p>
              </div>
              <div class="p-2">
                <a class="dropdown-item d-flex align-items-center justify-content-between"
                  href="be_pages_generic_inbox.html">
                  <span class="fs-sm fw-medium">Inbox</span>
                  <span class="badge rounded-pill bg-primary ms-2">3</span>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between"
                  href="be_pages_generic_profile.html">
                  <span class="fs-sm fw-medium">Profile</span>
                  <span class="badge rounded-pill bg-primary ms-2">1</span>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span class="fs-sm fw-medium">Settings</span>
                </a>
              </div>
              <div role="separator" class="dropdown-divider m-0"></div>
              <div class="p-2">
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_lock.html">
                  <span class="fs-sm fw-medium">Lock Account</span>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.html">
                  <span class="fs-sm fw-medium">Log Out</span>
                </a>
              </div>
            </div>
          </div>
          <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
      </div>
      <!-- END Header Content -->

      <!-- Header Search -->
      <div id="page-header-search" class="overlay-header bg-body-extra-light">
        <div class="content-header">
          <form class="w-100" action="bd_search.html" method="POST">
            <div class="input-group">
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                <i class="fa fa-fw fa-times-circle"></i>
              </button>
              <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input"
                name="page-header-search-input" />
            </div>
          </form>
        </div>
      </div>
      <!-- END Header Search -->

      <!-- Header Loader -->
      <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
      <div id="page-header-loader" class="overlay-header bg-primary-lighter">
        <div class="content-header">
          <div class="w-100 text-center">
            <i class="fa fa-fw fa-circle-notch fa-spin text-primary"></i>
          </div>
        </div>
      </div>
      <!-- END Header Loader -->
    </header>
    <!-- END Header -->
   

    <!-- Main Container -->
    <main id="main-container">
      <div class="bg-primary-darker">
        <div class="bg-black-10">
          <div class="content py-3">
            <!-- Toggle Main Navigation -->
            <div class="d-lg-none">
              <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
              <button type="button"
                class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center"
                data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                Menu
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <!-- END Toggle Main Navigation -->

            <!-- Main Navigation -->
            <div id="main-navigation" class="d-none d-lg-block mt-2 mt-lg-0">
              <ul class="nav-main nav-main-dark nav-main-horizontal nav-main-hover">
               
                <li class="nav-main-item">
                  <a class="nav-main-link" href="bd_pengajuanartikel.html">
                    <i class="nav-main-link-icon si si-magnifier"></i>
                    <span class="nav-main-link-name">Pengajuan Artikel</span>
                  </a>
                </li>


                <li class="nav-main-item ms-lg-auto">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                    aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-brush"></i>
                    <span class="nav-main-link-name d-lg-none">Themes</span>
                  </a>
                  <ul class="nav-main-submenu nav-main-submenu-right">
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                        <i class="nav-main-link-icon fa fa-square text-default"></i>
                        <span class="nav-main-link-name">Default</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css"
                        href="#">
                        <i class="nav-main-link-icon fa fa-square text-amethyst"></i>
                        <span class="nav-main-link-name">Amethyst</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-city"></i>
                        <span class="nav-main-link-name">City</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                        <i class="nav-main-link-icon fa fa-square text-flat"></i>
                        <span class="nav-main-link-name">Flat</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/modern.min.css"
                        href="#">
                        <i class="nav-main-link-icon fa fa-square text-modern"></i>
                        <span class="nav-main-link-name">Modern</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css"
                        href="#">
                        <i class="nav-main-link-icon fa fa-square text-smooth"></i>
                        <span class="nav-main-link-name">Smooth</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- END Main Navigation -->
          </div>
        </div>
      </div>
      <!-- Page Content -->
      <div class="content">
        <!-- Wizard -->
        <div class="block block-rounded block-bordered">
          <div class="block-header block-header-default">
            <h3 class="block-title">Proses Pengajuan Artikel</h3>
          </div>
          <div class="block-content block-content-full">
            <!-- Step Indicators -->
            <div class="js-wizard-simple">
              <ul class="nav nav-tabs nav-tabs-alt" role="tablist">
                <li class="nav-item">
                  <button class="nav-link active" id="wizard-step1-tab" data-bs-toggle="tab"
                    data-bs-target="#wizard-step1" role="tab" aria-controls="wizard-step1" aria-selected="true">
                    Menunggu Aproval</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" id="wizard-step2-tab" data-bs-toggle="tab" data-bs-target="#wizard-step2"
                    role="tab" aria-controls="wizard-step2" aria-selected="false">Revisi</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" id="wizard-step3-tab" data-bs-toggle="tab" data-bs-target="#wizard-step3"
                    role="tab" aria-controls="wizard-step3" aria-selected="false">Publish </button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" id="wizard-step4-tab" data-bs-toggle="tab" data-bs-target="#wizard-step4" role="tab"
                    aria-controls="wizard-step4" aria-selected="false">Ditolak </button>
                </li>

              </ul>
              <!-- Steps Content -->
              <div class="tab-content">
                <div class="tab-pane fade show active" id="wizard-step1" role="tabpanel"
                  aria-labelledby="wizard-step1-tab" >
                  <div class="py-3">
                    <h4 class="fw-bold mb-2">Menunggu Aproval</h4>
                    <p>Artikel Anda sedang dalam proses review. Harap menunggu hingga artikel disetujui oleh reviewer.
                    </p>
                  </div>
                </div>
                <div class="tab-pane fade" id="wizard-step2" role="tabpanel" aria-labelledby="wizard-step2-tab">
                  <div class="py-3">
                    <h4 class="fw-bold mb-2">Revisi ke 1</h4>
                    <p>Artikel Anda memerlukan revisi. Silakan perbaiki artikel sesuai dengan saran dari reviewer.</p>
                    <a href="bd_revisijurnal.html" class="btn btn-warning">Upload Revisi Artikel</a>
                  </div>
                </div>
                <div class="tab-pane fade" id="wizard-step3" role="tabpanel" aria-labelledby="wizard-step3-tab">
                  <div class="py-3">
                    <h4 class="fw-bold mb-2">Publish</h4>
                    <p>Artikel Anda telah disetujui dan siap untuk dipublish.</p>
                    <button type="button" class="btn btn-success">Lihat Artikel</button>
                  </div>
                </div>
                <div class="tab-pane fade" id="wizard-step4" role="tabpanel" aria-labelledby="wizard-step4-tab">
                  <div class="py-3">
                    <h4 class="fw-bold mb-2">Ditolak</h4>
                    <p>Artikel Anda telah ditolak silahkan ajukan ulang.</p>
                    <a href="bd_createpengajuanjurnal.html" class="btn btn-warning">Ajukan ulang Artikel</a>
                  </div>
                </div>

              </div>
              <!-- END Steps Content -->
            </div>
            <!-- END Step Indicators -->
          </div>
        </div>
        <!-- END Wizard -->
      </div>
      <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-extra-light">
      <div class="content py-3 text-center">
        <p class="mb-0">PENGHOBBY.ID &copy; <span data-toggle="year-copy"></span></p>
      </div>
    </footer>
    <!-- END Footer -->
  </div>
  <!-- END Page Container -->

  <script src="assets/js/oneui.app.min.js"></script>
</body>

</html>