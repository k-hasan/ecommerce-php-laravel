<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/polluxui/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 17:59:21 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PolluxUI Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="https://www.bootstrapdash.com/demo/polluxui/template/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="index.html"><img src="https://www.bootstrapdash.com/demo/polluxui/template/images/logo.svg" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="https://www.bootstrapdash.com/demo/polluxui/template/images/logo-mini.svg" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="typcn typcn-th-menu"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="https://www.bootstrapdash.com/demo/polluxui/template/images/faces/face5.jpg" alt="profile"/>
                        <span class="nav-profile-name">Eugenia Mullins</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="typcn typcn-cog-outline text-primary"></i>
                            Settings
                        </a>
                        <a class="dropdown-item">
                            <i class="typcn typcn-eject text-primary"></i>
                            Logout
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-user-status dropdown">
                    <p class="mb-0">Last login was 23 hours ago.</p>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-date dropdown">
                    <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
                        <h6 class="date mb-0">Today : Mar 23</h6>
                        <i class="typcn typcn-calendar"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                        <i class="typcn typcn-cog-outline mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="https://www.bootstrapdash.com/demo/polluxui/template/images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="https://www.bootstrapdash.com/demo/polluxui/template/images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="https://www.bootstrapdash.com/demo/polluxui/template/images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-0">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="typcn typcn-bell mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="typcn typcn-info mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="typcn typcn-cog-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">Settings</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="typcn typcn-user mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="typcn typcn-th-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
        <div class="navbar-links-wrapper d-flex align-items-stretch">
            <div class="nav-link">
                <a href="javascript:;"><i class="typcn typcn-calendar-outline"></i></a>
            </div>
            <div class="nav-link">
                <a href="javascript:;"><i class="typcn typcn-mail"></i></a>
            </div>
            <div class="nav-link">
                <a href="javascript:;"><i class="typcn typcn-folder"></i></a>
            </div>
            <div class="nav-link">
                <a href="javascript:;"><i class="typcn typcn-document-text"></i></a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item ml-0">
                    <h4 class="mb-0">Dashboard</h4>
                </li>
                <li class="nav-item">
                    <div class="d-flex align-items-baseline">
                        <p class="mb-0">Home</p>
                        <i class="typcn typcn-chevron-right"></i>
                        <p class="mb-0">Main Dahboard</p>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-search d-none d-md-block mr-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="search">
                        <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="typcn typcn-zoom"></i>
                </span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close typcn typcn-times"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close typcn typcn-times"></i>
            <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove typcn typcn-delete-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove typcn typcn-delete-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove typcn typcn-delete-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove typcn typcn-delete-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove typcn typcn-delete-outline"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="events py-4 border-bottom px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                        <p class="text-gray mb-0">build a js based app</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="https://www.bootstrapdash.com/demo/polluxui/template/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="https://www.bootstrapdash.com/demo/polluxui/template/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="https://www.bootstrapdash.com/demo/polluxui/template/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="https://www.bootstrapdash.com/demo/polluxui/template/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="https://www.bootstrapdash.com/demo/polluxui/template/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="https://www.bootstrapdash.com/demo/polluxui/template/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="typcn typcn-device-desktop menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                        <div class="badge badge-danger">new</div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/widgets/widgets.html">
                        <i class="typcn typcn-archive menu-icon"></i>
                        <span class="menu-title">Widgets</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="typcn typcn-document-text menu-icon"></i>
                        <span class="menu-title">UI Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                        <i class="typcn typcn-cog-outline menu-icon"></i>
                        <span class="menu-title">Advanced UI</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                        <i class="typcn typcn-film menu-icon"></i>
                        <span class="menu-title">Form elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
                        <i class="typcn typcn-point-of-interest-outline menu-icon"></i>
                        <span class="menu-title">Editors</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="editors">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                        <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                        <span class="menu-title">Charts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                        <i class="typcn typcn-th-small-outline menu-icon"></i>
                        <span class="menu-title">Tables</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/popups.html">
                        <i class="typcn typcn-radar-outline menu-icon"></i>
                        <span class="menu-title">Popups</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/ui-features/notifications.html">
                        <i class="typcn typcn-bell menu-icon"></i>
                        <span class="menu-title">Notifications</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                        <i class="typcn typcn-compass menu-icon"></i>
                        <span class="menu-title">Icons</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                        <i class="typcn typcn-map menu-icon"></i>
                        <span class="menu-title">Maps</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="typcn typcn-user-add-outline menu-icon"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                        <i class="typcn typcn-globe-outline menu-icon"></i>
                        <span class="menu-title">Error pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="error">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                        <i class="typcn typcn-document-delete menu-icon"></i>
                        <span class="menu-title">General Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="general-pages">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                        <i class="typcn typcn-briefcase menu-icon"></i>
                        <span class="menu-title">E-commerce</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="e-commerce">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/apps/email.html">
                        <i class="typcn typcn-mail menu-icon"></i>
                        <span class="menu-title">E-mail</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/apps/calendar.html">
                        <i class="typcn typcn-calendar-outline menu-icon"></i>
                        <span class="menu-title">Calendar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/apps/todo.html">
                        <i class="typcn typcn-device-phone menu-icon"></i>
                        <span class="menu-title">Todo List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/apps/gallery.html">
                        <i class="typcn typcn-image menu-icon"></i>
                        <span class="menu-title">Gallery</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/documentation/documentation.html">
                        <i class="typcn typcn-mortar-board menu-icon"></i>
                        <span class="menu-title">Documentation</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row">
                    <div class="col-xl-6 grid-margin stretch-card flex-column">
                        <h5 class="mb-2 text-titlecase mb-4">Status statistics</h5>
                        <div class="row">
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <p class="mb-0 text-muted">Transactions</p>
                                            <p class="mb-0 text-muted">+1.37%</p>
                                        </div>
                                        <h4>1352</h4>
                                        <canvas id="transactions-chart" class="mt-auto" height="65"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div>
                                                <p class="mb-2 text-muted">Sales</p>
                                                <h6 class="mb-0">563</h6>
                                            </div>
                                            <div>
                                                <p class="mb-2 text-muted">Orders</p>
                                                <h6 class="mb-0">720</h6>
                                            </div>
                                            <div>
                                                <p class="mb-2 text-muted">Revenue</p>
                                                <h6 class="mb-0">5900</h6>
                                            </div>
                                        </div>
                                        <canvas id="sales-chart-a" class="mt-auto" height="65"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row h-100">
                            <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
                                <div class="card">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <p class="text-muted">Sales Analytics</p>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h3 class="mb-">27632</h3>
                                            <h3 class="mb-">78%</h3>
                                        </div>
                                        <canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row h-100">
                                            <div class="col-6 d-flex flex-column justify-content-between">
                                                <p class="text-muted">CPU</p>
                                                <h4>55%</h4>
                                                <canvas id="cpu-chart" class="mt-auto"></canvas>
                                            </div>
                                            <div class="col-6 d-flex flex-column justify-content-between">
                                                <p class="text-muted">Memory</p>
                                                <h4>123,65</h4>
                                                <canvas id="memory-chart" class="mt-auto"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 grid-margin stretch-card flex-column">
                        <h5 class="mb-2 text-titlecase mb-4">Income statistics</h5>
                        <div class="row h-100">
                            <div class="col-md-12 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap">
                                            <div>
                                                <p class="mb-3">Monthly Increase</p>
                                                <h3>67842</h3>
                                            </div>
                                            <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                                        </div>
                                        <canvas id="income-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">Overall sales</h6>
                                    <div class="dropdown">
                                        <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Last 30 days
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                            <h6 class="dropdown-header">Settings</h6>
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <a class="dropdown-item" href="javascript:;">Another action</a>
                                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:;">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="sales-chart-c" class="mt-2"></canvas>
                                <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3 mt-4">
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <p class="text-muted">Gross Sales</p>
                                        <h5>492</h5>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success mb-0">0.5%</p>
                                            <i class="typcn typcn-arrow-up-thick text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <p class="text-muted">Purchases</p>
                                        <h5>87k</h5>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success mb-0">0.8%</p>
                                            <i class="typcn typcn-arrow-up-thick text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <p class="text-muted">Tax Return</p>
                                        <h5>882</h5>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-danger mb-0">-04%</p>
                                            <i class="typcn typcn-arrow-down-thick text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="dropdown">
                                        <button class="btn bg-white p-0 pb-1 pt-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Last 7 days
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                            <h6 class="dropdown-header">Settings</h6>
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <a class="dropdown-item" href="javascript:;">Another action</a>
                                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:;">Separated link</a>
                                        </div>
                                    </div>
                                    <p class="mb-0">overview</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card newsletter-card bg-gradient-warning">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                            <h5 class="mb-3 text-white">Newsletter</h5>
                                            <form class="form d-flex flex-column align-items-center justify-content-between w-100">
                                                <div class="form-group mb-2 w-100">
                                                    <input type="text" class="form-control" placeholder="email address">
                                                </div>
                                                <button class="btn btn-danger btn-rounded mt-1" type="submit">Subscribe</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 stretch-card">
                                <div class="card profile-card bg-gradient-primary">
                                    <div class="card-body">
                                        <div class="row align-items-center h-100">
                                            <div class="col-md-4">
                                                <figure class="avatar mx-auto mb-4 mb-md-0">
                                                    <img src="https://www.bootstrapdash.com/demo/polluxui/template/images/faces/face20.jpg" alt="avatar">
                                                </figure>
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="text-white text-center text-md-left">Phoebe Kennedy</h5>
                                                <p class="text-white text-center text-md-left">kennedy@gmail.com</p>
                                                <div class="d-flex align-items-center justify-content-between info pt-2">
                                                    <div>
                                                        <p class="text-white font-weight-bold">Birth date</p>
                                                        <p class="text-white font-weight-bold">Birth city</p>
                                                    </div>
                                                    <div>
                                                        <p class="text-white">16 Sep 2019</p>
                                                        <p class="text-white">Netherlands</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body border-bottom">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">Sales statistics</h6>
                                    <div class="dropdown">
                                        <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Last 7 days
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton4">
                                            <h6 class="dropdown-header">Settings</h6>
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <a class="dropdown-item" href="javascript:;">Another action</a>
                                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:;">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="sales-chart-d" height="320"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                    <div>
                                        <p class="mb-2 text-md-center text-lg-left">Total Expenses</p>
                                        <h1 class="mb-0">8742</h1>
                                    </div>
                                    <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                                </div>
                                <canvas id="expense-chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                    <div>
                                        <p class="mb-2 text-md-center text-lg-left">Total Budget</p>
                                        <h1 class="mb-0">47,840</h1>
                                    </div>
                                    <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                                </div>
                                <canvas id="budget-chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                                    <div>
                                        <p class="mb-2 text-md-center text-lg-left">Total Balance</p>
                                        <h1 class="mb-0">$7,243</h1>
                                    </div>
                                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                                </div>
                                <canvas id="balance-chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="table-responsive pt-3">
                                <table class="table table-striped project-orders-table">
                                    <thead>
                                    <tr>
                                        <th class="ml-5">ID</th>
                                        <th>Project name</th>
                                        <th>Customer</th>
                                        <th>Deadline</th>
                                        <th>Payouts	</th>
                                        <th>Traffic</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#D1</td>
                                        <td>Consectetur adipisicing elit </td>
                                        <td>Beulah Cummings</td>
                                        <td>03 Jan 2019</td>
                                        <td>$ 5235</td>
                                        <td>1.3K</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                    Edit
                                                    <i class="typcn typcn-edit btn-icon-append"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                    Delete
                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#D2</td>
                                        <td>Correlation natural resources silo</td>
                                        <td>Mitchel Dunford</td>
                                        <td>09 Oct 2019</td>
                                        <td>$ 3233</td>
                                        <td>5.4K</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                    Edit
                                                    <i class="typcn typcn-edit btn-icon-append"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                    Delete
                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#D3</td>
                                        <td>social capital compassion social</td>
                                        <td>Pei Canaday</td>
                                        <td>18 Jun 2019</td>
                                        <td>$ 4311</td>
                                        <td>2.1K</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                    Edit
                                                    <i class="typcn typcn-edit btn-icon-append"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                    Delete
                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#D4</td>
                                        <td>empower communities thought</td>
                                        <td>Gaynell Sharpton</td>
                                        <td>23 Mar 2019</td>
                                        <td>$ 7743</td>
                                        <td>2.7K</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                    Edit
                                                    <i class="typcn typcn-edit btn-icon-append"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                    Delete
                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#D5</td>
                                        <td> Targeted effective; mobilize </td>
                                        <td>Audrie Midyett</td>
                                        <td>22 Aug 2019</td>
                                        <td>$ 2455</td>
                                        <td>1.2K</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                    Edit
                                                    <i class="typcn typcn-edit btn-icon-append"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                                    Delete
                                                    <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Hand-crafted & made with <i class="typcn typcn-heart-full-outline text-danger"></i></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->
<script src="{{ asset('assets/admin/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('assets/admin/js/chart.js/Chart.min.js') }}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('assets/admin/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/admin/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/admin/js/template.js') }}"></script>
<script src="{{ asset('assets/admin/js/settings.js') }}"></script>
<script src="{{ asset('assets/admin/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
<!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/polluxui/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 May 2020 18:00:31 GMT -->
</html>
