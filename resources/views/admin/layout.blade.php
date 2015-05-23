<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SAARC Agri Food Bank</title>
    {!! HTML::script('assets/js/jquery.js') !!}
    <!--// Stylesheets //-->
    @yield('extraCss')
    {!! HTML::style('assets/css/style.css') !!}
    {!! HTML::style('assets/css/bootstrap.css') !!}
    {!! HTML::style('assets/fa/css/font-awesome.css') !!}
    {!! HTML::style('assets/fa/css/font-awesome.min.css') !!}
    <!--// Javascript //-->
    @yield('extraJs')
    {!! HTML::script('assets/js/bootstrap.min.js') !!}
    {!! HTML::script('assets/js/jquery.accordion.js') !!}
    {!! HTML::script('assets/js/jquery.custom-scrollbar.min.js') !!}
    {!! HTML::script('assets/js/jquery.custom-scrollbar.min.js') !!}
    {!! HTML::script('assets/js/icheck.min.js') !!}
    {!! HTML::script('assets/js/selectnav.min.js') !!}
    {!! HTML::script('assets/js/functions.js') !!}
    {!! HTML::script('assets/js/html5shiv.js') !!}
    {!! HTML::script('assets/js/respond.min.js') !!}

    <!--[if lt IE 9]>
    <!--<script type="text/javascript" src="assets/js/html5shiv.js"></script>
    <script type="text/javascript" src="assets/js/respond.min.js"></script>-->
    <![endif]-->
</head>

<body>
<!-- Wrapper Start -->
<div class="wrapper">
    <div class="structure-row">
        <!-- Sidebar Start -->
        <aside class="sidebar">
            <div class="sidebar-in">
                <!-- Sidebar Header Start -->
                <header>
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/safb.png" alt="SAARC Agri Food Bank" /></a>
                    </div>
                    <!-- Logo End -->
                    <!-- Toggle Button Start -->
                    <a href="#" class="togglemenu">&nbsp;</a>
                    <!-- Toggle Button End -->
                    <div class="clearfix"></div>
                </header>
                <!-- Sidebar Header End -->
                <!-- Sidebar Navigation Start -->
                <nav class="navigation">
                    <ul class="navi-acc" id="nav2">
                        <li>
                            <a href="index.html" class="dashboard"><i class="fa fa-home fa-2x"></i>&nbsp; Home</a>
                        </li>


                        <li>
                            <a href="#add-data" class="add-data"><i class="fa fa-pencil-square-o fa-2x"></i>&nbsp; Add Data</a>
                            <ul>
                                <li><a href="production-requirement.html"><i class="fa fa-forumbee"></i>&nbsp; Production And Requirements</a></li>
                                <li><a href="import.html"><i class="fa fa-forward"></i>&nbsp; Import</a></li>
                                <li><a href="export.html"><i class="fa fa-backward"></i>&nbsp; Export</a></li>
                                <li><a href="damage.html"><i class="fa fa-bar-chart"></i>&nbsp; Report a Damage</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#view-reports" class="view-reports"><i class="fa fa-files-o fa-2x"></i>&nbsp; View Reports</a>
                            <ul>
                                <li><a href="food-requirement.html"><i class="fa fa-forumbee"></i>&nbsp; Annual Requirements</a></li>
                                <li><a href="production.html"><i class="fa fa-group"></i>&nbsp; Annual Production</a></li>
                                <li><a href="import-food.html"><i class="fa fa-forward"></i>&nbsp; Import of Food Grains</a></li>
                                <li><a href="food-requirement.html"><i class="fa fa-bars"></i>&nbsp; Import from SAARC Members</a></li>
                                <li><a href="export-food.html"><i class="fa fa-backward"></i>&nbsp; Export of Food Grains</a></li>
                                <li><a href="storage-location.html"><i class="fa fa-database"></i>&nbsp; Storage Location & Quantity</a></li>
                                <li><a href="damage-report.html"><i class="fa fa-bar-chart"></i>&nbsp; Food Grain Damage Reports</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#resolutions" class="view-reports"><i class="fa fa-folder-open-o fa-2x"></i>&nbsp; Resolutions</a>
                            <ul>
                                <li><a href="add-resolutions.html" class="view-reports"><i class="fa fa-file-code-o fa-2x"></i>&nbsp; Add Resolutions</a></li>
                                <li><a href="resolutions-archive.html" class="view-reports"><i class="fa fa-file-archive-o fa-2x"></i>&nbsp; Resolutions Archive</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#newsandposts" class="view-reports"><i class="fa fa-newspaper-o fa-2x"></i>&nbsp; News and Posts</a>
                            <ul>
                                <li><a href="add-post.html" class="view-reports"><i class="fa fa-pencil-square fa-2x"></i>&nbsp; Add Post</a></li>
                                <li><a href="#" class="view-reports"><i class="fa fa-clipboard fa-2x"></i>&nbsp; Comment, Article and News Corner</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#lists" class="view-reports"><i class="fa fa-th-list fa-2x"></i>&nbsp; Lists</a>
                            <ul>
                                <li><a href="gb-members.html" class="view-reports"><i class="fa fa-list fa-2x"></i>&nbsp; Governing Board Member List</a></li>
                                <li><a href="#" class="view-reports"><i class="fa fa-list-ul fa-2x"></i>&nbsp; National Focal Point List</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="settings"><i class="fa fa-cogs fa-2x"></i>&nbsp; Settings</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
                <!-- Sidebar Navigation End -->
                <!-- Shadow Start -->
                <span class="shadows"></span>
                <!-- Shadow End -->
            </div>
        </aside>
        <!-- Sidebar End -->
        <!-- Right Section Start -->
        <div class="right-sec">
            <!-- Right Section Header Start -->
            <header>
                <!-- User Section Start -->
                <div class="user">
                    <figure>
                        <a href="#"><img src="assets/images/avatarX.png" alt="Admin" /></a>
                    </figure>
                    <div class="welcome">
                        <p>Welcome</p>
                        <h5><a href="#">{{ Auth::user()->user_first_name.' '.Auth::user()->user_last_name }}</a></h5>
                    </div>
                </div>
                <!-- User Section End -->
                <!-- Search Section Start -->
                <div class="search-box">
                    <input type="text" placeholder="Search Anything" />
                    <input type="submit" value="go" />
                </div>
                <!-- Search Section End -->
                <!-- Header Top Navigation Start -->
                <nav class="topnav">
                    <ul id="nav1">
                        <li class="notifi">
                            <a href="#"><i class="glyphicon glyphicon-bell"></i>Notifications</a>
                            <div class="popdown">
                                <div class="notificationlist">
                                    <ul>
                                        <li>
                                            <h6><a href="#">Demo work done 1</a></h6>
                                            <p>Demo work done data 1.</p>
                                            <span><i class="glyphicon glyphicon-time"></i>1hrs ago</span>
                                        </li>
                                        <li>
                                            <h6><a href="#">Demo work done 2</a></h6>
                                            <p>Demo work done data 2 !</p>
                                            <span><i class="glyphicon glyphicon-time"></i>1hrs ago</span>
                                        </li>
                                        <li>
                                            <h6><a href="#">Demo work done 3</a></h6>
                                            <p>Demo work done data 3 !</p>
                                            <span><i class="glyphicon glyphicon-time"></i>2hrs ago</span>
                                        </li>
                                        <li>
                                            <h6><a href="#">New export from Bangladesh to Bhutan</a></h6>
                                            <p>This is the demo data</p>
                                            <span><i class="glyphicon glyphicon-time"></i>6hrs ago</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="viewall">View All Notifications</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li class="settings">
                            <a href="#"><i class="fa fa-user"></i>&nbsp; Profile</a>
                            <div class="popdown popdown-right settings">
                                <nav>
                                    <a href="#"><i class="glyphicon glyphicon-user"></i>Your Profile</a>
                                    <a href="#"><i class="glyphicon glyphicon-pencil"></i>Edit Account</a>
                                    <a href="#"><i class="glyphicon glyphicon-question-sign"></i>Get Help</a>
                                    <a href="#"><i class="glyphicon glyphicon-log-out"></i>Log out</a>
                                </nav>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Header Top Navigation End -->
                <div class="clearfix"></div>
            </header>
            <!-- Right Section Header End -->
            <!-- Content Section Start -->
            <div class="content-section">
                <div class="container-liquid">
                   @yield('content')
                    <!-- Right Section End -->
                </div>
            </div>
            <!-- Wrapper End -->
</body>
</html>