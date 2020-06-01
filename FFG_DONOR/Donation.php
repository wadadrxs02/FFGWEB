<?php include_once 'header.php';
//include_once 'Xconnection.php';
?>
<title>FFG Member | Online Donation</title>
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
    <section class="ftco-section ftco-bread justify-content-center align-items-center">
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-md-8 ftco-animate">
                    <p class="breadcrumbs">
                        <span><a href="../ffg_donor/Donatation.php"></a>Online Donation</span>
                        <span class="mr-2"><a href="../ffg_donor/DonationOffline.php">Offline Donation</a></span>
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
                    <h1 class="mb-1 pb-5">Online Donation</h1>
                </div>
                <!--Donate Online--> 
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                            <div data-form-alert="true">
                                <div hidden="" data-form-alert-success="true">Thanks for filling out form!</div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <div class="card-body" style="padding: 1rem;">
                                    <!---Formbuilder Form action="SummaryDonation.php"--->
                                    <form action="checkout.php" onsubmit="return checkForm()" method="get">
                  
                                        <div class="dragArea row">
                                            <div class="col-md-6">
                                                <label for="name-form1-h"
                                                    class="form-control-label mbr-fonts-style display-7">Amount to
                                                    donate :</label>
                                            </div>
                                            <div class="col-md-11  form-group">
                                                <button type="button" class="btn btn-primary btn-lg" style="padding: 0.6rem 1.5rem;
                                                border-radius: 3px;" id="amount1" onClick="autofill1()" value="10">RM 10</button>
                                                <button type="button" class="btn btn-primary btn-lg" style="padding: 0.6rem 1.5rem;
                                                border-radius: 3px;" id="amount2" onClick="autofill2()" value="20">RM 20</button>
                                                <button type="button" class="btn btn-primary btn-lg" style="padding: 0.6rem 1.5rem;
                                                border-radius: 3px;" id="amount3" onClick="autofill3()" value="50">RM 50</button>
                                                <button type="button" class="btn btn-primary btn-lg" style="padding: 0.6rem 1.5rem;
                                                border-radius: 3px;" id="amount4" onClick="autofill4()" value="100">RM 100</button>
                                                <button type="button" class="btn btn-primary btn-lg" style="padding: 0.6rem 1.5rem;
                                                border-radius: 3px;" id="amount5" onClick="autofill5()" value="150">RM 150</button>
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
                                            </div> <br><br><br />
                                            <div class="col-md-11 ">
                                                <label for="bank-form1-h"
                                                    class="form-control-label mbr-fonts-style display-7">Online
                                                    Banking:</label>

                                                <select name="bank" class="form-control">
                                                    <option Selected value="Maybank2U">Maybank2U</option>
                                                    <option value="CIMB Clicks">CIMB Clicks</option>
                                                    <option value="Public Bank">Public Bank</option>
                                                    <option value="RHB Now">RHB Now</option>
                                                    <option value="MyBSN">MyBSN</option>
                                                    <option value="Bank Rakyat">Bank Rakyat</option>
                                                    <option value="Bank Islam">Bank Islam </option>
                                                    <option value="HSBC Bank">HSBC Bank</option>
                                                </select>
                                            </div>
                                        </div><br>
                                        <div class="col-md-11 form-group text-right">
                                                <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
                                        </div>
                                        <?php
                                        /*if (isset($_POST['submit'])) {
                                            $amount = $_POST["amount"];
                                        } data-toggle="modal" data-target="#checkoutform"*/
                                        ?>
                                    </form>
                                    <!---Formbuilder Form--->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--update info-->
</div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->


<?php include_once 'footer.php';
//include_once 'Modal-DonateCheckout.php'; 
?>
<script>
function checkForm() {
    if (document.getElementById('amounts').value.length == 0) {
        swal({
            title: "Please fill in the donation amount",
            icon: "warning",
        });
        return false;
    }
    return true;
}
</script>


<script>
function openModal() {
    $('#checkoutform').modal('show');
    return false;
}
</script>

</body>

</html>