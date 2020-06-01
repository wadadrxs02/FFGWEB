<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/ffg4.png">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
  
    
</head>

<style>

    
</style>
<!-- ****** Top Header Area Start ****** -->
<div class="top_header_area">
    <div class="container">
        <div class="row">
            <div class="col-5 col-sm-6">
                <!--  Top Social bar start -->
                <div class="top_social_bar">
                <a>  Follow us on</a>
                    <a href="https://www.youtube.com/channel/UCqxwBTzTAx4WmIpOQWTG7PA">
                    <i class="fa fa-youtube fa-2x" aria-hidden="true" title="youtube" data-placement="top" data-toggle="tooltip"></i></a>
                    <a href="https://instagram.com/foodforgelandangan"><i class="fa fa-instagram fa-2x"
                            aria-hidden="true" title="instagram" data-placement="top" data-toggle="tooltip"></i></a>

                </div>
            </div>
            <!--  Login Register Area -->
            <div class="col-7 col-sm-6">
                <div class="signup-search-area d-flex align-items-center justify-content-end">
                    <div class="login_register_area d-flex">
                        <div class="login">
                        <a  href="#" data-toggle="modal" name="signin" id="signin"
                                data-target="#loginform">
                               <i class="zmdi zmdi-plus "></i> Sign in</a>
                        </div>
                        <div class="register">
                        <a  href="#" data-toggle="modal" name="add" id="add"
                                data-target="#registerform">
                               <i class="zmdi zmdi-plus "></i> Sign up</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ****** Top Header Area End ****** -->

<!-- ****** Header Area Start ****** -->
<header class="header_area">
    <div class="container">
        <div class="row">
            <!-- Logo Area Start -->
            <div class="col-12">
                <div class="logo_area text-center">
                    <a href="index.php" class="yummy-logo">
                        <img src="img/core-img/ffg.png" alt="" style="width:60px; height:100px;"> Food for
                        Gelandangan</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav"
                        aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                    <!-- Menu Area Start -->
                    <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                        <ul class="navbar-nav" id="yummy-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <!-- Menu Area Start
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="yummyDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ways to help</a>
                                <div class="dropdown-menu" aria-labelledby="yummyDropdown">
                                    <a class="dropdown-item" href="Donation.php">Donation</a>
                                    <a class="dropdown-item" href="volunteer.php">Volunteer</a>
                                </div>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="story.php">Story</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Event.php">Event</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Donation.php">Donation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="volunteer.php">Volunteer</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ****** Header Area End ****** -->
<!-- javascript For update data through modal-->
<?php include_once'Modal-LoginD.php';
include_once'Modal-RegisterD.php';?>
<!-- End javascript For update data through modal-->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_SESSION['status1']) && $_SESSION['status1'] != '') {
?>
    <script type='text/javascript'>
        swal({
            title: "<?php echo $_SESSION['status1']; ?>",
            text: "<?php echo $_SESSION['status_text1']; ?>",
            icon: "<?php echo $_SESSION['status_code1']; ?>",
        });
    </script>
<?php
    unset($_SESSION['status1']);
}
?>