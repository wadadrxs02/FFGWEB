<?php
  include_once'Xconnection.php';
  session_start();
  // If the user is not logged in redirect to the login page...
  if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
	exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<!-- Title Page-->
<title>Dashboard</title>


<body class="animsition">
    <div class="page-wrapper">

        <!-- HEADER MOBILE-->

        <!-- END HEADER MOBILE-->
        <?php include_once'header.php';?>
        <!-- MENU SIDEBAR-->

        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- PAGE CONTAINER-->

            <!-- HEADER DESKTOP-->
            <?php include_once'headerD.php'; ?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Homeless Information</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" name="add"
                                        id="add" data-target="#registerform">
                                        <i class="zmdi zmdi-plus "></i>Register Homeless</button>
                                </div>
                            </div>
                        </div>

                        <!-- DataTales Example background-color:#e0334a-->
                        <div class="card shadow mb-4" style="border-radius:10px">
                            <div class="card-body">
                                <div class="table-responsive" id="homeless_table">
                                    <table class="table table-borderless table-data3" id="Tabledata" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr>

                                                <th width="25%">Name</th>
                                                <th width="25%">Location</th>
                                                <th width="20%">Health</th>
                                                <th width="20%" class="no-sort">Picture</th>
                                                <th width="10%" class="no-sort">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;
                                            $don = $connection->query("SELECT * FROM homeless ORDER BY id_homeless DESC");
                                            while($row = $don->fetch_array()){
                                            ?>
                                            <tr>
                                                <td> <?php echo $row['name'];?></td>
                                                <td> <?php echo $row['location'];?> </td>
                                                <td> <?php echo $row['medCondition'];?></td>
                                                <td> <img src="imghomeless/<?php echo $row['image'];?>" style="width:100px; height:100px"> </td>
                                                <td> <button type="button"
                                                        class="btn btn-sm btn-outline-warning edit_data"
                                                        data-target="#registerform" name="view" value="View"
                                                        <?php echo $row['id_homeless'];?>> View </button>
                                                </td>
                                            </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php include_once 'footer.php';?>


                </div> <!-- END SECTION CONTENT-->
            </div><!-- END MAIN CONTENT-->

            <!-- REGISTER FORM HOMELESS MODAL -->
            <div class="modal fade" id="registerform" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerformLabel"> Registration for Homeless @ Urban Poor </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!---Formbuilder Form--->
                            <form id="insert_form" action="Xreghomeless.php" method="POST" enctype="multipart/form-data"
                                class="mbr-form form-with-styler">
                                <!----  <input type="hidden" name="email" data-form-email="true" value="6kZCGZP8OMDPtDeeZmbUHeHmcL7xSLOPAWLWuIKYko2plkVZmXo2mIt0mCzSryUfoQ7ioO2nvPlc9AFmRWT/yUbere5n0WigAd2SWPGSAS9kqyCutyGIYN+e2BdP++BE"> -->
                                <div class="row">
                                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Homeless
                                        registration success to save</div>
                                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                    </div>
                                </div>
                                <div class="dragArea row">

                                    <div class="col-md-12  form-group">
                                        <label for="name-form1-h"
                                            class="form-control-label mbr-fonts-style display-7">Name</label>
                                        <input type="text" name="name" data-form-field="Name" required="required"
                                            class="form-control display-7" id="name">
                                    </div>
                                    <div class="col-md-12  form-group">
                                        <label for="name-form1-h"
                                            class="form-control-label mbr-fonts-style display-7">IC
                                            Number</label>
                                        <input type="number" name="icnumber" data-form-field="Name" required="required"
                                            class="form-control display-7" id="icnumber">
                                    </div>

                                    <div class="col-md-6  form-group">
                                        <label for="phone-form1-h"
                                            class="form-control-label mbr-fonts-style display-7">Phone
                                            No</label>
                                        <input type="number" name="phoneNum" data-form-field="Phone"
                                            class="form-control display-7" id="phoneNum">
                                    </div>

                                    <div class="col-md-6  form-group">
                                        <label for="gender-form1-h"
                                            class="form-control-label mbr-fonts-style display-7">Gender</label>
                                        <select name="gender" class="browser-default custom-select"
                                            class="form-control display-7" id="gender">
                                            <option Selected value="Female">Female</option>
                                            <option value="Male">Male</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6  form-group">
                                        <label for="birthday-form1-h"
                                            class="form-control-label mbr-fonts-style display-7">Date
                                            of Birth</label>
                                        <input type="date" name="dob" data-form-field="birth Date"
                                            class="form-control display-7" id="date">
                                    </div>

                                    <div class="col-md-6  form-group">
                                        <label for="race-form1-h"
                                            class="form-control-label mbr-fonts-style display-7">Race
                                        </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="race" id="rRace"
                                                value="Malay">
                                            <label class="form-check-label" for="rMalay">Malay
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>

                                            <input class="form-check-input" type="checkbox" name="race" id="rRace"
                                                value="Indian">
                                            <label class="form-check-label" for="rIndian">Indian</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input display-7" type="checkbox" name="race"
                                                id="rRace" value="Chinese">
                                            <label class="form-check-label" for="rChinese">Chinese
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp; &nbsp;&nbsp;</label>

                                            <input class="form-check-input  display-7" type="checkbox" name="race"
                                                id="rRace4" value="Other" onClick="Function()"
                                                onchange="document.getElementById('race4').disabled = !this.checked;">
                                            <label class="form-check-label">Other&nbsp;</label>
                                            <input id="race4" type="text" name="race"
                                                class="form-control form-control-sm"
                                                style="width:150px; background-color: #ffffff; border-color: #ffffff; display: inline;"
                                                placeholder="ex: Latino" disabled>

                                        </div>

                                        <script type="text/javascript">
                                        function Function() {
                                            var x = document.getElementById("rRace4");
                                            var y = document.getElementById("race4");
                                            if (x.checked == true) {
                                                y.style.borderBottomColor = "#999999";
                                                y.style.fontcolor = "#bababa";
                                            } else {
                                                y.style.borderBottomColor = "#ffffff";
                                                y.style.fontcolor = "#bababa";
                                            }
                                        }
                                        </script>
                                    </div>

                                    <div class="col-md-6  form-group">
                                        <label for="location-form1-h"
                                            class="form-control-label mbr-fonts-style display-6">Location</label>
                                        <input type="text" name="location" class="form-control display-7" id="location">
                                    </div>

                                    <div class="col-md-6 form-group ">
                                        <label for="disease-form1-h"
                                            class="form-control-label mbr-fonts-style display-7">Medical
                                            Condition</label>

                                        <div class="form-check ">
                                            <input class="form-check-input display-7" type="checkbox" id="health"
                                                value="Good" name="medCondition">
                                            <label class="form-check-label mbr-fonts-style display-7"
                                                for="inlineCheckbox1">Good</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input display-7" type="checkbox" id="health1"
                                                value="other :" onClick="myFunction()"
                                                onClick="ChangePlaceHolderColor()"
                                                onchange="document.getElementById('un').disabled = !this.checked;">
                                            <label class="form-check-label mbr-fonts-style display-7"
                                                for="inlineCheckbox2">Other &nbsp;</label>
                                            <input id="un" type="text" name="medCondition"
                                                class="form-control form-control-sm "
                                                style="width: 200px; background-color: #ffffff; border-color: #ffffff; display: inline;"
                                                placeholder="ex: heart disease" disabled>
                                        </div>

                                        <script type="text/javascript">
                                        function myFunction() {
                                            var x = document.getElementById("health1");
                                            var y = document.getElementById("un");
                                            if (x.checked == true) {

                                                y.style.borderBottomColor = "#999999";
                                                y.style.fontcolor = "#bababa";
                                            } else {
                                                y.style.borderBottomColor = "#ffffff";
                                                y.style.fontcolor = "#bababa";
                                            }
                                        }
                                        </script>
                                    </div>

                                    <div class="col-md-6  form-group">
                                        <label for="datereg-form1-h"
                                            class="form-control-label mbr-fonts-style display-7">Date Registration</label>
                                        <input type="date" name="datereg" data-form-field="Date Registration"
                                            class="form-control display-7" id="today2">
                                    </div>

                                    <script>
                                    document.querySelector("#today2").valueAsDate = new Date();
                                    </script>

                                    <div class="col-md-6  form-group">
                                        <label for="image-form1-h"
                                            class="form-control-label mbr-fonts-style display-7">Image</label>
                                        <input type="hidden" name="size" value="1000000">
                                        <input type="file" name="image" id="image">
                                    </div>
                                    <input type="hidden" name="id_homeless" id="id_homeless" />
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="submit" value="Insert" id="insert" class="btn btn-primary"
                                            name="insert">Save</button>
                                    </div>
                                </div>
                            </form>
                            <!---Formbuilder Form--->
                        </div>

                    </div>
                </div>
            </div> <!-- END REGISTER FORM HOMELESS MODAL -->
        </div><!-- END PAGE CONTAINER-->
    </div> <!-- END PAGE WRAPPER-->




    <?php include_once 'jslink.php';?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
    </script>



</body>

</html>
<!-- end document-->

<!-- Script for header table No sort-->
<script type="text/javascript">
$(document).ready(function() {
    $('#Tabledata').DataTable();
});


$('#Tabledata').dataTable({
    "order": [],
    "columnDefs": [{
        "targets": 'no-sort',
        "orderable": false,
    }]
});
</script>
<!-- END Script for header table No sort-->

<!--javascript For uploading image-->
<script>
$(document).ready(function() {
    $('#insert').click(function() {
        var image_name = $('#image').val();
        if (image_name == '') {
            alert("Please Select Image");
            return false;
        } else {
            var extension = $('#iamge').val().split('.').pop().toLowerCase();
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

<!-- javascript For update data through modal-->
<?php include_once'homelessModal.php';?>
<!-- End javascript For update data through modal-->