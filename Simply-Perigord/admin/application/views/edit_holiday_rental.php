
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>Edit Holiday Rental Property | Simply</title>
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
                    Edit Property for Holiday Rental
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
                                if($this->session->flashdata('update_rent_prop_successfull')){
                            ?>
                                <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('update_rent_prop_successfull');?></strong> </div>
                            <?php
                                }else if($this->session->flashdata('update_rent_prop_failed')){
                            ?>
                                <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('update_rent_prop_failed');?></strong> </div>
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
                            <form class="form-horizontal" role="form" action="<?php echo base_url('edit_holiday_rental/edit_defined_rental_property');?>" enctype="multipart/form-data" method="POST">
							    <header class="panel-heading" style="border-bottom:0px;padding-left:0px;">
                                    <b>Property Information</b>
                                </header>
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputpropname" class="col-lg-3 col-sm-3 control-label">Property Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputpropname" placeholder="Property Name" name="prop_name" value="<?php echo $get_all_rental_property->name?>">
                                            <input type="hidden" class="form-control" name="rental_prop_id" value="<?php echo $get_all_rental_property->holiday_rental_id;?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                    </div>
                                </div>
                             
								<div class="col-lg-6">
								<div class="form-group">
                                    <label for="inputproplocation" class="col-lg-3 col-sm-3 control-label">Property Location</label>
                                    <div class="col-lg-8">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
										<select class="form-control m-b-10" name="prop_location">
											<option value="" >Please Select</option>
											<?php
											   $get_location = $this->edit_holiday_rental_m->get_location();
											   //print_r($get_location);
											   foreach($get_location As $location)
											   {
											?>
                                            <option value="<?php echo $location->city_name;?>" <?php echo (($get_all_rental_property->location == $location->city_name)?'selected':'')?>><?php echo $location->city_name;?></option>
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
												$tags = explode(",",$get_all_rental_property->tags);
												
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
                                        <label for="inputprophouseSleeping" class="col-lg-3 col-sm-3 control-label">House Sleeping</label>
                                        <div class="col-lg-8">
                                            <input type="number" class="form-control" name="house_sleeping" value="<?php echo $get_all_rental_property->max_guest?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                    </div>
                                </div>
								
                            </div>
							<div class="col-lg-6">
								<div class="form-group">
                                    <label for="inputpropguestallowed" class="col-lg-3 col-sm-3 control-label">No. of guests</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="inputpropguestallowed" value="<?php echo $get_all_rental_property->max_guest?>" placeholder="Number of guest allowed" name="guest_allowed">
                                        <!--<p class="help-block">Example block-level help text here.</p>-->
                                    </div>
                                </div>
                              </div>
                              <div class="col-lg-12">
							  <?php
								   $four_array = $get_all_rental_property->one_to_four;
								   $four = explode(",",$four_array);
								   
								   $five_array = $get_all_rental_property->five;
								   $five = explode(",",$five_array);

								   $six_array = $get_all_rental_property->six;
								   $six = explode(",",$six_array);
								   $i = 0;
                                   foreach($get_seasons AS $each_season){
								     
                                   ?>
                                    <div class="form-group" >
                                    <label for="inputpropsize" class="col-lg-2 col-sm-2 control-label">Seasonal Price</label>
                                        <div class="col-lg-4">
											<span style=""><?php echo $each_season->season_name;?></span>
											<input type="hidden" class="form-control" id="inputpropsize" placeholder="" value="<?php echo $each_season->season_id;?>" name="season[]">
                                        </div>
									<div class="col-lg-6 dakhate_hbe" style="" id="">
                                <div class="">
                                    <div class="form-group" id="">
                                    
                                        <div class="col-lg-6">
											<input type="text" class="form-control" id="inputpropsize" placeholder="For 1 To 4 Guests" disabled >
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="inputpropsize" placeholder="Price" value="<?php echo $four[$i];?>" name="four_price[]" >
                                        </div>
                                       
                                  </div>

								   <div class="form-group" id="dynamic_field">
                                   
                                        <div class="col-lg-6">
											<input type="text" class="form-control" id="inputpropsize" placeholder="For 5 Guests" disabled>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="inputpropsize" placeholder="Price" value="<?php echo $five[$i];?>" name="five_price[]" >
                                        </div>
                                       
                                  </div>
								  <div class="form-group" id="dynamic_field">
                                    
                                        <div class="col-lg-6">
											<input type="text" class="form-control" id="inputpropsize" placeholder="For 6 Guests" disabled>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="inputpropsize" placeholder="Price" value="<?php echo $six[$i];?>" name="six_price[]" >
                                        </div>
                                       
                                  </div>
                                </div>
								<span  style="color:red;font-size:10px;"><span style="">*</span>Weekly Rate</span>  
                              </div>
                                     
                              </div>
							  
							    <?php
										$i++;	
										}
								?>
                            </div>
						    <header class="panel-heading" style="border-bottom:0px;padding-left:0px;">
                                <b>Amenities</b>
                            </header>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputprophouseSleeping" class="col-lg-3 col-sm-3 control-label">No. of Bedrooms</label>
                                        <div class="col-lg-8">
                                            <input type="number" class="form-control" name="bedroom" value="<?php echo $get_all_rental_property->bedrooms?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputprophouseSleeping" class="col-lg-3 col-sm-3 control-label">No. of Bathrooms</label>
                                        <div class="col-lg-8">
                                            <input type="number" class="form-control" name="bathroom" value="<?php echo $get_all_rental_property->bathrooms;?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                    </div>
                                </div>

								 <div class="col-lg-10">
							 	<div class="form-group">
									<?php
										$amenities = explode(",",$get_all_rental_property->amenities);
									?>
									<label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Add On</label>
									<div class="col-lg-10">
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="Washer" name="amenities[]" id="checkbox-99" <?php echo (in_array("Washer",$amenities)?'checked':'')?>> <label for="checkbox-99">Washer</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="TV" name="amenities[]" id="checkbox-100" <?php echo (in_array("TV",$amenities)?'checked':'')?>> <label for="checkbox-100" >TV</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="Aircon" name="amenities[]" id="checkbox-101" <?php echo (in_array("Aircon",$amenities)?'checked':'')?>> <label for="checkbox-101" >Aircon</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="Wifi" name="amenities[]" id="checkbox-102" <?php echo (in_array("Wifi",$amenities)?'checked':'')?>> <label for="checkbox-102" >Wifi</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="BBQ" name="amenities[]" id="checkbox-103" <?php echo (in_array("BBQ",$amenities)?'checked':'')?>> <label for="checkbox-103">BBQ</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="Private Pool" name="amenities[]" id="checkbox-104" <?php echo (in_array("Private Pool",$amenities)?'checked':'')?>> <label for="checkbox-104" >Private Pool</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="Private Parking" name="amenities[]" id="checkbox-105" <?php echo (in_array("Private Parking",$amenities)?'checked':'')?>> <label for="checkbox-105" >Private Parking</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="Private Garden" name="amenities[]" id="checkbox-106" <?php echo (in_array("Private Garden",$amenities)?'checked':'')?>> <label for="checkbox-106" >Private Garden</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="Pets Allowed" name="amenities[]" id="checkbox-107" <?php echo (in_array("Pets Allowed",$amenities)?'checked':'')?>> <label for="checkbox-107" >Pets Allowed</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="Family Friendly" name="amenities[]" id="checkbox-108" <?php echo (in_array("Family Friendly",$amenities)?'checked':'')?>> <label for="checkbox-108" >Family Friendly</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="Village House" name="amenities[]" id="checkbox-109" <?php echo (in_array("Village House",$amenities)?'checked':'')?>> <label for="checkbox-109" >Village House</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="Rural Setting" name="amenities[]" id="checkbox-110" <?php echo (in_array("Rural Setting",$amenities)?'checked':'')?>> <label for="checkbox-110" >Rural Setting</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="Romantic for Two" name="amenities[]" id="checkbox-111" <?php echo (in_array("Romantic for Two",$amenities)?'checked':'')?>> <label for="checkbox-111" >Romantic for Two</label>
										</label>
										<label class="checkbox-custom inline check-success">
											<input type="checkbox" value="Cosy Cottage" name="amenities[]" id="checkbox-112" <?php echo (in_array("Cosy Cottage",$amenities)?'checked':'')?>> <label for="checkbox-112" >Cosy Cottage</label>
										</label>

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
                                        <label for="inputprophouseSleeping" class="col-lg-2 col-sm-2 control-label">Property Image</label>
                                        <div class="col-lg-8">
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="images" name="userfile[]" onchange="preview_images();" multiple/>
                                            </div>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <div class="col-lg-11">
                                            <div class="row" id="image_preview">
                                                <?php
                                                    $prop_id = $get_all_rental_property->holiday_rental_id;
                                                    $this->load->model('edit_holiday_rental_m');
                                                    $get_prop_images = $this->edit_holiday_rental_m->fetch_property_rent_images($prop_id);
                                                    foreach($get_prop_images AS $each_images){
                                                ?>
                                                <div class='col-lg-3'>
                                                    <img class='img-responsive' src="<?php echo base_url();?>uploads/<?php echo $each_images->image?>" style="height:100px;">
													<a href="<?php echo base_url('');?>edit_holiday_rental/delete_image/<?php echo $each_images->holiday_rental_image_id;?>/<?php echo $this->uri->segment(2);?>" class="btn btn-danger" style="margin-top:15px;">Delete</a>
                                                </div>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
    							</div>
                                <div class="col-lg-12" style="padding:5px;">
                                    <div class="form-group">
                                        <div class="col-lg-12" style="text-align:center;">
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
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
         var get_seasons = <?php echo json_encode($fetch_seasons)?>;
        
         var htmlz = "<div class='form-group atrri_add_cont'><label for='inputpropsize' class='col-lg-3 col-sm-3 control-label'></label><div class='col-lg-3'><select class='form-control m-b-10' name='season' id='season_fetch'><option value=''>Please Select</option></select></div><div class='col-lg-3'><input type='text' class='form-control' id='inputpropsize' placeholder='Price' name='price'></div><div class='col-lg-2'><a href='javascript:void(0);' class='remove control-label' style='color:#ef5350;'><i class='fa fa-trash' style='font-size:1.9rem;'></i></a></div></div>";

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
