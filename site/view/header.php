<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="author" content="TM30">

        <title>Campaign Manager | <?php echo $title ?></title>

        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="<?php echo $host ?>/site/assets/plugins/jquery.steps/demo/css/jquery.steps.css">

        <!-- Dropzone css -->
        <link href="<?php echo $host ?>/site/assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">

        <!-- Tags Input -->
        <link href="<?php echo $host ?>/site/assets/plugins/tagsinput/jquery.tagsinput.css" rel="stylesheet">

        <!-- Toggles/Switch -->
        <link href="<?php echo $host ?>/site/assets/plugins/toggles/toggles.css" rel="stylesheet">

        <link href="<?php echo $host ?>/site/assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

        <!-- Responsive-table -->
        <link href="assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

        <link href="<?php echo $host ?>/site/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $host ?>/site/assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $host ?>/site/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $host ?>/site/assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $host ?>/site/assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $host ?>/site/assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $host ?>/site/assets/css/responsive.css" rel="stylesheet" type="text/css">

        <!-- Multi-Select CSS -->
        <link href="<?php echo $host ?>/site/assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">

     
        
        <!-- ION Slider -->
        <link href="<?php echo $host ?>/site/assets/plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $host ?>/site/assets/plugins/ion-rangeslider/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css">

        <!-- Date/TimePicker CSS -->
        <link href="<?php echo $host ?>/site/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="<?php echo $host ?>/site/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <script src="<?php echo $host ?>/site/assets/js/modernizr.min.js"></script>

        
        <script src="<?php echo $host ?>/site/assets/js/list.min.js"></script>
        <script src="<?php echo $host ?>/site/assets/js/list.pagination.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>


    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.php" class="logo"><span>Campaign Manager </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <!-- <li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control">
                                     <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </li> -->
                            <li class="dropdown hidden-xs">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="text-center notifi-title">Notification</li>
                                    <li class="list-group">
                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left">
                                                <em class="fa fa-user-plus fa-2x text-info"></em>
                                             </div>
                                             <div class="media-body clearfix">
                                                <div class="media-heading">New user registered</div>
                                                <p class="m-0">
                                                   <small>You have 10 unread messages</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>
                                       <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left">
                                                <em class="fa fa-diamond fa-2x text-primary"></em>
                                             </div>
                                             <div class="media-body clearfix">
                                                <div class="media-heading">New settings</div>
                                                <p class="m-0">
                                                   <small>There are new settings available</small>
                                                </p>
                                             </div>
                                          </div>
                                        </a>
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left">
                                                <em class="fa fa-bell-o fa-2x text-danger"></em>
                                             </div>
                                             <div class="media-body clearfix">
                                                <div class="media-heading">Updates</div>
                                                <p class="m-0">
                                                   <small>There are
                                                      <span class="text-primary">2</span> new updates available</small>
                                                </p>
                                             </div>
                                          </div>
                                        </a>
                                       <!-- last list item -->
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown user-box">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                    <img src="<?php echo $host ?>/site/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="<?php echo $host ?>/login"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="active">
                                <a href="<?php echo $host ?>"><i class="md md-home"></i> <span> Dashboard </span> </a>
                            </li>

                            <li class="has-submenu">
                                <a href="<?php echo $host ?>/campaign/add"><i class="ion-speakerphone "></i><span> Campaign </span> </a>
                                <ul class="submenu" role="menu">
                                    <li><a href="<?php echo $host ?>/campaign/add">New Campaign</a></li>
                                    <li><a href="<?php echo $host ?>/campaign">Active Campaigns</a></li>
                                    <li><a href="<?php echo $host ?>/campaign/request">Campaign Request</a></li>

                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ion-android-contact"></i> <span> Users </span> </a>
                                <ul class="submenu">
                                    <li><a href="<?php echo $host ?>/user/add">Create New</a></li>
                                    <li><a href="<?php echo $host ?>/user">View All</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-users"></i> <span> Subscriber </span> </a>
                                <ul class="submenu">
                                    <li><a href="<?php echo $host ?>/sub/add">Add New Base</a></li>
                                    <li><a href="<?php echo $host ?>/sub">Subscriber Analysis</a></li>
                                </ul>
                            </li>

                          <!--   <li class="has-submenu">
                                <a href="#"><i class="ion-help"></i><span>Help </span> </a>
                                <ul class="submenu">
                                    <li><a href="">Documentation</a></li>
                                </ul>
                            </li> -->

                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->

        <?php include 'flash.php'; ?>
