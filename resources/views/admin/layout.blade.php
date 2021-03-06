<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SAARC Agri Food Bank</title>
    <!--// Stylesheets //-->

    {!! HTML::script('assets/js/jquery.js') !!}
    {!! HTML::style('assets/css/style.css') !!}
    {!! HTML::style('assets/css/bootstrap.css') !!}
    {!! HTML::style('assets/fa/css/font-awesome.css') !!}
    {!! HTML::style('assets/fa/css/font-awesome.min.css') !!}
    {!! HTML::style('assets/css/jquery-ui.css') !!}
    {!! HTML::style('assets/css/pnotify/jquery.pnotify.default.css') !!}

    @yield('extraCss')
    <!--// Javascript //-->
    {!! HTML::script('assets/js/jquery-ui.js') !!}
    {!! HTML::script('assets/js/bootstrap.min.js') !!}
    {!! HTML::script('assets/js/jquery.accordion.js') !!}
    {!! HTML::script('assets/js/jquery.custom-scrollbar.min.js') !!}
    {!! HTML::script('assets/js/icheck.min.js') !!}
    {!! HTML::script('assets/js/selectnav.min.js') !!}
    {!! HTML::script('assets/js/functions.js') !!}
    {!! HTML::script('assets/js/html5shiv.js') !!}
    {!! HTML::script('assets/js/respond.min.js') !!}
    {!! HTML::script('assets/js/pnotify/jquery.pnotify.js') !!}

    @yield('extraJs')
    <script type="text/javascript">
        $(function() {
            $( "#from" ).datepicker({
                dateFormat:'yy-mm-dd',
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                onClose: function( selectedDate ) {
                    $( "#to" ).datepicker( "option", "minDate", selectedDate );
                }
            });
            $( "#to" ).datepicker({
                dateFormat:'yy-mm-dd',
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                onClose: function( selectedDate ) {
                    $( "#from" ).datepicker( "option", "maxDate", selectedDate );
                }
            });
            $(".input").bind("keyup blur",function() {
                var $th = $(this);
                $th.val( $th.val().replace(/[^A-z0-9,#. _@-]/g, function(str) { return ''; } ) );
            });
            $(".number").bind("keyup blur",function() {
                var $th = $(this);
                $th.val( $th.val().replace(/[^0-9-.]/g, function(str) { return ''; } ) );
            });
            @if(Session::has('flashError'))
            new PNotify({
                title: 'ERROR',
                text: "{!! Session::get('flashError') !!}",
                type: 'error',
                delay: 3000
            });
            @elseif(Session::has('flashSuccess'))
            new PNotify({
                title: 'Success',
                text: "{!! Session::get('flashSuccess') !!}",
                type: 'success',
                delay: 3000
            });
            @endif
        });
    </script>
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
                        <a href="index.html">{!! HTML::image('assets/images/safb.png') !!}</a>
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
                            <a href="{!! URL::to('/admin') !!}" class="dashboard"><i class="fa fa-home fa-2x"></i>&nbsp; Home</a>
                        </li>


                        <li>
                            <a href="#add-data" class="add-data"><i class="fa fa-pencil-square-o fa-2x"></i>&nbsp; Add Data</a>
                            <ul>
                                <li><a href="{!! URL::to('admin/production-requirement-form') !!}"><i class="fa fa-forumbee"></i>&nbsp; Production And Requirements</a></li>
                                <li><a href="{!! URL::to('admin/import-form') !!}"><i class="fa fa-forward"></i>&nbsp; Import</a></li>
                                <li><a href="{!! URL::to('admin/export-form') !!}"><i class="fa fa-backward"></i>&nbsp; Export</a></li>
                                <li><a href="{!! URL::to('admin/damage-form') !!}"><i class="fa fa-bar-chart"></i>&nbsp; Report a Damage</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#add-data" class="add-data"><i class="fa fa-bar-chart fa-2x"></i>&nbsp; Details</a>
                            <ul>
                                <li><a href="{!! URL::to('admin/production-requirement') !!}"><i class="fa fa-forumbee"></i>&nbsp; Production And Requirements</a></li>
                                <li><a href="{!! URL::to('admin/import') !!}"><i class="fa fa-forward"></i>&nbsp; Import</a></li>
                                <li><a href="{!! URL::to('admin/export') !!}"><i class="fa fa-backward"></i>&nbsp; Export</a></li>
                                <li><a href="{!! URL::to('admin/damage') !!}"><i class="fa fa-bar-chart"></i>&nbsp; Report a Damage</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#view-reports" class="view-reports"><i class="fa fa-files-o fa-2x"></i>&nbsp; View Reports</a>
                            <ul>
                                <li><a href="{!! URL::to('admin/report-requirement') !!}"><i class="fa fa-forumbee"></i>&nbsp; Annual Requirements</a></li>
                                <li><a href="{!! URL::to('admin/report-production') !!}"><i class="fa fa-group"></i>&nbsp; Annual Production</a></li>
                                <li><a href="{!! URL::to('admin/report-import-food') !!}"><i class="fa fa-forward"></i>&nbsp; Import of Food Grains</a></li>
                                <li><a href="{!! URL::to('admin/report-import-member') !!}"><i class="fa fa-bars"></i>&nbsp; Import from SAARC Members</a></li>
                                <li><a href="{!! URL::to('admin/report-export-food') !!}"><i class="fa fa-backward"></i>&nbsp; Export of Food Grains</a></li>
                                <li><a href="{!! URL::to('admin/report-storage-location') !!}"><i class="fa fa-database"></i>&nbsp; Storage Location & Quantity</a></li>
                                <li><a href="{!! URL::to('admin/report-damage') !!}"><i class="fa fa-bar-chart"></i>&nbsp; Food Grain Damage Reports</a></li>
                            </ul>
                        </li>
                        @if(Auth::user()->user_level == 1)
                        <li>
                            <a href="#lists" class="view-reports"><i class="fa fa-th-list fa-2x"></i>&nbsp; Lists</a>
                            <ul>
                                <li><a href="{!! URL::to('admin/add-member') !!}" ><i class="fa fa-list fa-2x"></i>&nbsp; Add Member</a></li>
                                <li><a href="{!! URL::to('admin/member-governing') !!}" class="view-reports"><i class="fa fa-list fa-2x"></i>&nbsp; Governing Board Member List</a></li>
                                <li><a href="{!! URL::to('admin/member-focal') !!}" class="view-reports"><i class="fa fa-list-ul fa-2x"></i>&nbsp; National Focal Point List</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#lists" class="view-reports"><i class="fa fa-th-list fa-2x"></i>&nbsp; Users</a>
                            <ul>
                                <li><a href="{!! URL::to('admin/add-user') !!}" ><i class="fa fa-list fa-2x"></i>&nbsp; Add Users</a></li>
                                <li><a href="{!! URL::to('admin/user-list') !!}" class="view-reports"><i class="fa fa-list fa-2x"></i>&nbsp; Users List</a></li>
                            </ul>
                        </li>
                        @endif

                        <li>
                            <a href="#" class="settings"><i class="fa fa-cogs fa-2x"></i>&nbsp; Settings</a>
                            <ul>
                                <li><a href="{!! URL::to('admin/personal-settings') !!}" ><i class="fa fa-cogs fa-2x"></i>&nbsp; Personal Settings</a></li>
                                <li><a href="{!! URL::to('admin/password-change') !!}" class="view-reports"><i class="fa fa-cogs fa-2x"></i>&nbsp; Password Change</a></li>
                                <li><a href="{!! URL::to('admin/location') !!}" class="view-reports"><i class="fa fa-cogs fa-2x"></i>&nbsp; Location</a></li>
                            </ul>
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
                        <a href="#">
                            {!! HTML::image('assets/images/avatarX.png') !!}
                        </a>
                    </figure>
                    <div class="welcome">
                        <p>Welcome</p>
                        <h5><a href="#">{{ Auth::user()->user_first_name.' '.Auth::user()->user_last_name }}</a></h5>
                    </div>
                </div>
                <!-- User Section End -->
                <!-- Search Section Start -->
                {{--<div class="search-box">
                    <input type="text" placeholder="Search Anything" />
                    <input type="submit" value="go" />
                </div>--}}
                <!-- Search Section End -->
                <!-- Header Top Navigation Start -->
                <nav class="topnav">
                    <ul id="nav1">
                        <li class="notifi">
                            <a href="#"><i class="glyphicon glyphicon-bell"></i>Notifications</a>
                            <div class="popdown">
                                <div class="notificationlist">
                                    <ul>
                                        @foreach($notifications as $notification)
                                        <li>
                                            <h6><a href="#">{{ $notification->subject }}</a></h6>
                                            <p>{{ $notification->body }}</p>
                                            {{--<span><i class="glyphicon glyphicon-time"></i>1hrs ago</span>--}}
                                        </li>
                                        @endforeach
                                    </ul>
                                    {{--<a href="#" class="viewall">View All Notifications</a>--}}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li class="settings">
                            <a href="#"><i class="fa fa-user"></i>&nbsp; Profile</a>
                            <div class="popdown popdown-right settings">
                                <nav>
                                    <a href="{!! URL::to('admin/personal-settings') !!}"><i class="glyphicon glyphicon-pencil"></i>Edit Account</a>
                                    <a href="{!! URL::to('admin/password-change') !!}"><i class="glyphicon glyphicon-question-sign"></i>Password Change</a>
                                    <a href="{!! URL::to('admin/logout') !!}"><i class="glyphicon glyphicon-log-out"></i>Log out</a>
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