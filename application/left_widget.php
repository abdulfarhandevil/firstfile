<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard v.1.0 | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.css">
    <!-- data-table CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/normalize.css">
    <!-- charts C3 CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/c3.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/registration_style.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/state_css.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/city.css">
    <script src="<?php echo base_url(); ?>js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/userdata.js"></script>

</head>
<body class="materialdesign">
<div class="wrapper-pro">
<div class="left-sidebar-pro">
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="#"><img src="img/message/1.jpg" alt="" />
            </a>
            <h3>Andrar Son</h3>
            <p>Developer</p>
            <strong>AP+</strong>
        </div>
        <div class="left-custom-menu-adp-wrap">
            <ul class="nav navbar-nav left-sidebar-menu-pro">
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="<?php echo base_url('Admin_Controller/dashboard') ?>" class="dropdown-item">Dashboard v.1</a>
                        <a href="<?php echo base_url('Main_Controller/dashboard_2') ?>" class="dropdown-item">Dashboard v.2</a>
                        <a href="<?php echo base_url('Main_Controller') ?>" class="dropdown-item">Analytics</a>
                        <a href="<?php echo base_url('Main_Controller') ?>" class="dropdown-item">Widgets</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope"></i> <span class="mini-dn">Mailbox</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="<?php echo base_url('Main_Controller/view_mail') ?>" class="dropdown-item">Inbox</a>
                        <a href="<?php echo base_url('Main_Controller/view_mail') ?>" class="dropdown-item">View Mail</a>
                        <a href="<?php echo base_url('Main_Controller/view_mail') ?>" class="dropdown-item">Compose Mail</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">Interface</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="<?php echo base_url('Main_Controller/google_map') ?>" class="dropdown-item">Google Map</a>
                        <a href="<?php echo base_url('Main_Controller/google_map') ?>" class="dropdown-item">Data Maps</a>
                        <a href="<?php echo base_url('Main_Controller/google_map') ?>" class="dropdown-item">Pdf Viewer</a>
                        <a href="<?php echo base_url('Main_Controller/google_map') ?>" class="dropdown-item">X-Editable</a>
                        <a href="<?php echo base_url('Main_Controller/google_map') ?>" class="dropdown-item">Code Editor</a>
                        <a href="<?php echo base_url('Main_Controller/google_map') ?>" class="dropdown-item">Tree View</a>
                        <a href="<?php echo base_url('Main_Controller/google_map') ?>" class="dropdown-item">Preloader</a>
                        <a href="<?php echo base_url('Main_Controller/google_map') ?>" class="dropdown-item">Images Cropper</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Miscellaneous</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="<?php echo base_url('Main_Controller/profile') ?>" class="dropdown-item">Profile</a>
                        <a href="<?php echo base_url('Main_Controller/profile') ?>" class="dropdown-item">Contact Client</a>
                        <a href="<?php echo base_url('Main_Controller/profile') ?>" class="dropdown-item">Contact Client v.1</a>
                        <a href="<?php echo base_url('Main_Controller/profile') ?>" class="dropdown-item">Project List</a>
                        <a href="<?php echo base_url('Main_Controller/profile') ?>" class="dropdown-item">Project Details</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Charts</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                        <a href="<?php echo base_url('Main_Controller/chart') ?>" class="dropdown-item">Bar Charts</a>
                        <a href="<?php echo base_url('Main_Controller/chart') ?>" class="dropdown-item">Line Charts</a>
                        <a href="<?php echo base_url('Main_Controller/chart') ?>" class="dropdown-item">Area Charts</a>
                        <a href="<?php echo base_url('Main_Controller/chart') ?>" class="dropdown-item">Rounded Charts</a>
                        <a href="<?php echo base_url('Main_Controller/chart') ?>" class="dropdown-item">C3 Charts</a>
                        <a href="<?php echo base_url('Main_Controller/chart') ?>" class="dropdown-item">Sparkline Charts</a>
                        <a href="<?php echo base_url('Main_Controller/chart') ?>" class="dropdown-item">Peity Charts</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">User-Information</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="<?php echo base_url('Admin_Controller/myview') ?>" class="dropdown-item">Users</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-flag"></i> <span class="mini-dn">Country</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="<?php echo base_url('Country_Controller/index') ?>" class="dropdown-item">Add Country</a>
                        <a href="<?php echo base_url('Country_Controller/all_countries') ?>" class="dropdown-item">Country List</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-scribd"></i> <span class="mini-dn">State</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="<?php echo base_url('State_Controller/index') ?>" class="dropdown-item">Add State</a>
                        <a href="<?php echo base_url('State_Controller/all_states') ?>" class="dropdown-item">state List</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-copyright"></i> <span class="mini-dn">City</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="<?php echo base_url('City_Controller/index') ?>" class="dropdown-item">Add City</a>
                        <a href="<?php echo base_url('City_Controller/all_cities') ?>" class="dropdown-item">City List</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Forms Elements</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                        <a href="<?php echo base_url('Main_Controller/form_element') ?>" class="dropdown-item">Basic Elements</a>
                        <a href="<?php echo base_url('Main_Controller/form_element') ?>" class="dropdown-item">Advance Elements</a>
                        <a href="<?php echo base_url('Main_Controller/form_element') ?>" class="dropdown-item">Password Meter</a>
                        <a href="<?php echo base_url('Main_Controller/form_element') ?>" class="dropdown-item">Multi Upload</a>
                        <a href="<?php echo base_url('Main_Controller/form_element') ?>" class="dropdown-item">Text Editor</a>
                        <a href="<?php echo base_url('Main_Controller/form_element') ?>" class="dropdown-item">Dual List Box</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span class="mini-dn">App views</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown apps-left-menu-std animated flipInX">
                        <a href="<?php echo base_url('Main_Controller/notification') ?>" class="dropdown-item">Notifications</a>
                        <a href="<?php echo base_url('Main_Controller/form_element') ?>" class="dropdown-item">Alerts</a>
                        <a href="<?php echo base_url('Main_Controller/form_element') ?>" class="dropdown-item">Modals</a>
                        <a href="<?php echo base_url('Main_Controller/form_element') ?>" class="dropdown-item">Buttons</a>
                        <a href="<?php echo base_url('Main_Controller/form_element') ?>" class="dropdown-item">Tabs</a>
                        <a href="<?php echo base_url('Main_Controller/form_element') ?>" class="dropdown-item">Accordion</a>
                        <a href="<?php echo base_url('Main_Controller/form_element') ?>" class="dropdown-item">Tab Menus</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>