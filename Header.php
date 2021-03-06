<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/compiled.min.css" rel="stylesheet">
    <link href="css/Admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body class="fixed-sn black-skin">
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper waves-light">
                        <a href="Admin.php" style="Justify-self:center;">
                            <img src="img/admin.png" class="img-fluid flex-center" style="height:100%;padding:0;margin:0;margin-left:33%;">
                        </a>
                    </div>
                </li>
                <!--/. Logo -->

                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="fa fa-chevron-right"></i> Accounts list
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="Lists.php?type=Admin" class="waves-effect">Admins</a>
                                    </li>
                                    <li>
                                        <a href="Lists.php?type=Teacher" class="waves-effect">Teachers</a>
                                    </li>
                                    <li>
                                        <a href="Lists.php?type=Student" class="waves-effect">Students</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="fa fa-chevron-right"></i> Add an account
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="wheretogo.php?type=Admin" class="waves-effect">Admin</a>
                                    </li>
                                    <li>
                                        <a href="wheretogo.php?type=Teacher" class="waves-effect">Teacher</a>
                                    </li>
                                    <li>
                                        <a href="wheretogo.php?type=Student" class="waves-effect">Student</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="fa fa-chevron-right"></i> Delete an account
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="Delete.php?type=Admin" class="waves-effect">Admin</a>
                                    </li>
                                    <li>
                                        <a href="Delete.php?type=Teacher" class="waves-effect">Teacher</a>
                                    </li>
                                    <li>
                                        <a href="Delete.php?type=Student" class="waves-effect">Student</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="fa fa-chevron-right"></i> Modify an account
                                <i class="fa fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#" class="waves-effect">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Teacher</a>
                                    </li>
                                    <li>
                                        <a href="#" class="waves-effect">Student</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>
                    <?php echo $_SESSION["User"];?>
                </p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <form id="logout" action="logout.php" method="post">
                        <a class="nav-link" onclick="submitlogout()">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="clearfix d-none d-sm-inline-block">Log out</span>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->

    </header>
    <!--/.Double navigation-->
