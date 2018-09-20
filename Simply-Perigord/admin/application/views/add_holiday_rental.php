
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>Add Holiday Rental Property | Simply</title>
	<?php $this->load->view('common/metalinks');?>
    <!--bootstrap-fileinput-master-->
    <link rel="stylesheet" type="text/css" href="css/fileinput.css" />
	<!--bootstrap picker-->
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="css/timepicker.css"/>
    <link rel="stylesheet" type="text/css" href="css/colorpicker.css"/>
    <link rel="stylesheet" type="text/css" href="css/daterangepicker-bs3.css"/>
    <link rel="stylesheet" type="text/css" href="css/datetimepicker.css"/>

	<!--iCheck-->
    <link href="css/all.css" rel="stylesheet">
</head>

<body class="sticky-header">

    <section>
       <?php $this->load->view('common/sidebar_left');?>

        <!-- body content start-->
        <div class="body-content" style="min-height: 1000px;">

            <?php $this->load->view('common/header');?>

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Add Property for Holiday Rental
                </h3>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputpropname" class="col-lg-2 col-sm-2 control-label">Property Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="inputpropname" placeholder="Property Name" name="prop_name">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputproplocation" class="col-lg-2 col-sm-2 control-label">Property Location</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="inputproplocation" placeholder="Property Location" name="prop_location">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">House Sleeping</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="house_sleeping">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Date</label>
                                    <div class="col-lg-9">
                                       <div class="input-group input-large custom-date-range" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
											<input type="text" class="form-control dpd1" name="from">
											<span class="input-group-addon">To</span>
											<input type="text" class="form-control dpd2" name="to">
										</div>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputpropguestallowed" class="col-lg-2 col-sm-2 control-label">Number of guests</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="inputpropguestallowed" placeholder="Number of guest allowed" name="guest_allowed">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Number of Bedrooms</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="bedroom">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Number of Bathrooms</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="bathroom">
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Washer</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="washer">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">TV</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="television">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Air Condition</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="aircon">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Wifi</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="wifi">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">BBQ</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="bbq">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Private Pool</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="private_pool">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Private Parking</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="private_parking">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Private Garden</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="private_garden">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Pets Allowed</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="pet_allowed">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Family Friendly</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="family_friendly">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Village House</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="village_house">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Rural Setting</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="rural_setting">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Romantic for Two</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="romantic_for_two">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Cosy Cottage</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="cosy_cottage">
											<option>Yes</option>
											<option>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-9 col-lg-10">
										<button type="reset" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>

            </div>
            <!--body wrapper end-->

           <?php $this->load->view('common/footer');?>

        </div>
        <!-- body content end-->
    </section>

<!--bootstrap-fileinput-master-->
<script type="text/javascript" src="js/fileinput.js"></script>
<script type="text/javascript" src="js/file-input-init.js"></script>

<!--bootstrap picker-->
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/daterangepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.js"></script>

<!--picker initialization-->
<script src="js/picker-init.js"></script>

<!--Icheck-->
<script src="js/icheck.min.js"></script>
<!--icheck init-->
<script src="js/icheck-init.js"></script>
</body>
</html>
