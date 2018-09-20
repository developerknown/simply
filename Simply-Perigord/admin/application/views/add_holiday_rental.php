
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
    <link rel="stylesheet" type="text/css" href="css/multiple-image-upload.css"/>

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
                            <?php
                                if($this->session->flashdata('add_holiday_rental_successfull')){
                            ?>
                                <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('add_holiday_rental_successfull');?></strong> </div>
                            <?php
                                }else if($this->session->flashdata('add_holiday_rental_failed')){
                            ?>
                                <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('add_holiday_rental_failed');?></strong> </div>
                            <?php
                                }
                            ?>
                            <form class="form-horizontal" role="form" action="<?php echo base_url('add_holiday_rental/add_new_rental');?>" enctype="multipart/form-data" method="POST"> 
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
                                            <option value="">Please Select</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Date</label>
                                    <div class="col-lg-9">
                                       <div class="input-group input-large custom-date-range" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
											<input type="text" class="form-control dpd1" name="date_from">
											<span class="input-group-addon">To</span>
											<input type="text" class="form-control dpd2" name="date_to">
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
											<option value="">Please Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Number of Bathrooms</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="bathroom">
											<option value="">Please Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Washer</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="washer">
                                            <option value="">Please Select</option>
											<option value="yes">Yes</option>
											<option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">TV</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="television">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Aircon</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="aircon">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Wifi</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="wifi">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">BBQ</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="bbq">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Private Pool</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="private_pool">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Private Parking</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="private_parking">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Private Garden</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="private_garden">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Pets Allowed</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="pet_allowed">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Family Friendly</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="family_friendly">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Village House</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="village_house">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Rural Setting</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="rural_setting">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Romantic for Two</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="romantic_for_two">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Cosy Cottage</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="cosy_cottage">
											<option value="">Please Select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Property Image</label>
                                    <div class="col-lg-9">
                                        <div class="col-md-6">
                                            <input type="file" class="form-control" id="images" name="userfile[]" onchange="preview_images();" multiple/>
                                        </div>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label"></label>
                                    <div class="col-lg-9">
                                        <div class="row" id="image_preview"></div>
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
<script>
function preview_images() 
{
 var total_file=document.getElementById("images").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
</script>
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
<script type="text/javascript" src="js/multiple-image-upload.js"></script>

<!--picker initialization-->
<script src="js/picker-init.js"></script>

<!--Icheck-->
<script src="js/icheck.min.js"></script>
<!--icheck init-->
<script src="js/icheck-init.js"></script>
</body>
</html>
