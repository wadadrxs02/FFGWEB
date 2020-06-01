<?php include_once 'header.php';
include_once '../Xconnection.php';

?>
<title>FFG Member - Home</title>

<style>
    .form-control-sm {
        height: 37px !important;
    }
</style>
<div id="colorlib-main">
    <div class="hero-wrap js-fullheight" style="background-image: url(images/v4.png);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="js-fullheight d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row justify-content-center mb-2 pb-3">
                    <div class="col-md-7 heading-section heading-section-2 text-center ftco-animate">
                        <h1 class="mb-4 pb-2">Profile</h1>
                    </div>

                    <!--update info-->

                    <div class="container">
                        <div class="row">
                            <!--   <div class="col-md-9 col-sm-offset-1">
                                <div class="row">
                                    <div class="col-sm-12">
                        <div class="card" style="background-color: #1e2124; width: 800px">
                            <div class="card-body">-->
                            <?php
                            $display = $connection->query("SELECT * FROM donor WHERE id_donor='" . $_SESSION['id_donor'] . "'");
                            $row = $display->fetch_array();
                            ?>
                            <div class="col-sm-8 col-sm-offset-2">
                                <div data-form-alert="true">
                                    <div hidden="" data-form-alert-success="true">Success update your profile</div>
                                </div>

                                <form action="Xupdatedonor.php" method="post" data-form-title="Members Information">
                                    <div class="col-md-12 form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control form-control-sm" name="name" required="required" value="<?php echo $row['name']; ?>" placeholder="Name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Phone Number</label>
                                        <input type="number" class="form-control form-control-sm" name="phone" required="" value="<?php echo $row['phone']; ?>" placeholder="Phone No">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control form-control-sm" name="email" value="<?php echo $row['email']; ?>" placeholder="Email">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Address row 1</label>
                                        <input type="text" class="form-control form-control-sm" name="address1" required="" value="<?php echo $row['address1']; ?>" placeholder="Street Address">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Address row 2</label>
                                        <input type="text" class="form-control form-control-sm" name="address2" value="<?php echo $row['address2']; ?>" placeholder="Street Address Line 2">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control form-control-sm" name="city" value="<?php echo $row['city']; ?>" required="required" placeholder="City">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control form-control-sm" name="state" value="<?php echo $row['state']; ?>" placeholder="State / Province">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control form-control-sm" name="country" value="<?php echo $row['country']; ?>" placeholder="Country">
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label>Zip</label>
                                        <input type="number" class="form-control form-control-sm" name="zip" required="" value="<?php echo $row['zip']; ?>" placeholder="Postal / Zip Code">
                                    </div>
                                    <div class="col-md-12 text-xs-center"><button type="submit" name="submit" class="btn btn-primary ">Update</button></div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!--update info-->
                </div>
            </div>
        </div>
    </div>
    <!-- <section class="ftco-section instagram">
        <div class="container">
            <div class="row justify-content-center mb-2 pb-3">
                <div class="col-md-7 heading-section heading-section-2 text-center ftco-animate">
                    <h1 class="mb-4">Members Information</h1>
                </div>

                update info

                <div class="container">
                    <div class="row">
                    </div>
                </div>
               
            </div>
        </div>
    </section>update info-->
</div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
    <script type='text/javascript'>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            icon: "<?php echo $_SESSION['status_code']; ?>",
        });
    </script>
<?php
    unset($_SESSION['status']);
}
?>

<?php include_once 'footer.php'; ?>

</body>

</html>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<script type='text/javascript'>
    $(document).ready(function() {
        $('#test').modal('show');
    });
</script>

<!--javascript For uploading image X PAKAI PUN-->
<script>
    $(document).ready(function() {
        $('#insert').click(function() {
            var image_name = $('#image').val();
            if (image_name == '') {
                alert("Please Select Image");
                return false;
            } else {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if (jQuery.in_array(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
                }
            }
        });
    });
</script>
<!--End of javascript For uploading image-->