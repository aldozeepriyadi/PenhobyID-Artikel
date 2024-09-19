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
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets/js/plugins/dropzone/min/dropzone.min.css">
    <link rel="stylesheet" href="assets/js/plugins/flatpickr/flatpickr.min.css">

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
    <div id="page-container" class="page-header-dark main-content-boxed">

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
                        <button type="button" class="btn btn-sm btn-alt-secondary"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
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
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar"
                                style="width: 21px;" />
                            <span class="d-none d-sm-inline-block ms-2">John</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1"></i>
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
                            <button type="button" class="btn btn-alt-danger" data-toggle="layout"
                                data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.."
                                id="page-header-search-input" name="page-header-search-input" />
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
            <!-- Navigation -->
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
                                    <a class="nav-main-link active" href="bd_pengajuanartikel.html">
                                        <i class="nav-main-link-icon fa fa-newspaper-o"></i>
                                        <span class="nav-main-link-name">Pengajuan Artikel</span>
                                    </a>
                                </li>



                            </ul>
                        </div>
                        <!-- END Main Navigation -->
                    </div>
                </div>
            </div>
            <!-- END Navigation -->
            <!-- Search -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                        <div class="flex-grow-1">
                            <h1 class="h3 fw-bold mb-1">
                                Revisi Artikel
                            </h1>

                        </div>
                        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-alt">
                                <li class="breadcrumb-item">
                                    <a class="link-fx" href="bd_pengajuanartikel.html">Halaman Pengajuan Artikel </a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Revisi Artikel
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">
                <!-- Basic -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Revisi Artikel</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <form action="be_forms_elements.html" class="js-validation" method="POST"
                            enctype="multipart/form-data" onsubmit="return false;">
                            <div class="row push">

                                <div class="col-lg-12">

                                    <div class="mb-4">
                                        <label class="form-label" for="example-textarea-input">Judul</label>
                                        <textarea class="form-control" id="example-textarea-input" name="judul-input"
                                            rows="4" placeholder="Isikan Judul Artikel"></textarea>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button type="button" class="btn btn-alt-warning push" data-bs-toggle="modal"
                                        data-bs-target="#modal-block-fadein">Tampilkan Revisi</button>
                                </div>

                            </div>
                            <div class="row push">

                                <div class="col-lg-12">

                                    <!-- Dropzone (functionality is auto initialized by the plugin itself in js/plugins/dropzone/dropzone.min.js) -->
                                    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                                    <div class="block block-rounded">

                                        <div class="block-content block-content-full">
                                            <h2 class="content-heading border-bottom mb-4 pb-2">Upload Gambar
                                            </h2>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <p class="fs-sm text-muted">
                                                        Drag and drop sections for your file uploads
                                                    </p>
                                                </div>
                                                <div class="col-lg-8">
                                                    <!-- DropzoneJS Container -->
                                                    <div id="dropzone" class="dropzone"
                                                        action="bd_createpengajuanjurnal.html"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Dropzone -->
                                    <!-- CKEditor 5 Classic (js-ckeditor5-classic id is initialized in Helpers.jsCkeditor5()) -->
                                    <!-- For more info and examples you can check out http://ckeditor.com -->
                                    <div class="block block-rounded">
                                        <div class="block-header block-header-default">
                                            <h3 class="block-title">Isi Artikel</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option">
                                                    <i class="si si-settings"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content">

                                            <div class="mb-4">
                                                <!-- CKEditor 5 Classic Container -->
                                                <textarea id="js-ckeditor5-classic"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END CKEditor 5 Classic-->


                                    <div class="mb-4">
                                        <button type="submit" class="btn btn-alt-primary">Revisi Artikel</button>
                                    </div>


                                </div>
                            </div>
                            <div class="modal fade" id="modal-block-fadein" tabindex="-1" role="dialog"
                                aria-labelledby="modal-block-fadein" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="block block-rounded block-transparent mb-0">
                                            <div class="block-header block-header-default">
                                                <h3 class="block-title">Revisi</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="block-content fs-sm">
                                                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae,
                                                    ornare laoreet adipiscing
                                                    luctus mauris adipiscing pretium eget fermentum, tristique lobortis
                                                    est ut metus lobortis tortor
                                                    tincidunt himenaeos habitant quis dictumst proin odio sagittis purus
                                                    mi, nec taciti vestibulum
                                                    quis in sit varius lorem sit metus mi.</p>
                                                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae,
                                                    ornare laoreet adipiscing
                                                    luctus mauris adipiscing pretium eget fermentum, tristique lobortis
                                                    est ut metus lobortis tortor
                                                    tincidunt himenaeos habitant quis dictumst proin odio sagittis purus
                                                    mi, nec taciti vestibulum
                                                    quis in sit varius lorem sit metus mi.</p>
                                            </div>
                                            <div class="block-content block-content-full text-end bg-body">
                                                <button type="button" class="btn btn-sm btn-alt-secondary me-1"
                                                    data-bs-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
                <!-- END Basic -->




            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-extra-light">
            <div class="content py-3">
                <div class="row fs-sm">

                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://pixelcave.com/products/oneui"
                            target="_blank">PENGHOBBY.ID</a>
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

    <!-- jQuery (required for BS Datepicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
    <script src="assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/ckeditor5-classic/build/ckeditor.js"></script>
    <script src="assets/js/plugins/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
    <script src="assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/dropzone/min/dropzone.min.js"></script>
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/plugins/jquery-validation/additional-methods.js"></script>
    <script src="assets/js/pages/be_forms_validation.min.js"></script>
    <script>
        One.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-masked-inputs', 'jq-rangeslider', 'js-ckeditor5']);
        Dropzone.autoDiscover = false;
        const myDropzone = new Dropzone("#dropzone", {
            url: "/upload", // URL untuk mengunggah file, sesuaikan sesuai dengan server Anda
            acceptedFiles: "image/*", // Hanya menerima file gambar
            maxFilesize: 1, // Ukuran maksimum file dalam MB
            dictDefaultMessage: "Drag dan drop gambar di sini atau klik untuk mengunggah",
            dictInvalidFileType: "Hanya file gambar yang diperbolehkan.",
            dictFileTooBig: "File terlalu besar ({{filesize}}MB). Ukuran maksimum: {{maxFilesize}}MB.",
        });
    </script>
</body>

</html>