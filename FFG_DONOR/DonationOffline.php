<?php include_once'header.php';
//include_once'../Xconnection.php';
?>
<title>FFG Member | Offline Donation</title>
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
                        <span class="mr-2"><a href="../ffg_donor/DonationOffline.php"></a>Offline Donation</span>
                        <span class="mr-2"><a href="../ffg_donor/DonationItem.php">Item Donation</a></span>
                    </p>

                    <h1 class="bread">Donation</h1>
                </div>
            </div>
        </div>
    </section>
    <!--update info-->
    <section class="ftco-section-3">
        <div class="row justify-content-center mb-2 pb-3">
            <div class="col-md-7 text-center ftco-animate">
                <h1 class="mb-1 pb-5">Admin | Offline Donation</h1>
            </div>
            <!--Donate Offline-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                        <div data-form-alert="true">
                            <div hidden="" data-form-alert-success="true">Thanks for filling out form!</div>
                        </div>
                        <div class="card" style="width: 100%;">
                            <div class="card-body" style="padding: 1rem;">
                                <!---Formbuilder Form--->
                                <form action="Xofflinedonation.php" method="POST" enctype="multipart/form-data" onsubmit="return checkForm()" >
                                    <div class="dragArea row">
                                        <div class="col-md-6">
                                            <label for="name-form1-h"
                                                class="form-control-label mbr-fonts-style display-7">
                                                <!--style="padding-left:80rem"-->
                                                Amount donate :
                                                <a href="" data-target="#donateinfo" data-toggle="modal"><i
                                                        class="far fa-question-circle fa-lg text-right" title="info"
                                                        data-placement="top" data-toggle="tooltip-test"
                                                        style="color:#00e677"></i></a>
                                            </label>
                                        </div>
                                        <div class="col-md-11  form-group">
                                            <button type="button" class="btn btn-primary btn-lg" style="padding: 0.6rem 1.5rem;
                                                border-radius: 3px;" id="amount1" onClick="autofill1()" value="10">RM
                                                10</button>
                                            <button type="button" class="btn btn-primary btn-lg" style="padding: 0.6rem 1.5rem;
                                                border-radius: 3px;" id="amount2" onClick="autofill2()" value="20">RM
                                                20</button>
                                            <button type="button" class="btn btn-primary btn-lg" style="padding: 0.6rem 1.5rem;
                                                border-radius: 3px;" id="amount3" onClick="autofill3()" value="50">RM
                                                50</button>
                                            <button type="button" class="btn btn-primary btn-lg" style="padding: 0.6rem 1.5rem;
                                                border-radius: 3px;" id="amount4" onClick="autofill4()" value="100">RM
                                                100</button>
                                            <button type="button" class="btn btn-primary btn-lg" style="padding: 0.6rem 1.5rem;
                                                border-radius: 3px;" id="amount5" onClick="autofill5()" value="150">RM
                                                150</button>
                                            <button type="button" class="btn btn-dark btn-lg" style="padding: 0.6rem 1.5rem;
                                                border-radius: 3px;" id="amount1" onClick="enableTB()">Others</button>
                                        </div>
                                        <div class="col-md-11  form-group">
                                            <label for="name-form1-h"
                                                class="form-control-label mbr-fonts-style display-7"></label>
                                            <div class="input-group mb-2">
                                                <span class="input-group-addon" style="font-weight: 600;"> RM
                                                </span>
                                                <input type="number" id="amounts" name="amount" class="form-control"
                                                    readonly required>
                                            </div>
                                            <script>
                                            function enableTB() {
                                                document.getElementById("amounts").readOnly = false;
                                            }

                                            function autofill1() {
                                                document.getElementById("amounts").value =
                                                    document.getElementById("amount1").value;
                                            }

                                            function autofill2() {
                                                document.getElementById("amounts").value =
                                                    document.getElementById("amount2").value;
                                            }

                                            function autofill3() {
                                                document.getElementById("amounts").value =
                                                    document.getElementById("amount3").value;
                                            }

                                            function autofill4() {
                                                document.getElementById("amounts").value =
                                                    document.getElementById("amount4").value;
                                            }

                                            function autofill5() {
                                                document.getElementById("amounts").value =
                                                    document.getElementById("amount5").value;
                                            }
                                            </script>
                                        </div> <br><br><br>

                                        <div class="col-md-7  form-group">
                                            <label  class="form-control-label display-7">
                                                Upload your transaction slip here: 
                                            </label>
                                            <input type="hidden" name="size" value="1000000">
                                            <input type="file" name="image" id="image">
                                        </div>

                                        <?php $now = new DateTime();
                                             $now->setTimezone(new DateTimeZone('Asia/Kuala_Lumpur'));   ?>
                                        <input type="hidden" name="don_date" value="<?php echo $now->format('Y-m-d H:i:s'); ?>">
                                            <?php  $bytes = random_bytes(4); ?>
                                        <input type="hidden" name="bill_id" value="<?php echo bin2hex($bytes); ?>">

                                        <div class="col-md-4 form-group text-right">
                                            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary py-3 px-5">
                                        </div>
                                    </div>
                                </form>
                                <!---Formbuilder Form--->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Offline end-->
            </div>
        </div>
    </section>
    <!--update info-->
</div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->



<?php include_once'footer.php'; ?>


<script>
function checkForm() {
    if (document.getElementById('amounts').value.length == 0) {
        swal({
            title: "Please fill in the donation amount",
            icon: "warning",
        });
        return false;
    } if (document.getElementById('image').value.length == 0) {
        swal({
            title: "Please select a valid receipt image",
            icon: "warning",
        });
        return false;
    }
    return true;
}
</script>

<!-- Modal -->
<div class="modal fade" id="donateinfo" tabindex="-1" role="dialog" aria-labelledby="donateinfo" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="donateinfo">Way to donate offline (ATM)</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    1. Cash need to be channel through FFG account bank:
                    <div class="row">
                        <div class="col-sm-8"><br>
                            <div class="card text-white" style="background-color: #1e2124; padding-right: 1rem">
                                <div class="card-body">
                                    <label>
                                        Bank Name: <b>Maybank</b></label> <br>
                                    <label for="name-form1-h" class="form-control-label mbr-fonts-style display-7">
                                        Account Name : <b>Food for Gelandangan</b> </label>
                                    <br>
                                    <label for="name-form1-h" class="form-control-label mbr-fonts-style display-7">
                                        Account Number : <b>705463494</b></label> <br>
                                </div>
                            </div>
                        </div>
                    </div> <br>

                    2. Fill in your details.
                    <br>3. Upload your Payment receipt
                    <br><br />

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>

</html>
