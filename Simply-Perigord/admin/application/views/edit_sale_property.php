
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/select2.css');?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/select2-bootstrap.css');?>"/>
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
								if($this->session->flashdata('delt_img_sccful')){
                            ?>
							<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('delt_img_sccful');?></strong> </div>
							<?php
								}else if($this->session->flashdata('delt_img_failed')){
							?>
								<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('delt_img_failed');?></strong> </div>
							<?php
							}
							?>
                            <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('edit_sale_property/edit_defined_sale_property');?>" enctype="multipart/form-data">
                                <header class="panel-heading" style="border-bottom:0px;padding-left:0px;">
                                    <b>Property Information</b>
                                </header>
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputpropname" class="col-lg-3 col-sm-3 control-label">Property Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputpropname" placeholder="Property Name" name="prop_name" value="<?php echo $get_all_sale_property->name;?>">
                                            <input type="hidden" class="form-control" name="sale_prop_id" value="<?php echo $get_all_sale_property->holiday_rental_id;?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                    </div>
                                </div>
                            

								<div class="col-lg-6">
								<div class="form-group">
                                    <label for="inputproplocation" class="col-lg-3 col-sm-3 control-label">Property Location</label>
                                    <div class="col-lg-8">
									<!-- <p class="help-block">Example block-level help text here.</p>-->
										<select class="form-control m-b-10" name="prop_location">
											<option value="" >Please Select</option>
											<?php
											   $get_location = $this->edit_sale_property_m->get_location();
											   //print_r($get_location);
											   foreach($get_location As $location)
											   {
											?>
                                            <option value="<?php echo $location->city_name;?>" <?php echo (($get_all_sale_property->location == $location->city_name)?'selected':'')?>><?php echo $location->city_name;?></option>
                                          <?php
											   }
											?>
										</select>
                                    </div>
                                </div>
                              </div>

							  	<div class="col-lg-6">
								<div class="form-group">
                                    <label for="inputproplocation" class="col-lg-3 col-sm-3 control-label">Add Property Tags</label>
                                    <div class="col-lg-8">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->	 
										<select id="multiple" class="form-control select2-multiple select2-offscreen" multiple="" tabindex="-1" name="property_tags[]">
										<option value=""  disabled>Select Tags</option>
											<?php
												$tags = explode(",",$get_all_sale_property->tags);
												
											?>
											<option value="Country Properties" <?php echo (in_array("Country Properties",$tags)?'selected':'')?>>Country Properties</option>
											<option value="Family Properties" <?php echo (in_array("Family Properties",$tags)?'selected':'')?>>Family Properties</option>
											<option value="Budget Friendly" <?php echo (in_array("Budget Friendly",$tags)?'selected':'')?>>Budget Friendly</option>
											<option value="Perfectly Private" <?php echo (in_array("Perfectly Private",$tags)?'selected':'')?>>Perfectly Private</option>
											<option value="Village Life" <?php echo (in_array("Village Life",$tags)?'selected':'')?>>Village Life</option>
										
									</select>
                                    </div>
                                </div>
                              </div>
                                <div class="col-lg-6">
    								<div class="form-group">
                                        <label for="inputpropsize" class="col-lg-3 col-sm-3 control-label">Property Size</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputpropsize" placeholder="Property Size" name="prop_size" value="<?php echo $get_all_sale_property->size;?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="col-lg-6">
								<div class="add-more-contz">
									<div class="form-group" id="dynamic_field">
									<label for="inputpropsize" class="col-lg-3 col-sm-3 control-label">Seasonal Price</label>
										<div class="col-lg-3">
											<select class="form-control m-b-10" name="season">
												<option value="">Please Select</option>
                                                <?php
                                                    foreach($get_seasons AS $each_season){
                                                ?>
                                                <option value="<?php echo $each_season->season_id?>"><?php echo $each_season->season_name?></option>
                                                <?php
                                                    }
                                                ?>
											</select>
										</div>
										<div class="col-lg-3">
											<input type="text" class="form-control" id="inputpropsize" placeholder="Price" name="price" value="<?php echo $get_all_sale_property->price;?>">
										</div>
										<div class="col-lg-2">
											<a href="javascript:void(0);" class="btn btn-secondary add-more" onclick="add_more_attri()" style="padding:6px 3px;">Add More</a>
										</div>
								  </div>
								</div>
							 </div>-->
                          </div>
                            <header class="panel-heading" style="border-bottom:0px;padding-left:0px;">
                                <b>Amenities</b>
                            </header>
                          <div class="row">
                            <div class="col-lg-6">
								<div class="form-group">
                                    <label for="inputpropbedroom" class="col-lg-3 col-sm-3 control-label">No. of Bedrooms</label>
                                    <div class="col-lg-8">
                                        <input type="number" class="form-control" id="inputpropbedroom" placeholder="Property Size" name="bedroom" value="<?php echo $get_all_sale_property->bedrooms;?>">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
								<div class="form-group">
                                    <label for="inputpropbath" class="col-lg-3 col-sm-3 control-label">No. of Bathrooms</label>
                                    <div class="col-lg-8">
                                        <input type="number" class="form-control" id="inputpropbath" placeholder="Property Size" name="bathroom" value="<?php echo $get_all_sale_property->bathrooms;?>">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-3 col-sm-3 control-label">Private Pool</label>
                                    <div class="col-lg-8">
                                        <select class="form-control m-b-10" name="private_pool">
											<option value=""<?php echo (($get_all_sale_property->private_pool == '')?'selected':'')?>>Please Select</option>
                                            <option value="yes"<?php echo (($get_all_sale_property->private_pool == 'yes')?'selected':'')?>>Yes</option>
                                            <option value="no"<?php echo (($get_all_sale_property->private_pool == 'no')?'selected':'')?>>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-3 col-sm-3 control-label">Private Parking</label>
                                    <div class="col-lg-8">
                                        <select class="form-control m-b-10" name="private_parking">
											<option value=""<?php echo (($get_all_sale_property->private_parking == '')?'selected':'')?>>Please Select</option>
                                            <option value="yes"<?php echo (($get_all_sale_property->private_parking == 'yes')?'selected':'')?>>Yes</option>
                                            <option value="no"<?php echo (($get_all_sale_property->private_parking == 'no')?'selected':'')?>>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-3 col-sm-3 control-label">Private Garden</label>
                                    <div class="col-lg-8">
                                        <select class="form-control m-b-10" name="private_garden">
											<option value=""<?php echo (($get_all_sale_property->private_garden == '')?'selected':'')?>>Please Select</option>
                                            <option value="yes"<?php echo (($get_all_sale_property->private_garden == 'yes')?'selected':'')?>>Yes</option>
                                            <option value="no"<?php echo (($get_all_sale_property->private_garden == 'no')?'selected':'')?>>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-3 col-sm-3 control-label">Village House</label>
                                    <div class="col-lg-8">
                                        <select class="form-control m-b-10" name="village_house">
											<option value=""<?php echo (($get_all_sale_property->village_house == '')?'selected':'')?>>Please Select</option>
                                            <option value="yes"<?php echo (($get_all_sale_property->village_house == 'yes')?'selected':'')?>>Yes</option>
                                            <option value="no"<?php echo (($get_all_sale_property->village_house == 'no')?'selected':'')?>>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
								<div class="form-group">
                                    <label for="inputprophouseSleeping" class="col-lg-3 col-sm-3 control-label">Rural Setting</label>
                                    <div class="col-lg-8">
                                        <select class="form-control m-b-10" name="rural_setting">
											<option value=""<?php echo (($get_all_sale_property->rural_setting == '')?'selected':'')?>>Please Select</option>
                                            <option value="yes"<?php echo (($get_all_sale_property->rural_setting == 'yes')?'selected':'')?>>Yes</option>
                                            <option value="no"<?php echo (($get_all_sale_property->rural_setting == 'no')?'selected':'')?>>No</option>
										</select>
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
                            </div>
                          </div>
                            
                            <header class="panel-heading" style="border-bottom:0px;padding-left:0px;">
                                <b>Images</b>
                            </header>
                            <div class="row">
                                <div class="col-lg-12" style="padding:14px;">
                                    <div class="form-group">
                                        <label for="inputprophouseSleeping" class="col-lg-3 col-sm-3 control-label">Property Image</label>
                                        <div class="col-lg-4">
                                            <input type="file" class="form-control" id="images" name="userfile[]" onchange="preview_images();" multiple/>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                    </div>
                                
                                
                                     <div class="form-group">
                                        <div class="col-lg-11">
                                            <div class="row" id="image_preview">
                                                <?php
                                                    $prop_id = $get_all_sale_property->holiday_rental_id;
                                                    $this->load->model('edit_sale_property_m');
                                                    $get_prop_images = $this->edit_sale_property_m->fetch_property_sale_images($prop_id);
													//print_r($get_prop_images);
                                                    foreach($get_prop_images AS $each_images){
                                                ?>
                                                <div class='col-lg-3'>
													<img class='img-responsive' src="<?php echo base_url();?>uploads/<?php echo $each_images->image?>">
													<a href="<?php echo base_url('');?>edit_sale_property/delete_image/<?php echo $each_images->holiday_rental_image_id;?>/<?php echo $this->uri->segment(2);?>" class="btn btn-danger" style="margin-top:15px;">Delete</a>
                                                    
													

                                                </div>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-4 col-lg-10">
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
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
  $('#image_preview').append("<div class='col-lg-3'><img class='img-responsive' style='height:100px;padding:3px;' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
</script>


<script>
	function add_more_attri()
	{
		 var get_seasons = <?php echo json_encode($get_seasons)?>;
		
		 var htmlz = "<div class='form-group atrri_add_cont'><label for='inputpropsize' class='col-lg-3 col-sm-3 control-label'></label><div class='col-lg-3'><select class='form-control m-b-10' name='season' id='season_fetch'><option value=''>Please Select</option></select></div><div class='col-lg-3'><input type='text' class='form-control' id='inputpropsize' placeholder='Price' name='price' value='<?php echo $get_all_sale_property->price;?>'></div><div class='col-lg-2'><a href='javascript:void(0);' class='remove control-label' style='color:#ef5350;'><i class='fa fa-trash' style='font-size:1.9rem;'></i></a></div></div>";

		 $(".add-more-contz").append(htmlz);
	     
         $.each(get_seasons, function () {
            var optioncurrHTML = '<option value="'+this.season_id+'">'+this.season_name+'</option>';
            $("#season_fetch").append(optioncurrHTML);
        });

	
	$("body").on("click",".remove",function(){ 
		  $(this).parents(".atrri_add_cont").remove();x--;
	  });
	}
</script>

<!--bootstrap-fileinput-master-->
<!--bootstrap picker-->
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datetimepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/moment.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/daterangepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-colorpicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap-timepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/multiple-image-upload.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/select2.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/select2-init.js');?>"></script>

<!--picker initialization-->
<script src="<?php echo base_url('js/picker-init.js');?>"></script>

<!--Icheck-->
<script src="<?php echo base_url('js/icheck.min.js');?>"></script>
<!--icheck init-->
<script src="<?php echo base_url('js/icheck-init.js');?>"></script>
</body>
</html>
