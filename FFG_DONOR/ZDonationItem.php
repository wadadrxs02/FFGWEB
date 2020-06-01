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
            <div class="col-md-7 text-center ftco-animate">
                <h1 class="mb-1 pb-5">Item Donation </h1>
            </div>
            <!--Donate Item-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                        <form action="Xcontribution.php" method="post" data-form-title="Members Information">
                            <input type="hidden"
                                value="Gcs9DFMwXPrXu0WyZP/onyJHFMuegaFp194nEhGfDj434bF0FgCs6cmkIBD5iQ4c0yn1pQGi5P3LCl3DX7XGR4od69yzUDqvXGJip4cF5zoetnpVFZTNLxqKyoh1ivfU"
                                data-form-email="true">
                            <div class="col-md-6">
                                <p>ITEM</p>
                            </div>
                            <div class="col-md-2">
                                <p class="text-right"><a href="" data-target="#donateinfo" data-toggle="modal"><i
                                            class="far fa-question-circle fa-lg text-right" title="info"
                                            data-placement="top" data-toggle="tooltip-test"
                                            style="color:#00e677"></i></a>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p>QUANTITY</p>
                            </div>

                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="item1" placeholder="ex : Soft toys">
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="number" class="form-control" name="quantity1" placeholder="50">
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="item2" placeholder="ex : Lighter">
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="number" class="form-control" name="quantity2" placeholder="50">
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="item3" placeholder="ex : Toothpase">
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="number" class="form-control" name="quantity3" placeholder="50">
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="item4" placeholder="ex : Towel">
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="number" class="form-control" name="quantity4" placeholder="50">
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="item5" placeholder="ex : Soap">
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="number" class="form-control" name="quantity5" placeholder="50">
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="item6" placeholder="ex : Dry Food">
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="number" class="form-control" name="quantity6" placeholder="50">
                            </div>

                            <div class="col-md-8 form-group">
                                Deliver By : &nbsp;&nbsp;
                                <label class="radio-inline"><input type="radio" name="deliverytype" checked
                                        value="Courier">Courier</label>
                                <label class="radio-inline"><input type="radio" name="deliverytype" value="By Hand">By
                                    Hand</label>
                            </div>
                            <div class="col-md-8">
                                Date Delivery :
                                <input type="date" name="datesubmit" class="form-control " id="today2">
                            </div>

                            <script>
                            document.querySelector("#today2").valueAsDate = new Date();
                            </script>

                            <?php $now = new DateTime();
                            $now->setTimezone(new DateTimeZone('Asia/Kuala_Lumpur'));   ?>
                            <input type="hidden" name="don_date" value="<?php echo $now->format('Y-m-d H:i:s'); ?>">
                            <div class="col-md-4 form-group" style=" padding-top: 2rem;">
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </form>
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


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="donateinfo" tabindex="-1" role="dialog" aria-labelledby="donateinfo"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="donateinfo">Interested to contribute item to
                    homeless?</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card text-white" style="background-color: #56c596; padding-right: 1rem">
                        <div class="card-body">
                            <div class="col-sm-12">
                                <div class="lead">
                                    <p class="text-left">
                                        The following is the list of useful items for the children and local
                                        homeless @ urban poor
                                        around Kuala Lumpur </p>

                                    <span style="text-decoration: underline;">Daily use items </span>

                                    <p> - Toothbrush <br />
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

                                    <b style="color:#000000" class="text-left">If you have any Item to contribute, fill
                                        in the form below. We will contact you for collection arrangement.
                                        &nbsp;
                                        <br> <br>
                                    </b>
                                    <div class="card text-white"
                                        style="background-color: #e6fff7 ; padding-right: 1rem ;">
                                        <div class="card-body">
                                            <p style="color:#000000 ;" class="text-xs-center"> <b> For any enquiries,
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
                </div>
            </div>
        </div>

    </div>
    </body>

    </html>