<?php include_once 'header.php';
include_once '../Xconnection.php';
?>
<title>FFG Member | Item Donation</title>
<style>
.btn-group-sm>.btn,
.btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem
}

.bg-primary {
    background-color: #56c596 !important;
}
</style>
<div id="colorlib-main">
    <section class="ftco-section ftco-bread">
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-md-8 ftco-animate">
                    <p class="breadcrumbs">
                        <span><a href="../ffg_donor/Donation.php">Online Donation</a></span>
                        <span class="mr-2"><a href="../ffg_donor/DonationOffline.php">Offline Donation</a></span>
                        <span class="mr-2"><a href="../ffg_donor/DonationItem.php"></a>Item Donation</span>
                    </p>

                    <h1 class="bread">Donation</h1>
                </div>
            </div>
        </div>
    </section>
    <!--update info  style="align:left"-->
    <section class="ftco-section-3">
        <div class="row justify-content-center mb-2 pb-3">
            <div class="col-md-12 text-center ftco-animate">
                <h1 class="mb-1 pb-5">Item Donation </h1>
            </div>

            <div class="container ">
                <!--Donate Item-->
                <div class="row justify-content-center">
                    <div class="card-group col-md-12">
                        <div class="card bg-primary">
                            <div class="card-body text-center">

                                <div class="col-sm-12">
                                    <div class="lead" style="text-align: justify;">
                                        <p class="text-left" style="color:#000000 ; text-align: justify;">
                                            The following is the list of useful items for the children and local
                                            homeless @ urban poor
                                            around Kuala Lumpur </p>

                                        <span style="text-decoration: underline;">Daily use items </span>

                                        <p class="text-left"> - Toothbrush <br />
                                            - Toothpaste <br />
                                            - Bathing soap bar (liquid type) <br />
                                            - Pencil <br />
                                            - Pen <br />
                                            - Cracker <br />
                                            - Socks <br />
                                            - Water Bottle <br />
                                            - Colour pencil <br />
                                            - School bags <br />
                                            - Small notebooks<br />
                                            - Rain coat <br />
                                            - Clothing for children aged 3 - 18. (used/new)<br /> </p>


                                        <div class="card text-white"
                                            style="background-color: #e6fff7 ; padding-right: 1rem ;">
                                            <div class="card-body">
                                                <p style="color:#000000 ;" class="text-xs-center"> <b> For any
                                                        enquiries,
                                                    </b> <br>
                                                    <b>Email :</b> inquiry.ffg@gmail.com <br>
                                                    <b> Whatsapp :</b> +60 177757156 (Tom)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-success">
                            <div class="card-body text-left" style="background-color: #ffffff">
                                <h3 style="margin:0px;"><b style="color:#000000">If you have any Item to contribute,
                                        fill in the form below. We will contact you for collection arrangement.
                                        &nbsp; </b></h3>
                                <br><br>
                                <div class="card">
                                    <div class="card-body">
                                        <form action="Xcontribution.php" method="post"
                                            data-form-title="Members Information">
                                            <input type="hidden"
                                                value="Gcs9DFMwXPrXu0WyZP/onyJHFMuegaFp194nEhGfDj434bF0FgCs6cmkIBD5iQ4c0yn1pQGi5P3LCl3DX7XGR4od69yzUDqvXGJip4cF5zoetnpVFZTNLxqKyoh1ivfU"
                                                data-form-email="true">
                                            <div class="col-md-8">
                                              <b><p>ITEM</p></b>  
                                            </div>
                                            <div class="col-md-4">
                                               <b> <p>QUANTITY</p></b>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" class="form-control" name="item"
                                                    placeholder="ex : Soft toys">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input type="number" class="form-control" name="quantity"
                                                    placeholder="50">
                                            </div>
                                            <div class="col-md-12">
                                              <p><b>Date Delivery :</b> </p> 
                                                <input type="date" name="datesubmit" class="form-control " id="today2">
                                            </div> 
                                            <script>
                                            document.querySelector("#today2").valueAsDate = new Date();
                                            </script>
                                           
                                            <div class="col-md-12 form-group mt-4">
                                              <b>  Deliver By :</b>  &nbsp;
                                                <label class="radio-inline"><input type="radio" name="deliverytype"
                                                        checked value="Courier">Courier</label>
                                                <label class="radio-inline"><input type="radio" name="deliverytype"
                                                        value="In person">In person</label>
                                            </div>

                                            <?php $now = new DateTime();
                                            $now->setTimezone(new DateTimeZone('Asia/Kuala_Lumpur'));   ?>
                                            <input type="hidden" name="datetimeform" value="<?php echo $now->format("Y-m-d H:i:s"); ?>">


                                            <div class="col-md-4 form-group" style=" padding-top: 2rem;">
                                                <div class="form-group">
                                                    <input type="submit" name="submit" value="Submit"
                                                        class="btn btn-primary py-3 px-5">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Donate Item End-->
        </div>
    </section>
    <!--update info-->
</div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->



<?php include_once 'footer.php'; ?>
</body>




</html>