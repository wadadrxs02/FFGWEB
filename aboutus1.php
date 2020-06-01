<?php include_once'header.php';
  include_once'Xconnection.php';

?>

<!-- Title -->
<title>FFG - About Us</title>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>


    <div class="breadcumb-area" style="background-image: url(img/core-img/20.jpg); height: 450px;">
        <div class="container h-100">
            <div class="row h-75 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h1 style="color:white; padding-top:80px; font-size: 4rem">HISTORY</h1>
                        <h4 style="color:white; padding-top:40px">We have worked since 2014 to serve the most vulnerable
                            people on earth
                            through purposeful relief and development. Our methodology is informed by our Islamic
                            beliefs that every person has intrinsic value and that it is our responsibility to advocate
                            for the poor and the marginalized.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ****** Contatc Area Start ****** -->
    <div class="contact-area section_padding_80">
        <div class="container">
            <div class="row">
            </div>
            <!-- Contact Info Area Start -->
            <div class="contact-info-area">
                <div class="row">
                    <!-- Single Contact Info -->
                    <div class="col-12 ">
                        <div class="single-contact-info mb-30 text-center wow fadeInUp section_padding_0_80"
                            style=" padding-below:100px;" data-wow-delay="0.3s">
                            <h4>FFG</h4>
                            <p>Formed after Kuantan Flood in mid 2014. ‘Gelandangan’ a Malaysian synonym of homeless
                                To denote the intent of giving . The noble idea of FFG to share food/love with the
                                homeless ,
                                FFG humble idea was to walk and share food, hence the ‘mangkuk sia’/tiffin was used as
                                crest
                                Evolution of feeding in FFG . Conventional from the kitchen - to dry foods. We stopped
                                feeding
                                rice and replaced with dry foods</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Contact Form  -->
            <div class="contact-form-area">
                <div class="row pt-5">
                    <div class="col-12 col-md-5 pt-5">
                        <div class="contact-form-sidebar item wow fadeInUpBig" data-wow-delay="0.3s">
                            <img src="img/core-img/ffg.png" style="width:55%">
                        </div>
                    </div>
                    <div class="col-12 col-md-7 item">
                        <div class="card" style="border-color:#00ad5f">
                            <div class="card-body">
                                <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">
                                    <h2 class="contact-form-title mb-30">If You Have Any Question Contact Us Today !
                                    </h2>
                                    <!-- Contact Form -->
                                    <form action="formtomail.php" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact-name"
                                               name="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="contact-email"
                                              name="email"  placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact-website"
                                                placeholder="Website">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" cols="30"
                                                rows="10" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary ">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Contact Area End ****** -->

    <section class="contacts4 cid-rCVbpQ5Kz8" id="contacts4-e">
        <div class="main_wrapper">
            <div class="b_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-5 p-0">
                            <div class="block p-5">
                                <div class="block_wrapper">
                                    <h4 class="align-left mbr-fonts-style pb-4 m-0 display-5">Contacts</h4>
                                    <p class="mbr-text align-left mbr-fonts-style pb-4 m-0 display-7">+60
                                        126927547&nbsp;<br>inquiry.foodforgelandangan@mail.com</p>
                                    <p class="mbr-text align-left mbr-fonts-style m-0 display-7">55 &amp; 57, Jalan Tun
                                        Tan Siew Sin, Malaysia, 50050 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Map-->
            <div class="google-map"><iframe frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEIpgj38KyLFELm2bK9Y7krBkz1K-cMq8&amp;q=place_id:Ems1NSwgNTcsIEphbGFuIFR1biBUYW4gU2lldyBTaW4sIENpdHkgQ2VudHJlLCA1MDA1MCBLdWFsYSBMdW1wdXIsIFdpbGF5YWggUGVyc2VrdXR1YW4gS3VhbGEgTHVtcHVyLCBNYWxheXNpYSIiGiAKGhIYChQKEgl_DhSC0UnMMRGEoaNvcxYxvBA5EgI1NQ"
                    allowfullscreen=""></iframe></div>
        </div>
    </section>

    <?php include_once'footer.php';
?>

    <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

<style>
.cid-rCVbpQ5Kz8 .main_wrapper {
    position: relative;
    height: 40rem;
    width: 100%;
    background-color: #c0c0c0;
}

.cid-rCVbpQ5Kz8 .main_wrapper .b_wrapper {
    height: 100%;
    display: flex;
    align-items: center;
    position: relative;
    z-index: 2;
    pointer-events: none;
}

.cid-rCVbpQ5Kz8 .main_wrapper .b_wrapper .block {
    height: 300px;
    background-color: #ffffff;
    pointer-events: fill;
}

.cid-rCVbpQ5Kz8 .main_wrapper .b_wrapper .block .block_wrapper {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
}

.cid-rCVbpQ5Kz8 .google-map {
    height: 100%;
    width: 100%;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 1;
}

.cid-rCVbpQ5Kz8 .google-map iframe {
    height: 100%;
    width: 100%;
}

.cid-rCVbpQ5Kz8 .google-map [data-state-details] {
    color: #6b6763;
    font-family: Montserrat;
    height: 1.5em;
    margin-top: -0.75em;
    padding-left: 1.25rem;
    padding-right: 1.25rem;
    position: absolute;
    text-align: center;
    top: 50%;
    width: 100%;
}

.cid-rCVbpQ5Kz8 .google-map[data-state] {
    background: #e9e5dc;
}

.cid-rCVbpQ5Kz8 .google-map[data-state="loading"] [data-state-details] {
    display: none;
}

@media (max-width: 767px) {
    .cid-rCVbpQ5Kz8 .main_wrapper .b_wrapper {
        display: block;
        height: unset;
    }

    .cid-rCVbpQ5Kz8 .google-map {
        position: relative;
    }

    .cid-rCVbpQ5Kz8 .container {
        max-width: 100%;
        padding: 0;
    }
}
</style>