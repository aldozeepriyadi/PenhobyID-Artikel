<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>OneUI - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or One.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header

      HEADER STYLE

        ''                                          Light themed Header
        'page-header-dark'                          Dark themed Header

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Header -->
            <div class="content-header border-bottom">
                <!-- User Avatar -->
                <a class="img-link me-1" href="javascript:void(0)">
                    <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">
                </a>
                <!-- END User Avatar -->

                <!-- User Info -->
                <div class="ms-2">
                    <a class="text-dark fw-semibold fs-sm" href="javascript:void(0)">John Smith</a>
                </div>
                <!-- END User Info -->

                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="ms-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout"
                    data-action="side_overlay_close">
                    <i class="fa fa-fw fa-times"></i>
                </a>
                <!-- END Close Side Overlay -->
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <!-- Side Overlay Tabs -->
                <div class="block block-transparent pull-x pull-t">
                    <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" id="so-overview-tab" data-bs-toggle="tab"
                                data-bs-target="#so-overview" role="tab" aria-controls="so-overview"
                                aria-selected="true">
                                <i class="fa fa-fw fa-coffee text-gray opacity-75 me-1"></i> Overview
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" id="so-sales-tab" data-bs-toggle="tab"
                                data-bs-target="#so-sales" role="tab" aria-controls="so-sales" aria-selected="false">
                                <i class="fa fa-fw fa-chart-line text-gray opacity-75 me-1"></i> Sales
                            </button>
                        </li>
                    </ul>
                    <div class="block-content tab-content overflow-hidden">
                        <!-- Overview Tab -->
                        <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel"
                            aria-labelledby="so-overview-tab" tabindex="0">
                            <!-- Activity -->
                            <div class="block block-transparent">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Recent Activity</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Activity List -->
                                    <ul class="nav-items mb-0">
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale ($15)</div>
                                                    <div>Admin Template</div>
                                                    <small class="text-muted">3 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-pencil-alt text-info"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">You edited the file</div>
                                                    <div>Documentation.doc</div>
                                                    <small class="text-muted">15 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-trash text-danger"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Project deleted</div>
                                                    <div>Line Icon Set</div>
                                                    <small class="text-muted">4 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- END Activity List -->
                                </div>
                            </div>
                            <!-- END Activity -->

                            <!-- Online Friends -->
                            <div class="block block-transparent">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Online Friends</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Users Navigation -->
                                    <ul class="nav-items mb-0">
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="assets/media/avatars/avatar1.jpg" alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Danielle Jones</div>
                                                    <div class="text-muted">Copywriter</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="assets/media/avatars/avatar12.jpg" alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Jack Estrada</div>
                                                    <div class="text-muted">Web Developer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="assets/media/avatars/avatar8.jpg" alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Barbara Scott</div>
                                                    <div class="text-muted">Web Designer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="assets/media/avatars/avatar4.jpg" alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Susan Day</div>
                                                    <div class="text-muted">Photographer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="assets/media/avatars/avatar13.jpg" alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Jack Estrada</div>
                                                    <div class="text-muted">Graphic Designer</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- END Users Navigation -->
                                </div>
                            </div>
                            <!-- END Online Friends -->

                            <!-- Quick Settings -->
                            <div class="block block-transparent mb-0">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Quick Settings</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Quick Settings Form -->
                                    <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                        <div class="mb-4">
                                            <p class="fs-sm fw-semibold mb-2">
                                                Online Status
                                            </p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="so-settings-check1" name="so-settings-check1" checked>
                                                <label class="form-check-label fs-sm" for="so-settings-check1">Show your
                                                    status to all</label>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="fs-sm fw-semibold mb-2">
                                                Auto Updates
                                            </p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="so-settings-check2" name="so-settings-check2" checked>
                                                <label class="form-check-label fs-sm" for="so-settings-check2">Keep up
                                                    to date</label>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="fs-sm fw-semibold mb-1">
                                                Application Alerts
                                            </p>
                                            <div class="space-y-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="so-settings-check3" name="so-settings-check3" checked>
                                                    <label class="form-check-label fs-sm" for="so-settings-check3">Email
                                                        Notifications</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="so-settings-check4" name="so-settings-check4" checked>
                                                    <label class="form-check-label fs-sm" for="so-settings-check4">SMS
                                                        Notifications</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="fs-sm fw-semibold mb-1">
                                                API
                                            </p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="so-settings-check5" name="so-settings-check5" checked>
                                                <label class="form-check-label fs-sm" for="so-settings-check5">Enable
                                                    access</label>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Quick Settings Form -->
                                </div>
                            </div>
                            <!-- END Quick Settings -->
                        </div>
                        <!-- END Overview Tab -->

                        <!-- Sales Tab -->
                        <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel"
                            aria-labelledby="so-sales-tab" tabindex="0">
                            <div class="block block-transparent mb-0">
                                <!-- Stats -->
                                <div class="block-content">
                                    <div class="row items-push pull-t">
                                        <div class="col-6">
                                            <div class="fs-sm fw-semibold text-uppercase">Sales</div>
                                            <a class="fs-lg" href="javascript:void(0)">22.030</a>
                                        </div>
                                        <div class="col-6">
                                            <div class="fs-sm fw-semibold text-uppercase">Balance</div>
                                            <a class="fs-lg" href="javascript:void(0)">$4.589,00</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Stats -->

                                <!-- Today -->
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="fs-sm fw-semibold text-uppercase">Today</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="ext-muted">$996</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-items push">
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $249</div>
                                                    <small class="text-muted">3 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $129</div>
                                                    <small class="text-muted">50 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $119</div>
                                                    <small class="text-muted">2 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $499</div>
                                                    <small class="text-muted">3 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Today -->

                                <!-- Yesterday -->
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="fs-sm fw-semibold text-uppercase">Yesterday</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="text-muted">$765</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-items push">
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $249</div>
                                                    <small class="text-muted">26 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-minus text-danger"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Product Purchase - $50</div>
                                                    <small class="text-muted">28 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $119</div>
                                                    <small class="text-muted">29 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-minus text-danger"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Paypal Withdrawal - $300</div>
                                                    <small class="text-muted">37 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $129</div>
                                                    <small class="text-muted">39 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $119</div>
                                                    <small class="text-muted">45 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $499</div>
                                                    <small class="text-muted">46 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- More -->
                                    <div class="text-center">
                                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                            <i class="fa fa-arrow-down opacity-50 me-1"></i> Load More..
                                        </a>
                                    </div>
                                    <!-- END More -->
                                </div>
                                <!-- END Yesterday -->
                            </div>
                        </div>
                        <!-- END Sales Tab -->
                    </div>
                </div>
                <!-- END Side Overlay Tabs -->
            </div>
            <!-- END Side Content -->
        </aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <!--
          Sidebar Mini Mode - Display Helper classes

          Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
          Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
              If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

          Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
          Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
          Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header">
                <!-- Logo -->
                <a class="fw-semibold text-dual" href="index.html">
                    <span class="smini-visible">
                        <i class="fa fa-circle-notch text-primary"></i>
                    </span>
                    <span class="smini-hide fs-5 tracking-wider">PENGHOBBYID</span>
                </a>
                <!-- END Logo -->

                <!-- Extra -->
                <div>
                    <!-- Dark Mode -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                        data-action="dark_mode_toggle">
                        <i class="far fa-moon"></i>
                    </button>
                    <!-- END Dark Mode -->

                    <!-- Options -->
                    <div class="dropdown d-inline-block ms-1">
                        <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-brush"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0"
                            aria-labelledby="sidebar-themes-dropdown">
                            <!-- Color Themes -->
                            <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="default" href="#">
                                <span>Default</span>
                                <i class="fa fa-circle text-default"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                                <span>Amethyst</span>
                                <i class="fa fa-circle text-amethyst"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                                <span>City</span>
                                <i class="fa fa-circle text-city"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                                <span>Flat</span>
                                <i class="fa fa-circle text-flat"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                                <span>Modern</span>
                                <i class="fa fa-circle text-modern"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium"
                                data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                                <span>Smooth</span>
                                <i class="fa fa-circle text-smooth"></i>
                            </a>
                            <!-- END Color Themes -->

                            <div class="dropdown-divider"></div>

                            <!-- Sidebar Styles -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light"
                                href="javascript:void(0)">
                                <span>Sidebar Light</span>
                            </a>
                            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark"
                                href="javascript:void(0)">
                                <span>Sidebar Dark</span>
                            </a>
                            <!-- END Sidebar Styles -->

                            <div class="dropdown-divider"></div>

                            <!-- Header Styles -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light"
                                href="javascript:void(0)">
                                <span>Header Light</span>
                            </a>
                            <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark"
                                href="javascript:void(0)">
                                <span>Header Dark</span>
                            </a>
                            <!-- END Header Styles -->
                        </div>
                    </div>
                    <!-- END Options -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout"
                        data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-fw fa-times"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Extra -->
            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="be_pages_dashboard.html">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard Admin</span>
                            </a>
                        </li>

                        <li class="nav-main-heading">Master data</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-energy"></i>
                                <span class="nav-main-link-name">Kelola User</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bd_kelolauser.html">
                                        <span class="nav-main-link-name">User</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-trophy"></i>
                                <span class="nav-main-link-name">Kelola Komunitas</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bd_kelolakomunitas.html">
                                        <span class="nav-main-link-name">Komunitas</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-badge"></i>
                                <span class="nav-main-link-name">Kelola Kategori Artikel</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bd_kelolakategori.html">
                                        <span class="nav-main-link-name">Kategori Artikel</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-badge"></i>
                                <span class="nav-main-link-name">Kelola Tag</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bd_kelolatag.html">
                                        <span class="nav-main-link-name">Tag</span>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-main-heading">Pengajuan Produk</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-layers"></i>
                                <span class="nav-main-link-name"> Produk</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bd_persetujuanartikel.html">
                                        <span class="nav-main-link-name">Persetujuan Produk</span>
                                    </a>
                                </li>
                            </ul>
                        </li>



                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Open Search Section (visible on smaller screens) -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout"
                        data-action="header_search_on">
                        <i class="fa fa-fw fa-search"></i>
                    </button>
                    <!-- END Open Search Section -->

                    <!-- Search Form (visible on larger screens) -->
                    <form class="d-none d-md-inline-block" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-alt" placeholder="Search.."
                                id="page-header-search-input2" name="page-header-search-input2">
                            <span class="input-group-text border-0">
                                <i class="fa fa-fw fa-search"></i>
                            </span>
                        </div>
                    </form>
                    <!-- END Search Form -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar"
                                style="width: 21px;">
                            <span class="d-none d-sm-inline-block ms-2">John</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
                            aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="assets/media/avatars/avatar10.jpg" alt="">
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
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span class="fs-sm fw-medium">Settings</span>
                                </a>
                            </div>
                            <div role="separator" class="dropdown-divider m-0"></div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="op_auth_lock.html">
                                    <span class="fs-sm fw-medium">Lock Account</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="op_auth_signin.html">
                                    <span class="fs-sm fw-medium">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn btn-sm btn-alt-secondary"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="text-primary">•</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0 fs-sm"
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

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary ms-2" data-toggle="layout"
                        data-action="side_overlay_toggle">
                        <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                    </button>
                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-body-extra-light">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-alt-danger" data-toggle="layout"
                                data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.."
                                id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-body-extra-light">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->
            <div class="content">
                <div
                    class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
                    <div class="flex-grow-1 mb-1 mb-md-0">
                        <h1 class="h3 fw-bold mb-2">
                            Selamat Datang di Halaman Admin
                        </h1>
                        <h2 class="h6 fw-medium fw-medium text-muted mb-0">
                            <a class="fw-semibold" href="be_pages_generic_profile.html">Nama Admin</a>, everything
                            looks great.
                        </h2>
                    </div>
                    <div class="mt-3 mt-md-0 ms-md-3 space-x-1">
                        <a class="btn btn-sm btn-alt-secondary space-x-1" href="be_pages_generic_profile_edit.html">
                            <i class="fa fa-cogs opacity-50"></i>
                            <span>Settings</span>
                        </a>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-sm btn-alt-secondary space-x-1"
                                id="dropdown-analytics-overview" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-fw fa-calendar-alt opacity-50"></i>
                                <span>All time</span>
                                <i class="fa fa-fw fa-angle-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end fs-sm"
                                aria-labelledby="dropdown-analytics-overview">
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">Last 30 days</a>
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">Last month</a>
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">Last 3 months</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">This year</a>
                                <a class="dropdown-item fw-medium" href="javascript:void(0)">Last Year</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>All time</span>
                                    <i class="fa fa-check"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">
                <!-- Overview -->
                <div class="row items-push">
                    <div class="col-sm-6 col-xxl-3">
                        <!-- Pending Orders -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">32</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Jumlah Author Saat Ini
                                    </dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-gem fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>View all orders</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END Pending Orders -->
                    </div>
                    <div class="col-sm-6 col-xxl-3">
                        <!-- New Customers -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">124</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Jumlah Author Baru</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="far fa-user-circle fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>View all customers</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END New Customers -->
                    </div>

                    <div class="col-sm-6 col-xxl-3">
                        <!-- Conversion Rate -->
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div
                                class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">4.5%</dt>
                                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Jumlah Artikel Yang di
                                        Approve</dd>
                                </dl>
                                <div class="item item-rounded-lg bg-body-light">
                                    <i class="fa fa-chart-bar fs-3 text-primary"></i>
                                </div>
                            </div>
                            <div class="bg-body-light rounded-bottom">
                                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span>View statistics</span>
                                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END Conversion Rate-->
                    </div>
                </div>
                <!-- END Overview -->

                <!-- Statistics -->
                <div class="row">
                    <div class="col-xl-8 col-xxl-9 d-flex flex-column">
                        <!-- Earnings Summary -->
                        <div class="block block-rounded flex-grow-1 d-flex flex-column">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Most Populer Article</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option"
                                        data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-settings"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                                <!-- Earnings Chart Container -->
                                <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                <canvas id="js-chartjs-earnings"></canvas>
                            </div>
                            <div class="block-content bg-body-light">
                                <div class="row items-push text-center w-100">
                                    <div class="col-sm-4">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                                <i class="fa fa-caret-up fs-base text-success"></i>
                                                <span>2.5%</span>
                                            </dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">Customer Growth</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                                <i class="fa fa-caret-up fs-base text-success"></i>
                                                <span>3.8%</span>
                                            </dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">Page Views</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-4">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                                <i class="fa fa-caret-down fs-base text-danger"></i>
                                                <span>1.7%</span>
                                            </dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">New Products</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Earnings Summary -->
                    </div>
                    <div class="col-xl-4 col-xxl-3 d-flex flex-column">
                        <!-- Last 2 Weeks -->
                        <!-- Chart.js Charts is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <div class="row items-push flex-grow-1">
                            <div class="col-md-6 col-xl-12">
                                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                                    <div class="block-content flex-grow-1 d-flex justify-content-between">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold">570</dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">Total Orders</dd>
                                        </dl>
                                        <div>
                                            <div
                                                class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-danger bg-danger-light">
                                                <i class="fa fa-caret-down me-1"></i>
                                                2.2%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content p-1 text-center overflow-hidden">
                                        <!-- Total Orders Chart Container -->
                                        <canvas id="js-chartjs-total-orders" style="height: 90px;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-12">
                                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                                    <div class="block-content flex-grow-1 d-flex justify-content-between">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold">$5,234.21</dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">Total Earnings</dd>
                                        </dl>
                                        <div>
                                            <div
                                                class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                                                <i class="fa fa-caret-up me-1"></i>
                                                4.2%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content p-1 text-center overflow-hidden">
                                        <!-- Total Earnings Chart Container -->
                                        <canvas id="js-chartjs-total-earnings" style="height: 90px;"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                                    <div class="block-content flex-grow-1 d-flex justify-content-between">
                                        <dl class="mb-0">
                                            <dt class="fs-3 fw-bold">264</dt>
                                            <dd class="fs-sm fw-medium text-muted mb-0">New Customers</dd>
                                        </dl>
                                        <div>
                                            <div
                                                class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                                                <i class="fa fa-caret-up me-1"></i>
                                                9.3%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content p-1 text-center overflow-hidden">
                                        <!-- New Customers Chart Container -->
                                        <canvas id="js-chartjs-new-customers" style="height: 90px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Last 2 Weeks -->
                    </div>
                </div>
                <!-- END Statistics -->


            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                            href="https://pixelcave.com" target="_blank">pixelcave</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://pixelcave.com/products/oneui" target="_blank">OneUI 5.9</a>
                        &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/oneui.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/chart.js/chart.umd.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_pages_dashboard.min.js"></script>
</body>

</html>