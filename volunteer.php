<?php include_once 'header.php';
include_once 'Xconnection.php';

?>

<!-- Title -->
<title>FFG | Volunteer</title>

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
                        <h2>Volunteer</h2>
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
                            <img src="img/core-img/20.jpg" style="border-radius: 25px;"><br>
                       </div>
                       <br>
                        <div class="contact-form-sidebar item wow fadeInUpBig" data-wow-delay="0.3s">
                          
                            <img src="img/core-img/ffg20.jpg" style="border-radius: 25px;">
                        </div>
                    </div>
                    <div class="col-12 col-md-7 item"><br>
                        <div class="card" style="border-color:#00ad5f">
                            <div class="card-body">
                                <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">
                                    <h2 class="contact-form-title mb-30">Individual Volunteer </h2>
                                    <p>Volunteers are the backbone of FFG team. We are proud to work with individuals that go beyond the call of duty to contribute their time and expertise to support our humanitarian work. We constantly seek volunteers with passion, drive and professionalism to support our work.</p>
                                    <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" name="regvol" id="regvol" data-target="#regvolform">
                                       I want to volunteer</a>
                                </div>
                            </div>
                        </div> <br><br>
                        <div class="card" style="border-color:#00ad5f">
                            <div class="card-body">
                                <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">
                                    <h2 class="contact-form-title mb-30">Group Volunteer </h2>
                                    <p>Volunteers are the backbone of FFG team. We welcome any organization, company, group class, or your circle of friends that go beyond the call of duty to contribute their time and expertise to support our humanitarian work. We constantly seek volunteers with passion, drive and professionalism to support our work.</p>                               
                                    <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" name="Grpregvol" id="Grpregvol" data-target="#Grpregvolform">
                                       We want to collaborate</a>
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
    include_once 'Modal-RegisterV.php';
    include_once 'Modal-RegisterGV.php';
    ?>
</body>