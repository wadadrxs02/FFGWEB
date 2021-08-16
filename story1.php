<?php include_once'header.php';
  include_once'Xconnection.php';
?>

<!-- Title -->
<title>FFG - Home</title>



<head>


    <link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />

    <script src='fullcalendar/packages/core/main.js'></script>
    <script src='fullcalendar/packages/daygrid/main.js'></script>
    <script src='fullcalendar/packages/google-calendar/main.js'></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['dayGrid', 'googleCalendar'],
            header: {
                left: 'title',
                center: '',
                right: 'prev,next'
            },
            googleCalendarApiKey: 'AIzaSyD-eos3wE0wJ3UK1OI7raNLzJCh0EgUAW0',
            events: {
                googleCalendarId: 'inquiry.ffg@gmail.com'
            }
        });

        calendar.render();
    });

    calendar.setOption('contentHeight', 200);
    </script>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>

    <!-- ****** Breadcumb Area Start ****** -->
    <div class="breadcumb-area" style="background-image: url(img/bg-img/love.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Story </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->


    <!-- ****** Single Blog Area Start ****** -->
    <section class="single_blog_area section_padding_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row no-gutters">

                        <!-- Single Post -->
                        <div class="col-10 col-sm-11">
                            <div class="single-post">
                                <!-- Post Thumb. $pid=intval($_GET['nid']);
                                $query=mysqli_query($connection,"select blog.title as title,blog.description as description,blog.date_blog as postingdate,blog.image as image,from blog where blog.id_blog='$pid'");
while ($row=mysqli_fetch_array($query)) {
?> -->
                <?php
                 $blg = $connection->query("SELECT * FROM blog WHERE id_blog='".$_GET['id_blog']."'");
                 while($row2 = $blg->fetch_array()){
                         ?>
                                
                                <div class="post-thumb1">
                                    <img src="img/imgPost/<?php echo $row2['image'];?>" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a href="#">By Admin FFG</a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a href="#"><?php echo $row2['date_blog'];?></a>
                                            </div>
                                        </div>

                                    </div>
                                    <a href="#">
                                        <h2 class="post-headline"><?php echo $row2['title'];?></h2>
                                    </a>
                                    <p class="text-justify"><?php echo $row2['description'];?></p>


                                </div>
                            </div>
                            <?php } ?>

                            <!-- Related Post Area -->
                            <div class="related-post-area section_padding_50">
                                <h4 class="mb-30">Related post</h4>

                                <div class="related-post-slider owl-carousel">
                                    <?php  $sql = "SELECT * FROM blog";
                                        $result = $connection->query($sql);     
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {                                    
                                        ?>
                                    <!-- Single Related Post-->
                                    <div class="single-post">
                                        <!-- Post Thumb -->
                                        <div class="post-thumb">
                                            <img src="img/imgPost/<?php echo $row['image'];?>" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <div class="post-meta d-flex">
                                                <div class="post-author-date-area d-flex">
                                                    <!-- Post Author -->
                                                    <div class="post-author">
                                                        <a href="#">By Admin FFG</a>
                                                    </div>
                                                    <!-- Post Date -->
                                                    <div class="post-date">
                                                        <a href="#"><?php echo $row['date_blog']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="story1.php?id_blog=<?php echo $row['id_blog']; ?>">
                                         
                                                <h6><?php echo $row['title']; ?></h6>
                                            </a>
                                        </div>
                                    </div>
                                    <?php  
                                        }
                                    } $connection->close();?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">


                        <!-- Single Widget Area -->
                        <div class="single-widget-area subscribe_widget text-center">
                            <div class="widget-title">
                                <h6>Subscribe &amp; Follow</h6>
                            </div>
                            <div class="subscribe-link">
                                <a href="https://web.facebook.com/foodforgelandangan/"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a>
                                <a href="inquiry.ffg@gmail.com"><i class="fa fa-google" aria-hidden="true"></i></a>
                                <a href="https://instagram.com/foodforgelandangan"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a>
                                <a href="https://www.youtube.com/channel/UCqxwBTzTAx4WmIpOQWTG7PA"><i
                                        class="fa fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Single Widget Area Calendar -->
                        <div class="single-widget-area newsletter-widget">
                            <div class="widget-title text-center">
                                <h6>FFG Event Calendar</h6>
                            </div>
                            <p></p>
                            <div class="newsletter-form">
                                <div id='calendar'></div>
                                <a href="Event.php">See full calendar</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Single Blog Area End ****** -->


    <!-- ****** Footer Menu Area Start ****** -->
    <?php include_once'footer.php';?>
    <!-- ****** Footer Menu Area End ****** -->

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