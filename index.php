<?php include_once 'header.php';
include_once 'Xconnection.php';

?>

<!-- Title -->
<title>Welcome To Food for Gelandangan</title>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>

    <!-- ****** Breadcumb Area Start ****** 
    <div class="breadcumb-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>-->
    <div class="breadcumb-area" style="background-image: url(img/core-img/6.jpg); height: 500px;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>“Its not how much you give,<br /> But the love we put in giving”
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ****** Breadcumb Area End ****** -->
    <div class="contact-area section_padding_80">
        <h2 class="heading_text" style="text-align:center;">Statistic</h2>
        <h3 class="heading_text" style="text-align:center;">In FFG records</h3>

        <div class="container pt-4 mt-2">
            <div class="row">

                <div class="card p-3 align-center col-12 col-md-6 col-lg-4 " style="border: none; text-align:center;">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <img src="img/icon-img/donation.png" alt="" style="width:60px; height:60px;">
                        </div>

                        <div class="card-text">
                            <h3 class="count pt-3 pb-3">
                                <?php $volunteer = $connection->query("SELECT COUNT(id_volunteer) AS totalvolunteer FROM Volunteer");
                                while ($fetch = $volunteer->fetch_array()) { ?>
                                    <?php echo $fetch['totalvolunteer']; ?>
                                <?php  } ?>
                                </h5>
                                <h4>
                                    Registered Volunteer</h4>
                                <p>
                                    To this day, this registered volunteers shared their same passion to
                                    help the homeless in Malaysia</p>
                        </div>
                    </div>
                </div>


                <div class="card p-3 align-center col-12 col-md-6 col-lg-4 " style="border: none; text-align:center;">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <img src="img/icon-img/homeless.png" alt="" style="width:60px; height:60px;">
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3">
                                <?php $homeless = $connection->query("SELECT COUNT(id_homeless) AS totalhomeless FROM homeless");
                                while ($fetch = $homeless->fetch_array()) { ?>
                                    <?php echo $fetch['totalhomeless']; ?>
                                <?php } ?>

                            </h3>
                            <h4>Registered Homeless</h4>
                            <p>The number of homeless @ urban poor in area that we cover</p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 align-center col-12 col-md-6 col-lg-4 " style="border: none; text-align:center;">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <img src="img/icon-img/to-do.png" alt="" style="width:60px; height:60px;">
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3">
                                20
                            </h3>
                            <h4>
                                People that we help</h4>
                            <p>The number of homeless
                                that we cover
                                out of poverty</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->

    <div class="contact-area section_padding_80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MYXkoWWoljs?&autoplay=1" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->

    <!-- ****** Instagram Area Start ****** -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-9050703d-f819-40dd-9abb-f29b14d32c16"></div>
  
 
    <!-- ****** Our Creative Portfolio Area End ****** -->

    <?php include_once 'footer.php'; ?>
    <?php include_once 'script.php'; ?>


    
</body>