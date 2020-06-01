<?php include_once'header.php';
  include_once'Xconnection.php';

?>

<!-- Title -->
<title>FFG - Signin</title>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>


    <!-- ****** Breadcumb Area Start ****** -->
    <div class="breadcumb-area" style="background-image: url(img/bg-img/donate.jpg); height:500px">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Sign In as Member</h2>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-6 item">
                                    <div class="card" style="background-color:#ffffff">
                                        <div class="card-body">
                                            <div class="contact-form wow fadeInUpBig pt-3 pb-1" data-wow-delay="0.3s">
                                                <!-- Contact Form -->
                                                <form action="XsigninDonor.php" method="post">
                                                    <div class="form-group col-md-12">
                                                        <input type="email" class="form-control" id="login-email"
                                                        name="email" placeholder="Email">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="password" class="form-control" id="login-password"
                                                           name="password" placeholder="Password">
                                                    </div>
                                                    <div class="col-md-12" style="">
                                                        <button type="submit" class="btn contact-btn"
                                                            style="margin-top: 10px;">sign In</button>
                                                        <p style="color:grey; font-size: 12px; font-weight:200;">New
                                                            member?
                                                            <a style="color:#56c596; font-size: 12px;" href="#"
                                                                data-toggle="modal" name="add" id="add"
                                                                data-target="#registerform">
                                                                <i class="zmdi zmdi-plus "></i> &nbsp Register here</a>
                                                        </p>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Copywrite Text -->
                <div class="copy_right_text text-center">
                    <p>Copyright @2020 All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> <a
                            href="ffg.com" target="_blank">FFG</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'footer.php';
    include_once 'script.php';
    ?>
</body>
<style>
.cid-rCVhxM2GTL {
    padding-top: 90px;
    padding-bottom: 120px;
    background-image: url("../../../assets/images/20.jpg");
}

.cid-rCVhxM2GTL .nav-tabs .nav-item.open .nav-link:focus,
.cid-rCVhxM2GTL .nav-tabs .nav-link.active:focus {
    outline: none;
}

.cid-rCVhxM2GTL .nav-tabs {
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    border-bottom: none;
}

.cid-rCVhxM2GTL .nav-tabs .nav-item {
    padding: .5rem;
}

.cid-rCVhxM2GTL .nav-tabs .nav-link {
    color: #ffffff;
    font-style: normal;
    font-weight: 500;
    border: 1px solid #ffffff;
    transition: all .5s;
}

.cid-rCVhxM2GTL .nav-tabs .nav-link:hover {
    cursor: pointer;
    background-color: #56c596;
}

.cid-rCVhxM2GTL .nav-tabs .nav-link.active {
    font-weight: 500;
    color: #000000;
    font-style: normal;
    background-color: #56c596;
    border-color: #56c596;
}

.cid-rCVhxM2GTL .nav-tabs .nav-link.active:hover {
    background-color: #56c596;
}

.cid-rCVhxM2GTL p {
    color: #ffffff;
}

.cid-rCVhxM2GTL .mbr-text {
    text-align: center;
}

.cid-rCVhxM2GTL P {
    text-align: right;
}
</style>

<!-- javascript For update data through modal-->
<?php include_once'RegisterD.php';?>
<!-- End javascript For update data through modal-->