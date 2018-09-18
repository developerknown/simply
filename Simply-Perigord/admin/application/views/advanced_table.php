
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>data table</title>

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!--switchery-->
    <link href="css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />

    <!--Data Table-->
    <link href="css/jquery.dataTables.css" rel="stylesheet">
    <link href="css/dataTables.tableTools.css" rel="stylesheet">
    <link href="css/dataTables.colVis.min.css" rel="stylesheet">
    <link href="css/dataTables.responsive.css" rel="stylesheet">
    <link href="css/dataTables.scroller.css" rel="stylesheet">
    <!-- Base Styles -->

    <!--common style-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">

    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="index.html">
                    <img src="images/logo-icon.png" alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">SlickLab</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <div class=" search-field">  </div>
                <!-- visible small devices end-->

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked side-navigation">
                    <li>
                        <h3 class="navigation-title">Navigation</h3>
                    </li>
                    <li><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                    <li class="menu-list">
                        <a href=""><i class="fa fa-laptop"></i>  <span>Layouts</span></a>
                        <ul class="child-list">
                            <li><a href="boxed-layout.html"> Boxed Page</a></li>
                            <li><a href="collapsed-menu.html"> Sidebar Collapsed</a></li>
                            <li><a href="blank-page.html"> Blank page</a></li>
                            <li><a href="different-theme-layouts.html"> Different Theme Layouts</a></li>
                        </ul>
                    </li>
                    <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>UI Elements</span></a>
                        <ul class="child-list">
                            <li><a href="general.html"> BS Elements</a></li>
                            <li><a href="buttons.html"> Buttons</a></li>
                            <li><a href="toastr.html"> Toaster Notification</a></li>
                            <li><a href="widgets.html"> Widgets</a></li>
                            <li><a href="ion-slider.html"> Ion Slider</a></li>
                            <li><a href="tree.html"> Tree View</a></li>
                            <li><a href="nestable.html"> Nestable</a></li>
                            <li><a href="fontawesome.html"> Fontawesome</a></li>
                            <li><a href="line-icon.html"> Line Icon</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3 class="navigation-title">Components</h3>
                    </li>
                    <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Components <span class="badge noti-arrow bg-success pull-right">3</span> </span></a>
                        <ul class="child-list">
                            <li><a href="grid.html"> Grids</a></li>
                            <li><a href="calendar.html"> Calendar</a></li>
                            <li><a href="timeline.html"> Timeline </a></li>
                            <li><a href="gallery.html"> Gallery </a></li>
                        </ul>
                    </li>

                    <li class="menu-list nav-active"><a href="javascript:;"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                        <ul class="child-list">
                            <li><a href="table-static.html"> Basic Table</a></li>
                            <li class="active"><a href="table-dynamic.html"> Advanced Table</a></li>
                        </ul>
                    </li>

                    <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                        <ul class="child-list">
                            <li><a href="form-layout.html"> Form Layouts</a></li>
                            <li><a href="advanced-components.html"> Advanced Components</a></li>
                            <li><a href="form-wizard.html"> Form Wizards</a></li>
                            <li><a href="form-validation.html"> Form Validation</a></li>
                            <li><a href="form-editor.html"> Editors</a></li>
                        </ul>
                    </li>

                    <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts </span></a>
                        <ul class="child-list">
                            <li><a href="flot-chart.html"> Flot Charts</a></li>
                            <li><a href="morris-chart.html"> Morris Charts</a></li>
                            <li><a href="chartjs.html"> Chartjs</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3 class="navigation-title">Extra</h3>
                    </li>

                    <li class="menu-list"><a href="javascript:;"><i class="fa fa-envelope-o"></i> <span>Email <span class="label noti-arrow bg-danger pull-right">4 Unread</span> </span></a>
                        <ul class="child-list">
                            <li><a href="inbox.html"> Inbox</a></li>
                            <li><a href="inbox-details.html"> View Mail</a></li>
                            <li><a href="inbox-compose.html"> Compose Mail</a></li>
                        </ul>
                    </li>

                    <li class="menu-list"><a href="javascript:;"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                        <ul class="child-list">
                            <li><a href="google-map.html"> Google Map</a></li>
                            <li><a href="vector-map.html"> Vector Map</a></li>
                        </ul>
                    </li>

                    <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                        <ul class="child-list">
                            <li><a href="profile.html"> Profile</a></li>
                            <li><a href="invoice.html"> Invoice</a></li>
                            <li><a href="login.html"> Login </a></li>
                            <li><a href="registration.html"> Registration </a></li>
                            <li><a href="lock.html"> Lock Screen </a></li>
                            <li><a href="404.html"> 404 Error</a></li>
                            <li><a href="500.html"> 500 Error</a></li>

                        </ul>
                    </li>

                </ul>
                <!--sidebar nav end-->

                <!--sidebar widget start-->
                <div class="sidebar-widget">
                    <h4>Server Status</h4>
                    <ul class="list-group">
                        <li>
                            <span class="label label-danger pull-right">33%</span>
                            <p>CPU Used</p>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 33%;">
                                    <span class="sr-only">33%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="label label-warning pull-right">65%</span>
                            <p>Bandwidth</p>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-warning" style="width: 65%;">
                                    <span class="sr-only">65%</span>
                                </div>
                            </div>
                        </li>
                        <li><a href="javascript:;" class="btn btn-success btn-sm ">View Details</a></li>
                    </ul>
                </div>
                <!--sidebar widget end-->

            </div>
        </div>
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content" style="min-height: 1000px;">

            <!-- header section start-->
            <div class="header-section">

                <!--logo and logo icon start-->
                <div class="logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.html">
                        <img src="images/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">SlickLab</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.html">
                        <img src="images/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                    </a>
                </div>
                <!--logo and logo icon end-->

                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
                <!--toggle button end-->

                <!--mega menu start-->
                <div id="navbar-collapse-1" class="navbar-collapse collapse yamm mega-menu">
                    <ul class="nav navbar-nav">
                        <!-- Classic list -->
                        <li class="dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">Mega <b
                                class=" fa fa-angle-down"></b></a>
                            <ul class="dropdown-menu wide-full">
                                <li>
                                    <!-- Content container to add padding -->
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-2 list-unstyled">
                                                <li>
                                                    <p class="title">Standard</p>
                                                </li>
                                                <li><a href="javascript:;"> Slick Mega Navigation </a>
                                                </li>
                                                <li><a href="javascript:;"> Built in BS3+</a>
                                                </li>
                                                <li><a href="javascript:;"> Full Customizable </a>
                                                </li>
                                                <li><a href="javascript:;"> Huge Components </a>
                                                </li>
                                                <li><a href="javascript:;"> Tons of widgets </a>
                                                </li>
                                                <li><a href="javascript:;"> Fontawesome </a>
                                                </li>
                                            </ul>
                                            <ul class="col-sm-2 list-unstyled">
                                                <li>
                                                    <p class="title">Description</p>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="d-title">2015 Mordern Design</span>
                                                        <span class="d-desk">Description goes here</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="d-title">Amaging Dashboard</span>
                                                        <span class="d-desk">Build with BS3</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="d-title">3500+ Satisfied Client</span>
                                                        <span class="d-desk">Max 5 star rating</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <span class="d-title">Easy to Cutomize</span>
                                                        <span class="d-desk">Very easy to use</span>
                                                    </a>
                                                </li>

                                            </ul>
                                            <ul class="col-sm-2 list-unstyled">
                                                <li>
                                                    <p class="title">Iconic</p>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-anchor text-muted"></i> Anchor Icon </a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-desktop text-muted"></i> Desktop Icon </a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-laptop text-muted"></i> Laptop Icon</a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-automobile text-muted"></i> Automobile Icon </a>
                                                </li>
                                                <li><a href="javascript:;"><i class="fa fa-briefcase text-muted"></i> Briefcase Icon</a>
                                                </li>
                                            </ul>
                                            <ul class="col-sm-3 list-unstyled">
                                                <li>
                                                    <p class="title">Image + Description</p>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img class="icon-img" src="images/mega_icon1.png" alt="" />
                                                                <span class="icon-desk">
                                                                                        <span class="d-title">Full Flat Concept</span>
                                                                <span class="d-desk">Description goes here</span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img class="icon-img" src="images/mega_icon2.png" alt="" />
                                                                <span class="icon-desk">
                                                                                        <span class="d-title">Amaging Dashboard</span>
                                                                <span class="d-desk">Build with BS3</span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img class="icon-img" src="images/mega_icon3.png" alt="" />
                                                                <span class="icon-desk">
                                                                                        <span class="d-title">3500+ Satisfied Client</span>
                                                                <span class="d-desk">Max 5 star rating</span>
                                                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <img class="icon-img" src="images/mega_icon4.png" alt="" />
                                                                <span class="icon-desk">
                                                                                        <span class="d-title">Easy to Cutomize</span>
                                                                <span class="d-desk">Very easy to use</span>
                                                                </span>
                                                    </a>
                                                </li>

                                            </ul>
                                            <ul class="col-sm-3 list-unstyled custom-nav-img">
                                                <li>
                                                    <p class="title">Custom</p>
                                                </li>
                                                <li>

                                                    <p class="desk">Ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Asperiores aut, autem commodi cumque illum pariatur
                                                        vero. Ad adipisci animi delectus</p>
                                                </li>
                                                <li><span class="mega-bg"></span></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <!-- Classic dropdown -->
                        <li class="dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"> English  <b
                                class=" fa fa-angle-down"></b></a>
                            <ul role="menu" class="dropdown-menu language-switch">
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> German </span><img src="images/germany_flag.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> Italian </span> <img src="images/italy_flag.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> French </span> <img src="images/french_flag.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> Spanish </span> <img src="images/spain_flag.jpg" alt=""/></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:;"><span> Russian </span> <img src="images/russia_flag.jpg" alt=""/></a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!--mega menu end-->
                <div class="notification-wrap">
                <!--left notification start-->
                <div class="left-notification">
                <ul class="notification-menu">
                <!--mail info start-->
                <li class="d-none">
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-primary">6</span>
                    </a>

                    <div class="dropdown-menu dropdown-title">
                        <div class="title-row">
                            <h5 class="title purple">
                                You have 6 Unread Mail
                            </h5>
                            <a href="javascript:;" class="btn-primary btn-view-all">View all</a>
                        </div>
                        <div class="notification-list mail-list">
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-primary">
                                    S
                                </span>
                                <strong>Smith Doe</strong>
                                <small> Just Now</small>
                                <p>
                                    <small>Hello smith i have some query about your</small>
                                </p>
                                <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-success">
                                    A
                                </span>
                                <strong>Anthony Jones </strong>
                                <small> 30 Mins Ago</small>
                                <p>
                                    <small>Hello this is an example message</small>
                                </p>
                                <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-warning">
                                    B
                                </span> Billy Jones
                                <small> 2 Days Ago</small>
                                <p>
                                    <small>Slicklab is awesome Dashboard</small>
                                </p>
                                <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle-o"></i>
                                </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-dark">
                                    J
                                </span> John Doe
                                <small> 1 Week Ago</small>
                                <p>
                                    <small>Build with Twitter Bootstrap 3</small>
                                </p>
                                <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle-o"></i>
                                </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-danger">
                                    S
                                </span> Smith Doe
                                <small> Just Now</small>
                                <p>
                                    <small>No hassle, very easy to use</small>
                                </p>
                                <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle-o"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <!--mail info end-->

                <!--task info start-->
                <li class="d-none">
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-success">9</span>
                    </a>

                    <div class="dropdown-menu dropdown-title">
                        <div class="title-row">
                            <h5 class="title green">
                                You have 9 task
                            </h5>
                            <a href="javascript:;" class="btn-success btn-view-all">View all</a>
                        </div>
                        <div class="notification-list task-list">
                            <a href="javascript:;">
                                <span class="icon ">
                                    <i class="fa fa-paw green-color"></i>
                                </span>
                                <span class="task-info">
                                Smith Doe
                                <small> Assigned new task 10 min ago</small>
                                    </span>
                            </a>
                            <a href="javascript:;">
                                <span class="icon ">
                                    <i class="fa fa-line-chart blue-color"></i>
                                </span>
                                <span class="task-info">Anthony Jones
                                <small> Done 60% of his task</small>

                                <div class="progress progress-striped">
                                    <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info"></div>
                                </div>

                                </span>
                            </a>
                            <a href="javascript:;">
                                <span class="icon ">
                                    <i class="fa fa-heart purple-color"></i>
                                </span>
                                <span class="task-info">Tawseef
                                <small> Like your task 10 min ago</small>
                                    </span>

                            </a>
                            <a href="javascript:;">
                                <span class="icon ">
                                    <i class="fa fa-check green-color"></i>
                                </span>
                                <span class="task-info">Anjelina Gomez
                                <small>completed his task Yesterday</small>
                                    </span>
                            </a>
                            <a href="javascript:;">
                                <span class="icon ">
                                    <i class="fa fa-comments-o"></i>
                                </span>
                                <span class="task-info">Franklin Anderson
                                <small>commented on your task 3 Days ago</small>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <!--task info end-->

                <!--notification info start-->
                <li>
                    <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">4</span>
                    </a>

                    <div class="dropdown-menu dropdown-title ">

                        <div class="title-row">
                            <h5 class="title yellow">
                                You have 4 New Notification
                            </h5>
                            <a href="javascript:;" class="btn-warning btn-view-all">View all</a>
                        </div>
                        <div class="notification-list-scroll sidebar">
                            <div class="notification-list mail-list not-list">
                                <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-primary">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <strong>New User Registration</strong>

                                    <p>
                                        <small>Just Now</small>
                                    </p>
                                    <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle"></i>
                                    </span>
                                </a>
                                <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-success">
                                        <i class="fa fa-comments-o"></i>
                                    </span>
                                    <strong> Private message Send</strong>

                                    <p>
                                        <small>30 Mins Ago</small>
                                    </p>
                                    <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle"></i>
                                    </span>
                                </a>
                                <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-warning">
                                        <i class="fa fa-warning"></i>
                                    </span> Application Error
                                    <p>
                                        <small> 2 Days Ago</small>
                                    </p>
                                    <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle-o"></i>
                                    </span>
                                </a>
                                <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-dark">
                                       <i class="fa fa-database"></i>
                                    </span> Database Overloaded 24%
                                    <p>
                                        <small>1 Week Ago</small>
                                    </p>
                                    <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle-o"></i>
                                    </span>
                                </a>
                                <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-danger">
                                        <i class="fa fa-warning"></i>
                                    </span>
                                    <strong>Server Failed Notification</strong>

                                    <p>
                                        <small>10 Days Ago</small>
                                    </p>
                                    <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle"></i>
                                    </span>
                                </a>

                            </div>
                        </div>
                    </div>
                </li>
                <!--notification info end-->
                </ul>
                </div>
                <!--left notification end-->


                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">
                        <li>
                            <form class="search-content" action="index.html" method="post">
                                <input type="text" class="form-control" name="keyword" placeholder="Search...">
                            </form>
                        </li>

                        <li>
                            <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="images/avatar-mini.jpg" alt="">John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                                <li><a href="javascript:;">  Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-danger pull-right">40%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="label bg-info pull-right">new</span>
                                        Help
                                    </a>
                                </li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="sb-toggle-right">
                                <i class="fa fa-indent"></i>
                            </div>
                        </li>

                    </ul>
                </div>
                <!--right notification end-->
                </div>

            </div>
            <!-- header section end-->

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Data Table
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Data Table</a></li>
                        <li class="active">Dynamic Data Table</li>
                    </ol>
                </div>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading ">
                                Convertable Data Table
                                <span class="tools pull-right">
                                    <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                    <a class="t-close fa fa-times" href="javascript:;"></a>
                                </span>
                            </header>
                        <div class="table-responsive">
                            <table class="table convert-data-table data-table">
                                <thead>
                                <tr>
                                    <th>
                                        OrderDate
                                    </th>
                                    <th>
                                        Region
                                    </th>
                                    <th>
                                        Rep
                                    </th>
                                    <th>
                                        Item
                                    </th>
                                    <th>
                                        Units
                                    </th>
                                    <th>
                                        Unit Cost
                                    </th>
                                    <th>
                                        Total
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        1/6/10
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Jones
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        95
                                    </td>
                                    <td>
                                        1.99
                                    </td>
                                    <td>
                                        189.05
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1/23/10
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Kivell
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        50
                                    </td>
                                    <td>
                                        19.99
                                    </td>
                                    <td>
                                        999.50
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2/9/10
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Jardine
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        36
                                    </td>
                                    <td>
                                        4.99
                                    </td>
                                    <td>
                                        179.64
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2/26/10
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Gill
                                    </td>
                                    <td>
                                        Pen
                                    </td>
                                    <td>
                                        27
                                    </td>
                                    <td>
                                        19.99
                                    </td>
                                    <td>
                                        539.73
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3/15/10
                                    </td>
                                    <td>
                                        Alberta
                                    </td>
                                    <td>
                                        Sorvino
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        56
                                    </td>
                                    <td>
                                        2.99
                                    </td>
                                    <td>
                                        167.44
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4/1/10
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Jones
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        60
                                    </td>
                                    <td>
                                        4.99
                                    </td>
                                    <td>
                                        299.40
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4/18/10
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Andrews
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        75
                                    </td>
                                    <td>
                                        1.99
                                    </td>
                                    <td>
                                        149.25
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5/5/10
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Jardine
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        90
                                    </td>
                                    <td>
                                        4.99
                                    </td>
                                    <td>
                                        449.10
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5/22/10
                                    </td>
                                    <td>
                                        Alberta
                                    </td>
                                    <td>
                                        Thompson
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        32
                                    </td>
                                    <td>
                                        1.99
                                    </td>
                                    <td>
                                        63.68
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6/8/10
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Jones
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        60
                                    </td>
                                    <td>
                                        8.99
                                    </td>
                                    <td>
                                        539.40
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6/25/10
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Morgan
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        90
                                    </td>
                                    <td>
                                        4.99
                                    </td>
                                    <td>
                                        449.10
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7/12/10
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Howard
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        29
                                    </td>
                                    <td>
                                        1.99
                                    </td>
                                    <td>
                                        57.71
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7/29/10
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Parent
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        81
                                    </td>
                                    <td>
                                        19.99
                                    </td>
                                    <td>
                                        1,619.19
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        8/15/10
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Jones
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        35
                                    </td>
                                    <td>
                                        4.99
                                    </td>
                                    <td>
                                        174.65
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        9/1/10
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Smith
                                    </td>
                                    <td>
                                        Desk
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        125.00
                                    </td>
                                    <td>
                                        250.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        9/18/10
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Jones
                                    </td>
                                    <td>
                                        Pen Set
                                    </td>
                                    <td>
                                        16
                                    </td>
                                    <td>
                                        15.99
                                    </td>
                                    <td>
                                        255.84
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        10/5/10
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Morgan
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        28
                                    </td>
                                    <td>
                                        8.99
                                    </td>
                                    <td>
                                        251.72
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        10/22/10
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Jones
                                    </td>
                                    <td>
                                        Pen
                                    </td>
                                    <td>
                                        64
                                    </td>
                                    <td>
                                        8.99
                                    </td>
                                    <td>
                                        575.36
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        11/8/10
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Parent
                                    </td>
                                    <td>
                                        Pen
                                    </td>
                                    <td>
                                        15
                                    </td>
                                    <td>
                                        19.99
                                    </td>
                                    <td>
                                        299.85
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        11/25/10
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Kivell
                                    </td>
                                    <td>
                                        Pen Set
                                    </td>
                                    <td>
                                        96
                                    </td>
                                    <td>
                                        4.99
                                    </td>
                                    <td>
                                        479.04
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        12/12/10
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Smith
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        67
                                    </td>
                                    <td>
                                        1.29
                                    </td>
                                    <td>
                                        86.43
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        12/29/10
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Parent
                                    </td>
                                    <td>
                                        Pen Set
                                    </td>
                                    <td>
                                        74
                                    </td>
                                    <td>
                                        15.99
                                    </td>
                                    <td>
                                        1,183.26
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1/15/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Gill
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        46
                                    </td>
                                    <td>
                                        8.99
                                    </td>
                                    <td>
                                        413.54
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2/1/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Smith
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        87
                                    </td>
                                    <td>
                                        15.00
                                    </td>
                                    <td>
                                        1,305.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2/18/11
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Jones
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        4.99
                                    </td>
                                    <td>
                                        19.96
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3/7/11
                                    </td>
                                    <td>
                                        Alberta
                                    </td>
                                    <td>
                                        Sorvino
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        7
                                    </td>
                                    <td>
                                        19.99
                                    </td>
                                    <td>
                                        139.93
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3/24/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Jardine
                                    </td>
                                    <td>
                                        Pen Set
                                    </td>
                                    <td>
                                        50
                                    </td>
                                    <td>
                                        4.99
                                    </td>
                                    <td>
                                        249.50
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4/10/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Andrews
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        66
                                    </td>
                                    <td>
                                        1.99
                                    </td>
                                    <td>
                                        131.34
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4/27/11
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Howard
                                    </td>
                                    <td>
                                        Pen
                                    </td>
                                    <td>
                                        96
                                    </td>
                                    <td>
                                        4.99
                                    </td>
                                    <td>
                                        479.04
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5/14/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Gill
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        53
                                    </td>
                                    <td>
                                        1.29
                                    </td>
                                    <td>
                                        68.37
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5/31/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Gill
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        80
                                    </td>
                                    <td>
                                        8.99
                                    </td>
                                    <td>
                                        719.20
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6/17/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Kivell
                                    </td>
                                    <td>
                                        Desk
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        125.00
                                    </td>
                                    <td>
                                        625.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7/4/11
                                    </td>
                                    <td>
                                        Quebec
                                    </td>
                                    <td>
                                        Jones
                                    </td>
                                    <td>
                                        Pen Set
                                    </td>
                                    <td>
                                        62
                                    </td>
                                    <td>
                                        4.99
                                    </td>
                                    <td>
                                        309.38
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7/21/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Morgan
                                    </td>
                                    <td>
                                        Pen Set
                                    </td>
                                    <td>
                                        55
                                    </td>
                                    <td>
                                        12.49
                                    </td>
                                    <td>
                                        686.95
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        8/7/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Kivell
                                    </td>
                                    <td>
                                        Pen Set
                                    </td>
                                    <td>
                                        42
                                    </td>
                                    <td>
                                        23.95
                                    </td>
                                    <td>
                                        1,005.90
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        8/24/11
                                    </td>
                                    <td>
                                        Alberta
                                    </td>
                                    <td>
                                        Sorvino
                                    </td>
                                    <td>
                                        Desk
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        275.00
                                    </td>
                                    <td>
                                        825.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        9/10/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Gill
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        7
                                    </td>
                                    <td>
                                        1.29
                                    </td>
                                    <td>
                                        9.03
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        9/27/11
                                    </td>
                                    <td>
                                        Alberta
                                    </td>
                                    <td>
                                        Sorvino
                                    </td>
                                    <td>
                                        Pen
                                    </td>
                                    <td>
                                        76
                                    </td>
                                    <td>
                                        1.99
                                    </td>
                                    <td>
                                        151.24
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        10/14/11
                                    </td>
                                    <td>
                                        Alberta
                                    </td>
                                    <td>
                                        Thompson
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        57
                                    </td>
                                    <td>
                                        19.99
                                    </td>
                                    <td>
                                        1,139.43
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        10/31/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Andrews
                                    </td>
                                    <td>
                                        Pencil
                                    </td>
                                    <td>
                                        14
                                    </td>
                                    <td>
                                        1.29
                                    </td>
                                    <td>
                                        18.06
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        11/17/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Jardine
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        11
                                    </td>
                                    <td>
                                        4.99
                                    </td>
                                    <td>
                                        54.89
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        12/4/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Jardine
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        94
                                    </td>
                                    <td>
                                        19.99
                                    </td>
                                    <td>
                                        1,879.06
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        12/21/11
                                    </td>
                                    <td>
                                        Ontario
                                    </td>
                                    <td>
                                        Andrews
                                    </td>
                                    <td>
                                        Binder
                                    </td>
                                    <td>
                                        28
                                    </td>
                                    <td>
                                        4.99
                                    </td>
                                    <td>
                                        139.72
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        </section>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading ">
                                Column Visible Data Table
                                <span class="tools pull-right">
                                    <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                    <a class="t-close fa fa-times" href="javascript:;"></a>
                                </span>
                            </header>
                            <div class="table-responsive">
                                <table class="table colvis-data-table data-table">
                                    <thead>
                                    <tr>
                                        <th>
                                            OrderDate
                                        </th>
                                        <th>
                                            Region
                                        </th>
                                        <th>
                                            Rep
                                        </th>
                                        <th>
                                            Item
                                        </th>
                                        <th>
                                            Units
                                        </th>
                                        <th>
                                            Unit Cost
                                        </th>
                                        <th>
                                            Total
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            1/6/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            95
                                        </td>
                                        <td>
                                            1.99
                                        </td>
                                        <td>
                                            189.05
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1/23/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Kivell
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            50
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            999.50
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2/9/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Jardine
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            179.64
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2/26/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Gill
                                        </td>
                                        <td>
                                            Pen
                                        </td>
                                        <td>
                                            27
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            539.73
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3/15/10
                                        </td>
                                        <td>
                                            Alberta
                                        </td>
                                        <td>
                                            Sorvino
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            56
                                        </td>
                                        <td>
                                            2.99
                                        </td>
                                        <td>
                                            167.44
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4/1/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            299.40
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4/18/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Andrews
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            75
                                        </td>
                                        <td>
                                            1.99
                                        </td>
                                        <td>
                                            149.25
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5/5/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Jardine
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            90
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            449.10
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5/22/10
                                        </td>
                                        <td>
                                            Alberta
                                        </td>
                                        <td>
                                            Thompson
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            32
                                        </td>
                                        <td>
                                            1.99
                                        </td>
                                        <td>
                                            63.68
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6/8/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            8.99
                                        </td>
                                        <td>
                                            539.40
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6/25/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Morgan
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            90
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            449.10
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7/12/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Howard
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            29
                                        </td>
                                        <td>
                                            1.99
                                        </td>
                                        <td>
                                            57.71
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7/29/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Parent
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            81
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            1,619.19
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            8/15/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            35
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            174.65
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9/1/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Smith
                                        </td>
                                        <td>
                                            Desk
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            125.00
                                        </td>
                                        <td>
                                            250.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9/18/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            16
                                        </td>
                                        <td>
                                            15.99
                                        </td>
                                        <td>
                                            255.84
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10/5/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Morgan
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            28
                                        </td>
                                        <td>
                                            8.99
                                        </td>
                                        <td>
                                            251.72
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10/22/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Pen
                                        </td>
                                        <td>
                                            64
                                        </td>
                                        <td>
                                            8.99
                                        </td>
                                        <td>
                                            575.36
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/8/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Parent
                                        </td>
                                        <td>
                                            Pen
                                        </td>
                                        <td>
                                            15
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            299.85
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/25/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Kivell
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            96
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            479.04
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/12/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Smith
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            67
                                        </td>
                                        <td>
                                            1.29
                                        </td>
                                        <td>
                                            86.43
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/29/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Parent
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            74
                                        </td>
                                        <td>
                                            15.99
                                        </td>
                                        <td>
                                            1,183.26
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1/15/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Gill
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            46
                                        </td>
                                        <td>
                                            8.99
                                        </td>
                                        <td>
                                            413.54
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2/1/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Smith
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            87
                                        </td>
                                        <td>
                                            15.00
                                        </td>
                                        <td>
                                            1,305.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2/18/11
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            19.96
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3/7/11
                                        </td>
                                        <td>
                                            Alberta
                                        </td>
                                        <td>
                                            Sorvino
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            139.93
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3/24/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Jardine
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            50
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            249.50
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4/10/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Andrews
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            66
                                        </td>
                                        <td>
                                            1.99
                                        </td>
                                        <td>
                                            131.34
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4/27/11
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Howard
                                        </td>
                                        <td>
                                            Pen
                                        </td>
                                        <td>
                                            96
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            479.04
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5/14/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Gill
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            53
                                        </td>
                                        <td>
                                            1.29
                                        </td>
                                        <td>
                                            68.37
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5/31/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Gill
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            80
                                        </td>
                                        <td>
                                            8.99
                                        </td>
                                        <td>
                                            719.20
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6/17/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Kivell
                                        </td>
                                        <td>
                                            Desk
                                        </td>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            125.00
                                        </td>
                                        <td>
                                            625.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7/4/11
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            62
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            309.38
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7/21/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Morgan
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            55
                                        </td>
                                        <td>
                                            12.49
                                        </td>
                                        <td>
                                            686.95
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            8/7/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Kivell
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            42
                                        </td>
                                        <td>
                                            23.95
                                        </td>
                                        <td>
                                            1,005.90
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            8/24/11
                                        </td>
                                        <td>
                                            Alberta
                                        </td>
                                        <td>
                                            Sorvino
                                        </td>
                                        <td>
                                            Desk
                                        </td>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            275.00
                                        </td>
                                        <td>
                                            825.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9/10/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Gill
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            1.29
                                        </td>
                                        <td>
                                            9.03
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9/27/11
                                        </td>
                                        <td>
                                            Alberta
                                        </td>
                                        <td>
                                            Sorvino
                                        </td>
                                        <td>
                                            Pen
                                        </td>
                                        <td>
                                            76
                                        </td>
                                        <td>
                                            1.99
                                        </td>
                                        <td>
                                            151.24
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10/14/11
                                        </td>
                                        <td>
                                            Alberta
                                        </td>
                                        <td>
                                            Thompson
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            57
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            1,139.43
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10/31/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Andrews
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            14
                                        </td>
                                        <td>
                                            1.29
                                        </td>
                                        <td>
                                            18.06
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/17/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Jardine
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            11
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            54.89
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/4/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Jardine
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            94
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            1,879.06
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/21/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Andrews
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            28
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            139.72
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading ">
                                Responsive Data Table
                                <span class="tools pull-right">
                                    <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                    <a class="t-close fa fa-times" href="javascript:;"></a>
                                </span>
                            </header>
                            <div class="table-responsive">
                                <table class="table responsive-data-table data-table">
                                    <thead>
                                    <tr>
                                        <th>
                                            OrderDate
                                        </th>
                                        <th>
                                            Region
                                        </th>
                                        <th>
                                            Rep
                                        </th>
                                        <th>
                                            Item
                                        </th>
                                        <th>
                                            Units
                                        </th>
                                        <th>
                                            Unit Cost
                                        </th>
                                        <th>
                                            Total
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            1/6/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            95
                                        </td>
                                        <td>
                                            1.99
                                        </td>
                                        <td>
                                            189.05
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1/23/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Kivell
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            50
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            999.50
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2/9/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Jardine
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            36
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            179.64
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2/26/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Gill
                                        </td>
                                        <td>
                                            Pen
                                        </td>
                                        <td>
                                            27
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            539.73
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3/15/10
                                        </td>
                                        <td>
                                            Alberta
                                        </td>
                                        <td>
                                            Sorvino
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            56
                                        </td>
                                        <td>
                                            2.99
                                        </td>
                                        <td>
                                            167.44
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4/1/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            299.40
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4/18/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Andrews
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            75
                                        </td>
                                        <td>
                                            1.99
                                        </td>
                                        <td>
                                            149.25
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5/5/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Jardine
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            90
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            449.10
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5/22/10
                                        </td>
                                        <td>
                                            Alberta
                                        </td>
                                        <td>
                                            Thompson
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            32
                                        </td>
                                        <td>
                                            1.99
                                        </td>
                                        <td>
                                            63.68
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6/8/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            8.99
                                        </td>
                                        <td>
                                            539.40
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6/25/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Morgan
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            90
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            449.10
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7/12/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Howard
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            29
                                        </td>
                                        <td>
                                            1.99
                                        </td>
                                        <td>
                                            57.71
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7/29/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Parent
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            81
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            1,619.19
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            8/15/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            35
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            174.65
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9/1/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Smith
                                        </td>
                                        <td>
                                            Desk
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            125.00
                                        </td>
                                        <td>
                                            250.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9/18/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            16
                                        </td>
                                        <td>
                                            15.99
                                        </td>
                                        <td>
                                            255.84
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10/5/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Morgan
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            28
                                        </td>
                                        <td>
                                            8.99
                                        </td>
                                        <td>
                                            251.72
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10/22/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Pen
                                        </td>
                                        <td>
                                            64
                                        </td>
                                        <td>
                                            8.99
                                        </td>
                                        <td>
                                            575.36
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/8/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Parent
                                        </td>
                                        <td>
                                            Pen
                                        </td>
                                        <td>
                                            15
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            299.85
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/25/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Kivell
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            96
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            479.04
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/12/10
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Smith
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            67
                                        </td>
                                        <td>
                                            1.29
                                        </td>
                                        <td>
                                            86.43
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/29/10
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Parent
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            74
                                        </td>
                                        <td>
                                            15.99
                                        </td>
                                        <td>
                                            1,183.26
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            1/15/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Gill
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            46
                                        </td>
                                        <td>
                                            8.99
                                        </td>
                                        <td>
                                            413.54
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2/1/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Smith
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            87
                                        </td>
                                        <td>
                                            15.00
                                        </td>
                                        <td>
                                            1,305.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2/18/11
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            19.96
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3/7/11
                                        </td>
                                        <td>
                                            Alberta
                                        </td>
                                        <td>
                                            Sorvino
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            139.93
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3/24/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Jardine
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            50
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            249.50
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4/10/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Andrews
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            66
                                        </td>
                                        <td>
                                            1.99
                                        </td>
                                        <td>
                                            131.34
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4/27/11
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Howard
                                        </td>
                                        <td>
                                            Pen
                                        </td>
                                        <td>
                                            96
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            479.04
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5/14/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Gill
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            53
                                        </td>
                                        <td>
                                            1.29
                                        </td>
                                        <td>
                                            68.37
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5/31/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Gill
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            80
                                        </td>
                                        <td>
                                            8.99
                                        </td>
                                        <td>
                                            719.20
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6/17/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Kivell
                                        </td>
                                        <td>
                                            Desk
                                        </td>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            125.00
                                        </td>
                                        <td>
                                            625.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7/4/11
                                        </td>
                                        <td>
                                            Quebec
                                        </td>
                                        <td>
                                            Jones
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            62
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            309.38
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7/21/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Morgan
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            55
                                        </td>
                                        <td>
                                            12.49
                                        </td>
                                        <td>
                                            686.95
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            8/7/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Kivell
                                        </td>
                                        <td>
                                            Pen Set
                                        </td>
                                        <td>
                                            42
                                        </td>
                                        <td>
                                            23.95
                                        </td>
                                        <td>
                                            1,005.90
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            8/24/11
                                        </td>
                                        <td>
                                            Alberta
                                        </td>
                                        <td>
                                            Sorvino
                                        </td>
                                        <td>
                                            Desk
                                        </td>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            275.00
                                        </td>
                                        <td>
                                            825.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9/10/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Gill
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            1.29
                                        </td>
                                        <td>
                                            9.03
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9/27/11
                                        </td>
                                        <td>
                                            Alberta
                                        </td>
                                        <td>
                                            Sorvino
                                        </td>
                                        <td>
                                            Pen
                                        </td>
                                        <td>
                                            76
                                        </td>
                                        <td>
                                            1.99
                                        </td>
                                        <td>
                                            151.24
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10/14/11
                                        </td>
                                        <td>
                                            Alberta
                                        </td>
                                        <td>
                                            Thompson
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            57
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            1,139.43
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10/31/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Andrews
                                        </td>
                                        <td>
                                            Pencil
                                        </td>
                                        <td>
                                            14
                                        </td>
                                        <td>
                                            1.29
                                        </td>
                                        <td>
                                            18.06
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/17/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Jardine
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            11
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            54.89
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/4/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Jardine
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            94
                                        </td>
                                        <td>
                                            19.99
                                        </td>
                                        <td>
                                            1,879.06
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12/21/11
                                        </td>
                                        <td>
                                            Ontario
                                        </td>
                                        <td>
                                            Andrews
                                        </td>
                                        <td>
                                            Binder
                                        </td>
                                        <td>
                                            28
                                        </td>
                                        <td>
                                            4.99
                                        </td>
                                        <td>
                                            139.72
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading ">
                                Row Details Table
                                <span class="tools pull-right">
                                    <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                    <a class="t-close fa fa-times" href="javascript:;"></a>
                                </span>
                            </header>
                            <div class="table-responsive">
                                <table class="table data-table row-details-data-table" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
										
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Salary</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </section>
                    </div>

                </div>

            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                2015 &copy; SlickLab by VectorLab.
            </footer>
            <!--footer section end-->


            <!-- Right Slidebar start -->
            <div class="sb-slidebar sb-right sb-style-overlay">
            <div class="right-bar">

            <span class="r-close-btn sb-close"><i class="fa fa-times"></i></span>

            <ul class="nav nav-tabs nav-justified-">
                <li class="active">
                    <a href="#chat" data-toggle="tab">Chat</a>
                </li>
                <li class="">
                    <a href="#info" data-toggle="tab">Info</a>
                </li>
                <li class="">
                    <a href="#settings" data-toggle="tab">Settings</a>
                </li>
            </ul>
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane active " id="chat">
                <div class="online-chat">
                    <div class="online-chat-container">
                        <div class="chat-list">
                            <h3>Chat list</h3>
                            <h5>34 Friends Online, 80 Offline</h5>
                            <a href="#" class="add-people tooltips" data-original-title="Add People" data-toggle="tooltip" data-placement="left">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="side-title">
                            <h2>online</h2>
                            <div class="title-border-row">
                                <div class="title-border"></div>
                            </div>
                        </div>

                        <ul class="team-list chat-list-side">
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="images/img2.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Alison Jones
                                </span>
                                        <small class="text-muted">Start exploring</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="images/img3.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jonathan Smith
                                </span>
                                        <small class="text-muted">Alien Inside</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="images/img1.jpg" alt="">
                                <i class="away dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Anjelina Doe
                                </span>
                                        <small class="text-muted">Screaming...</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="images/img3.jpg" alt="">
                                <i class="busy dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Franklin Adam
                                </span>
                                        <small class="text-muted">Don't lose the hope</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="images/img2.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jeff Crowford
                                </span>
                                        <small class="text-muted">Just flying</small>
                                    </div>
                                </a>
                            </li>

                        </ul>

                        <div class="side-title">
                            <h2>Offline</h2>
                            <div class="title-border-row">
                                <div class="title-border"></div>
                            </div>
                        </div>
                        <ul class="team-list chat-list-side">
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="images/img2.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Alison Jones
                                </span>
                                        <small class="text-muted">Start exploring</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="images/img3.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jonathan Smith
                                </span>
                                        <small class="text-muted">Alien Inside</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="images/img1.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Anjelina Doe
                                </span>
                                        <small class="text-muted">Screaming...</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="images/img3.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Franklin Adam
                                </span>
                                        <small class="text-muted">Don't lose the hope</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="images/img2.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jeff Crowford
                                </span>
                                        <small class="text-muted">Just flying</small>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>


                </div>


            </div>

            <div role="tabpanel" class="tab-pane " id="info">
            <div class="chat-list info">
                <h3>Latest Information</h3>
                <a href="#" class="add-people tooltips" data-original-title="Refresh" data-toggle="tooltip" data-placement="left">
                    <i class="fa fa-repeat"></i>
                </a>
            </div>
            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Revenue</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info">
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Received Money from John Doe
                            </span>
                            <span class="value green-color">$12300</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle purple-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Total Admin Template Sales
                            </span>
                            <span class="value purple-color">$40100</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle red-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Monty Revenue
                            </span>
                            <span class="value red-color">$322300</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle blue-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Received Money from John Doe
                            </span>
                            <span class="value blue-color">$1520</span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="aside-widget">

                <div class="side-title-alt">
                    <h2>Statistics</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list">
                    <li>
                        <div class="inline">
                                    <span class="name">
                                         Foreign Visit
                                    </span>
                            <small class="text-muted">25% Increase</small>
                        </div>
                                <span class="thumb-small">
                                    <span id="foreign-visit" class="chart"></span>
                                </span>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Montly Visit
                            </span>
                            <small class="text-muted">Average visit 12% Increase</small>
                        </div>
                                <span class="thumb-small">
                                    <span id="monthly-visit" class="chart"></span>
                                </span>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Unique Visit
                            </span>
                            <small class="text-muted">35% unique visitor </small>
                        </div>
                                <span class="thumb-small">
                                    <span id="unique-visit" class="chart"></span>
                                </span>
                    </li>
                </ul>
            </div>

            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Notification</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list">
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-bell green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Meeting with John Doe at
                            </span>
                            <span class="value text-muted">11.30 am</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-users green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                3 membership request pending
                            </span>
                            <span class="value text-muted">John, Smith, Lira</span>
                        </div>
                    </li>
                </ul>

            </div>


            <div class="aside-widget">


                <div class="side-title-alt">
                    <h2>System</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list">
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Received database error report from hosting provider
                            </span>
                            <span class="value text-muted">11.30 am</span>
                        </div>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Hosting Renew notification
                            </span>
                            <span class="value text-muted">12.00 pm</span>
                        </div>
                    </li>

                </ul>
            </div>


            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Work Progress</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list sale-monitor">
                    <li>
                        <div class="states">
                            <div class="info">
                                <div class="desc pull-left">Server Setup and Configuration</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                            </div>
                            <div class="info">
                                <small class="percent pull-left text-muted">50% completed</small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="states">
                            <div class="info">
                                <div class="desc pull-left">Website Design & Development</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                            </div>
                            <div class="info">
                                <small class="percent pull-left text-muted">85% completed</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            </div>

            <div role="tabpanel" class="tab-pane " id="settings">
                <div class="chat-list bottom-border settings-head">
                    <h3>Account Setting</h3>
                    <h5>Configure your account as per your need.</h5>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                    <li>
                        <div class="inline">
                                <span class="name">
                                Make my feature post public?
                            </span>
                            <small class="text-muted">Everyone will be able to see, like, comment
                                and share your feature post.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small" checked/>
                        </span>
                    </li>
                    <li>
                        <div class="inline">
                                <span class="name">
                                Show offline Contacts
                            </span>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small2" checked/>
                        </span>
                    </li>

                    <li>
                        <div class="inline">
                                <span class="name">
                                Everyone will see my stuff
                            </span>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small3"/>
                        </span>
                    </li>

                </ul>

                <div class="chat-list bottom-border settings-head">
                    <h3>General Setting</h3>
                    <h5>Configure your account as per your need.</h5>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                    <li>
                        <div class="inline">
                                <span class="name">
                                Show me Online
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small4" checked/>
                        </span>
                    </li>
                    <li>
                        <div class="inline">
                                <span class="name">
                                Status visible to all
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small5" />
                        </span>
                    </li>

                    <li>
                        <div class="inline">
                                <span class="name">
                                Show my work progess to all
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small6" checked/>
                        </span>
                    </li>

                </ul>

            </div>

            </div>
            </div>
            </div>
            <!-- Right Slidebar end -->

        </div>
        <!-- body content end-->
    </section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>

<!--Nice Scroll-->
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>

<!--right slidebar-->
<script src="js/slidebars.min.js"></script>

<!--switchery-->
<script src="js/switchery.min.js"></script>
<script src="js/switchery-init.js"></script>

<!--Sparkline Chart-->
<script src="js/jquery.sparkline.js"></script>
<script src="js/sparkline-init.js"></script>


<!--Data Table-->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.tableTools.min.js"></script>
<script src="js/bootstrap-dataTable.js"></script>
<script src="js/dataTables.colVis.min.js"></script>
<script src="js/dataTables.responsive.min.js"></script>
<script src="js/dataTables.scroller.min.js"></script>
<!--data table init-->
<script src="js/data-table-init.js"></script>


<!--common scripts for all pages-->
<script src="js/scripts.js"></script>


</body>
</html>
