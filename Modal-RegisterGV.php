<?php include_once 'header.php';
include_once 'Xconnection.php';
?>

<style>
/* .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        margin-top: 30%;
    }*/
</style>
<!-- REGISTER FORM HOMELESS MODAL -->
<div class="modal fade" id="Grpregvolform" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerformLabel"><b>FFG Group volunteer registration</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Formbuilder Form--->
                <form id="insert_form" action="XGvolunteer.php" method="POST" enctype="multipart/form-data"
                    class="mbr-form form-with-styler">
                    <!----  <input type="hidden" name="email" data-form-email="true" value="6kZCGZP8OMDPtDeeZmbUHeHmcL7xSLOPAWLWuIKYko2plkVZmXo2mIt0mCzSryUfoQ7ioO2nvPlc9AFmRWT/yUbere5n0WigAd2SWPGSAS9kqyCutyGIYN+e2BdP++BE"> -->
                    <div class="row">
                        <div hidden="hidden" id="success" data-form-alert="" class="alert alert-success col-12">Donor
                            registration success to save</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {

                            echo '<div hidden="hidden" data-form-alert="" class="alert alert-success col-12">' . $_SESSION['success'] . '</div>';
                            unset($_SESSION['success']);
                        }
                        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {

                            echo '<div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">' . $_SESSION['session'] . '</div>';
                            unset($_SESSION['status']);
                        }
                        ?>
                    </div>
                    <div class="dragArea row">

                        <div class="col-md-6  form-group">
                            <label class="form-control-label  ">Organization / Group Name* :</label>
                            <input type="text" name="name" data-form-field="Name" required="required"
                                placeholder="dotdot" class="form-control " id="name">
                        </div>

                        <div class="col-md-6  form-group">
                            <label for="image-form1-h" class="form-control-label">Email</label>
                            <input type="email" name="email" data-form-field="email" placeholder="dotdot@email.com"
                                class="form-control" id="email">
                        </div>

                        <div class="col-md-6  form-group">
                            <label class="form-control-label  ">
                                Group Leader Name * : </label>
                            <input type="text" name="name" data-form-field="name" class="form-control"
                                placeholder="Alex" id="name">
                        </div>

                        <div class="col-md-6  form-group">
                            <label class="form-control-label  ">
                                G.L Phone Number * :</label>
                            <input type="number" name="phone" data-form-field="phone" class="form-control"
                                placeholder="0123456789" id="Phone">

                        </div>
                        <!--Frequent Volunteer-->
                        <div class="col-md-6  form-group">
                            <label class="form-control-label">Frequent Volunteer *</label>
                            <div class="card" style="">
                                <div class="card-body pl-5 ">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="freq" id="exampleRadios1"
                                            value="Occasionally" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Once
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="freq" id="exampleRadios2"
                                            value="Occasionally">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Every Week
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="freq" id="exampleRadios2"
                                            value="Occasionally">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Occasionally
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Frequent Volunteer-->
                        <!--Age avarage-->
                        <div class="col-md-6  form-group">
                            <label class="form-control-label">Average Age</label>
                            <div class="card" style="">
                                <div class="card-body pl-5 ">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age" id="rRace"
                                            value="< 17">
                                        <label class="form-check-label">
                                            < 17</label>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input class="form-check-input" type="checkbox" name="age" id="rRace"
                                                    value="18 - 25">
                                                <label class="form-check-label">18 - 25</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age" id="rRace"
                                            value="26 - 34">
                                        <label class="form-check-label"> 26 - 34</label>
                                        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input class="form-check-input" type="checkbox" name="age" id="rRace"
                                            value="35 - 44">
                                        <label class="form-check-label">35 - 44</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input " type="checkbox" name="age" id="rRace"
                                            value="45 - 54">
                                        <label class="form-check-label">45 - 54</label>
                                        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input class="form-check-input " type="checkbox" name="age" id="rRace"
                                            value="> 55">
                                        <label class="form-check-label">> 55</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--age-->

                        <div class="col-md-3  form-group">
                            <label class="form-control-label">No of Pax *</label>
                            <input type="number" name="address1" placeholder="15" required="required" min="10" max="30"
                                class="form-control ">
                        </div>

                        <div class="col-md-7  form-group " style="text-align:right">
                            <div class="col-md-1 d-flex" style="text-align:right">
                                <hr class="flex-grow-1">
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" id="RegisterV" class="btn btn-primary"
                                name="RegisterGV">Submit</button>
                        </div>

                    </div>
                </form>
                <!---Formbuilder Form--->
            </div>

        </div>
    </div>
</div>
<!-- END REGISTER FORM HOMELESS MODAL-->


<?php
include_once 'script.php';
?>