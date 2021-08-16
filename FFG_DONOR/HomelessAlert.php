<?php include_once'header.php';
include_once'../Xconnection.php';
?>
<title>FFG Member - Notify Homeless</title>
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

    <!--update info-->
    <section class="ftco-section-3">
        <div class="container">
            <div class="row justify-content-center mb-2 pb-3">
                <div class="col-md-7 col-sm-offset-2 ftco-animate">
                    <h1 class="mb-1 pb-5">Report a Rough Sleeper </h1>
                </div>
                <!--Donate Offline-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-offset-1" data-form-type="formoid">


                            <div data-form-alert="true">
                                <div hidden="" data-form-alert-success="true">Thanks for your report! </div>
                            </div>
                            <form action="Xalert.php" method="post" data-form-title="Members Information"  enctype="multipart/form-data"> 
                                <input type="hidden"
                                    value="Gcs9DFMwXPrXu0WyZP/onyJHFMuegaFp194nEhGfDj434bF0FgCs6cmkIBD5iQ4c0yn1pQGi5P3LCl3DX7XGR4od69yzUDqvXGJip4cF5zoetnpVFZTNLxqKyoh1ivfU"
                                    data-form-email="true">

                                <div class="row">
                                    <!--#00e677-->
                                    <div class="col-sm-12">
                                        <div class="card text-white"
                                            style="background-color: #1e2124; padding: 0.5rem;">
                                            <div class="card-body">
                                                <label for="name-form1-h"
                                                    class="form-control-label mbr-fonts-style display-7">
                                                    If you are concerned about someone that you have seen sleeping rough
                                                    around Kuala Lumpur that you know that she/he need help to get out
                                                    of poverty,
                                                    you can use this form to send an alert to FFG. The details you
                                                    provide are
                                                    sent to FFG team to help them find the individual and connect them
                                                    to support.</label>
                                            </div>
                                        </div> <br>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="name-form1-h" class="form-control-label mbr-fonts-style display-7">
                                        <b>Step 1 : </b> Where is the person located? </label>
                                </div>

                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="location"
                                        placeholder="Location Details *">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="name-form1-h" class="form-control-label mbr-fonts-style display-7">
                                        <b>Step 2 : </b> Can you tell us more about the person you have seen sleeping
                                        rough?
                                        Most of this information is optional, but any details you provide may help us
                                        find the
                                        individual quicker. </label>
                                    <label for="name-form1-h" class="form-control-label mbr-fonts-style display-7">
                                        Name : </label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Name of a person (if known)">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label class="required" for="form-input-gender">Gender</label>
                                    <div class="options">
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" value="Male" />
                                            Male
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" value="Female" />
                                            Female
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="gender" value="Not Known" />
                                            Not Known
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="form-input-ageRange">Age (Approximate)</label>
                                    <select name="age" id="form-input-ageRange" class="form-control">
                                        <option value="" selected></option>
                                        <option value="19-24">Less than 18</option>
                                        <option value="19-24">18-24</option>
                                        <option value="25-34">25-34</option>
                                        <option value="35-44">35-44</option>
                                        <option value="45-54">45-54</option>
                                        <option value="55-64">55-64</option>
                                        <option value="65+">More than 65</option>
                                    </select>
                                </div>

                                <div class="col-md-6  form-group">
                                    <label for="form-input-date">When did you see this person?</label>
                                    <input name="date_found" type="date" id="form-input-date"
                                        class="form-control form-date-time-field form-datepicker" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="form-input-time">What time did you see this person at?</label>
                                    <input name="time" type="time" id="form-input-time"
                                        class="form-control form-date-time-field form-datepicker"
                                        data-datepicker-format="h:i K" data-datepicker-enableTime="1"
                                        placeholder="e.g. 11:00 pm" />
                                </div>


                                <div class="col-md-12 form-group">
                                    <label for="form-input-time">Description</label>
                                    <textarea class="form-control" name="dsc" rows="4"
                                        placeholder="Please tell us any further information that will help us recognise the individual"></textarea>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label class="required" for="form-input-beddedDown">Is the person “bedded down” for
                                        the night?</label>


                                    <div class="options">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="beddedDown" value="Yes" />
                                            Yes
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="beddedDown" value="No" />
                                            No
                                        </label>
                                    </div>
                                    <div class="help-block">This person must be bedded down, in the open air such as on
                                        the streets, or in doorways, parks or bus shelters or buildings or other places
                                        not designed for habitation such as car parks, stations & etc.
                                    </div>
                                </div>

                                <div class="col-md-8 form-group">

                                    <label for="image-form1-h" class="form-control-label mbr-fonts-style ">Upload
                                        their picture if you had any :</label>
                                    <input type="hidden" name="size" value="1000000">
                                    <input type="file" name="image" id="image">
                                </div>
                                <div class="col-md-3 form-group">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary py-3 px-5">
                                </div>
                            </form>
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

<?php include_once'Ysweetalert.php'; ?>


<?php include_once'footer.php'; ?>

</body>

</html>