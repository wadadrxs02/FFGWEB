<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">


    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet"
        media="all">
    <!-- End Fontfaces CSS-->

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <!-- DataTable CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <!--End DataTable CSS-->


    <!-- Favicon --> 
    <link rel="shortcut icon" type="image/png" href="../img/core-img/ffg4.png">


</head>
<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="images/icon/ffglogo.png" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Donor Record</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="DonorInfo.php">Donor Record</a>
                        </li>
                        <li>
                            <a href="DonateItem.php">Item donation</a>
                        </li>
                        <li>
                            <a href="DonateOnline.php">Online donation</a>
                        </li>
                        <li>
                            <a href="DonateOffline.php">Offline donation</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Homeless</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="Listhomeless.php">Homeless Record</a>
                        </li>
                        <li>
                            <a href="ListhomelessAlert.php">Homeless Alert Record</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="VolunteerList.php">
                        <i class="fas fa-chart-bar"></i>Volunteer</a>
                </li>
                <li>
                    <a href="PostList.php">
                        <i class="fas fa-table"></i>Blog</a>
                </li>
                <li>
                <a href="https://calendar.google.com/calendar/r">
                        <i class="fas fa-chart-bar"></i>Create Event</a>
                </li>

            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logoffg.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a href="index.php">
                        <i class="fas fa-user-cog"></i>Dashboard</a>
                    <!-- Divider -->
                    <hr class="sidebar-divider">
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-heart"></i>Donation</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="DonorInfo.php">Donor Record</a>
                        </li>
                        <li>
                            <a href="DonateItem.php">Item donation</a>
                        </li>
                        <li>
                            <a href="DonateOnline.php">Online donation</a>
                        </li>
                        <li>
                            <a href="DonateOffline.php">Offline donation</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-blind"></i>Homeless</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="Listhomeless.php">Homeless Record</a>
                        </li>
                        <li>
                            <a href="ListhomelessAlert.php">Homeless Alert Record</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="VolunteerList.php">
                        <i class="fas fa-people-carry"></i>Volunteer</a>
                </li>
                <li>
                    <a href="PostList.php">
                        <i class="fas fa-book"></i>Blog</a>
                </li>  

                <li>
                    <a href="https://calendar.google.com/calendar/r">
                        <i class="fas fa-list-alt"></i>Create Event</a>
                </li>
                <!--  <li>
                  <a href="../FFG_ADMIN/uploadIMG/UP/index.html">
                        <i class="fas fa-list-alt"></i>Image Upload</a>
                 </li> -->


            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->