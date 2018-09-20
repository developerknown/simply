
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>Edit SALE Property | Simply</title>
	<?php $this->load->view('common/metalinks');?>
    <!--bootstrap-fileinput-master-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/fileinput.css');?>" />
	<!--bootstrap picker-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/datepicker.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/timepicker.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/colorpicker.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/daterangepicker-bs3.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/datetimepicker.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/multiple-image-upload.css');?>"/>
	<!--iCheck-->
    <link href="<?php echo base_url('css/all.css');?>" rel="stylesheet">
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
                    Edit Property for SALE 
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
                                if($this->session->flashdata('update_sale_prop_successfull')){
                            ?>
                                <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('update_sale_prop_successfull');?></strong> </div>
                            <?php
                                }else if($this->session->flashdata('update_sale_prop_failed')){
                            ?>
                                <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('update_sale_prop_failed');?></strong> </div>
                            <?php
                                }
                            ?>
                            <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('edit_sale_property/edit_defined_sale_property');?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputpropname" class="col-lg-2 col-sm-2 control-label">Property Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="inputpropname" placeholder="Property Name" name="prop_name" value="<?php echo $get_all_sale_property->name;?>">
                                        <input type="hidden" class="form-control" name="sale_prop_id" value="<?php echo $get_all_sale_property->property_sale_id;?>">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputproplocation" class="col-lg-2 col-sm-2 control-label">Property Location</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="inputproplocation" placeholder="Property Location" name="prop_location" value="<?php echo $get_all_sale_property->location;?>">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputpropsize" class="col-lg-2 col-sm-2 control-label">Property Size</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="inputpropsize" placeholder="Property Size" name="prop_size" value="<?php echo $get_all_sale_property->size;?>">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Number of Bedrooms</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="bedroom">
											<option value="" <?php echo (($get_all_sale_property->bedrooms == '')?'selected':'')?>>Please Select</option>
                                            <option value="1" <?php echo (($get_all_sale_property->bedrooms == '1')?'selected':'')?>>1</option>
                                            <option value="2" <?php echo (($get_all_sale_property->bedrooms == '2')?'selected':'')?>>2</option>
                                            <option value="3" <?php echo (($get_all_sale_property->bedrooms == '3')?'selected':'')?>>3</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Number of Bathrooms</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="bathroom">
											<option value="" <?php echo (($get_all_sale_property->bathrooms == '')?'selected':'')?>>Please Select</option>
                                            <option value="1" <?php echo (($get_all_sale_property->bathrooms == '1')?'selected':'')?>>1</option>
                                            <option value="2" <?php echo (($get_all_sale_property->bathrooms == '2')?'selected':'')?>>2</option>
                                            <option value="3" <?php echo (($get_all_sale_property->bathrooms == '3')?'selected':'')?>>3</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Private Pool</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="private_pool">
											<option value=""<?php echo (($get_all_sale_property->private_pool == '')?'selected':'')?>>Please Select</option>
                                            <option value="yes"<?php echo (($get_all_sale_property->private_pool == 'yes')?'selected':'')?>>Yes</option>
                                            <option value="no"<?php echo (($get_all_sale_property->private_pool == 'no')?'selected':'')?>>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Private Parking</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="private_parking">
											<option value=""<?php echo (($get_all_sale_property->private_parking == '')?'selected':'')?>>Please Select</option>
                                            <option value="yes"<?php echo (($get_all_sale_property->private_parking == 'yes')?'selected':'')?>>Yes</option>
                                            <option value="no"<?php echo (($get_all_sale_property->private_parking == 'no')?'selected':'')?>>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Private Garden</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="private_garden">
											<option value=""<?php echo (($get_all_sale_property->private_garden == '')?'selected':'')?>>Please Select</option>
                                            <option value="yes"<?php echo (($get_all_sale_property->private_garden == 'yes')?'selected':'')?>>Yes</option>
                                            <option value="no"<?php echo (($get_all_sale_property->private_garden == 'no')?'selected':'')?>>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Village House</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="village_house">
											<option value=""<?php echo (($get_all_sale_property->village_house == '')?'selected':'')?>>Please Select</option>
                                            <option value="yes"<?php echo (($get_all_sale_property->village_house == 'yes')?'selected':'')?>>Yes</option>
                                            <option value="no"<?php echo (($get_all_sale_property->village_house == 'no')?'selected':'')?>>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Rural Setting</label>
                                    <div class="col-lg-9">
                                        <select class="form-control m-b-10" name="rural_setting">
											<option value=""<?php echo (($get_all_sale_property->rural_setting == '')?'selected':'')?>>Please Select</option>
                                            <option value="yes"<?php echo (($get_all_sale_property->rural_setting == 'yes')?'selected':'')?>>Yes</option>
                                            <option value="no"<?php echo (($get_all_sale_property->rural_setting == 'no')?'selected':'')?>>No</option>
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
<script type="text/javascript" src="<?php echo base_url('js/fileinput.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/file-input-init.js');?>"></script>
<!--bootstrap picker-->
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datetimepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/moment.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/daterangepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-colorpicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-timepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/multiple-image-upload.js');?>"></script>

<!--picker initialization-->
<script src="<?php echo base_url('js/picker-init.js');?>"></script>

<!--Icheck-->
<script src="<?php echo base_url('js/icheck.min.js');?>"></script>
<!--icheck init-->
<script src="<?php echo base_url('js/icheck-init.js');?>"></script>
</body>
</html>
