
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ env('APP_NAME') }}</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
</head>
<body>
<!-- Page Container -->

<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="bg-image" style="background-image: url('assets/media/various/bg_side_overlay_header.jpg');">
            <div class="bg-primary-op">
                <div class="content-header">
                    <!-- User Avatar -->
                    <a class="img-link me-1" href="be_pages_generic_profile.html">
                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                    </a>
                    <!-- END User Avatar -->


                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Side Overlay -->
                </div>
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Side Overlay Tabs -->
            <div class="block block-transparent pull-x pull-t mb-0">
                <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="so-settings-tab" data-bs-toggle="tab" data-bs-target="#so-settings" role="tab" aria-controls="so-settings" aria-selected="true">
                            <i class="fa fa-fw fa-cog"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="so-people-tab" data-bs-toggle="tab" data-bs-target="#so-people" role="tab" aria-controls="so-people" aria-selected="false">
                            <i class="far fa-fw fa-user-circle"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="so-profile-tab" data-bs-toggle="tab" data-bs-target="#so-profile" role="tab" aria-controls="so-profile" aria-selected="false">
                            <i class="far fa-fw fa-edit"></i>
                        </button>
                    </li>
                </ul>
                <div class="block-content tab-content overflow-hidden">
                    <!-- Settings Tab -->
                    <div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel" aria-labelledby="so-settings-tab">
                        <div class="block mb-0">
                            <!-- Color Themes -->
                            <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Color Themes</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row g-sm text-center">
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-default" data-toggle="theme" data-theme="default" href="#">
                                            Default
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xwork" data-toggle="theme" data-theme="assets/css/themes/xwork.min.css" href="#">
                                            xWork
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xmodern" data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css" href="#">
                                            xModern
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xeco" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css" href="#">
                                            xEco
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xsmooth" data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css" href="#">
                                            xSmooth
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xinspire" data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css" href="#">
                                            xInspire
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xdream" data-toggle="theme" data-theme="assets/css/themes/xdream.min.css" href="#">
                                            xDream
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xpro" data-toggle="theme" data-theme="assets/css/themes/xpro.min.css" href="#">
                                            xPro
                                        </a>
                                    </div>
                                    <div class="col-4 mb-1">
                                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xplay" data-toggle="theme" data-theme="assets/css/themes/xplay.min.css" href="#">
                                            xPlay
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" href="be_ui_color_themes.html">All Color Themes</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Color Themes -->

                            <!-- Sidebar -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Sidebar</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row g-sm text-center">
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Sidebar -->

                            <!-- Header -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Header</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row g-sm text-center mb-2">
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Header -->

                            <!-- Content -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Content</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row g-sm text-center">
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                                    </div>
                                    <div class="col-12 mb-1">
                                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Content -->

                            <!-- Layout API -->
                            <div class="block-content block-content-full border-top">
                                <a class="btn w-100 btn-alt-primary" href="be_layout_api.html">
                                    <i class="fa fa-fw fa-flask me-1"></i> Layout API
                                </a>
                            </div>
                            <!-- END Layout API -->
                        </div>
                    </div>
                    <!-- END Settings Tab -->

                    <!-- People -->
                    <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel" aria-labelledby="so-people-tab">
                        <div class="block mb-0">
                            <!-- Online -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Online</span>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items">
                                    <li>
                                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                            <div class="flex-shrink-0 mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar4.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Marie Duncan</div>
                                                <div class="fs-sm text-muted">Photographer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                            <div class="flex-shrink-0 mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar11.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Jose Mills</div>
                                                <div class="fw-normal fs-sm text-muted">Web Designer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                            <div class="flex-shrink-0 mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Amanda Powell</div>
                                                <div class="fw-normal fs-sm text-muted">Web Developer</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Online -->

                            <!-- Busy -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Busy</span>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items">
                                    <li>
                                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                            <div class="flex-shrink-0 mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Laura Carr</div>
                                                <div class="fw-normal fs-sm text-muted">UI Designer</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Busy -->

                            <!-- Away -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Away</span>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items">
                                    <li>
                                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                            <div class="flex-shrink-0 mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Carl Wells</div>
                                                <div class="fw-normal fs-sm text-muted">Copywriter</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                            <div class="flex-shrink-0 mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Amber Harvey</div>
                                                <div class="fw-normal fs-sm text-muted">Writer</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Away -->

                            <!-- Offline -->
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase fs-sm fw-bold">Offline</span>
                            </div>
                            <div class="block-content">
                                <ul class="nav-items">
                                    <li>
                                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                            <div class="flex-shrink-0 mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Jose Mills</div>
                                                <div class="fw-normal fs-sm text-muted">Teacher</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                            <div class="flex-shrink-0 mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar3.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Danielle Jones</div>
                                                <div class="fw-normal fs-sm text-muted">Photographer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                            <div class="flex-shrink-0 mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Laura Carr</div>
                                                <div class="fw-normal fs-sm text-muted">Front-end Developer</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                            <div class="flex-shrink-0 mx-3 overlay-container">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar15.jpg" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fw-semibold">Jose Wagner</div>
                                                <div class="fw-normal fs-sm text-muted">UX Specialist</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Offline -->

                            <!-- Add People -->
                            <div class="block-content block-content-full border-top">
                                <a class="btn w-100 btn-alt-primary" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Add People
                                </a>
                            </div>
                            <!-- END Add People -->
                        </div>
                    </div>
                    <!-- END People -->

                    <!-- Profile -->
                    <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel" aria-labelledby="so-profile-tab">
                        <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                            <div class="block mb-0">
                                <!-- Personal -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase fs-sm fw-bold">Personal</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="mb-4">
                                        <label class="form-label">Username</label>
                                        <input type="text" readonly class="form-control" id="so-profile-username-static" value="Admin">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="so-profile-name">Name</label>
                                        <input type="text" class="form-control" id="so-profile-name" name="so-profile-name" value="George Taylor">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="so-profile-email">Email</label>
                                        <input type="email" class="form-control" id="so-profile-email" name="so-profile-email" value="g.taylor@example.com">
                                    </div>
                                </div>
                                <!-- END Personal -->

                                <!-- Password Update -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase fs-sm fw-bold">Password Update</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="mb-4">
                                        <label class="form-label" for="so-profile-password">Current Password</label>
                                        <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="so-profile-new-password">New Password</label>
                                        <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="so-profile-new-password-confirm">Confirm New Password</label>
                                        <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
                                    </div>
                                </div>
                                <!-- END Password Update -->

                                <!-- Options -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase fs-sm fw-bold">Options</span>
                                </div>
                                <div class="block-content">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="so-settings-status" name="so-settings-status">
                                        <label class="form-check-label fw-semibold" for="so-settings-status">Online Status</label>
                                    </div>
                                    <p class="text-muted fs-sm">
                                        Make your online status visible to other users of your app
                                    </p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="so-settings-notifications" name="so-settings-notifications">
                                        <label class="form-check-label fw-semibold" for="so-settings-notifications">Notifications</label>
                                    </div>
                                    <p class="text-muted fs-sm">
                                        Receive desktop notifications regarding your projects and sales
                                    </p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="so-settings-updates" name="so-settings-updates">
                                        <label class="form-check-label fw-semibold" for="so-settings-updates">Auto Updates</label>
                                    </div>
                                    <p class="text-muted fs-sm">
                                        If enabled, we will keep all your applications and servers up to date with the most recent features automatically
                                    </p>
                                </div>
                                <!-- END Options -->

                                <!-- Submit -->
                                <div class="block-content block-content-full border-top">
                                    <button type="submit" class="btn w-100 btn-alt-primary">
                                        <i class="fa fa-fw fa-save me-1 opacity-50"></i> Save
                                    </button>
                                </div>
                                <!-- END Submit -->
                            </div>
                        </form>
                    </div>
                    <!-- END Profile -->
                </div>
            </div>
            <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="index.html">
              <span class="smini-visible">
                D<span class="opacity-75">x</span>
              </span>
                    <span class="smini-hidden">
                Dash<span class="opacity-75">mix</span>
              </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Toggle Sidebar Style -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                        <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                    </button>
                    <!-- END Toggle Sidebar Style -->

                    <!-- Dark Mode -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                        <i class="far fa-moon" id="dark-mode-toggler"></i>
                    </button>
                    <!-- END Dark Mode -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times-circle"></i>
                    </button>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="{{ route('admin.dashboard') }}">
                            <i class="nav-main-link-icon fa fa-location-arrow"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-main-heading">Base</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('admin.product.index') }}">
                            <i class="nav-main-link-icon fa fa-border-all"></i>
                            <span class="nav-main-link-name">Products</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('admin.product.create') }}">
                            <i class="nav-main-link-icon fa fa-plus-circle"></i>
                            <span class="nav-main-link-name">Add Product</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">security</li>

                    <li class="nav-main-item">
                        <a class="nav-main-link"  href="{{ route('admin.security') }}">
                            <i class="nav-main-link-icon fa fa-shield-alt"></i>
                            <span class="nav-main-link-name">Security</span>
                        </a>
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
            <div class="space-x-1">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
                    <i class="fa fa-fw opacity-50 fa-search"></i> <span class="ms-1 d-none d-sm-inline-block">Search</span>
                </button>
                <!-- END Open Search Section -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="space-x-1">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">Admin</span>
                        <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                        <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                            User Options
                        </div>
                        <div class="p-2">
                            <div role="separator" class="dropdown-divider"></div>

                            <!-- Toggle Side Overlay -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                <i class="far fa-fw fa-building me-1"></i> Settings
                            </a>
                            <!-- END Side Overlay -->

                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->



            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-header-dark">
            <div class="bg-white-10">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                            <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-header-dark">
            <div class="bg-white-10">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    @yield('content')
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row fs-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                    <a class="fw-semibold" href="https://1.envato.market/r6y" target="_blank">Dashmix 5.1</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->


<script src="{{ asset('assets/js/dashmix.app.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('assets/js/pages/be_pages_dashboard.min.js') }}"></script>
<!-- jQuery (required for DataTables plugin) -->
<script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script>
</body>
</html>
