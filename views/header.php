<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo BASE_URL . BOOTSTRAP_PATH; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . CSS_PATH; ?>style.css">
    <link rel="icon" type="image/png" href="<?php echo BASE_URL . IMG_PATH; ?>thumb.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo BASE_URL . BOOTSTRAP_PATH; ?>js/bootstrap.min.js"></script>
    <title>Websector Internet Services Greece</title>
</head>
<body>
<?php Session::init(); ?>
<div class="container-fluid" id="top">
    <div class="container" id="top-menu-placeholder">
        <nav role="navigation" class="navbar navbar-default" id="top-menu">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle" id="ws-navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" id="ws-icon-bar"></span>
                    <span class="icon-bar" id="ws-icon-bar"></span>
                    <span class="icon-bar" id="ws-icon-bar"></span>
                </button>
                <a href="<?php echo WS_URL; ?>" target="_blank" class="navbar-brand pull-left" id="brand">Web Sector</a>
            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right" id="nav-bar">
                    <?php if(Session::get('loggedIn') == false): ?>
                        <li><a href="<?php echo BASE_URL . LOGIN_PATH; ?>"><i class="glyphicon glyphicon-log-in"></i><span class="top-navbar-text">Login</span></a></li>
                    <?php else: ?>
                        <li id="home"><a href="<?php echo BASE_URL . DASHBOARD_PATH; ?>">HOME</a></li>
                        <li id="calendar"><a href="<?php echo BASE_URL . CALENDAR_PATH; ?>">CALENDAR</a></li>
                        <li id="staff"><a href="<?php echo BASE_URL . STAFF_URL; ?>">STAFF</a></li>
                        <li id="clients"><a href="<?php echo BASE_URL . CLIENT_URL; ?>">CLIENTS</a></li>
                        <li id="services"><a href="<?php echo BASE_URL . SERVICE_URL; ?>">SERVICES</a></li>
                        <?php if (Session::get('role') == 'admin'):?>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <span class="top-navbar-text">Settings</span>
                                <i class="caret"></i>
                            </a>
                            <ul role="menu" class="dropdown-menu top-navbar-dropdown">
                                <li><a href="<?php echo BASE_URL . USER_URL; ?>">Users</a></li>
                                <li><a href="<?php echo BASE_URL . SETUP_URL; ?>">Setup</a></li>
                            </ul>
                        </li><!-- Settings -->
                        <?php endif; ?>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="top-navbar-text hidden-sm"><?php echo Session::get('username'); ?></span>
                                <i class="caret"></i>
                            </a>
                            <ul role="menu" class="dropdown-menu top-navbar-dropdown">
                                <li class="user-header hidden-xs">
                                    <img src="<?php echo BASE_URL . IMG_PATH . 'tk.jpg'?>" alt="User image" class="img-circle img-responsive user-image"/>
                                    <p><?php echo Session::get('username');?></p>
                                    <small><?php echo Session::get('position');?></small>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a class="btn btn-default btn-flat" href="#">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-default btn-flat" href="<?php echo BASE_URL . DASHBOARD_PATH;?>logout">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </div>
</div>