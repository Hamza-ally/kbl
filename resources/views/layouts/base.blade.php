<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Winkle I Fast build Admin dashboard for any platform</title>
    <meta name="description" content="Winkle is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords"
        content="admin, admin dashboard, admin template, cms, crm, Winkle Admin, Winkleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Data table CSS -->
    <link href="{{asset('theme/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet"
        type="text/css" />

    <!-- Toast CSS -->
    <link href="{{asset('theme/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet"
        type="text/css">

    <!-- Morris Charts CSS -->
    <link href="{{asset('theme/vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />

    <!-- bootstrap-select CSS -->
    <link href="{{asset('theme/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet"
        type="text/css" />


    <!-- vector map CSS -->
    <link href="{{asset('theme/vendors/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{asset('theme/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div class="wrapper theme-1-active navbar-top-light">
        <!-- Top Menu Items -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="mobile-only-brand pull-left">
                <div class="nav-header pull-left">
                    <div class="logo-wrap">
                        <a href="index.html">
                            <img class="brand-img" src="img/logo.png" alt="brand" />
                            <span class="brand-text">Winkle</span>
                        </a>
                    </div>
                </div>
                <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left"
                    href="javascript:void(0);"><i class="ti-align-left"></i></a>
                <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view"
                    href="javascript:void(0);"><i class="ti-search"></i></a>
                <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i
                        class="ti-more"></i></a>
                <form id="search_form" role="search" class="top-nav-search collapse pull-left">
                    <div class="input-group">
                        <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button type="button" class="btn  btn-default" data-target="#search_form"
                                data-toggle="collapse" aria-label="Close" aria-expanded="true"><i
                                    class="ti-search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
            <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                <ul class="nav navbar-right top-nav pull-right">
                    <li>
                        <a id="open_right_sidebar" href="#"><i class="ti-settings  top-nav-icon"></i></a>
                    </li>
                    <li class="dropdown app-drp">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="ti-view-grid top-nav-icon"></i></a>
                        <ul class="dropdown-menu app-dropdown" data-dropdown-in="slideInRight"
                            data-dropdown-out="flipOutX">
                            <li>
                                <div class="app-nicescroll-bar">
                                    <ul class="app-icon-wrap pa-10">
                                        <li>
                                            <a href="weather.html" class="connection-item">
                                                <i class="zmdi zmdi-cloud-outline txt-info"></i>
                                                <span class="block">weather</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html" class="connection-item">
                                                <i class="zmdi zmdi-email-open txt-success"></i>
                                                <span class="block">e-mail</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="calendar.html" class="connection-item">
                                                <i class="zmdi zmdi-calendar-check txt-primary"></i>
                                                <span class="block">calendar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="vector-map.html" class="connection-item">
                                                <i class="zmdi zmdi-map txt-danger"></i>
                                                <span class="block">map</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="chats.html" class="connection-item">
                                                <i class="zmdi zmdi-comment-outline txt-warning"></i>
                                                <span class="block">chat</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact-card.html" class="connection-item">
                                                <i class="zmdi zmdi-assignment-account"></i>
                                                <span class="block">contact</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="app-box-bottom-wrap">
                                    <hr class="light-grey-hr ma-0" />
                                    <a class="block text-center read-all" href="javascript:void(0)"> more </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown full-width-drp">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="ti-align-center top-nav-icon"></i></a>
                        <ul class="dropdown-menu mega-menu pa-0" data-dropdown-in="fadeIn"
                            data-dropdown-out="fadeOut">
                            <li class="product-nicescroll-bar row">
                                <ul class="pa-20">
                                    <li class="col-md-3 col-xs-6 col-menu-list">
                                        <a href="index.html">
                                            <div class="pull-left"><i class="ti-dashboard  mr-20"></i><span
                                                    class="right-nav-text">Analytical</span></div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <a href="index2.html">
                                            <div class="pull-left"><i class="ti-money  mr-20"></i><span
                                                    class="right-nav-text">Cryptocurrency</span></div>
                                            <div class="pull-right"><span class="label label-success">Hot</span></div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <a href="profile.html">
                                            <div class="pull-left"><i class="ti-briefcase  mr-20"></i><span
                                                    class="right-nav-text">Profile</span></div>
                                            <div class="clearfix"></div>
                                        </a>
                                    </li>
                                    <li class="col-md-3 col-xs-6 col-menu-list">
                                        <a href="javascript:void(0);">
                                            <div class="pull-left">
                                                <i class="ti-shopping-cart  mr-20"></i><span
                                                    class="right-nav-text">E-Commerce</span>
                                            </div>
                                            <div class="pull-right"><i class="ti-angle-down"></i></div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <hr class="light-grey-hr ma-0" />
                                        <ul>
                                            <li>
                                                <a href="e-commerce.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="product.html">Products</a>
                                            </li>
                                            <li>
                                                <a href="product-detail.html">Product Detail</a>
                                            </li>
                                            <li>
                                                <a href="add-products.html">Add Product</a>
                                            </li>
                                            <li>
                                                <a href="product-orders.html">Orders</a>
                                            </li>
                                            <li>
                                                <a href="product-cart.html">Cart</a>
                                            </li>
                                            <li>
                                                <a href="product-checkout.html">Checkout</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-md-6 col-xs-12 preview-carousel">
                                        <a href="javascript:void(0);">
                                            <div class="pull-left"><span class="right-nav-text">latest products</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <hr class="light-grey-hr ma-0" />
                                        <div class="product-carousel owl-carousel owl-theme text-center">
                                            <a href="#">
                                                <img src="img/chair.jpg" alt="chair">
                                                <span>Circle chair</span>
                                            </a>
                                            <a href="#">
                                                <img src="img/chair2.jpg" alt="chair">
                                                <span>square chair</span>
                                            </a>
                                            <a href="#">
                                                <img src="img/chair3.jpg" alt="chair">
                                                <span>semi circle chair</span>
                                            </a>
                                            <a href="#">
                                                <img src="img/chair4.jpg" alt="chair">
                                                <span>wooden chair</span>
                                            </a>
                                            <a href="#">
                                                <img src="img/chair2.jpg" alt="chair">
                                                <span>square chair</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown alert-drp">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="ti-bell top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
                        <ul class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn"
                            data-dropdown-out="bounceOut">
                            <li>
                                <div class="notification-box-head-wrap">
                                    <span class="notification-box-head pull-left inline-block">notifications</span>
                                    <a class="txt-danger pull-right clear-notifications inline-block"
                                        href="javascript:void(0)"> clear all </a>
                                    <div class="clearfix"></div>
                                    <hr class="light-grey-hr ma-0" />
                                </div>
                            </li>
                            <li>
                                <div class="streamline message-nicescroll-bar">
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="icon bg-green">
                                                <i class="ti-briefcase "></i>
                                            </div>
                                            <div class="sl-content">
                                                <span
                                                    class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                    New subscription created</span>
                                                <span
                                                    class="inline-block font-11  pull-right notifications-time">2pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Your customer subscribed for the basic plan. The
                                                    customer will pay $25 per month.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0" />
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="icon bg-yellow">
                                                <i class="zmdi zmdi-trending-down"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span
                                                    class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server
                                                    #2 not responding</span>
                                                <span
                                                    class="inline-block font-11 pull-right notifications-time">1pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Some technical error occurred needs to be resolved.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0" />
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="icon bg-blue">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span
                                                    class="inline-block capitalize-font  pull-left truncate head-notifications">2
                                                    new messages</span>
                                                <span
                                                    class="inline-block font-11  pull-right notifications-time">4pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate"> The last payment for your G Suite Basic
                                                    subscription failed.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0" />
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="sl-avatar">
                                                <img class="img-responsive" src="img/avatar.jpg" alt="avatar" />
                                            </div>
                                            <div class="sl-content">
                                                <span
                                                    class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy
                                                    Doe</span>
                                                <span
                                                    class="inline-block font-11  pull-right notifications-time">1pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Neque porro quisquam est qui dolorem ipsum quia
                                                    dolor sit amet, consectetur, adipisci velit</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0" />
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="icon bg-red">
                                                <i class="zmdi zmdi-storage"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span
                                                    class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99%
                                                    server space occupied.</span>
                                                <span
                                                    class="inline-block font-11  pull-right notifications-time">1pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">consectetur, adipisci velit.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="notification-box-bottom-wrap">
                                    <hr class="light-grey-hr ma-0" />
                                    <a class="block text-center read-all" href="javascript:void(0)"> read all </a>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown auth-drp">
                        <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img
                                src="img/user1.png" alt="user_auth" class="user-auth-img img-circle" /><span
                                class="user-online-status"></span></a>
                        <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX"
                            data-dropdown-out="flipOutX">
                            <li>
                                <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
                            </li>
                            <li>
                                <a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
                            </li>
                            <li class="divider"></li>
                            <li class="sub-menu show-on-hover">
                                <a href="#" class="dropdown-toggle pr-0 level-2-drp"><i
                                        class="zmdi zmdi-check text-success"></i> available</a>
                                <ul class="dropdown-menu open-left-side">
                                    <li>
                                        <a href="#"><i
                                                class="zmdi zmdi-check text-success"></i><span>available</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i
                                                class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i
                                                class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /Top Menu Items -->

        <!-- Left Sidebar Menu -->
        <div class="fixed-sidebar-left">
            <ul class="nav navbar-nav side-nav nicescroll-bar">
                <li class="navigation-header">
                    <span>Main</span>
                    <hr />
                </li>
                <li>
                    <a href="index.html">
                        <div class="pull-left"><i class="ti-dashboard  mr-20"></i><span
                                class="right-nav-text">Analytical</span></div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li>
                    <a class="active" href="index2.html">
                        <div class="pull-left"><i class="ti-money  mr-20"></i><span
                                class="right-nav-text">Cryptocurrency</span></div>
                        <div class="pull-right"><span class="label label-success">Hot</span></div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr">
                        <div class="pull-left"><i class="ti-shopping-cart  mr-20"></i><span
                                class="right-nav-text">E-Commerce</span></div>
                        <div class="pull-right"><i class="ti-angle-down"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="ecom_dr" class="collapse collapse-level-1">
                        <li>
                            <a href="e-commerce.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="product.html">Products</a>
                        </li>
                        <li>
                            <a href="product-detail.html">Product Detail</a>
                        </li>
                        <li>
                            <a href="add-products.html">Add Product</a>
                        </li>
                        <li>
                            <a href="product-orders.html">Orders</a>
                        </li>
                        <li>
                            <a href="product-cart.html">Cart</a>
                        </li>
                        <li>
                            <a href="product-checkout.html">Checkout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr">
                        <div class="pull-left"><i class="ti-image mr-20"></i><span class="right-nav-text">Apps
                            </span></div>
                        <div class="pull-right"><i class="ti-angle-down"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="app_dr" class="collapse collapse-level-1">
                        <li>
                            <a href="chats.html">chats</a>
                        </li>
                        <li>
                            <a href="calendar.html">calendar</a>
                        </li>
                        <li>
                            <a href="weather.html">weather</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#email_dr">Email<div
                                    class="pull-right"><i class="ti-angle-down "></i></div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="email_dr" class="collapse collapse-level-2">
                                <li>
                                    <a href="inbox.html">inbox</a>
                                </li>
                                <li>
                                    <a href="inbox-detail.html">detail email</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#contact_dr">Contacts
                                <div class="pull-right"><i class="ti-angle-down "></i></div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="contact_dr" class="collapse collapse-level-2">
                                <li>
                                    <a href="contact-list.html">list</a>
                                </li>
                                <li>
                                    <a href="contact-card.html">cards</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="file-manager.html">File Manager</a>
                        </li>
                        <li>
                            <a href="todo-tasklist.html">To Do/Tasklist</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="profile.html">
                        <div class="pull-left"><i class="ti-briefcase  mr-20"></i><span
                                class="right-nav-text">profile</span></div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="navigation-header mt-20">
                    <span>component</span>
                    <hr />
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr">
                        <div class="pull-left"><i class="ti-pencil-alt  mr-20"></i><span class="right-nav-text">UI
                                Elements</span></div>
                        <div class="pull-right"><i class="ti-angle-down "></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
                        <li>
                            <a href="panels-wells.html">Panels & Wells</a>
                        </li>
                        <li>
                            <a href="modals.html">Modals</a>
                        </li>
                        <li>
                            <a href="sweetalert.html">Sweet Alerts</a>
                        </li>
                        <li>
                            <a href="notifications.html">notifications</a>
                        </li>
                        <li>
                            <a href="typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="accordion-toggle.html">Accordion / Toggles</a>
                        </li>
                        <li>
                            <a href="tabs.html">Tabs</a>
                        </li>
                        <li>
                            <a href="progressbars.html">Progress bars</a>
                        </li>
                        <li>
                            <a href="skills-counter.html">Skills & Counters</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing Tables</a>
                        </li>
                        <li>
                            <a href="nestable.html">Nestables</a>
                        </li>
                        <li>
                            <a href="dorpdown.html">Dropdowns</a>
                        </li>
                        <li>
                            <a href="bootstrap-treeview.html">Tree View</a>
                        </li>
                        <li>
                            <a href="carousel.html">Carousel</a>
                        </li>
                        <li>
                            <a href="range-slider.html">Range Slider</a>
                        </li>
                        <li>
                            <a href="grid-styles.html">Grid</a>
                        </li>
                        <li>
                            <a href="bootstrap-ui.html">Bootstrap UI</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr">
                        <div class="pull-left"><i class="ti-check-box  mr-20"></i><span
                                class="right-nav-text">Forms</span></div>
                        <div class="pull-right"><i class="ti-angle-down "></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="form_dr" class="collapse collapse-level-1 two-col-list">
                        <li>
                            <a href="form-element.html">Basic Forms</a>
                        </li>
                        <li>
                            <a href="form-layout.html">form Layout</a>
                        </li>
                        <li>
                            <a href="form-advanced.html">Form Advanced</a>
                        </li>
                        <li>
                            <a href="form-mask.html">Form Mask</a>
                        </li>
                        <li>
                            <a href="form-picker.html">Form Picker</a>
                        </li>
                        <li>
                            <a href="form-validation.html">form Validation</a>
                        </li>
                        <li>
                            <a href="form-wizard.html">Form Wizard</a>
                        </li>
                        <li>
                            <a href="form-x-editable.html">X-Editable</a>
                        </li>
                        <li>
                            <a href="cropperjs.html">Cropperjs</a>
                        </li>
                        <li>
                            <a href="form-file-upload.html">File Upload</a>
                        </li>
                        <li>
                            <a href="dropzone.html">Dropzone</a>
                        </li>
                        <li>
                            <a href="bootstrap-wysihtml5.html">Bootstrap Wysihtml5</a>
                        </li>
                        <li>
                            <a href="tinymce-wysihtml5.html">Tinymce Wysihtml5</a>
                        </li>
                        <li>
                            <a href="summernote-wysihtml5.html">summernote</a>
                        </li>
                        <li>
                            <a href="typeahead-js.html">typeahead</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr">
                        <div class="pull-left"><i class="ti-bar-chart  mr-20"></i><span class="right-nav-text">Charts
                            </span></div>
                        <div class="pull-right"><i class="ti-angle-down "></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="chart_dr" class="collapse collapse-level-1 two-col-list">
                        <li>
                            <a href="flot-chart.html">Flot Chart</a>
                        </li>
                        <li>
                            <a href="echart.html">Echart Chart</a>
                        </li>
                        <li>
                            <a href="morris-chart.html">Morris Chart</a>
                        </li>
                        <li>
                            <a href="chart.js.html">chartjs</a>
                        </li>
                        <li>
                            <a href="chartist.html">chartist</a>
                        </li>
                        <li>
                            <a href="easy-pie-chart.html">Easy Pie Chart</a>
                        </li>
                        <li>
                            <a href="sparkline.html">Sparkline</a>
                        </li>
                        <li>
                            <a href="peity-chart.html">Peity Chart</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr">
                        <div class="pull-left"><i class="ti-layout-list-thumb  mr-20"></i><span
                                class="right-nav-text">Tables</span></div>
                        <div class="pull-right"><i class="ti-angle-down "></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="table_dr" class="collapse collapse-level-1 two-col-list">
                        <li>
                            <a href="basic-table.html">Basic Table</a>
                        </li>
                        <li>
                            <a href="bootstrap-table.html">Bootstrap Table</a>
                        </li>
                        <li>
                            <a href="data-table.html">Data Table</a>
                        </li>
                        <li>
                            <a href="export-table.html">Export Table</a>
                        </li>
                        <li>
                            <a href="responsive-data-table.html">RSPV DataTable</a>
                        </li>
                        <li>
                            <a href="responsive-table.html">Responsive Table</a>
                        </li>
                        <li>
                            <a href="editable-table.html">Editable Table</a>
                        </li>
                        <li>
                            <a href="foo-table.html">Foo Table</a>
                        </li>
                        <li>
                            <a href="jsgrid-table.html">Jsgrid Table</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr">
                        <div class="pull-left"><i class="ti-cup mr-20"></i><span class="right-nav-text">Icons</span>
                        </div>
                        <div class="pull-right"><i class="ti-angle-down "></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="icon_dr" class="collapse collapse-level-1">
                        <li>
                            <a href="fontawesome.html">Fontawesome</a>
                        </li>
                        <li>
                            <a href="themify.html">Themify</a>
                        </li>
                        <li>
                            <a href="linea-icon.html">Linea</a>
                        </li>
                        <li>
                            <a href="simple-line-icons.html">Simple Line</a>
                        </li>
                        <li>
                            <a href="pe-icon-7.html">Pe-icon-7</a>
                        </li>
                        <li>
                            <a href="glyphicons.html">Glyphicons</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr">
                        <div class="pull-left"><i class=" ti-location-pin  mr-20"></i><span
                                class="right-nav-text">maps</span></div>
                        <div class="pull-right"><i class="ti-angle-down "></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="maps_dr" class="collapse collapse-level-1">
                        <li>
                            <a href="vector-map.html">Vector Map</a>
                        </li>
                        <li>
                            <a href="google-map.html">Google Map</a>
                        </li>
                    </ul>
                </li>
                <li class="navigation-header mt-20">
                    <span>featured</span>
                    <hr />
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr">
                        <div class="pull-left"><i class="ti-shield mr-20"></i><span class="right-nav-text">Special
                                Pages</span></div>
                        <div class="pull-right"><i class="ti-angle-down "></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
                        <li>
                            <a href="blank.html">Blank Page</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse"
                                data-target="#auth_dr">Authantication pages<div class="pull-right"><i
                                        class="ti-angle-down "></i></div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="auth_dr" class="collapse collapse-level-2">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="signup.html">Register</a>
                                </li>
                                <li>
                                    <a href="forgot-password.html">Recover Password</a>
                                </li>
                                <li>
                                    <a href="reset-password.html">reset Password</a>
                                </li>
                                <li>
                                    <a href="locked.html">Lock Screen</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr">Invoice
                                <div class="pull-right"><i class="ti-angle-down "></i></div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="invoice_dr" class="collapse collapse-level-2">
                                <li>
                                    <a href="invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="invoice-archive.html">Invoice Archive</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#error_dr">error pages
                                <div class="pull-right"><i class="ti-angle-down "></i></div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="error_dr" class="collapse collapse-level-2">
                                <li>
                                    <a href="404.html">Error 404</a>
                                </li>
                                <li>
                                    <a href="500.html">Error 500</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv1">
                        <div class="pull-left"><i class="ti-layers-alt mr-20"></i><span
                                class="right-nav-text">multilevel</span></div>
                        <div class="pull-right"><i class="ti-angle-down "></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="dropdown_dr_lv1" class="collapse collapse-level-1">
                        <li>
                            <a href="#">Item level 1</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse"
                                data-target="#dropdown_dr_lv2">Dropdown level 2<div class="pull-right"><i
                                        class="ti-angle-down "></i></div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="dropdown_dr_lv2" class="collapse collapse-level-2">
                                <li>
                                    <a href="#">Item level 2</a>
                                </li>
                                <li>
                                    <a href="#">Item level 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="pa-15 mt-10 mb-20">
                    <a href="documentation.html" class="documentation-btn txt-light text-center">
                        <span class="doc-large-btn">documentation</span>
                        <span class="doc-small-btn">d</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /Left Sidebar Menu -->

        <!-- Right Sidebar Menu -->
        <div class="fixed-sidebar-right">
            <ul class="right-sidebar">
                <li>
                    <div class="tab-struct custom-tab-1">
                        <ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
                            <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab"
                                    role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
                            <li role="presentation" class=""><a data-toggle="tab" id="messages_tab_btn"
                                    role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
                            <li role="presentation" class=""><a data-toggle="tab" id="todo_tab_btn"
                                    role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
                        </ul>
                        <div class="tab-content" id="right_sidebar_content">
                            <div id="chat_tab" class="tab-pane fade active in" role="tabpanel">
                                <div class="chat-cmplt-wrap">
                                    <div class="chat-box-wrap">
                                        <div class="add-friend">
                                            <a href="javascript:void(0)" class="inline-block txt-grey">
                                                <i class="zmdi zmdi-more"></i>
                                            </a>
                                            <span class="inline-block txt-dark">users</span>
                                            <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i
                                                    class="zmdi zmdi-plus"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                        <form role="search" class="chat-search pl-15 pr-15 pb-15">
                                            <div class="input-group">
                                                <input type="text" id="example-input1-group2"
                                                    name="example-input1-group2" class="form-control"
                                                    placeholder="Search">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn  btn-default"><i
                                                            class="zmdi zmdi-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                        <div id="chat_list_scroll">
                                            <div class="nicescroll-bar">
                                                <ul class="chat-list-wrap">
                                                    <li class="chat-list">
                                                        <div class="chat-body">
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Clay
                                                                            Masse</span>
                                                                        <span class="time block truncate txt-grey">No
                                                                            one saves us but ourselves.</span>
                                                                    </div>
                                                                    <div class="status away"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user1.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Evie
                                                                            Ono</span>
                                                                        <span
                                                                            class="time block truncate txt-grey">Unity
                                                                            is strength</span>
                                                                    </div>
                                                                    <div class="status offline"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user2.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span
                                                                            class="name block capitalize-font">Madalyn
                                                                            Rascon</span>
                                                                        <span
                                                                            class="time block truncate txt-grey">Respect
                                                                            yourself if you would have others respect
                                                                            you.</span>
                                                                    </div>
                                                                    <div class="status online"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user3.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span
                                                                            class="name block capitalize-font">Mitsuko
                                                                            Heid</span>
                                                                        <span class="time block truncate txt-grey">I’m
                                                                            thankful.</span>
                                                                    </div>
                                                                    <div class="status online"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span
                                                                            class="name block capitalize-font">Ezequiel
                                                                            Merideth</span>
                                                                        <span
                                                                            class="time block truncate txt-grey">Patience
                                                                            is bitter.</span>
                                                                    </div>
                                                                    <div class="status offline"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user1.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Jonnie
                                                                            Metoyer</span>
                                                                        <span
                                                                            class="time block truncate txt-grey">Genius
                                                                            is eternal patience.</span>
                                                                    </div>
                                                                    <div class="status online"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user2.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span
                                                                            class="name block capitalize-font">Angelic
                                                                            Lauver</span>
                                                                        <span
                                                                            class="time block truncate txt-grey">Every
                                                                            burden is a blessing.</span>
                                                                    </div>
                                                                    <div class="status away"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user3.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span
                                                                            class="name block capitalize-font">Priscila
                                                                            Shy</span>
                                                                        <span class="time block truncate txt-grey">Wise
                                                                            to resolve, and patient to perform.</span>
                                                                    </div>
                                                                    <div class="status online"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle"
                                                                        src="img/user4.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Linda
                                                                            Stack</span>
                                                                        <span class="time block truncate txt-grey">Our
                                                                            patience will achieve more than our
                                                                            force.</span>
                                                                    </div>
                                                                    <div class="status away"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-chat-box-wrap">
                                        <div class="recent-chat-wrap">
                                            <div class="panel-heading ma-0">
                                                <div class="goto-back">
                                                    <a id="goto_back" href="javascript:void(0)"
                                                        class="inline-block txt-grey">
                                                        <i class="zmdi zmdi-chevron-left"></i>
                                                    </a>
                                                    <span class="inline-block txt-dark">ryan</span>
                                                    <a href="javascript:void(0)"
                                                        class="inline-block text-right txt-grey"><i
                                                            class="zmdi zmdi-more"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="chat-content">
                                                        <ul class="nicescroll-bar pt-20">
                                                            <li class="friend">
                                                                <div class="friend-msg-wrap">
                                                                    <img class="user-img img-circle block pull-left"
                                                                        src="img/user.png" alt="user" />
                                                                    <div class="msg pull-left">
                                                                        <p>Hello Jason, how are you, it's been a long
                                                                            time since we last met?</p>
                                                                        <div class="msg-per-detail text-right">
                                                                            <span class="msg-time txt-grey">2:30
                                                                                PM</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </li>
                                                            <li class="self mb-10">
                                                                <div class="self-msg-wrap">
                                                                    <div class="msg block pull-right"> Oh, hi Sarah I'm
                                                                        have got a new job now and is going great.
                                                                        <div class="msg-per-detail text-right">
                                                                            <span class="msg-time txt-grey">2:31
                                                                                pm</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </li>
                                                            <li class="self">
                                                                <div class="self-msg-wrap">
                                                                    <div class="msg block pull-right"> How about you?
                                                                        <div class="msg-per-detail text-right">
                                                                            <span class="msg-time txt-grey">2:31
                                                                                pm</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </li>
                                                            <li class="friend">
                                                                <div class="friend-msg-wrap">
                                                                    <img class="user-img img-circle block pull-left"
                                                                        src="img/user.png" alt="user" />
                                                                    <div class="msg pull-left">
                                                                        <p>Not too bad.</p>
                                                                        <div class="msg-per-detail  text-right">
                                                                            <span class="msg-time txt-grey">2:35
                                                                                pm</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" id="input_msg_send" name="send-msg"
                                                            class="input-msg-send form-control"
                                                            placeholder="Type something">
                                                        <div class="input-group-btn emojis">
                                                            <div class="dropup">
                                                                <button type="button"
                                                                    class="btn  btn-default  dropdown-toggle"
                                                                    data-toggle="dropdown"><i
                                                                        class="zmdi zmdi-mood"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="javascript:void(0)">Action</a></li>
                                                                    <li><a href="javascript:void(0)">Another action</a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="javascript:void(0)">Separated link</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="input-group-btn attachment">
                                                            <div class="fileupload btn  btn-default"><i
                                                                    class="zmdi zmdi-attachment-alt"></i>
                                                                <input type="file" class="upload">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="messages_tab" class="tab-pane fade" role="tabpanel">
                                <div class="message-box-wrap">
                                    <div class="msg-search">
                                        <a href="javascript:void(0)" class="inline-block txt-grey">
                                            <i class="zmdi zmdi-more"></i>
                                        </a>
                                        <span class="inline-block txt-dark">messages</span>
                                        <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i
                                                class="zmdi zmdi-search"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="set-height-wrap">
                                        <div class="streamline message-box nicescroll-bar">
                                            <a href="javascript:void(0)">
                                                <div class="sl-item unread-message">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Clay
                                                            Masse</span>
                                                        <span
                                                            class="inline-block font-11  pull-right message-time">12:28
                                                            AM</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Themeforest message
                                                            sent via your envato market profile</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsu messm quia dolor sit amet, consectetur,
                                                            adipisci velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user1.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Evie
                                                            Ono</span>
                                                        <span class="inline-block font-11  pull-right message-time">1
                                                            Feb</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Pogody theme
                                                            support</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                            velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user2.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Madalyn
                                                            Rascon</span>
                                                        <span class="inline-block font-11  pull-right message-time">31
                                                            Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Congratulations from
                                                            design nominees</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                            velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item unread-message">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user3.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Ezequiel
                                                            Merideth</span>
                                                        <span class="inline-block font-11  pull-right message-time">29
                                                            Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Themeforest item
                                                            support message</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                            velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item unread-message">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user4.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Jonnie
                                                            Metoyer</span>
                                                        <span class="inline-block font-11  pull-right message-time">27
                                                            Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Help with beavis
                                                            contact form</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                            velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Priscila
                                                            Shy</span>
                                                        <span class="inline-block font-11  pull-right message-time">19
                                                            Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Your uploaded theme is
                                                            been selected</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                            velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="img/user1.png"
                                                            alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span
                                                            class="inline-block capitalize-font   pull-left message-per">Linda
                                                            Stack</span>
                                                        <span class="inline-block font-11  pull-right message-time">13
                                                            Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject"> A new rating has been
                                                            received</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui
                                                            dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                            velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="todo_tab" class="tab-pane fade" role="tabpanel">
                                <div class="todo-box-wrap">
                                    <div class="add-todo">
                                        <a href="javascript:void(0)" class="inline-block txt-grey">
                                            <i class="zmdi zmdi-more"></i>
                                        </a>
                                        <span class="inline-block txt-dark">todo list</span>
                                        <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i
                                                class="zmdi zmdi-plus"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="set-height-wrap">
                                        <!-- Todo-List -->
                                        <ul class="todo-list nicescroll-bar">
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-default">
                                                    <input type="checkbox" id="checkbox01" />
                                                    <label for="checkbox01">Record The First Episode</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-pink">
                                                    <input type="checkbox" id="checkbox02" />
                                                    <label for="checkbox02">Prepare The Conference Schedule</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-warning">
                                                    <input type="checkbox" id="checkbox03" checked />
                                                    <label for="checkbox03">Decide The Live Discussion Time</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-success">
                                                    <input type="checkbox" id="checkbox04" checked />
                                                    <label for="checkbox04">Prepare For The Next Project</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-danger">
                                                    <input type="checkbox" id="checkbox05" checked />
                                                    <label for="checkbox05">Finish Up AngularJs Tutorial</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-purple">
                                                    <input type="checkbox" id="checkbox06" checked />
                                                    <label for="checkbox06">Finish Infinity Project</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                        </ul>
                                        <!-- /Todo-List -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /Right Sidebar Menu -->



        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid pt-30">
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="panel panel-default border-panel card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">balance statistics</h6>
                                </div>
                                <div class="pull-right">
                                    <span class="data-text weight-500 pr-5">All Time</span>
                                    <span class="no-margin-switcher">
                                        <input type="checkbox" checked id="morris_switch" class="js-switch"
                                            data-color="#ff354d" data-secondary-color="#dedede" data-size="small" />
                                    </span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <ul class="flex-stat flex-stat-2 mt-20">
                                        <li>
                                            <span class="block"><span class="initial">$ </span><span
                                                    class="txt-dark weight-300 counter-anim data-rep">7,115,008</span></span>
                                            <span class="block">Bitcoin Price</span>

                                        </li>
                                        <li>
                                            <span class="block"><span class="initial">$ </span><span
                                                    class="txt-dark weight-300 counter-anim data-rep">5,426.21</span></span>
                                            <span class="block">Since Last Month (USD)</span>

                                        </li>
                                        <li>
                                            <span class="block">
                                                <i class="zmdi zmdi-caret-up pr-10 font-24 txt-success"></i><span
                                                    class="txt-dark weight-300 data-rep"><span
                                                        class="counter-anim">89</span>%</span>
                                            </span>

                                            <span class="block">Since Last Month (%)</span>

                                        </li>
                                    </ul>
                                    <div id="chart_1" class="morris-chart" style="height:330px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default border-panel card-view panel-refresh">
                            <div class="refresh-container">
                                <div class="la-anim-1"></div>
                            </div>
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Currency Portfolio</h6>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="flex-stat flex-stat-3 text-center">
                                        <span class="block"><span class="initial">$ </span><span
                                                class="txt-violet weight-300 counter-anim data-rep">2,458.34</span></span>
                                        <span class="block">Total Wallet Balance</span>
                                    </div>
                                    <hr class="light-grey-hr row mt-10 mb-15" />
                                    <div class="label-chatrs">
                                        <div class="">
                                            <div class="pull-left"><img class="pull-left"
                                                    src="img/money/bitcoin.png" alt="money" /><span
                                                    class="pull-left weight-600 txt-dark font-16 capitalize-font pl-10">bitcoin</span>
                                            </div>
                                            <span
                                                class="clabels-text font-12 inline-block txt-dark text-right capitalize-font pull-right"><span
                                                    class="block font-15 weight-500 mb-5">45,532 BTC</span><span
                                                    class="block txt-grey">$ 7,15,008</span></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <hr class="light-grey-hr row mt-10 mb-15" />
                                    <div class="label-chatrs">
                                        <div class="">
                                            <div class="pull-left"><img class="pull-left"
                                                    src="img/money/ethereum.png" alt="money" /><span
                                                    class="pull-left weight-600 txt-dark font-16 capitalize-font pl-10">ethereum</span>
                                            </div>
                                            <span
                                                class="clabels-text font-12 inline-block txt-dark text-right capitalize-font pull-right"><span
                                                    class="block font-15 weight-500 mb-5">15.24 ETH</span><span
                                                    class="block txt-grey">$ 7,15,008</span></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <hr class="light-grey-hr row mt-10 mb-15" />
                                    <div class="label-chatrs">
                                        <div class="">
                                            <div class="pull-left"><img class="pull-left"
                                                    src="img/money/litecoin.png" alt="money" /><span
                                                    class="pull-left weight-600 txt-dark font-16 capitalize-font pl-10">litecoin</span>
                                            </div>
                                            <span
                                                class="clabels-text font-12 inline-block txt-dark text-right capitalize-font pull-right"><span
                                                    class="block font-15 weight-500 mb-5">3.432 LTC</span><span
                                                    class="block txt-grey">$ 7,15,008</span></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <hr class="light-grey-hr row mt-10 mb-15" />
                                    <div class="label-chatrs">
                                        <div class="">
                                            <div class="pull-left"><img class="pull-left"
                                                    src="img/money/usd.png" alt="money" /><span
                                                    class="pull-left weight-600 txt-dark font-16 capitalize-font pl-10">US
                                                    Dolars</span></div>
                                            <span
                                                class="clabels-text font-12 inline-block txt-dark text-right capitalize-font pull-right"><span
                                                    class="block font-15 weight-500 mb-5">1.245 USD</span><span
                                                    class="block txt-grey">$ 7,15,008</span></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                        <div class="panel panel-default card-view border-panel panel-refresh">
                            <div class="refresh-container">
                                <div class="la-anim-1"></div>
                            </div>
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Recent Trading Activity</h6>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="pull-left inline-block refresh mr-15">
                                        <i class="zmdi zmdi-replay"></i>
                                    </a>
                                    <a href="#" class="pull-left inline-block full-screen mr-15">
                                        <i class="zmdi zmdi-fullscreen"></i>
                                    </a>
                                    <div class="pull-left inline-block dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                                            aria-expanded="false" role="button"><i
                                                class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu bullet dropdown-menu-right" role="menu">
                                            <li role="presentation"><a href="javascript:void(0)"
                                                    role="menuitem"><i class="icon wb-reply"
                                                        aria-hidden="true"></i>option 1</a></li>
                                            <li role="presentation"><a href="javascript:void(0)"
                                                    role="menuitem"><i class="icon wb-share"
                                                        aria-hidden="true"></i>option 2</a></li>
                                            <li role="presentation"><a href="javascript:void(0)"
                                                    role="menuitem"><i class="icon wb-trash"
                                                        aria-hidden="true"></i>option 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table  table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Deal ID Number</th>
                                                        <th>Trade Time</th>
                                                        <th>Status</th>
                                                        <th>Last Trade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="weight-600"><i
                                                                class="fa fa-dot-circle-o pr-10 txt-success"></i>123456
                                                        </td>
                                                        <td>17:24 AM</td>
                                                        <td><span
                                                                class="label label-outline label-success">Complete</span>
                                                        </td>
                                                        <td><i class="fa fa-plus pr-10 txt-success"></i>0.00113 BTC
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="weight-600"><i
                                                                class="fa fa-dot-circle-o pr-10 txt-success"></i>223456
                                                        </td>
                                                        <td>17:24 AM</td>
                                                        <td><span
                                                                class="label label-outline label-success">Complete</span>
                                                        </td>
                                                        <td><i class="fa fa-minus pr-10 txt-danger"></i>0.00113 BTC
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="weight-600"><i
                                                                class="fa fa-dot-circle-o pr-10 txt-success"></i>323456
                                                        </td>
                                                        <td>17:24 AM</td>
                                                        <td><span
                                                                class="label label-outline label-success">Complete</span>
                                                        </td>
                                                        <td><i class="fa fa-plus pr-10 txt-success"></i>0. 00113 BTC
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="weight-600"><i
                                                                class="fa fa-dot-circle-o pr-10 txt-warning"></i>423456
                                                        </td>
                                                        <td>17:24 AM</td>
                                                        <td><span
                                                                class="label label-outline label-warning">pending</span>
                                                        </td>
                                                        <td><i class="fa fa-plus pr-10 txt-success"></i>0.00113 DASH
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="weight-600"><i
                                                                class="fa fa-dot-circle-o pr-10 txt-danger"></i>523456
                                                        </td>
                                                        <td>17:24 AM</td>
                                                        <td><span
                                                                class="label label-outline label-danger">cancled</span>
                                                        </td>
                                                        <td><i class="fa fa-minus pr-10 txt-danger"></i>0.00113 BTC
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="weight-600"><i
                                                                class="fa fa-dot-circle-o pr-10 txt-danger"></i>623456
                                                        </td>
                                                        <td>17:24 AM</td>
                                                        <td><span
                                                                class="label label-outline label-danger">cancled</span>
                                                        </td>
                                                        <td><i class="fa fa-minus pr-10 txt-danger"></i>0.00113 BTC
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                        <div class="panel card-view">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box pt-10 pb-10">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center data-wrap-left mt-40">
                                                    <span class="block"><i
                                                            class="zmdi zmdi-trending-up txt-success font-18 mr-5 mb-5 block"></i><span
                                                            class="weight-500 uppercase-font">BTC
                                                            Earnings</span></span>
                                                    <span class="txt-dark block counter">$<span
                                                            class="counter-anim">79.34</span>%</span>
                                                </div>
                                                <div class="col-xs-6 text-center data-wrap-right">
                                                    <div id="sparkline_6" class="sparkline"
                                                        style="width: 100%; overflow: hidden; margin: 0px auto;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel card-view">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="sm-data-box pt-10 pb-10">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 text-center data-wrap-left">
                                                    <div class="flot-container" style="height:155px">
                                                        <div id="flot_line_chart_moving" class="demo-placeholder">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 text-center data-wrap-right mt-35">
                                                    <span class="txt-dark block counter">$<span
                                                            class="counter-anim">125.36</span></span>
                                                    <span class="block"><span class="weight-500 uppercase-font">LTC
                                                            Exchange Rates</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Transfer Coins</h6>
                                </div>
                                <div class="pull-right">
                                    <a class="pull-left inline-block mr-15" data-toggle="collapse"
                                        href="#collapse_1" aria-expanded="true">
                                        <i class="zmdi zmdi-chevron-down"></i>
                                        <i class="zmdi zmdi-chevron-up"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="pull-left inline-block mr-15">
                                        <i class="zmdi zmdi-settings"></i>
                                    </a>
                                    <a class="pull-left inline-block close-panel" href="#"
                                        data-effect="fadeOut">
                                        <i class="zmdi zmdi-close"></i>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="collapse_1" class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="form-wrap">
                                        <form>
                                            <!-- form-group -->
                                            <div class="form-group mb-20">
                                                <label class="control-label mb-10">Amount</label>
                                                <p class="text-muted inline-block mb-10 ml-10 font-13">minimum value
                                                    "0.001BTC"</p>
                                                <div class="input-group mb-15"> <span
                                                        class="input-group-addon">$</span>
                                                    <input type="text" placeholder="Username"
                                                        class="form-control">
                                                    <div class="input-group-btn">
                                                        <button type="button"
                                                            class="btn  btn-default btn-outline dropdown-toggle"
                                                            data-toggle="dropdown">BTC <span
                                                                class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="javascript:void(0)">ETH</a></li>
                                                            <li><a href="javascript:void(0)">LTC</a></li>
                                                            <li><a href="javascript:void(0)">USD</a></li>
                                                            <li><a href="javascript:void(0)">XRP</a></li>
                                                            <li><a href="javascript:void(0)">XMR</a></li>
                                                            <li><a href="javascript:void(0)">DASH</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /form-group -->
                                            <!-- form-group -->
                                            <div class="form-group mb-20">
                                                <label class="control-label mb-10">Wallet Address</label>
                                                <div class="input-group mb-15"> <span class="input-group-addon"><i
                                                            class="zmdi zmdi-card"></i></span>
                                                    <input type="text" placeholder="12331Ox123SDAQ.."
                                                        class="form-control">
                                                </div>

                                            </div>
                                            <!-- /form-group -->
                                            <button class="btn btn-primary btn-block mb-10">transfer now</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default border-panel card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Recent Transaction</h6>
                                </div>
                                <div class="pull-right">
                                    <a href="javascript:void(0);" class="txt-grey weight-500 capitalize-font">View
                                        all</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div class="streamline user-activity">
                                        <div class="sl-item mb-15">
                                            <a href="javascript:void(0)">
                                                <div class="sl-avatar avatar-circle">
                                                    <span><i class="zmdi zmdi-refresh-sync"></i></span>
                                                </div>
                                                <div class="sl-content no-seprator">
                                                    <div class="pull-left">
                                                        <p class="inline-block"><span
                                                                class="capitalize-font txt-dark mr-5 weight-500">Bought
                                                                bitcoin</span></p>
                                                        <span class="block txt-grey font-12 capitalize-font">Using USD
                                                            wallet.</span>
                                                        <span
                                                            class="block txt-primary font-12 pt-5 capitalize-font">Oct
                                                            08</span>
                                                    </div>
                                                    <div class="pull-right text-right">
                                                        <p class="inline-block"><span
                                                                class="txt-success font-16 weight-500">+1.99
                                                                BTC</span></p>
                                                        <span
                                                            class="block txt-grey font-12 capitalize-font">+$12.19</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="sl-item mb-15">
                                            <a href="javascript:void(0)">
                                                <div class="sl-avatar avatar-circle">
                                                    <span><i class="zmdi zmdi-refresh-sync"></i></span>
                                                </div>
                                                <div class="sl-content no-seprator">
                                                    <div class="pull-left">
                                                        <p class="inline-block"><span
                                                                class="capitalize-font txt-dark mr-5 weight-500">Bought
                                                                bitcoin</span></p>
                                                        <span class="block txt-grey font-12 capitalize-font">Using USD
                                                            wallet.</span>
                                                        <span
                                                            class="block txt-primary font-12 pt-5 capitalize-font">Nov
                                                            15</span>
                                                    </div>
                                                    <div class="pull-right text-right">
                                                        <p class="inline-block"><span
                                                                class="txt-grey font-16 weight-500">-20.2 USD</span>
                                                        </p>
                                                        <span
                                                            class="block txt-grey font-12 capitalize-font">+$12.19</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="sl-item mb-15">
                                            <a href="javascript:void(0)">
                                                <div class="sl-avatar avatar-circle">
                                                    <span><i class="zmdi zmdi-airplane"></i></span>
                                                </div>
                                                <div class="sl-content no-seprator">
                                                    <div class="pull-left">
                                                        <p class="inline-block"><span
                                                                class="capitalize-font txt-dark mr-5 weight-500">Recived
                                                                bitcoin</span></p>
                                                        <span class="block txt-grey font-12 capitalize-font">From
                                                            Bitcoin address</span>
                                                        <span
                                                            class="block txt-primary font-12 pt-5 capitalize-font">May
                                                            15</span>
                                                    </div>
                                                    <div class="pull-right text-right">
                                                        <p class="inline-block"><span
                                                                class="txt-success font-16 weight-500">+0 BTC</span>
                                                        </p>
                                                        <span
                                                            class="block txt-grey font-12 capitalize-font">+THB2.80</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h6 class="panel-title txt-dark">Live Crypto Prices</h6>
                                </div>
                                <div class="pull-right">
                                    <div class="pull-left form-group mb-0 sm-bootstrap-select">
                                        <select class="selectpicker" data-style="form-control">
                                            <option selected value='1'>USD</option>
                                            <option value='2'>BTC</option>
                                            <option value='3'>XMR</option>
                                            <option value='4'>XMP</option>
                                            <option value='5'>LTC</option>
                                            <option value='6'>DASH</option>
                                            <option value='7'>ETH</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <div>
                                        <div class="">
                                            <div class="pull-left"><img class="pull-left"
                                                    src="img/coins/crypto1.png" alt="money" /><span
                                                    class="pull-left weight-600 txt-dark uppercase-font pl-10">BTC</span>
                                            </div>
                                            <span class="inline-block text-right pull-right"><span
                                                    class="inline-block txt-success"><span class="weight-600 pr-5">$
                                                        <span
                                                            class="counter-anim">8,932.48</span></span>(1.34%)</span><i
                                                    class="zmdi zmdi-caret-up txt-success pl-5 font-24 vertical-align-bottom"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <hr class="light-grey-hr row mt-10 mb-10" />
                                        <div class="">
                                            <div class="pull-left"><img class="pull-left"
                                                    src="img/coins/crypto2.png" alt="money" /><span
                                                    class="pull-left weight-600 txt-dark uppercase-font pl-10">ETH</span>
                                            </div>
                                            <span class="inline-block text-right pull-right"><span
                                                    class="inline-block txt-success"><span class="weight-600 pr-5">$
                                                        <span class="counter-anim">634</span></span>(5.34%)</span><i
                                                    class="zmdi zmdi-caret-up txt-success pl-5 font-24 vertical-align-bottom"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <hr class="light-grey-hr row mt-10 mb-10" />
                                        <div class="">
                                            <div class="pull-left"><img class="pull-left"
                                                    src="img/coins/crypto3.png" alt="money" /><span
                                                    class="pull-left weight-600 txt-dark uppercase-font pl-10">XMR</span>
                                            </div>
                                            <span class="inline-block text-right pull-right"><span
                                                    class="inline-block txt-success"><span class="weight-600 pr-5">$
                                                        <span class="counter-anim">275</span></span>(8.91%)</span><i
                                                    class="zmdi zmdi-caret-up txt-success pl-5 font-24 vertical-align-bottom"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <hr class="light-grey-hr row mt-10 mb-10" />
                                        <div class="">
                                            <div class="pull-left"><img class="pull-left"
                                                    src="img/coins/crypto4.png" alt="money" /><span
                                                    class="pull-left weight-600 txt-dark uppercase-font pl-10">LTC</span>
                                            </div>
                                            <span class="inline-block text-right pull-right"><span
                                                    class="inline-block txt-success"><span class="weight-600 pr-5">$
                                                        <span
                                                            class="counter-anim">150.48</span></span>(1.69%)</span><i
                                                    class="zmdi zmdi-caret-up txt-success pl-5 font-24 vertical-align-bottom"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <hr class="light-grey-hr row mt-10 mb-10" />
                                        <div class="">
                                            <div class="pull-left"><img class="pull-left"
                                                    src="img/coins/crypto5.png" alt="money" /><span
                                                    class="pull-left weight-600 txt-dark uppercase-font pl-10">XRP</span>
                                            </div>
                                            <span class="inline-block text-right pull-right"><span
                                                    class="inline-block txt-success"><span class="weight-600 pr-5">$
                                                        <span
                                                            class="counter-anim">0.8843</span></span>(3.91%)</span><i
                                                    class="zmdi zmdi-caret-up txt-success pl-5 font-24 vertical-align-bottom"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <hr class="light-grey-hr row mt-10 mb-10" />
                                        <div class="">
                                            <div class="pull-left"><img class="pull-left"
                                                    src="img/coins/crypto6.png" alt="money" /><span
                                                    class="pull-left weight-600 txt-dark uppercase-font pl-10">DASH</span>
                                            </div>
                                            <span class="inline-block text-right pull-right"><span
                                                    class="inline-block txt-success"><span class="weight-600 pr-5">$
                                                        <span
                                                            class="counter-anim">467.48</span></span>(5.80%)</span><i
                                                    class="zmdi zmdi-caret-up txt-success pl-5 font-24 vertical-align-bottom"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer container-fluid pl-30 pr-30">
                <div class="row">
                    <div class="col-sm-12">
                        <p>2018 &copy; Winkle. Pampered by Hencework</p>
                    </div>
                </div>
            </footer>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Data table JavaScript -->
    <script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Progressbar Animation JavaScript -->
    <script src="vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Sparkline JavaScript -->
    <script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

    <!-- Owl JavaScript -->
    <script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- Switchery JavaScript -->
    <script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>

    <!-- EChartJS JavaScript -->
    <script src="vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
    <script src="vendors/echarts-liquidfill.min.js"></script>

    <!-- Vector Maps JavaScript -->
    <script src="vendors/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/vectormap-data.js"></script>

    <!-- Toast JavaScript -->
    <script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

    <!-- Piety JavaScript -->
    <script src="vendors/bower_components/peity/jquery.peity.min.js"></script>
    <script src="dist/js/peity-data.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="vendors/bower_components/morris.js/morris.min.js"></script>
    <script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

    <!-- Bootstrap Select JavaScript -->
    <script src="vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="vendors/bower_components/Flot/excanvas.min.js"></script>
    <script src="vendors/bower_components/Flot/jquery.flot.js"></script>
    <script src="vendors/bower_components/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/bower_components/Flot/jquery.flot.resize.js"></script>
    <script src="vendors/bower_components/Flot/jquery.flot.time.js"></script>
    <script src="vendors/bower_components/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/bower_components/Flot/jquery.flot.crosshair.js"></script>
    <script src="vendors/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/flot-data.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
    <script src="dist/js/dashboard2-data.js"></script>
</body>

</html>
