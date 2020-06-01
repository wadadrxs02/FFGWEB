<?php include_once 'header.php';
include_once 'Xconnection.php';

?>

<!-- Title -->
<title>FFG - Donation</title>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>

    <!-- Donation Area -->
    <div class="breadcumb-area" style="background-image: url(img/core-img/20.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Donation</h2>
                    </div><!-- Donation Area -->
                </div>
            </div>
        </div>
    </div> <!-- Donation Area -->

    <!-- ****** Contatc Area Start ****** -->
    <div class="contact-area section_padding_80">
        <div class="container">
            <div class="row">
            </div>
            <!-- Contact Form  -->
            <div class="contact-form-area">
                <div class="row pt-5">
                    <div class="col-12 col-md-5 ">
                        <div class="contact-form-sidebar item wow fadeInUpBig" data-wow-delay="0.3s">
                            <img src="img/core-img/quote.png" style="border-radius: 25px;">
                        </div>
                    </div>
                    <div class="col-12 col-md-7 item">
                        <div class="card" style="border-color:#00ad5f">
                            <div class="card-body">
                                <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">
                                    <h2 class="contact-form-title mb-30">Make a donation </h2>
                                    <p>As a non-profit organisation, Food for Gelandangan relies solely on funding and
                                        donations from organisations and generous individuals to continue our services
                                        to provide humanitarian assistance to our beneficiaries. Your contribution could
                                        make a difference in someone’s life. </p>

                                 
                                    <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" name="signin" id="signin" data-target="#loginform">
                                        Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Contact Area End ****** -->


    <?php include_once 'footer.php';
    include_once 'script.php';
    include_once 'Modal-LoginD.php';
    ?>
</body>