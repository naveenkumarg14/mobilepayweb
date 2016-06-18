<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>MobilePay - Merchant</title>

        <!-- Required CSS Files -->
        <link type="text/css" href="<?php echo base_url(); ?>css/required/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link type="text/css" href="<?php echo base_url(); ?>js/required/jquery-ui-1.11.0.custom/jquery-ui.min.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url(); ?>js/required/jquery-ui-1.11.0.custom/jquery-ui.structure.min.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url(); ?>js/required/jquery-ui-1.11.0.custom/jquery-ui.theme.min.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url(); ?>css/required/mCustomScrollbar/jquery.mCustomScrollbar.min.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url(); ?>css/required/icheck/all.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url(); ?>fonts/metrize-icons/styles-metrize-icons.css" rel="stylesheet">

        <!-- Optional CSS Files -->
        <link type="text/css" href="<?php echo base_url(); ?>css/optional/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        <!-- add CSS files here -->

        <!-- More Required CSS Files -->
        <link type="text/css" href="<?php echo base_url(); ?>css/styles-core.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url(); ?>css/styles-core-responsive.css" rel="stylesheet" />

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo base_url(); ?>js/required/misc/ie10-viewport-bug-workaround.js"></script>

        <!--[if IE 7]>
        <link type="text/css" href="assets/css/required/misc/style-ie7.css" rel="stylesheet">
        <script type="text/javascript" src="assets/fonts/lte-ie7.js"></script>
        <![endif]-->
        <!--[if IE 8]>
        <link type="text/css" href="assets/css/required/misc/style-ie8.css" rel="stylesheet">
        <![endif]-->
        <!--[if lte IE 8]>
        <script type="text/javascript" src="assets/css/required/misc/excanvas.min.js"></script>
        <![endif]-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        
        <![endif]-->
    </head>
    <body>
        <div class="container-fluid">

            <!-- START Header Container -->
            <div id="header-container">
                <div class="header-bar navbar navbar-inverse" role="navigation"> <!-- NOTE TO READER: Accepts the following class(es) "navbar-fixed-top" class -->
                    <div class="container">
                        <div class="navbar-header">

                            <!-- START logo -->
                            <div class="logo">
                                <a href="home">
                                    <h2 style="color:#fff;">MobilePay</h2>
                                </a>
                            </div>
                            <!-- END logo -->

                            <!-- START Mobile Menu Toggle -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- END Mobile Menu Toggle -->

                            <!-- START Header Info Container -->
                            <div class="header-info">
                                <!-- START Header User Profile -->
                                <div class="header-profile"> <!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
                                    <ul class="header-profile-menu">
                                        <li>
                                            <a href="#" class="top">
                                                <span class="main-menu-text"><?php echo $this->session->userdata('mobileNumber'); ?> <i class="icon icon-arrow-down-bold-round icon-size-small"></i> </span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo base_url() ?>signin/logout">
                                                        <span aria-hidden="true" class="icon icon-arrow-curve-right"></span>
                                                        <span class="main-text">Logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Header User Profile -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Header Container -->

                <!-- START Body Container -->
                <div id="body-container">